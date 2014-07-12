<div id="contentRight">
                <div id="ajaxReply" class="sMessage bra margin hidden">
                    <div class="controls">
                        <a href="#" class="aRblock ui-icon ui-icon-close"></a>
    		        </div>
    		        <div class="message"></div>
    		        <div class="clear"></div>
                </div>
		



		<form method="post" action="../auth/addDolgozo" id="userAddForm">
			<table class="adatbekero" align="center">
				<tbody><tr>
					<td class="megnevezes right form">Név<em class="red">*</em></td>
					<td class="adat left"><input name="nev" class="text" type="text"/></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Cím</td>
					<td class="adat left"><input name="cim" class="text" type="text"/></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Telefonszám</td>
					<td class="adat left"><input name="telszam" id="telszam" class="text" type="text"/></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Email</td>
					<td class="adat left"><input name="email" class="text" type="text"/></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Fizetés módja</td>
					<td class="adat left">
                        <select id="fizmod">
                        <option value="kp">Készpénz</option>
                        <option value="atutalas">Átutalás</option>
                        </select>
                    </td>
				</tr>
               <tr>
					<td class="megnevezes right form">Hány napra fizet</td>
					<td class="adat left"><input name="hanynap" class="text" type="text"/></td>
				</tr> 
               
                
                <tr>
                <td class="megnevezes right form"></td>
                <td class="adat left"><input type="submit" value="Létrehoz"/></td>
                </tr>
                	</tbody></table>
                    
		</form>
         
</div><!--contentRight-->
		
	
    