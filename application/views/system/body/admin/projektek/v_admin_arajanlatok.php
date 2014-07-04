<div id="contentFrame">
		<div id="content" class="brr">

            <div id="contentLeft">				
				<div id="menuLeft">
					<ul>	
						<li class="active"><?php echo anchor('projektek/index','Árajánlatok<span>Itt lehet az árajánlatokat felvenni.</span>');?></li>
						<li><?php echo anchor('projektek/futoProjektek','Projektek<span>Itt vannak a futó projektek</span>');?></li>
						<li><?php echo anchor('projektek/ellenorzes','Ellenőrzes<span>Itt vannak azok a projektek amik már legyártásra kerültek, de még ellenőrzés alatt vannak.</span>');?></li>
                        <li><?php echo anchor('projektek/kiszallitas','Kiszállitas<span>Itt vannak a kiszállított és kiszállítás alatt lévő projektek</span>');?></li>
                        <li><?php echo anchor('projektek/kiszallitva','Kiszállítva / Archiv<span>Itt vannak kiszállított, azaz végetért projektek</span>');?></li>
						<li><?php echo anchor('projektek/elutasitva','Elutasítva<span>Itt vannak az elutasított árajánlatok</span>');?></li>	
					</ul>
				</div>
	        </div>
           
            <div id="contentRight">
                <script src="javascript/projektek/sap.meretezo.js" type="text/javascript"></script>
            	<div id="ajaxReply" class="sMessage bra margin hidden">
            		<div class="controls">
            			<a href="#" class="aRblock ui-icon ui-icon-close"></a>
            		</div>
            		<div class="message"></div>
            		<div class="clear"></div>
            	</div>
                
        		<div class="rightBlock">
        			<div class="title">
        				Műveletek
        				<div class="controls">
        					<a href="#" class="rBtoggle cont-close"></a>
        				</div>
        			</div>
        
        			<div class="content cont-close">	
                        <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="arajanlatUjButton"><span class="ui-button-text">Új árajánlat</span></button>	
        			</div>
        		</div>
                
        	    <div id="projektekListazAjax" class="ajaxContainer">
            		<div class="rightBlock">
            			<div class="title">
            				Árajánlatok
            				<div class="controls">
            					<a href="#" class="rBtoggle cont-close"></a>
            				</div>
            			</div>
            
            			<div class="content cont-close">
            	
            				<div class="ajax_loader"></div>
            				<div id="pagerSet" class="hidden">arajanlatok|pid|DESC|</div>
            				<form method="post" action="/sap/projektek.php?page=arajanlatok" id="projectForm">
            
            				<table class="other">
            					<tbody><tr class="fejlec">
            						<td class="pid"><a href="#" class="sort DESC" rel="arajanlatok|pid|DESC">PID</a></td>
            						<td><a href="#" class="sort " rel="arajanlatok|project_name|">Projekt név</a></td>
            						<td><a href="#" class="sort " rel="arajanlatok|customer_name|">Megrendelő</a></td>
            						<td><a href="#" class="sort " rel="arajanlatok|status|">Státusz</a></td>
            						<td><a href="#" class="sort " rel="arajanlatok|added|">Hozzáadva</a></td>
            						<td><input class="checkbox checkBoxAll" type="checkbox"></td>
            					</tr>
            		
            					<tr class="adat">
            						<td class="right pid">29</td>
            						<td><a href="#" class="projektInformation" rel="29"><b>NT-08</b></a></td>
            						<td><a href="#" class="customerInformation" rel="30"><b>zf hungária1</b></a></td>
            						<td><span class="red">Árajánlat adás alatt</span></td>
            						<td>2014. jún. 28. 08:53</td>
            						<td class="trcheck"><input class="checkbox chkbox" name="pid[]" value="29" type="checkbox"></td>
            					</tr>
            			
            				</tbody></table>
            				</form>
            		
            				<div class="right">
            					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="arajanlatDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
            				</div>
            
            				<script src="javascript/projektek/sap.projektList.js" type="text/javascript"></script>
            				<script src="javascript/sap.table.js" type="text/javascript"></script>
            		
            			</div>
            		</div><!--/rightBlock-->
        	   </div> <!--/projektekListazAjax-->
               <script src="javascript/projektek/sap.arajanlatAdd.js" type="text/javascript"></script>
            </div> <!--/contentRight-->
            <div class="clear"></div>
        </div><!--/content-->
</div><!--contentFrame>