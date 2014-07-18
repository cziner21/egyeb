<div id="contentRight">
<div id="ajaxReply" class="sMessage bra margin hidden">
                    <div class="controls">
                        <a href="#" class="aRblock ui-icon ui-icon-close"></a>
    		        </div>
    		        <div class="message"></div>
    		        <div class="clear"></div>
                </div>               
		
        
        

		<form method="post" action="../projektek/addTermek" id="arajanlatForm">
			<table class="adatbekero" align="center">
				<tbody>
                <tr>
					<td class="megnevezes right form">Termék név<em class="red">*</em></td>
					<td class="adat left"><input id="termek_nev" name="termek_nev" class="text" type="text"/></td>
				</tr>
				
				<tr>
					<td class="megnevezes right form">Mennyiség<em class="red">*</em></td>
					<td class="adat left"><input type="text" name="mennyiseg" class="text" id="mennyiseg" />db
                                    
				</tr>
                <tr>
                <td class="megnevezes right form"></td>
                <td class="adat left"><input type="submit" id="addTermekBtn" value="Létrehoz"/></td>
                </tr>
                	</tbody></table>
                    
		</form>
        
        <script>
        $(document).ready(function() {
            $('addTermekBtn').click(function(){
                alert("megnyomta");
            });    
        }); 
        </script>

</div><!--contentRight-->