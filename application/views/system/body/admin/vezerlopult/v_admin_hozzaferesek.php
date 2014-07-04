
            
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
	                   <?php echo anchor('vezerloPult/addDolgozo','<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="opener"><span class="ui-button-text">Új hozzáférés</span></button>');?>
  
                    </div>
                    
                </div>    
                    
                    <div id="hozzaferesListazAjax" class="ajaxContainer">
        		      <div class="rightBlock">
        			     <div class="title">
        				    Hozzáférések
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
						              <td class="uid"><a href="#" class="sort ASC" rel="hozzaferes|uid|ASC">UID</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|username|">Felhasználónév</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|fullname|">Teljes név</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|enabled|">Státusz</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|class|">Osztály</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|added|">Hozzáadva</a></td>
    						              <td><a href="#" class="sort " rel="hozzaferes|last_access|">Utoljára itt</a></td>
    						              <td><input class="checkbox checkBoxAll" type="checkbox"/></td>
					                  </tr>
		                              <?php
                                            //ide jön a felhasználók listázása
                                            $sum = count($dolgozok['id']);
                                            //var_dump($sum);
                                            
                                            for($i = 0; $i < $sum ; $i++){
                                                
                                                echo '<tr class="adat">
                                                        <td class="right uid">'.$dolgozok['id'][$i].'</td>
    		                                            <td>'. anchor('vezerloPult/dolgozoAdatlap/'.$dolgozok['id'][$i],$dolgozok['username'][$i]).'</td>
                                						<td>'.$dolgozok['teljes_nev'][$i].'</td>
                                						<td>'.$dolgozok['engedelyezve'][$i].'</td>
                                						<td><b>'.$dolgozok['priv'][$i].'</b></td>
                                						<td>'.$dolgozok['created'][$i].'</td>
                                						<td>'.$dolgozok['last_login'][$i].'</td>
                                						<td class="trcheck"><input class="checkbox" name="" value="" disabled="disabled" type="checkbox"></td>
			                                          </tr>';
                                            }
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

