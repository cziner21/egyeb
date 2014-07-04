	
            
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
				            Előszámla beállítások
    				        <div class="controls">
    					       <a href="#" class="rBtoggle cont-close"></a>
    				        </div>
		          	    </div>

                    <div class="content cont-close">
                        <div id="otherConfigSzamlaTabs" class="otherSzamlaTab751 ui-tabs ui-widget ui-widget-content">
                            <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                				<li class="ui-state-default ui-corner-top ui-state-active ui-tabs-selected"><a href="ajax/otherConfig.php?cmd=otherConfigInformation&amp;type=szamla">Értékek</a></li>
                	            <li class="ui-state-default ui-corner-top"><a href="ajax/otherConfig.php?cmd=otherConfigEditForm&amp;type=szamla">Szerkesztés</a></li>
                            </ul>
                            <div id="tabConfigSzamlaContent751" class="ui-tabs-panel ui-widget-content">
                                <table class="adatbekero">
                    				<tbody>
                                        <tr>
                        					<td class="megnevezes right">Név:</td>
                        					<td class="adat left">Normatool Kft.</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Cím:</td>
                        					<td class="adat left">3400 Mezőkövesd Szegfű út 1.</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Bankszámla:</td>
                        					<td class="adat left">00000000-00000000-00000000</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Adószám:</td>
                        					<td class="adat left">0000000000</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Telefonszám:</td>
                        					<td class="adat left">+36-00-000-0000</td>
                        				</tr>
                    				</tbody>
                                </table>
                            </div>
        		          </div>                            
                    </div>
                    
                </div>  <!--/rightblock-->  
                    
                <div class="rightBlock">
    			<div class="title">
    				Egyéb beállítások
    				<div class="controls">
    					<a href="#" class="rBtoggle cont-close"></a>
    				</div>
    			</div>
    
    			<div class="content cont-close">
    	
             		  <div id="otherConfigTabs" class="otherTab1922 ui-tabs ui-widget ui-widget-content">
                			<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                   				<li class="ui-state-default ui-corner-top ui-state-active ui-tabs-selected"><a href="ajax/otherConfig.php?cmd=otherConfigInformation&amp;type=other">Értékek</a></li>
                    	        <li class="ui-state-default ui-corner-top"><a href="ajax/otherConfig.php?cmd=otherConfigEditForm&amp;type=other">Szerkesztés</a></li>
                			</ul>
                			<div id="tabConfigContent1922" class="ui-tabs-panel ui-widget-content">
                                <table class="adatbekero">
                    				<tbody>
                                        <tr>
                        					<td class="megnevezes right">1 kW/óra díja:</td>
                        					<td class="adat left">52 Ft</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Áfa kulcs:</td>
                        					<td class="adat left">27 %</td>
                        				</tr>
                        				
                        				<tr>
                        					<td class="megnevezes right">Szállítási költség egy irányban számolva:</td>
                        					<td class="adat left">180 Ft</td>
                        				</tr>
                    				</tbody>
                                </table>
                            </div>
               		   </div>
    
                		<script type="text/javascript">
                
                			$(document).ready(function() {
                				var tabmenu_li = $('#otherConfigTabs.otherTab1922 li');
                				var content = $('#tabConfigContent1922');
                				tabmenu_li.hover(function () {
                						if (!$(this).hasClass('ui-tabs-selected')) {
                							$(this).addClass('ui-state-active');
                						}
                					}, function () {
                						if (!$(this).hasClass('ui-tabs-selected')) {
                							$(this).removeClass('ui-state-active');
                						}
                					}
                				);
                				tabmenu_li.click(function() {
                					if (!$(this).hasClass('ui-tabs-selected')) {
                						tabmenu_li.removeClass('ui-state-active ui-tabs-selected');
                						$( this ).addClass('ui-state-active ui-tabs-selected');
                						var url = $('a',this).attr('href');
                						ajaxUpdater('get',url,content);
                					}
                					return false;
                				});
                				tabmenu_li.filter(':first').click();
                			});
                		</script>
    	
    			</div><!--/content close-->
		</div><!--/rightblock--> 
                    
    </div><!--contentRight-->

