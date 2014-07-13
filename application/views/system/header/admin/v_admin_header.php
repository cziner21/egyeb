<?php $this->benchmark->mark('code_start');?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $site_title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        
        <link href="<?php echo base_url('themes/default/default.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/tables.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/form.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/jquery-ui-1.8.16.custom.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/jquery.treeview.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/jquery.contextmenu.css');?>" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url('themes/default/fileuploader.css');?>" rel="stylesheet" type="text/css" />
    
        <!--jquery ui, tabs, popups, etc...-->
  	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css"/>
        <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src="<?php echo base_url('js/jquery.steps.js');?>"></script>
         
        <script src="<?php echo base_url('js/current_time.js');?>"></script>  
        <script src="<?php echo base_url('js/tabcontrol.js');?>"></script>  
        <script src="<?php echo base_url('js/vezerlopult/addDolgozo.js');?>"></script>
        <script src="<?php echo base_url('js/projekt/arajanlat.js');?>"></script>
        <script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css" />
        <!--//jquery ui-->
        
    	
    	<script type="text/javascript" src="<?php echo base_url('js/jquery-ui-1.8.16.custom.min.js');?>"></script>
    	<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.datepicker-hu.js');?>"></script>
    	<script src="<?php echo base_url('js/jquery.validate.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/messages_hu.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jquery.autocomplete.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jquery.infieldlabel.min.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jquery.jstree.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jquery.contextmenu.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/fileuploader.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jqgrid/i18n/grid.locale-hu.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/jqgrid/jquery.jqGrid.min.js');?>" type="text/javascript"></script>
    	<script src="<?php echo base_url('js/sap.list.js');?>" type="text/javascript"></script>    
    	<script type="text/javascript" src="<?php echo base_url('js/sap.root.js');?>"></script>
      
    	
        
        <script type='text/javascript'>
           $(document).ready(function(){
            
            
                         
             $( "#dialog" ).dialog({ width: 700 });
             var width = $( "#dialog" ).dialog( "option", "width" );
             // setter
             $( "#dialog" ).dialog( "option", "width", 700 );
             $( "#dialog" ).dialog({ autoOpen: true });
             $( "#opener" ).click(function() {
                
                $( "#dialog" ).dialog( "open" );
                
             });
              /*tabcontrol*/
              $(function() {
                $( "#tabs" ).tabs();
              });
              
              
           });
           
    
        </script>
        
    </head>
    <body>
        <div id="ajaxLoader">
            <img src="<?php echo base_url('themes/images/ajax-loader_mini.gif');?>" title="Betöltés" alt="Betöltés" /> Betöltés...
        </div>
        
        <div id="headerFrame">
    		<div id="header">
    			<div id="headerContent">
    				<div id="headLine" class="bra">
    					<div class="title"><?php echo $main_title;?></div>
    					vállalat irányítási rendszer
    				</div>
    				<div class="clear"></div>
    
    				<div id="headCuruser" class="bra">
    					<div class="float-right">
    						<span class="padding-right">Szerver idő: <span id="clock"></span></span> [ <b><?php echo anchor('/auth/logout/','Kilépés');?></b> ]
    					</div>
    					Üdv <b><?php echo $dolgozo_adatai['teljes_nev'];?></b>!
    				</div>
    				<div class="clear"></div>
                </div>
                
                <div id="menuFrame">
    				<div id="menu" class="brt">
    					<ul>
    						<li <?php  if($this->uri->segment(1)==="kernel") echo ' class="brt active_2"' ?>><?php echo anchor('kernel/index','Főoldal');?></li>
                            <li <?php  if($this->uri->segment(1)==="vezerloPult") echo ' class="brt active_2"' ?>><?php echo anchor('vezerloPult/index','Vezérlőpult');?></li>
                            <li <?php  if($this->uri->segment(1)==="beszerzes") echo ' class="brt active_2"' ?>><a href="#" class="bra">Beszerzés</a></li>
                            <li <?php  if($this->uri->segment(1)==="Projektek") echo ' class="brt active_2"' ?>><?php echo anchor('Projektek/index','Termelés/Gazdálkodás');?></li>
                            <li <?php  if($this->uri->segment(1)==="penzugy") echo ' class="brt active_2"' ?>><a href="#" class="bra">Pénzügy</a></li>
                            <li <?php  if($this->uri->segment(1)==="nyilvantartasok") echo ' class="brt active_2"' ?>><a href="/nyilvantartasok.php" class="bra">Nyilvántartások</a></li>
                        </ul>
    				</div>
    				<!--<div id=\"bridge\">&nbsp;</div>-->
    				<div class="clear"></div>
                </div>
		  </div>
	   </div>
