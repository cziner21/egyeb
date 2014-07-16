$(document).ready(function() {
    $('#megrendelo_megrendelo_id').keyup(function(){
        var search = $(this).val().replace(/^\s+$/g, "");
        var baseurl = "http://localhost/erp/";
        var felvitel = baseurl + 'index.php/projektek/searchMegrendelo';
        //alert(felvitel);
        var searchKey = $("#megrendelo_megrendelo_id").val();
        var condition = [];
        condition.push(searchKey);
        $.ajax({
            url: felvitel,
            data: {
                    tomb : condition
                },
            
	        type: "POST",
            
	        success: function(msg){
                    //$.each(msg, function(i, v) {
                        // For each record in the returned array
                        $('#finalResult').append(msg);
                    //});
	                
	                //$('#ajaxReply').removeClass().addClass('sMessage bra margin ok').fadeOut(200).fadeIn(200).find("div.message").html(msg);
	        }
        });
    });
    
   
 });   
    
    
   /* $("#addArajanlatBtn").click(function(){
        //alert("hmm");
       
                var baseurl = $("input[name=baseUrl]").val();
                var felvitel = baseurl + 'index.php/projektek/insertArajanlat';
                alert($('#arajanlatForm').serialize());
                  //alert(felvitel);             
                $.ajax({
                   url : felvitel,
                    data : $('#arajanlatForm').serialize(),
                    type: "POST",
                    success : function(msg){
                        $('#ajaxReply').removeClass().addClass('sMessage bra margin ok').fadeOut(200).fadeIn(200).find("div.message").html("Sikeres felvitel!");
                    },
                    error : function(){
                        $('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html("Nem sikerült az árajánatot hozzáadni!");                        
                    }               
                })
                return false; }); */
            
        
    
    
    
    
    

