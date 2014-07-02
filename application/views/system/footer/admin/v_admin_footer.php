   <div class="clear"></div>
		</div>
	</div>

   <div id="footerFrame">
		<div id="footer">
			<div class="foot">
				<?php echo $main_title . "© 2011-" .date("Y") ;?>
				<div class="small">
					<b>Verzió:</b> v1.0a
					<br/>
					<b>Futási idő:</b> <?php //echo timer_print();?> ms
					<br/>
					<b>Adatbázis idő:</b> <?php // echo number_format($SQL_QUERYES["TIME"], 4, '.', '');?>" ms

					<!--<div style="font-size:10px; margin:10px auto;">
						<div style="border-bottom:1px solid #CCCCCC; padding-bottom:3px;">[ ".number_format($SQL_QUERYES["TIME"], 4, '.', '')." ] Összesen</div>
						".$SQL_QUERYES["SQL"]."
					</div>-->

				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>


</body>

</html>";
