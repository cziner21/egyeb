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
                        <?php echo anchor('projektek/addArajanlat','<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="opener"><span class="ui-button-text">Új árajánlat</span></button>');?>	
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
            				
            				<form method="post" action="/sap/projektek.php?page=arajanlatok" id="projectForm">
            
            				<table id="table_arajanlat" class="display">
                                    <thead>
                                    <tr>
                                        <th>ÁID</th><th>Név</th><th>Hozzáadva</th><th>Státusz</th><th>Megrendelő</th><th>Töröl</th>
                                    </tr>
                                    </thead>
            		
            					    <tbody>
                                      
		                              <?php
                                            //ide jön az árajánlatok listázása
                                            $sum = count($arajanlatok['aid']);
                                            //var_dump($sum);
                                            
                                            for($i = 0; $i < $sum ; $i++){
                                                
                                                echo '<tr>
                                                        <td>'.anchor('projektek/arajanlatInfo/'.$arajanlatok['aid'][$i],$arajanlatok['aid'][$i]).'</td>
    		                                            <td>'.$arajanlatok['projekt_nev'][$i].'</td>
                                                        <td>'.$arajanlatok['hozzaadva'][$i].'</td>
                                						<td>'.$arajanlatok['statusz'][$i].'</td>
                                						<td>'. anchor('vezerloPult/megrendeloAdatlap/'.$arajanlatok['megrendelo'][$i],$arajanlatok['megrendelo'][$i]).'</td>
  						                                <td><input class="checkbox" name="" value=""  type="checkbox"></td>
			                                          </tr>';
                                            }
                                      ?>
                                      
                                   </tbody>
                            </table>
            				</form>
            		        <script type="text/javascript">
                            $('#table_arajanlat').DataTable({
                                
                                "aoColumnDefs": [
                                { 'bSortable': false, 'aTargets': [ 5 ] }
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
                            <script type="text/javascript">
                                $('#ajanlatkeres_datuma').datepicker();
                                $('#hatarido').datepicker();
                     
                     </script>  
                              
            				<div class="right">
            					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="arajanlatDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
            				</div>
            
            			  </div>
			
                				
		
        </div><!--tabs-->
</div><!--dilaog-->
</div><!--contentRight-->



		
	