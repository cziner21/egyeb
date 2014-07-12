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
				Kiszállítás
				<div class="controls">
					<a href="#" class="rBtoggle cont-close"></a>
				</div>
			</div>

			<div class="content cont-close">
	
				<div class="ajax_loader"></div>
				<div id="pagerSet" class="hidden">kiszallitas|pid|DESC|</div>
				<form method="post" action="/sap/projektek.php?page=kiszallitas" id="projectForm">

				<table class="other">
					<tbody><tr class="fejlec">
						<td class="pid"><a href="#" class="sort DESC" rel="kiszallitas|pid|DESC">PID</a></td>
						<td><a href="#" class="sort " rel="kiszallitas|project_name|">Projekt név</a></td>
						<td><a href="#" class="sort " rel="kiszallitas|customer_name|">Megrendelő</a></td>
						<td><a href="#" class="sort " rel="kiszallitas|status|">Státusz</a></td>
						<td><a href="#" class="sort " rel="kiszallitas|added|">Hozzáadva</a></td>
						<td><input class="checkbox checkBoxAll" type="checkbox"></td>
					</tr>
		
					<tr class="adat">
						<td class="right pid">28</td>
						<td><a href="#" class="projektInformation" rel="28"><b>NT-04</b></a></td>
						<td><a href="#" class="customerInformation" rel="30"><b>zf hungária1</b></a></td>
						<td>Kiszállítás alatt</td>
						<td>2014. jún. 26. 10:56</td>
						<td class="trcheck"><input class="checkbox chkbox" name="pid[]" value="28" type="checkbox"></td>
					</tr>
			
					<tr class="adat">
						<td class="right pid">27</td>
						<td><a href="#" class="projektInformation" rel="27"><b>NT-03</b></a></td>
						<td><a href="#" class="customerInformation" rel="30"><b>zf hungária1</b></a></td>
						<td>Kiszállítás alatt</td>
						<td>2014. jún. 10. 08:01</td>
						<td class="trcheck"><input class="checkbox chkbox" name="pid[]" value="27" type="checkbox"></td>
					</tr>
			
				</tbody></table>
				</form>
		
				<div class="right">
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="arajanlatDeleteButton"><span class="ui-button-text">Kijelöltek törlése</span></button>
				</div>

				<script src="javascript/projektek/sap.projektList.js" type="text/javascript"></script>
				<script src="javascript/sap.table.js" type="text/javascript"></script>
		
			</div>
		</div>
	</div></div>
			<div class="clear"></div>
		</div>
        </div>