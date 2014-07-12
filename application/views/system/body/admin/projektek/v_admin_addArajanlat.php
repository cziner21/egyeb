<div id="contentRight">
<div id="ajaxReply" class="sMessage bra margin hidden">
                    <div class="controls">
                        <a href="#" class="aRblock ui-icon ui-icon-close"></a>
    		        </div>
    		        <div class="message"></div>
    		        <div class="clear"></div>
                </div>               
		

        

		<form method="post" action="#" id="arajanlatForm">
			<table class="adatbekero" align="center">
				<tbody><tr>
					<td class="megnevezes right form">Projekt név<em class="red">*</em></td>
					<td class="adat left"><input id="projektnevText" name="projektnev" class="text" type="text"/></td>
				</tr>
				
				<tr>
					<td class="megnevezes right form">Megrendelő<em class="red">*</em></td>
					<td class="adat left"><input name="searchCustomer" id="searchCustomer" autocomplete="off" value="" class="text" type="text"></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Árajánlat kérés dátuma<em class="red">*</em></td>
					<td class="adat left"><input id="orderDateDisplay" name="orderDateDisplay" class="text hasDatepicker" type="text"/></td>
				</tr>
                <tr>
                    <td class="megnevezes right form">Elkészítés határideje<em class="red">*</em></td>
                    <td class="adat left">
                        <input id="deadDateDisplay" name="deadDateDisplay" class="text hasDatepicker" type="text"/>
                    </td>
                </tr>
				<tr>
					<td class="megnevezes right form">Nyereség</td>
					<td class="adat left"><input name="profit" class="text small" type="text"/>%</td>
				</tr>
                <tr>
                    <td><input type="hidden" name="baseUrl" value="<?php echo base_url();?>" /></td>
                </tr>
                <tr>
                <td class="megnevezes right form"></td>
                <td class="adat left"><input type="submit" id="addDolgozoBtn" value="Létrehoz"/></td>
                </tr>
                	</tbody></table>
                    
		</form>
        
         

</div><!--contentRight-->
		
	
    