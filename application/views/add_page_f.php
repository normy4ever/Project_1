<div id="file_upload">
    <div> 
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
        <div id="thinking"><? echo img('img/thinking.gif'); ?></div>
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