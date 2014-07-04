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
                    <li><a href="#tabs-2">Jogosultságok</a></li>
                    </ul>
<div id="tabs-1">
		<form method="post" action="login.php" id="userAddForm">
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
                <td class="megnevezes right form"></td>
                <td class="adat left"><?php echo anchor('vezerloPult/addDolgozo','<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="opener"><span class="ui-button-text">Létrehoz</span></button>');?></td>
                </tr>
                	</tbody></table>
                    
		</form>
         </div>
				<!--<tr>
					<td class="megnevezes right form">Osztály</td>
					<td class="adat left">
						<select name="class" class="select">
							<option value="0">Normál felhasználó</option>
							<option value="10">Adminisztrátor</option>
						</option>
					</td>
				</tr>
				-->
                
                    
                    
                   
                    <div id="tabs-2">
                    <form method="post" action="login.php" id="userAddForm">
			<table class="adatbekero" align="center">
				<tbody>
                <tr>
					<td class="megnevezes right form">Jogosultságok</td>
					<td class="adat left">
						<input name="menu_vezerlopult" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Vezérlőpult menü megjelenítése</b></span><br><input name="hozzaferesek_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Hozzáférések megtekintése</span><br><input name="hozzaferesek_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Hozzáférések szerkesztése</span><br><input name="megrendelok_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Megrendelők megtekintése</span><br><input name="megrendelok_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Megrendelők szerkesztése</span><br><input name="muvtartktg_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Művelethez tartózó ktg. megtekintése</span><br><input name="muvtartktg_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Művelethez tartózó ktg. szerkesztése</span><br><input name="gepi_erof_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Gépi erőf. ktg-i és elők. ktg. megtekintése</span><br><input name="gepi_erof_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Gépi erőf. ktg-i és elők. ktg. szerkesztése</span><br><input name="anyagok_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Anyagok megtekintése</span><br><input name="anyagok_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Anyagok szerkesztése</span><br><input name="valtozo_ktg_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Változó költségek megtekintése</span><br><input name="valtozo_ktg_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Változó költségek szerkesztése</span><br><input name="egyeb_beallitasok_megtekintese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Egyéb beállítások megtekintése</span><br><input name="egyeb_beallitasok_szerkesztese" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Egyéb beállítások szerkesztése</span><br><input name="menu_beszerzes" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Beszerzés menü megjelenítése</b></span><br><input name="menu_termeles_gazdalkodas" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Termelés/Gazdálkodás menü megjelenítése</b></span><br><input name="menu_penzugy" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Pénzügy menü megjelenítése</b></span><br><input name="menu_nyilvantartasok" value="1" type="checkbox"> <span class="checkbox_szoveg pointer"><b>Nyivántartások menü megjelenítése</b></span><br><input name="munkaido_lista" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Ledolgozott munkaidők megtekintése - lista</span><br><input name="munkaido_lista_all" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Ledolgozott munkaidők megtekintése - összes dolgozó megtekintése</span><br><input name="munkaido_statisztika" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Ledolgozott munkaidők megtekintése - grafikonok</span><br><input name="munkaido_beallitas" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Előre megadott munkaidők szerkesztése</span><br><input name="munkaido_checkin" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Munkaidő becsekkolás menü használata</span><br><input name="munkaido_feladatok" value="1" type="checkbox"> <span class="checkbox_szoveg pointer">Feladatok létrehozása, listázása, törlése</span><br>
					</td>
				</tr>
			</tbody></table>
                    </div>

                
                
                
				
		</form>
        </div><!--tabs-->
</div><!--dilaog-->
</div><!--contentRight-->
		
	
    