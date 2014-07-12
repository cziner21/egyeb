
            
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
                                <table id="table_id" class="display">
                                    <thead>
                                    <tr>
                                        <th>UID</th><th>Felhasználónév</th><th>Teljes név</th><th>Státusz</th><th>Osztály</th><th>Hozzáadva</th><th>Utoljára itt</th><th><input class="checkbox checkBoxAll" type="checkbox"/></th>
                                    </tr>
                                    </thead>
					               <tbody>
                                      
		                              <?php
                                            //ide jön a felhasználók listázása
                                            $sum = count($dolgozok['id']);
                                            //var_dump($sum);
                                            
                                            for($i = 0; $i < $sum ; $i++){
                                                
                                                echo '<tr>
                                                        <td>'.$dolgozok['id'][$i].'</td>
    		                                            <td>'. anchor('vezerloPult/dolgozoAdatlap/'.$dolgozok['id'][$i],$dolgozok['username'][$i]).'</td>
                                						<td>'.$dolgozok['teljes_nev'][$i].'</td>
                                						<td>'.$dolgozok['engedelyezve'][$i].'</td>
                                						<td><b>'.$dolgozok['priv'][$i].'</b></td>
                                						<td>'.$dolgozok['created'][$i].'</td>
                                						<td>'.$dolgozok['last_login'][$i].'</td>
                                						<td><input class="checkbox" name="" value="" disabled="disabled" type="checkbox"></td>
			                                          </tr>';
                                            }
                                      ?>
                                      
                                   </tbody>
                                </table>
				            </form>
		                  <script type="text/javascript">
                            $('#table_id').DataTable({
                                
                                "aoColumnDefs": [
                                { 'bSortable': false, 'aTargets': [ 7 ] }
                                ],
                                
                                // Nyelvi beállítások
                        	    'oLanguage': {
                        	 
                        	      // Lapozó beállítása
                        	      'oPaginate': {
                        	        'sFirst': 'Első oldal',
                        	        'sLast': 'Utolsó oldal',
                        	        'sNext': 'Következő',
                        	        'sPrevious': 'Előző',
                        	      },
                        	 
                        	      // Egyéb nyelvi beállítások
                        	      'sSearch': 'Keresés:',
                        	      'sLengthMenu': 'Mutat: _MENU_',
                                  'sInfo': 'Megjelenítve: _START_ - _END_ a(z) _TOTAL_ rekordból',
                        	      'sInfoEmpty': 'Megjelenítve: 0 rekord a 0 rekordból',
                        	      'sInfoFiltered': '(keresés _MAX_ rekordban)',
                        	      'sEmptyTable': 'Nincs megjeleníthető adat',
                        	      'sZeroRecords': 'A szűrési feltételnek egyetlen rekord sem felel meg',
                        	      'sProcessing': 'A feldolgozás folyamatban...'
                        	    }
                            });
                            </script>
    				<div class="right">
    					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="accessDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
    				</div>
    
    				<script src="javascript/sap.accessList.js" type="text/javascript"></script>
    				<script src="javascript/sap.table.js" type="text/javascript"></script>
		
			 </div><!--content cont-close-->
		  </div><!--rightBlock-->
	   </div><!--hozzaferesListazAjax-->
                    
    </div><!--contentRight-->

