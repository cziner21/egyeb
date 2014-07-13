<div id="contentRight">
<div id="ajaxReply" class="sMessage bra margin hidden">
                    <div class="controls">
                        <a href="#" class="aRblock ui-icon ui-icon-close"></a>
    		        </div>
    		        <div class="message"></div>
    		        <div class="clear"></div>
                </div>               
		

        

		<form method="post" action="../projektek/insertArajanlat" id="arajanlatForm">
			<table class="adatbekero" align="center">
				<tbody><tr>
					<td class="megnevezes right form">Projekt név<em class="red">*</em></td>
					<td class="adat left"><input id="projekt_nev" name="projekt_nev" class="text" type="text"/></td>
				</tr>
				
				<tr>
					<td class="megnevezes right form">Megrendelő<em class="red">*</em></td>
					<td class="adat left"><input type="text" name="megrendelo_megrendelo_id" class="text" id="megrendelo_megrendelo_id" placeholder="Kezdjen el gépelni a kereséshez..." />
                                    <div id="finalResult"></div></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Árajánlat kérés dátuma<em class="red">*</em></td>
					<td class="adat left"><input id="ajanlatkeres_datuma" name="ajanlatkeres_datuma" class="text hasDatepicker" type="text"/></td>
				</tr>
                <tr>
                    <td class="megnevezes right form">Elkészítés határideje<em class="red">*</em></td>
                    <td class="adat left">
                        <input id="hatarido" name="hatarido" class="text hasDatepicker" type="text"/>
                    </td>
                </tr>
				<tr>
					<td class="megnevezes right form">Nyereség</td>
					<td class="adat left"><input name="nyereseg" id="nyereseg" class="text small" type="text"/>%</td>
				</tr>
                <!--<tr>
                    <td><input type="hidden" name="baseUrl" value="<?php //echo base_url();?>" /></td>
                </tr>-->
                <tr>
                <td class="megnevezes right form"></td>
                <td class="adat left"><input type="submit" id="addArajanlatBtn" value="Létrehoz"/></td>
                </tr>
                	</tbody></table>
                    
		</form>
        
         

</div><!--contentRight-->
		
	
    