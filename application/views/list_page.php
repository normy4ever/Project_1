
    <div id="listing">
       <a class="prev"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>       
       	<p class="title"> Ofertele disponibile </p>       
       <a class="next"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
    </div>
    
    <div class="vertical">
    
       <div class="instances">    
          <!-- first element. contains three rows -->
          <?
			foreach ($item as $key => $value)
			{
				$cid=$item[$key]['cazare_id'];
				$cname=$item[$key]['name'];
			
			
			
			//var_dump($item);
		  ?>
          
          <div>
             <!-- first row -->
             <div class="inst_nr"><?= $cid; ?>.</div>
             
             
             <div class="instance">  
                <!-- image -->
                <? 
					$dir = get_filenames('pictures/'.$cid);
					
					//var_dump($dir);
					$image_properties = array(
							  'src' => 'pictures/'.$cid.'/'.$dir[0],
							  'alt' => $cname,
							  'width' => '220',
							  'height' => '165',
							  'title' => $cname,
					);
				
					echo img($image_properties);
								
				?>    
                <!-- title -->
                <div class="instance_sample">
                	<div class="a">
                        <h3><?= $cname; ?></h3>    
                        <!-- content -->
                        <p>
                            <?= character_limiter($item[$key]['description'],300); ?>                            
                        </p>
                    </div>
                    <div class="b"> 
                    	<a href="#" rel="#dt" title="Toate informatiile despre aceasta cazare"> Detalii </a>  <a href="" title="localizeaza"> Harta</a>
                    </div> <!-- b -->
                </div>   
             </div>
    		<div class="separate"></div>
          </div>
          <? } ?>
       </div> <!-- instances end -->
    </div>   <!-- vertical end -->
    
 
 <div class="detail" id="dt">
       <div class="cazare_nr"><?= $cid; ?>.</div> 	
       <div class="image-title"> <?= $cname; ?> </div>
    <!-- "previous page" action -->
    <a class="prev browse left"></a>
    
    <!-- root element for scrollable -->
    <div class="mini_pics">   
       
       <!-- root element for the items -->
       <div class="smalls">
       <?
       		$dir = get_dir_file_info('pictures/'.$cid,$top_level_only=FALSE);
	   		//var_dump($dir);
	   ?>
          <!-- 1-5 -->
          <div>
          <?
          		foreach($dir as $elem)
				{
					echo img('pictures/'.$cid.'/thumbs/'.$elem['name']);
				}
		  ?>

          </div>
            
          
       </div>
       
    </div>
    
    <!-- "next page" action -->
    <a class="next browse right"></a>        
    
        <!-- wrapper element for the large image -->
    <div id="image_wrap">
    
    	<!-- Initially the image is a simple 1x1 pixel transparent GIF -->
    	<img src="http://static.flowplayer.org/tools/img/blank.gif" width="500" height="375" />
    
    </div>
    
    <div id="detail_text">
        <h2> Detalii</h2>
        
        <p> <?= $item[$key]['description']; ?> </p>
        
        <p>&nbsp;&nbsp;<h3>Camere disponibile: <?= $item[$key]['nr_room']; ?>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<b>Pret/camera: <?= $item[$key]['pret']; ?>/Ron</b></h3></p>        
        
        <div class="inf">
            <p class="small">Nr. maxim de persoane: <?= $item[$key]['max_pers']; ?> </p>
            <p class="small">Distanta de strand: <?= $item[$key]['dist_strand']; ?> </p>
            <p class="small">Distanta de centru: <?= $item[$key]['dist_centru']; ?> </p>
            <p class="small">Parcare in curte: <? if($item[$key]['parcare_in']==1){ echo 'Da';} else { echo 'Nu'; }; ?> </p>
        </div>
        <ul class="detail_comfort">
        <?
			if($item[$key]['tv']==1)
			{
            	echo '<li>TV</li>';
            }
            if($item[$key]['frigider']==1)
			{
            	echo '<li>Frigider</li>';
            }
            if($item[$key]['internet']==1)
			{
            	echo '<li>Internet</li>';
            }
		?>
        <!--</ul>
        
        <ul class="detail_comfort" style="margin-left:100px;">-->
         <?
		    if($item[$key]['grill']==1)
			{
            	echo '<li>Grill</li>';
            }
            if($item[$key]['apacalda']==1)
			{
            	echo '<li>Apa calda</li>';
            }
		?>
        </ul>
    
    </div>
    
    <div id="contact">
    	<ul> 
        	<li>Ofertant: <?= $item[$key]['contact_name']; ?></li>
         	<li>adressa: <?= $item[$key]['cazare_address']; ?></li>
            <li>tel:<?= $item[$key]['contact_tel']; ?></li>
            <li>email:<?= $item[$key]['contact_email']; ?></li>
        </ul>
    </div>
                
 </div> <!-- detail -->             