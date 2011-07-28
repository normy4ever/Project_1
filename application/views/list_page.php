
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
					
					if($dir[0])
					{
						echo img($image_properties);
					}
					else
					{
						$image_properties2 = array(
							  'src' => 'img/no_img.png',
							  'alt' => $cname,
							  'width' => '220',
							  'height' => '165',
							  'title' => $cname,
							);
						echo img($image_properties2);
					}
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
                    	<a href="detail/get_id/<?=$cid?>" rel="#overlay" title="Toate informatiile despre aceasta cazare"> Detalii </a>  <a href="" title="localizeaza"> Harta</a>
                    </div> <!-- b -->
                </div>   
             </div>
    		<div class="separate"></div>
          </div>
          <? } ?>
       </div> <!-- instances end -->
    </div>   <!-- vertical end -->
    
 

<!-- overlayed element -->
<div class="apple_overlay" id="overlay">

	<!-- the external content is loaded inside this tag -->
	<div class="contentWrap"></div>

</div>

