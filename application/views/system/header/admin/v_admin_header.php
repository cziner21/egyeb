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
    
    	
    	<script type="text/javascript" src="<?php echo base_url('js/jquery-1.6.2.min.js');?>"></script>
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
    
    	<script type="text/javascript">
    		var currenttime = ".round((time()*1000))."
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
    						<span class="padding-right">Szerver idő: <span id="serverTime"><?php echo date("H:i:s");?></span></span> [ <b><?php echo anchor('/auth/logout/','Kilépés');?></b> ]
    					</div>
    					Üdv <b><?php echo $dolgozo_adatai['teljes_nev'];?></b>!
    				</div>
    				<div class="clear"></div>
                </div>
                
                <div id="menuFrame">
    				<div id="menu" class="brt">
    					<ul>
    						<li class="brt{$active['index']}"><?php echo anchor('kernel/index','Főoldal');?></li>
                            <li class="brt{$active['vezerlopult']}"><?php echo anchor('vezerloPult/index','Vezérlőpult');?></li>
                            <li class="brt{$active['beszerzes']}"><a href="#" class="bra">Beszerzés</a></li>
                            <li class="brt{$active['projektek']}"><a href="/projektek.php" class="bra">Termelés/Gazdálkodás</a></li>
                            <li class="brt{$active['penzugy']}"><a href="#" class="bra">Pénzügy</a></li>
                            <li class="brt{$active['munkaido']}"><a href="/nyilvantartasok.php" class="bra">Nyilvántartások</a></li>
                        </ul>
    				</div>
    				<!--<div id=\"bridge\">&nbsp;</div>-->
    				<div class="clear"></div>
                </div>
		  </div>
	   </div>
