<div id="contentRight">
    <div id="tabs">
        <ul>
        <li><a href="#tabs-1">Információ</a></li>
        <li><a href="#tabs-2">Szerkesztés</a></li>
        <li><a href="#tabs-3">Termékek</a></li>
        <li><a href="#tabs-4">Kalkuláció</a></li>
        <li><a href="#tabs-5">Napló</a></li>
        
        </ul>
        <div id="tabs-1">
            <table class="adatbekero">
                <tbody>
                    <tr>
                        <td><b>Projekt név: </b></td><td><?php echo $arajanlat_adatai['projekt_nev'];?></td>
                    </tr>
                    <tr>
                        <td><b>Kérés dátuma: </b></td><td><?php echo $arajanlat_adatai['ajanlatkeres_datuma'];?></td>
                    </tr>
                    <tr>
                        <td><b>Határidő: </b></td><td><?php echo $arajanlat_adatai['hatarido'];?></td>
                    </tr>
                    <tr>
                        <td><b>Nyereség: </b></td><td><?php echo $arajanlat_adatai['nyereseg'];?>%</td>
                    </tr>
                    <tr>
                        <td><b>Státusz: </b></td><td><?php echo $arajanlat_adatai['statusz'];?></td>
                    </tr>
                    <tr>
                        <td><b>Megrendelő azonosítója: </b></td><td><?php echo $arajanlat_adatai['megrendelo_megrendelo_id'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="tabs-2">
            <form method="post" action="<?php echo base_url('index.php/projektek/editArajanlat/'.$arajanlat_adatai['ajanlat_id']);?>" id="arajanlatForm">
                <table class="adatbekero" align="center">
    				<tbody>
                        <tr>
        					<td class="megnevezes right form">Projekt név<em class="red">*</em></td>
        					<td class="adat left"><input id="projekt_nev" name="projekt_nev" class="text" type="text" value="<?php echo $arajanlat_adatai['projekt_nev'];?>"/></td>
        				</tr>
        				
        				<tr>
        					<td class="megnevezes right form">Megrendelő<em class="red">*</em></td>
        					<td class="adat left"><input type="text" name="megrendelo_megrendelo_id" class="text" id="megrendelo_megrendelo_id" value="<?php echo $arajanlat_adatai['megrendelo_megrendelo_id'];?>" />
                                            
        				</tr>
        				<tr>
        					<td class="megnevezes right form">Árajánlat kérés dátuma<em class="red">*</em></td>
        					<td class="adat left"><input id="ajanlatkeres_datuma" name="ajanlatkeres_datuma" class="text" type="text" value="<?php echo $arajanlat_adatai['ajanlatkeres_datuma'];?>"/></td>
        				</tr>
                        <tr>
                            <td class="megnevezes right form">Elkészítés határideje<em class="red">*</em></td>
                            <td class="adat left">
                                <input id="hatarido" name="hatarido" class="text" type="text" value="<?php echo $arajanlat_adatai['hatarido'];?>"/>
                            </td>
                        </tr>
        				<tr>
        					<td class="megnevezes right form">Nyereség<em class="red">*</em></td>
        					<td class="adat left"><input name="nyereseg" id="nyereseg" class="text small" type="text" value="<?php echo $arajanlat_adatai['nyereseg'];?>"/>%</td>
        				</tr>
                        <tr>
                            <td class="megnevezes right form">Státusz<em class="red">*</em></td>
                            <td>
                                <select name="statusz" id="statusz">
                                    <option value="készítés_alatt">Árajánlat adás alatt</option>
                                    <option value="elkészítve">Árajánlat elkészítve</option>
                                    <option value="elfogadva">Elfogadva</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="megnevezes right form"></td>
                            <td class="adat left"><input type="submit" id="editArajanlatBtn" value="Módosít"/></td>
                        </tr>
               	    </tbody>
                </table>                   
    		</form>
            
             <script type="text/javascript">
                        $('#ajanlatkeres_datuma').datepicker();
                        $('#hatarido').datepicker();
             </script>

        </div>
        
        <?php
            /**
             * TODO:
             * Ide jstree modul betöltése!
             */
        ?>
        <div id="tabs-3">
            <?php echo anchor('projektek/termekHozzaadasa','<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="newProductButton"><span class="ui-button-text">Új termék</span></button>');?>
           
  			<div class="title">
				<?php echo $arajanlat_adatai['projekt_nev'];?>				
			</div>		
    		<div class="margin-left margin-right project_name"></div>
            
            <script type="text/javascript">
            $(function(){
                jQuery("#demo1").jstree();
            });
            </script>
            
            <div id="demo1" class="demo">
                <ul>
                    <li>
                        <a>u16 lemez (1 m)</a>
                        <!--<ul>
                            <li><a>csavar(4 db)</a></li>
                            <li><a>izzó (1db)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Sayur-sayuran</a>
                        <ul>
                            <li><a>Kangkung</a></li>
                            <li><a>Bayam</a></li>
                        </ul>-->
                    </li>
                </ul>
            </div>
           
		</div><!--tab3-->
		
        
        <div id="tabs-4">
        
        </div>
        
        <div id="tabs-5">
        
        </div>
        
        
    </div>
</div>