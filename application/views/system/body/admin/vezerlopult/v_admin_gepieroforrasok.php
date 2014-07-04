	<div id="contentFrame">
		<div id="content" class="brr">
        
            <div id="contentLeft">
                <div id="menuLeft">
					<ul>
	                   <li><?php echo anchor('vezerloPult/index','Hozzáférések<span>Itt lehet a hozzáféréseket vezérelni, valamint jogosultságokat beállítani.</span>');?></li>
                       <li><?php echo anchor('vezerloPult/megrendelok','Megrendelők<span>A megrendelőket itt lehet vezérelni, új megrendelőket hozzáadni és módosítani, valamint egyéb információk lekérdezni.</span>');?></li>
                       <li><?php echo anchor('vezerloPult/muveletek','Műveletekhez tartozó személyi költségek<span>Itt lehet a műveleteket felvenni és módosítani.</span>');?></li>
                       <li class="active"><?php echo anchor('vezerloPult/gepieroforrasok','Gépi erőforrások költségei és előkészületi költségek<span>Itt lehet a gépeket felvenni, módosítani illetve egyéb beállításaikat elvégezni.</span>');?></li>
                       <li><?php echo anchor('vezerloPult/anyagok','Anyagok<span>Itt lehet az anyagokat felvenni és módosítani.</span>');?></li>
                       <li><?php echo anchor('vezerloPult/valtozoKoltsegek','Változó költségek<span>Itt lehet a változó költségeket felvenni és módosítani.</span>');?></li>
                       <li><?php echo anchor('vezerloPult/egyebBeallitasok','Egyéb beállítások<span>Itt lehet az egyéb beállításokat elvégezni.</span>');?></li>
					</ul>
				</div>
            </div>
            
            <div id="contentRight">
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
                        <?php //ide dinamikusan a gomb ?>
	                   <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="accessNewButton"><span class="ui-button-text">Új hozzáférés</span></button>
                    </div>
                    
                </div>    
                    
                    <div id="gepiEroforrasListazAjax" class="ajaxContainer">
        		      <div class="rightBlock">
        			     <div class="title">
        				    Gépi erőforrások
        				    <div class="controls">
        					   <a href="#" class="rBtoggle cont-close"></a>
        				    </div>
        			     </div>

			          <div class="content cont-close">
	
                        <div class="ajax_loader"></div>
				            <form method="post" action="#" id="accessForm">
                                <table class="other">
					               <tbody>
                                      <tr class="fejlec">
						              <td class="uid"><a href="#" class="sort ASC" rel="hozzaferes|uid|ASC">MID</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|username|">Név</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|fullname|">Művelet</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|enabled|">Előkészületi ktg.</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|class|">Gépi ktg.</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|added|">Hozzáadva</a></td>
    						              <td><input class="checkbox checkBoxAll" type="checkbox"/></td>
					                  </tr>
		                              <?php
                                            //ide jön a felhasználók listázása
                                            /*
                                            
                                            foreach($dolgozok as $dolgozo){
                                                echo '<tr class="adat">
                                                        <td class="right uid">'.$dolgozo['id'].'</td>
    		                                            <td><a href="#" class="userInformation" rel="'.$dolgozo['id'].'"><b>'.$dolgozo['username'].'</b></a></td>
                                						<td>'.$dolgozo['teljes_nev'].'</td>
                                						<td>'.$dolgozo['engedelyezve'].'</td>
                                						<td><b>'.$dolgozo['priv'].'</b></td>
                                						<td>'.$dolgozo['created'].'</td>
                                						<td>'.$dolgozo['last_login'].'</td>
                                						<td class="trcheck"><input class="checkbox" name="" value="" disabled="disabled" type="checkbox"></td>
			                                          </tr>';
                                            }*/
                                      ?>
                                      
                                   </tbody>
                                </table>
				            </form>
		
    				<div class="right">
    					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="accessDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
    				</div>
    
    				<script src="javascript/sap.accessList.js" type="text/javascript"></script>
    				<script src="javascript/sap.table.js" type="text/javascript"></script>
		
			 </div><!--content cont-close-->
		  </div><!--rightBlock-->
	   </div><!--hozzaferesListazAjax-->
                    
    </div><!--contentRight-->

