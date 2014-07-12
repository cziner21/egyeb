   <div class="clear"></div>
		</div>
	</div>

   <div id="footerFrame">
		<div id="footer">
			<div class="foot">
            <?php $this->benchmark->mark('code_end');?>
				<?php echo $main_title . "© 2011-" .date("Y") ;?>
				<div class="small">
					<b>Verzió:</b> v1.0a
					<br/>
					<b>Futási idő:</b> <?php echo $this->benchmark->elapsed_time('code_start', 'code_end');?> ms
					<br/>
					<b>Összes idő:</b> <?php echo $this->benchmark->elapsed_time();// echo number_format($SQL_QUERYES["TIME"], 4, '.', '');?> ms
                    <br />
                    <b>Memória használat:</b> <?php echo $this->benchmark->memory_usage();?>
                    
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

</html>
