
;(function($){
	
	//get classList
	function getClassList(target)
   	{
		return (typeof(target.attr('id')) == 'undefined') ? target.attr('class').split(/\s+/) : [target.attr('id')];
   	}
    
    function oSize(a)
    {
        var count = 0;
        
        for (i in a) {
            if (a.hasOwnProperty(i)) {
                count++;
            }
        }
        
        return count;
    }
    
    function createContainer(container,name)
    {
        var classArray = (name) ? name : getClassList(container)[0];
        var content = "<div id='"+classArray+"_container' class='tablelist-container'><table id='"+classArray+"'></table>\n<div id='"+classArray+"_pager'></div></div>";
        container.append(content);
    }
    
    function collectData(container)
    {    
         var colModel = new Array();
         var colName = new Array();
         $('input, select',container).each(function(){
            colName.push($(this).parent().prev().text().replace(' *',''));
            var temp = new Object();
            temp['name'] = $(this).attr('name');
            temp['index'] = $(this).attr('name');
            colModel.push(temp);
        });
        
        return {colmodel: colModel, 
                colname: colName};    
    }
    
    function createGrid($this,o,name,langs)
    {
        $this.data('o',o);
        createContainer($this,name);
        if (o.autoCollect){
            var temp = collectData(o.dialogForm);
            if(o.colmodel.length < 1) temp.colmodel[0]['key']=true;
            $.each(temp.colmodel,function(index,value){
                o.colmodel.push(value)
            });
            $.each(temp.colname,function(index,value){
                o.colname.push(value);
            })
              
        }

       	if (o.dialogForm) o.dialogForm.data('list',$this);
        $('#'+name).jqGrid({
            datatype: function(pdata){
                
                o.beforeRefresh.call(this)
                
                $("#tags").empty();
                $("#attachments").empty();
                $("#comments").empty();
                $("#moreTags").hide();
                $("#moreComment").hide();
                $("#moreFiles").hide();
                
                if (o.filterRow) {
                    var filters = new Array();
                    $(o.filterRow).each(function(){
                        var temp = new Object();
                        var add = true;
                        $("select, input",$(this)).each(function(){
                            if ($(this).attr('name') == "name" && $(this).val() == "-1") add = false;
                            temp[$(this).attr('name')] = $(this).val(); 
                        });
                        if (add) filters.push(temp); 
                    });
                    pdata['filter'] = JSON.stringify(filters);    
                }

                if (name.search('slave') > -1)
                {
                    var master = "#"+name.replace(/(_[a-zA-Z]*_[0-9]*)$/,"");
                    var id = $(master).jqGrid('getGridParam','selrow');
                    var rowData = $(master).jqGrid('getRowData',id);
                    
                    pdata['rowid'] = id;
                    if (oSize(rowData) == 0) $('#'+name).jqGrid('setCaption',o.captionDefault);
                    else {
                        
                        
                        var currentCaption = o.caption;
                        $.each(rowData,function(index,value){
                             var re = new RegExp("\{\{"+index+"\}\}","g");

                             currentCaption = currentCaption.replace(re,value);
                        });
                        $('#'+name).jqGrid('setCaption',currentCaption);
                    }
                    
                }
                
                if ($('#'+name).data('extraParam'))
                {
                    $.each($('#'+name).data('extraParam'),function(index,value){
                         pdata[index] = value;
                    });
                }
                
                if (o.hasFooterRow) {
                    pdata['customFooter'] = JSON.stringify(o.footerColModel);
                }
                
                $.ajax({
                    url: o.url,
                    beforeSend: function() {
                        if (o.controllButton) o.controllButton.prop("disabled",true);
                        $("#lui_"+name).show();
                        $("#load_"+name).show();
                    },
                    complete: function() {
                        $("#lui_"+name).hide();
                        $("#load_"+name).hide();  
                    },
                    type: 'post',
                    dataType: 'json',
                    data: pdata,
                    success: function(data) {
                        var grid = $('#'+name)[0];
                        
                        if (o.hasFooterRow) 
                        {
                            if (data.records == 0) {
                                 $('#'+name).parents().eq(1).next().hide();
                            }
                            else {
                                $('#'+name).parents().eq(1).next().show();   
                            }
                        }
                        grid.addJSONData(data);
                    } 
                });
            },
            postData: o.postData,
            colNames: o.colname,
            colModel: o.colmodel, 
            rowNum: o.rowNum, 
            rowList: o.rowList, 
            pager: (o.pager) ? '#'+name+'_pager' : false,
            grouping: (o.groupView) ? true : false,
            groupingView : (!o.groupView) ? {} : {
                groupField : ($.isArray(o.groupView)) ? o.groupView : [o.groupView],
                groupColumnShow : (o.groupColumnShow) ? o.groupColumnShow : [false],
                groupText : (o.groupViewText) ? o.groupViewText : [false],
                groupDataSorted : true,
                groupSummary : o.groupSummary,                   
            },
            viewrecords: true, 
            sortname: o.sortname, 
            sortorder: o.sortorder, 
            caption: (o.caption) ? o.caption : o.captionDefault,
            subGrid: false,
            
            footerrow : o.hasFooterRow,
            userDataOnFooter : o.hasFooterRow,
            
            width: (o.width) ? o.width : 0,
            jsonReader: { repeatitems : false},
            autowidth: (o.width) ? false : true,
            shrinkToFit: o.autoFit,
            height : 'auto',
            
            multiselect: (o.multiselect) ? true : false,
            
            ondblClickRow: o.dblClickFunction
        });
        
        $('#'+name).data("init",true);
        
        $('#'+name).jqGrid('navGrid','#'+name+'_pager',{edit:false,add:false,del:false,search: false});
        $("#"+name).jqGrid('navButtonAdd','#'+name+'_pager',{ 
                        caption: langs.columns, 
                        title: langs.rearrange, 
                        onClickButton : function (){
                            $("#"+name).jqGrid('columnChooser'); 
                        } 
        });
        if (o.sortFunction) $('#'+name).jqGrid("setGridParam", { onSortCol: o.sortFunction });
        if (o.gridCompleteFunction) $('#'+name).jqGrid("setGridParam", { gridComplete: o.gridCompleteFunction });
        if (o.frozenColumn) $("#"+name).jqGrid('setFrozenColumns');
        
        $('#'+name).jqGrid("setGridParam", { 
                onSelectRow: function(ids) {
                    if ($("#"+name).data('slaves'))
                    {
                        var slaves = $("#"+name).data('slaves').substr(0,$("#"+name).data('slaves').length-1).split('|');
                        
                        $.each(slaves,function(index,value){
                             $("#"+value).listTable("refresh");
                        });
                    }
                    
                    o.selectFunction.call(this,ids);
                } 
        });
        
        if (o.subGrid){
            $.each(o.subGridsOptions,function(index,value){
                var opts = $.extend({},defaults, value);
                var slaveName = name+"_slave_"+index;
                createGrid($('#'+name+'_container',$this),opts,name+"_slave_"+index,langs);
                
                var slaves = ($("#"+name).data('slaves')) ? $("#"+name).data('slaves') : "";
                slaves+=slaveName+"|";
                $("#"+name).data('slaves',slaves); 
            });
        }
    }
    
    function setFullScreen($this)
    {
        $(".ui-jqgrid-titlebar",$this).css('cursor','all-scroll');
        $(".ui-jqgrid-titlebar",$this).die('dblclick');
        $(".ui-jqgrid-titlebar",$this).live('dblclick',function(){
            var page_width = $(document).width();
            var grid = $(this).parents('.ui-jqgrid');
            var grid_id = grid.attr('id').replace('gbox_','');
            
            if (!grid.hasClass('ui-jqgrid-fullscreen')) {
                grid.addClass('ui-jqgrid-fullscreen')
                $("#"+grid_id).data('width',grid.width());
                $('#'+grid_id).setGridWidth(page_width);
                grid.css({
                    position: 'absolute',
                    left: 0,
                    top: 0,
                    "z-index": 10 
                });
                
                var page_height = $(document).height();
                $('body').append('<div class="ui-widget-overlay"></div>');
                $(".ui-widget-overlay").css({
                    "z-index": 9,
                    "height": page_height 
                });
                $('html, body').animate( {scrollTop: 0}, 'fast' );
            } else {
                $('#'+grid_id).setGridWidth($('#'+grid_id).data('width'));
                grid.removeClass('ui-jqgrid-fullscreen');
                grid.css({
                    position: '',
                    left: '',
                    top: '',
                    "z-index": '' 
                });
                $('.ui-widget-overlay').remove();
            }
            
        });
    }
    
        var lang = {
                    columns: 'Oszlopok',
                    rearrange: 'Oszlopok újrarendezése'
               };
           
       var defaults =   {
    	  url: false,
          postData: {},
          colname: [],
          colmodel: [],
          sortname: 'id',
          sortorder: 'asc',
          caption: false,
          captionDefault: 'captionDefault',
          rowNum: 10,
          rowList: [10, 20, 50, 100],
          dialogForm: false,
          controllButton: false,
          autoFit: true,
          autoCollect: false,
          filterRow: '.filter-item',
          width : 'auto',
          subGrid: false,
          frozenColumn: false,
          
          pager: true,

          hasFooterRow: false,
          footerColModel: {},
          
          multiselect: false,
          
          groupView: false,
          groupColumnShow: false,
          groupSummary: [true],
          groupViewText: ['<b>{0}</b>'],
          grouping: false,
          groupingView: {},
          subGridsOptions : [],
          sortFunction: function(index,iCol,sortorder){},
          selectFunction: function(	rowid, status){},  
          gridCompleteFunction: function(){},
          dblClickFunction: function(rowid, iRow, iCol, e){},
          subGridRowExpandedExtendFunction: function(ui) {},
          beforeRefresh: function() {}
           
       }
     
	 var methods = {
	    init : function( options ) {
	       
       	   var opts = $.extend({},defaults, options);
       	   
       	   return $(this).each(function(){
       		   var $this = $(this);
       		   var o = $.meta ? $.extend({}, opts, $this.data()) : opts;
    		   var classArray = getClassList($this);
               var langs = $.extend(lang,$.ui.listtable);
               createGrid($this,o,classArray[0],langs);
               setFullScreen($this);
    	    });
            
        },
        setExtraParam: function(name,value) {
            var target = $(this);
            var extraParam = (target.data('extraParam')) ? target.data('extraParam') : new Object();
            
            extraParam[name] = value;
            target.data('extraParam',extraParam);
        },
        refresh: function() {
            //console.log($(this).selector);
            $(this).trigger("reloadGrid");
            if ($(this).data('slaves'))
            {
                var slaves = $(this).data('slaves').substr(0,$(this).data('slaves').length-1).split('|');
                $.each(slaves,function(index,value){
                     $("#"+value).listTable("refresh");
                });
            }
        },
        reload: function() {
            $(this).listTable('refresh');
        }
    };
	
	$.fn.listTable = function(method)
	{
	     // Method calling logic
	    if ( methods[method] ) {
	      return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
	    } else if ( typeof method === 'object' || ! method ) {
	      return methods.init.apply( this, arguments );
	    } else {
	      $.error( 'Method ' +  method + ' does not exist on jQuery.listTable' );
	    }
	}
		
})(jQuery)