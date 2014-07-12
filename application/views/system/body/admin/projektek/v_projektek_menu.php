<div id="contentFrame">
		<div id="content" class="brr">
            <div id="contentLeft">
                    <div id="menuLeft">
                    <ul>
	                   <li <?php  if($this->uri->segment(2)==="index") echo ' class="active"' ?>><?php echo anchor('projektek/index','Árajánlatok<span>Itt lehet az árajánlatokat felvenni.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="futoProjektek") echo ' class="active"' ?>><?php echo anchor('projektek/futoProjektek','Projektek<span>Itt vannak a futó projektek</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="ellenorzes") echo ' class="active"' ?>><?php echo anchor('projektek/ellenorzes','Ellenőrzes<span>Itt vannak azok a projektek amik már legyártásra kerültek, de még ellenőrzés alatt vannak.</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="kiszallitas") echo ' class="active"' ?>><?php echo anchor('projektek/kiszallitas','Kiszállitas<span>Itt vannak a kiszállított és kiszállítás alatt lévő projektek</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="kiszallitva") echo ' class="active"' ?>><?php echo anchor('projektek/kiszallitva','Kiszállítva / Archiv<span>Itt vannak kiszállított, azaz végetért projektek</span>');?></li>
                       <li <?php  if($this->uri->segment(2)==="elutasitva") echo ' class="active"' ?>><?php echo anchor('projektek/elutasitva','Elutasítva<span>Itt vannak az elutasított árajánlatok</span>');?></li>
                       
					</ul>
                    </div>
            </div>