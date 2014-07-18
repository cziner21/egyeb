
    <div id="contentRight"><script src="javascript/projektek/sap.meretezo.js" type="text/javascript"></script>
	<div id="ajaxReply" class="sMessage bra margin hidden">
		<div class="controls">
			<a href="#" class="aRblock ui-icon ui-icon-close"></a>
		</div>
		<div class="message"></div>
		<div class="clear"></div>
	</div><div id="projektekListazAjax" class="ajaxContainer">
		<div class="rightBlock">
			<div class="title">
				Projektek
				<div class="controls">
					<a href="#" class="rBtoggle cont-close"></a>
				</div>
			</div>

			<div class="content cont-close">
	
				<div class="ajax_loader"></div>
				<div id="pagerSet" class="hidden">projektek|pid|DESC|</div>
				<form method="post" action="/sap/projektek.php?page=projektek" id="projectForm">

					<table id="table_arajanlat" class="display">
                                    <thead>
                                    <tr>
                                        <th>Munkaszám</th><th>Hozzáadva</th><th>Státusz</th><th>Megrendelő</th><th><input class="checkbox checkBoxAll" type="checkbox"/></th>
                                    </tr>
                                    </thead>
            		
            					    <tbody>
                                      
		                              <?php
                                            //ide jön a munkák listázása
                                            $sum = count($munkak['munkaszam']);
                                            //var_dump($sum);
                                            
                                            for($i = 0; $i < $sum ; $i++){
                                                
                                                echo '<tr>
                                                        <td>'.anchor('projektek/munkaInfo/'.$munkak['munkaszam'][$i],$munkak['munkaszam'][$i]).'</td>
    		                                            <td>'.$munkak['hozzaadva'][$i].'</td>
                                						<td>'.$munkak['statusz'][$i].'</td>
                                						<td>'. anchor('vezerloPult/megrendeloAdatlap/'.$munkak['megrendelo'][$i],$munkak['megrendelo'][$i]).'</td>
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
                                { 'bSortable': false, 'aTargets': [ 4 ] }
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
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="arajanlatDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
				</div>

			
            			  </div>
			
                				
		
        </div><!--tabs-->
</div><!--dilaog-->
</div><!--contentRight-->
		
	