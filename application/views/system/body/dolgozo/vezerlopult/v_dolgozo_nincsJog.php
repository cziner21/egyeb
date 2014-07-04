<div id="contentFrame">
		<div id="content" class="brr">
            <div id="contentLeft">
                    <div id="menuLeft">
                    <ul>
	                   <li <?php  if($this->uri->segment(2)==="index") echo ' class="active"' ?>><?php echo anchor('vezerloPult/index','Hozzáférések<span>Itt lehet a hozzáféréseket vezérelni, valamint jogosultságokat beállítani.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="megrendelok") echo ' class="active"' ?>><?php echo anchor('vezerloPult/megrendelok','Megrendelők<span>A megrendelőket itt lehet vezérelni, új megrendelőket hozzáadni és módosítani, valamint egyéb információk lekérdezni.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="muveletek") echo ' class="active"' ?>><?php echo anchor('vezerloPult/muveletek','Műveletekhez tartozó személyi költségek<span>Itt lehet a műveleteket felvenni és módosítani.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="gepierpforrasok") echo ' class="active"' ?>><?php echo anchor('vezerloPult/gepieroforrasok','Gépi erőforrások költségei és előkészületi költségek<span>Itt lehet a gépeket felvenni, módosítani illetve egyéb beállításaikat elvégezni.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="anyagok") echo ' class="active"' ?>><?php echo anchor('vezerloPult/anyagok','Anyagok<span>Itt lehet az anyagokat felvenni és módosítani.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="valatoKoltsegek") echo ' class="active"' ?>><?php echo anchor('vezerloPult/valtozoKoltsegek','Változó költségek<span>Itt lehet a változó költségeket felvenni és módosítani.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="egyebBeallitasok") echo ' class="active"' ?>><?php echo anchor('vezerloPult/egyebBeallitasok','Egyéb beállítások<span>Itt lehet az egyéb beállításokat elvégezni.</span>');?></li>
					</ul>
                    </div>
            </div>
        <div id="contentRight">
            	<div class="content cont-close">
	
		<div class="sMessage bra notify">
			<div class="controls">
				<a href="#" class="aRblock ui-icon ui-icon-close"></a>
			</div>
			<div class="message" style="display: block;">
		<table class="siteInformation">
			<tbody><tr>
				<td class="tdLeft">
	<b><?php echo $fejlec;?> </b> 
				</td>
				<td>
	<?php echo $uzenet;?>
				</td>
                
			</tr>
		</tbody></table>
	</div>
			<div class="clear"></div>
		</div>	
	
			</div>
        </div>