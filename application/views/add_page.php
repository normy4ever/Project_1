<div>   
    
    <div id="wizard">

        <!-- tabs -->
        <ul class="tabs">
            <li><a href="#" class="w2">Pasul 1</a></li>
            <li><a href="#" class="w2">Pasul 2</a></li>
            <li><a href="#" class="w2">Pasul 3</a></li>
            <li><a href="#" class="w2">Pasul 4</a></li>
        </ul>
    
        <!-- panes -->
        <div class="panes">
        	
            <div id="cazare_upload">
            	<p class="steptitle">PASUL 1 - Completeaza formularul</p>
				<?php
				$attributes = array('id' => 'save_cazare');
                echo form_open('add',$attributes);
				
				echo '<p> Numele cazarii: ';
				
				$data = array(
				  'name'        => 'name',
				  'id'          => 'cazare_name',
				  'value'       => '',
				  'maxlength'   => '200',
				  'style'   	=> 'width:200px;',
            	);
				echo form_input($data);
				echo '</p><p>Descriea cazarii: ';
				
				$data = array(
				  'name'        => 'description',
				  'id'          => 'cazare_desc',
				  'value'       => '',
				  'rows'   		=> '12',
				  'cols' 		=> '72',
            	);
				echo form_textarea($data);
				echo '</p><p>Nr. camere: ';
				
				$data = array(
				  'name'        => 'room',
				  'id'          => 'cazare_camere',
				  'value'       => '',
				  'maxlength'   => '5',
				  'style'   	=> 'width:50px;',
            	);
				echo form_input($data);
				echo '</p><p>Max. pers: ';
				
				$data = array(
				  'name'        => 'pers',
				  'id'          => 'cazare_pers',
				  'value'       => '',
				  'maxlength'   => '5',
				  'style'  	 	=> 'width:50px;',
            	);
				echo form_input($data);
				echo '</p><p>Distanta de strand: ';
				
				$data = array(
				  'name'        => 'dists',
				  'id'          => 'cazare_dists',
				  'value'       => '',
				  'maxlength'   => '8',
				  'style'  		=> 'width:80px;',
            	);
				echo form_input($data);
				echo '</p><p>Distanta de centru: ';
				
				$data = array(
				  'name'        => 'distc',
				  'id'          => 'cazare_distc',
				  'value'       => '',
				  'maxlength'   => '8',
				  'style'   	=> 'width:80px;',
            	);
				echo form_input($data);
				echo '</p><p>Parcare in curte: ';
				
				$options = array(
                  'true'  	 => 'Da',
                  'false'    => 'Nu',
                );

				echo form_dropdown('parcare', $options, 'false');
				echo '</p>';
				?>	
				<p class="form_buttons">
					<a class="stepforw" >Pasul urmator</a>	
                </p>	
            </div> <!-- cazare upload -->
                       
            <div id="extras_upload">
           	 <p class="steptitle">PASUL 2 - Selecteaza dotariile</p>
            
				<?php
                $data = array(
					'name'        => 'tv',
					'class'          => 'chbox',
					'value'       => 'accept',
					'checked'     => False,
					);
				
				echo '<p class="checkbox">';
				echo form_checkbox($data);
				echo 'TV</p>';
				$data = array(
					'name'        => 'frigider',
					'class'          => 'chbox',
					'value'       => 'accept',
					'checked'     => False,
					);
				
				echo '<p class="checkbox">';
				echo form_checkbox($data);
				echo 'frigider</p>';
				$data = array(
					'name'        => 'grill',
					'class'          => 'chbox',
					'value'       => 'accept',
					'checked'     => False,
					);
				
				echo '<p class="checkbox">';
				echo form_checkbox($data);
				echo 'grill</p>';
				$data = array(
					'name'        => 'apac',
					'class'          => 'chbox',
					'value'       => 'accept',
					'checked'     => False,
					);
				
				echo '<p class="checkbox">';
				echo form_checkbox($data);
				echo 'apa calda</p>';
				$data = array(
					'name'        => 'internet',
					'class'          => 'chbox',
					'value'       => 'accept',
					'checked'     => False,
					);
				
				echo '<p class="checkbox">';
				echo form_checkbox($data);
				echo 'Intenet</p>';
				?>
                		
                <p class="form_buttons">
                <a class="stepforw">Pasul urmator</a>
				<a class="stepback">Pasul precedent</a>
				</p>
            </div> <!-- extras upload -->
            
            <div id="contact_upload">
           	 <p class="steptitle">PASUL 3 - Adauga datele de contact si adressa cazarii</p>
				<?php
               
                echo '<p>Numele: ';
				
				$data = array(
				  'name'        => 'cname',
				  'id'          => 'contact_name',
				  'value'       => '',
				  'maxlength'   => '80',
				  'style'   	=> 'width:200px;',
            	);
				echo form_input($data);
				echo '</p><p>Adressa cazarii: ';
				
				$data = array(
				  'name'        => 'caddress',
				  'id'          => 'cazare_address',
				  'value'       => '',
				  'maxlength'   => '80',
				  'style'   	=> 'width:300px;',
            	);
				echo form_input($data);
				echo '</p><p>Tel: ';
				
				$data = array(
				  'name'        => 'ctel',
				  'id'          => 'contact_tel',
				  'value'       => '',
				  'maxlength'   => '30',
				  'style'   	=> 'width:100px;',
            	);
				echo form_input($data);
				echo '</p><p>Email: ';
				
				$data = array(
				  'name'        => 'cemail',
				  'id'          => 'contact_email',
				  'value'       => '',
				  'maxlength'   => '30',
				  'style'   	=> 'width:100px;',
            	);
				echo form_input($data);
				echo '</p>';
                ?>		
                
                <p class="form_buttons" style="margin-top:40px;">     
					<a class="stepforw"><? echo form_submit('save', 'Salveaza si incarca pozele'); ?></a>
                    <? echo form_close(); ?> 
                    <a class="stepback">Pasul precedent</a>
				</p>
                
            </div> <!-- contact upload -->
               
            
            <div id="file_upload">
           	 <p class="steptitle">PASUL 4 - Incarca pozele</p>
				<?php
				if($this->session->userdata('CID'))
				{
					echo form_open_multipart('add/photo_up');
					echo '<p>Alege imaginile: ';
					echo form_upload('userfile');
					echo '</p><p>';
					echo form_submit('upload', 'Upload');
					echo '</p>';
					echo form_close();
				}
				?>		
                <div id="temp_gallery">
                </div>
                <p class="form_buttons">
					<a href="">Finalizeaza</a>
				</p>
            </div> <!-- file upload -->                
                
            
        </div>
        
	</div>
    
</div>