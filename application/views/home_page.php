     
    	<div id="filter">
    
			<div id="menu">
           		<?
					echo $this->table->generate(); 
					$this->table->clear();
				?>
            </div>    
            
    
       <?php if(!isset($despre)) 
	   		{  
       		echo form_open('listall');
			?>
        	<div id="select">
            
            	<div  class="filter_label">
                    <p> Camere disponibile (nr. Camere)</p>
                        <input type="range" name="test" min="0" max="10" value="1" />
                </div>
                <div  class="filter_label">
                    <p> Distanta de strand (m)</p> 
                        <input type="range" name="test" min="0" max="4000" value="1" />
                </div>
                
        	</div>
        	<div id="select_button"><input type="submit" name="asd" value="Cauta"></div>
      		
        <?php 
			echo form_close();
		}
		 else {
			echo '<div id="menu_change">';
            $list = array(
					anchor('http://www.strandcarei.eu', '>> Strandul din Carei', 'title="Strandul din Carei"'),
					anchor('http://ro.wikipedia.org/wiki/Carei', '>> Pagina wiki al orasului Carei', 'title="Pagina wiki al orasului Carei"'),
					anchor('http://www.informatia-zilei.ro/sm/eveniment/castelul-karolyi-din-carei-este-un-adevarat-peles-al-ardealului/', '>> Articol despre Castelul Careian', 'title="Articol despre Castelul Careian"'),
					anchor('http://www.turismland.ro/castelul-karolyi-din-carei-maramures/', '>> Castelul din Carei', 'title="Articol despre Castelul Careian"')
					);

			$attributes = array(
								'class' => 'boldlist',
								'id'    => 'link_list'
								);
			
			echo ul($list, $attributes);
           echo '</div>';	 
        } ?>
         
        </div> <!-- filter -->
        
        <p id="contact_p"> Pentru informatii,intrebari,sugestii contactati-ne pe <b>hello@cazareincarei.eu</b> </p>
        
        <div class="scrollable" id="emphasised">
            	<div class="items"> 
   
                      <!-- 1-5 --> 
                      <div class="sitem"> 
                         <? echo img('img/bigpic/stonehouse.jpg'); ?>                  
                            
                          <div class="bigpic_info"></div>
                          <div class="bigpic_info_text">
                         	<p class="advert_title"> Casa de piatra </p>
                                    <ul>
                                        <li>pana la 10 persoane</li>
                                        <li>full confort</li>
                                        <li>grill + TV</li>
                                    </ul>
                            <br /><br /><br /><br /><br />
                            <p class="highlight">Pret: 50 RON/pers </p>
                            <br />
                            <p style="color:#BBBBBB;margin-left:48px;"> Click pt. Detalii </p>
                         </div>
                      </div> 
                      
                      <!-- 5-10 --> 
                      <div class="sitem"> 
                        <? echo img('img/bigpic/beach.jpg'); ?> 
                       	<div class="bigpic_info">
                         	<p> Informatii</p>
                         </div>
                      </div> 
                      
                      <!-- 10-15 --> 
                      <div class="sitem"> 
                         <? echo img('img/bigpic/almak.jpg'); ?> 
                      	 <div class="bigpic_info">
                         	<p> Informatii</p>
                         </div>
                  </div> 
            	</div>
         </div> <!-- scrollable --><!-- emphasised -->
        <div class="navi"></div>
        