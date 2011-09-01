<div>

<?
	if($this->session->flashdata('saved'))
	{
		echo '<p class="message"> Salvat <p>';	
	}
	
	if($this->session->flashdata('deleted'))
	{
		echo '<p class="message"> Cazare ștersă <p>';	
	}

	if($item!='N/A')
	{
	foreach ($item as $key => $value)
			{
				
?>
			<!--<div id="wizard">

                
                <ul class="tabs">
                    <li><a href="#" class="w2">Pasul 1</a></li>
                    <li><a href="#" class="w2">Pasul 2</a></li>
                    <li><a href="#" class="w2">Pasul 3</a></li>
        
                </ul>
            
              
                <div class="panes">-->
			
                <div class="item_for_edit">
                  <?  
				  		echo '<p style="float:left;margin-left:15px; overflow:hidden;">'.$value['cazare_id'].'</p>';
									  		
						echo form_open('edit/update/'.$value['cazare_id']);
				  		
						echo '<div style="width:60%;float:left;">';
						echo '<p>Numele cazării:';
						echo form_input('name', $value['name']);
                   		echo '</p>';	
						echo '<p>Nr. camere:';
						echo form_input('nr_room', $value['nr_room']);
						echo '</p>';	
						echo '<p>Persoane(max):';
						echo form_input('max_pers', $value['max_pers']);
						echo '</p>';	
						echo '<p>Preț:';
						echo form_input('pret', $value['pret']);
						echo '</p>';
						echo '<p>Distanța de ștrand:';
						echo form_input('dist_strand', $value['dist_strand']);
						echo '</p>';	
						echo '<p>Distanța de centru:';
						echo form_input('dist_centru', $value['dist_centru']);
						echo '</p>';
						echo '<p>Adressa cazării:';
						echo form_input('cazare_address', $value['cazare_address']);
						echo '</p>';	
						echo '<p>Nume persoanei de contact:';
						echo form_input('contact_name', $value['contact_name']);	
						echo '</p>';	
						echo '<p>Telefon:';
						echo form_input('contact_tel', $value['contact_tel']);	
						echo '</p>';
						echo '<p>Email:';
						echo form_input('contact_email', $value['contact_email']);	
						echo '</p>';	
						echo '</div>';
						
						echo '<div style="width:40%;float:left; text-align:right;">';
						echo '<p>TV:';
						if($value['tv'])
						{
							echo form_checkbox('tv', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('tv', 'accept', FALSE);
						}
						echo '</p>';	
						echo '<p>Internet: ';
						if($value['internet'])
						{
							echo form_checkbox('internet', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('internet', 'accept', FALSE);
						}
						echo '</p>';	
						echo '<p>Frigider: ';
						if($value['frigider'])
						{
							echo form_checkbox('frigider', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('frigider', 'accept', FALSE);
						}
						echo '</p>';	
						echo '<p>Grill: ';	
						if($value['grill'])
						{
							echo form_checkbox('grill', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('grill', 'accept', FALSE);
						}
						echo '</p>';	
						echo '<p>Apă caldă: ';
						if($value['apacalda'])
						{
							echo form_checkbox('apacalda', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('apacalda', 'accept', FALSE);
						}	
						echo '</p>';	
						echo '<p>Parcare în curte: ';	
						if($value['parcare_in'])
						{
							echo form_checkbox('parcare_in', 'accept', TRUE);
						}
						else
						{
							echo form_checkbox('parcare_in', 'accept', FALSE);
						}
						echo '</p>';
						
						echo '<br/><br/><br/><br/><br/><br/>';
						echo anchor('edit/images/'.$value['cazare_id'], 'ACTUALIZEAZĂ IMAGINILE', array('float' => 'right'));
						
						echo '</div>';
						
						
						echo '<div style="width:80%;float:left; height:auto; display:block;">';
						echo '<p style="width:200px;">Detalii:</p>';
						
						echo form_textarea('description', $value['description']);
						echo '</div>';
						
						echo '<br />';
						echo '<br />';					
						echo '<p style="width:50%;float:left; height:auto; display:block;padding-left:20px;">'.form_submit('update', 'Actualizare date').'</p>';
						echo form_close();				
						
						echo '<p id="del_caz">';
						
						$atr=array(
							'id' => 'delme',
							'class' => 'modalInput',
							'rel' => '#yesno',
							'onclick' => 'Application.Del_answer('.$value['cazare_id'].')'						
						);
						echo anchor('edit/deleteall/'.$value['cazare_id'],'Sterge cazarea',$atr);
						echo '</p>';	
					?>
                </div>
    			
    <div class="modal" id="yesno">
	<h2> Vrei să ștergi cazarea? </h2>

	<p>
    <?
		
		/*echo form_open('edit/deleteall/'.$value['cazare_id']);
		echo form_submit('delete', 'Da');
		echo form_close();*/	
		echo '<button class="question_b"> Da </button>';
    	echo '<button class="close"> Nu </button>';
	?>	
		
	</p>
</div>
<? 			
			}
		} 
		else
		{
			echo '<p> Nu ai inca cazari in baza de date! </p>';	
		}
?>

</div>

