

  <div id="contentRight">
   <div class="rightBlock">
                    
		<div id="tabs">
<ul>
<li><a href="#tabs-1">Információk</a></li>
<li><a href="#tabs-2">Jogosultságok</a></li>
<li><a href="#tabs-3">Alapadatok szerkesztése</a></li>
<li><a href="#tabs-4">Szerkesztés</a></li>
</ul>
<div id="tabs-1">
<table class="adatbekero">
					<tbody><tr>
						<td class="megnevezes right">Felhasználónév:</td>
						<td class="adat left"><?php echo $jogok['username'] ?></td>
					</tr>
					<tr>
						<td class="megnevezes right">Teljes név:</td>
						<td class="adat left">
                            <?php
                             if(isset($dolgozo_info['teljes_nev'])){
                                echo $dolgozo_info['teljes_nev'];
                             }
                             else{
                                echo "";
                             }
                             ?>
                        </td>
					</tr>
					<tr>
						<td class="megnevezes right">Engedélyezve:</td>
						<td class="adat left"></td>
					</tr>
					<tr>
						<td class="megnevezes right">Osztály:</td>
						<td class="adat left"><b><?php echo $jogok['priv']?></b></td>
					</tr>
					<tr>
						<td class="megnevezes right">Hozzáadva:</td>
						<td class="adat left"></td>
					</tr>
					<tr>
						<td class="megnevezes right">Utolsó bejelentkezés:</td>
						<td class="adat left"></td>
					</tr>
					
				</tbody></table>
</div>
<div id="tabs-2">
<table>
<tr>
<td class="adat left">
                        <form method="post" action="#">
						<input name="menu_vezerlopult" <?php if($jogok['vezerlopult_megtekintes']) echo 'checked="checked"' ?> type="checkbox"/> <span class="checkbox_szoveg pointer"><b>Vezérlőpult menü megjelenítése</b></span><br/>
                        <input name="hozzaferesek_megtekintese" <?php if($jogok['hozzaferesek_megtekintes']) echo 'checked="checked"' ?> type="checkbox" /> <span class="checkbox_szoveg pointer">Hozzáférések megtekintése</span><br/>
                        <input name="hozzaferesek_szerkesztese" <?php if($jogok['hozzaferesek_szerkesztes']) echo 'checked="checked"' ?>  type="checkbox"/> <span class="checkbox_szoveg pointer">Hozzáférések szerkesztése</span><br/>
                        <input name="megrendelok_megtekintese" <?php if($jogok['megrendelok_megtekintes']) echo 'checked="checked"' ?>  type="checkbox"/> <span class="checkbox_szoveg pointer">Megrendelők megtekintése</span><br/>
                        <input name="megrendelok_szerkesztese" <?php if($jogok['megrendelok_szerkesztes']) echo 'checked="checked"' ?>  type="checkbox"/> <span class="checkbox_szoveg pointer">Megrendelők szerkesztése</span><br/>
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
					    </form>
                    </td>
</tr>
</table>
</div>
<div id="tabs-3">
<form>
<table>
    <tr>
        <td>Email</td><td><input type="text"/></td>
    </tr>
    <tr>
        <td>Jelszó:</td><td><input type="password"/></td>
    </tr>
    <tr>
        <td>Jelszó újra:</td><td><input type="password"/></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Szerkeszt" /></td>
    </tr>
</table>
</form>
</div>

<div id="tabs-4">
<form>
<table>
    <tr>
        <td>Email</td><td><input type="text"/></td>
    </tr>
    <tr>
        <td>Jelszó:</td><td><input type="password"/></td>
    </tr>
    <tr>
        <td>Jelszó újra:</td><td><input type="password"/></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Szerkeszt" /></td>
    </tr>
</table>
</form>
</div>					
				
</div>	
</div>
</div>
