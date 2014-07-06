<div id="contentRight">
                <div id="ajaxReply" class="sMessage bra margin hidden">
                    <div class="controls">
                        <a href="#" class="aRblock ui-icon ui-icon-close"></a>
    		        </div>
    		        <div class="message"></div>
    		        <div class="clear"></div>
                </div>
		
<div id="dialog" title="Új hozzáférés">
<div id="tabs">
                    <ul>
                    <li><a href="#tabs-1">Adatok</a></li>
                    
                    </ul>
<div id="tabs-1">
		<form method="post" action="../auth/addDolgozo" id="userAddForm">
			<table class="adatbekero" align="center">
				<tbody><tr>
					<td class="megnevezes right form">Felhasználónév<em class="red">*</em></td>
					<td class="adat left"><input name="username" class="text" type="text"></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Teljes név<em class="red">*</em></td>
					<td class="adat left"><input name="fullname" class="text" type="text"></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Jelszó<em class="red">*</em></td>
					<td class="adat left"><input name="password" id="password" class="text" type="password"></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Jelszó megerősítése<em class="red">*</em></td>
					<td class="adat left"><input name="password2" class="text" type="password"></td>
				</tr>
				<tr>
					<td class="megnevezes right form">Engedélyezve</td>
					<td class="adat left"><input name="enabled" class="checkbox" type="checkbox"></td>
				</tr>
                
                <tr>
					<td class="megnevezes right form">Jogosultságok</td>
					<td class="adat left">
						<input name="menu_vezerlopult" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer"><b>Vezérlőpult menü megjelenítése</b></span><br/>
                        <input name="hozzaferesek_megtekintese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Hozzáférések megtekintése</span><br/>
                        <input name="hozzaferesek_szerkesztese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Hozzáférések szerkesztése</span><br/>
                        <input name="megrendelok_megtekintese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Megrendelők megtekintése</span><br/>
                        <input name="megrendelok_szerkesztese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Megrendelők szerkesztése</span><br/>
                        <input name="muvtartktg_megtekintese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Művelethez tartózó ktg. megtekintése</span><br/>
                        <input name="muvtartktg_szerkesztese" value="1" type="checkbox"/> <span class="checkbox_szoveg pointer">Művelethez tartózó ktg. szerkesztése</span><br/>
                        <input name="gepi_erof_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Gépi erőf. ktg-i és elők. ktg. megtekintése</span><br>
                        <input name="gepi_erof_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Gépi erőf. ktg-i és elők. ktg. szerkesztése</span><br>
                        <input name="anyagok_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Anyagok megtekintése</span><br>
                        <input name="anyagok_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Anyagok szerkesztése</span><br>
                        <input name="valtozo_ktg_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Változó költségek megtekintése</span><br>
                        <input name="valtozo_ktg_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Változó költségek szerkesztése</span><br>
                        <input name="egyeb_beallitasok_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Egyéb beállítások megtekintése</span><br>
                        <input name="egyeb_beallitasok_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Egyéb beállítások szerkesztése</span><br>
                        <input name="menu_beszerzes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Beszerzés menü megjelenítése</b></span><br>
                        <input name="menu_termeles_gazdalkodas" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Termelés/Gazdálkodás menü megjelenítése</b></span><br>
                        <input name="arajanlatok_megtekintes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Árajánlatok megtekintése</b></span><br>
                        <input name="arajanlatok_szerkesztes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Árajánlatok szerkesztése</b></span><br>
                        <input name="futoprojektek_megtekintes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Futó projektek mentekintése</span><br>
                        <input name="futoprojektek_szerkesztes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Futó projektek szerkesztése</span><br>
                        <input name="ellenorzes_megtekintes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Ellenőrzés megtekintése</span><br>
                        <input name="ellenorzes_szerkesztes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Ellenőrzés szerkesztése</span><br>
                        <input name="kiszallitas_megtekintes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Kiszállítás megtekintése</span><br>
                        <input name="kiszallitas_szerkesztes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Kiszállítás szerkesztése</span><br>
					</td>
				</tr>
                
                <tr>
                <td class="megnevezes right form"></td>
                <td class="adat left"><input type="submit" value="Létrehoz"/></td>
                </tr>
                	</tbody></table>
                    
		</form>
         </div>
			
                
                    
                    
                   
                    
                
                
                
				
		
        </div><!--tabs-->
</div><!--dilaog-->
</div><!--contentRight-->
		
	
    