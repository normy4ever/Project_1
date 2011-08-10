<div id="file_upload">
    <div> 
    <div id="upload_form">
     <p class="steptitle">PASUL 4 - Incarca pozele</p>
        <?php
		$atr = array('id' => 'up_it');
        if($this->session->userdata('CID'))
        {
            echo form_open_multipart('add/photo_up',$atr);
            echo '<p>Alege imaginile: ';
            echo form_upload('userfile');
            echo '</p><p>';
            echo form_submit('upload', 'Incarca');
            echo '</p>';
            echo form_close();
        }
        ?>		
        <p>Incarca maxim 6 poze!</p>
  		
            <div id="thinking">
                <? echo img('img/thinking.gif');  ?><p  style="float:left;">Incarcarea are loc! </p>
            </div>
        </div>
      </div>  
      <div id="temp_gallery">
       <?php
          if($img_exists == 'true')
		  {              
        	echo $this->table->generate();
		  }
       ?>
      </div>
        
    <p class="form_buttons">
        <a href="add/finalize">Finalizeaza</a>
    </p>
</div> <!-- file upload -->  