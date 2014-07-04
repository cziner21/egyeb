
            
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

				    <table class="other">
    					<tbody>
                        <tr class="fejlec">
    						<td class="uid"><a href="#" class="sort ASC" rel="megrendelo|cid|ASC">CID</a></td>
    						<td><a href="#" class="sort " rel="megrendelo|name|">Név</a></td>
    						<td><a href="#" class="sort " rel="megrendelo|address|">Cím</a></td>
    						<td><a href="#" class="sort " rel="megrendelo|phone|">Telefonszám</a></td>
    						<td><a href="#" class="sort " rel="megrendelo|email|">Email</a></td>
    						<td><a href="#" class="sort " rel="megrendelo|added|">Hozzáadva</a></td>
    						<td><input class="checkbox checkBoxAll" type="checkbox"/></td>
    					</tr>
		                <?php
                                            //ide jön a felhasználók listázása
                                            /*
                                            
                                            foreach($megrendelok as $megrendelo){
                                                echo '<tr class="adat">
                                                        <td class="right uid">'.$megrendelo['id'].'</td>
    		                                            <td><a href="#" class="customerInformation" rel="'.$megrendelo['id'].'"><b>'.$megrendelo['megrendelo_nev'].'</b></a></td>
                                						<td>'.$megrendelo['cim'].'</td>
                                						<td>'.$megrendelo['telefonszam'].'</td>
                                						<td>'.$megrendelo['email'].'</td>
                                						<td>'.$megrendelo['created'].'</td>
                                						<td class="trcheck"><input class="checkbox" name="" value="" disabled="disabled" type="checkbox"></td>
			                                          </tr>';
                                            }*/
                                      ?>  
					
			
				        </tbody>
                    </table>
				</form>
		
				<div class="right">
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="customerDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
				</div>

				<script src="javascript/sap.customerList.js" type="text/javascript"></script>
				<script src="javascript/sap.table.js" type="text/javascript"></script>
                
			</div>
		</div>
        	</div>
		</div>
	  