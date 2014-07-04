<div id="contentFrame">
<div id="content" class="brr">

<div id="contentLeft">
				<!-- <h2>Műveleti panel</h2> -->
				<div id="menuLeft">
					<ul>	
						<li><?php echo anchor('projektek/index','Árajánlatok<span>Itt lehet az árajánlatokat felvenni.</span>');?></li>
						<li><?php echo anchor('projektek/futoProjektek','Projektek<span>Itt vannak a futó projektek</span>');?></li>
						<li><?php echo anchor('projektek/ellenorzes','Ellenőrzes<span>Itt vannak azok a projektek amik már legyártásra kerültek, de még ellenőrzés alatt vannak.</span>');?></li>
                        <li><?php echo anchor('projektek/kiszallitas','Kiszállitas<span>Itt vannak a kiszállított és kiszállítás alatt lévő projektek</span>');?></li>
                        <li class="active"><?php echo anchor('projektek/kiszallitva','Kiszállítva / Archiv<span>Itt vannak kiszállított, azaz végetért projektek</span>');?></li>
						<li><?php echo anchor('projektek/elutasitva','Elutasítva<span>Itt vannak az elutasított árajánlatok</span>');?></li>	
					</ul>
				</div>
	</div><div id="contentRight"><script src="javascript/projektek/sap.meretezo.js" type="text/javascript"></script>
	<div id="ajaxReply" class="sMessage bra margin hidden">
		<div class="controls">
			<a href="#" class="aRblock ui-icon ui-icon-close"></a>
		</div>
		<div class="message"></div>
		<div class="clear"></div>
	</div><div id="projektekListazAjax" class="ajaxContainer">
		<div class="rightBlock">
			<div class="title">
				Kiszállítva / Archiv
				<div class="controls">
					<a href="#" class="rBtoggle cont-close"></a>
				</div>
			</div>

			<div class="content cont-close">
	
		<div class="sMessage bra notify">
			<div class="controls">
				<a href="#" class="aRblock ui-icon ui-icon-close"></a>
			</div>
			<div class="message" style="display: block;">
		<table class="siteInformation">
			<tbody><tr>
				<td class="tdLeft">
	<b>Figyelmeztetés!</b> 
				</td>
				<td>
	Az adatbázis üres eredményt adott vissza.
				</td>
			</tr>
		</tbody></table>
	</div>
			<div class="clear"></div>
		</div>	
	
			</div>
		</div>
	</div></div>
			<div class="clear"></div>
		</div>
        </div>