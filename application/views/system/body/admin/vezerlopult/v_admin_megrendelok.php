
            
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
	                   <?php echo anchor('vezerloPult/addMegrendelo','<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="opener"><span class="ui-button-text">Új megrendelő</span></button>');?>
                    </div>    
                </div>
                
                <div id="megrendeloListazAjax" class="ajaxContainer">
    	            <div class="rightBlock">
    			    <div class="title">
    				    Megrendelők
        				<div class="controls">
        					<a href="#" class="rBtoggle cont-close"></a>
        				</div>
    			    </div>

                    <div class="content cont-close">
	
				    <div class="ajax_loader"></div>
				    
				    <form method="post" action="#" id="customerForm">

				    <table id="table_id" class="display">
                                    <thead>
                                    <tr>
                                        <th>ID</th><th>Név</th><th>Város</th><th>Cím</th><th>Telefon</th><th>Email</th><th>Hozzáadva</th><th><input class="checkbox checkBoxAll" type="checkbox"/></th>
                                    </tr>
                                    </thead>
					               <tbody>
		                <?php
                                           $sum = count($megrendelo['id']);
                                            //var_dump($sum);
                                            
                                            for($i = 0; $i < $sum ; $i++){
                                                echo '<tr>
                                                        <td class="right uid">'.$megrendelo['id'][$i].'</td>
    		                                            <td><a href="#" class="customerInformation" rel="'.$megrendelo['id'][$i].'"><b>'.$megrendelo['nev'][$i].'</b></a></td>
                                						<td>'.$megrendelo['varos'][$i].'</td>
                                                        <td>'.$megrendelo['cim'][$i].'</td>
                                						<td>'.$megrendelo['telefon'][$i].'</td>
                                						<td>'.$megrendelo['email'][$i].'</td>
                                						<td>'.$megrendelo['hozzaadva'][$i].'</td>
                                						<td class="trcheck"><input class="checkbox" name="" value="" disabled="disabled" type="checkbox"></td>
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
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="customerDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
				</div>

				
                
			</div>
		</div>
        	</div>
		</div>
	  