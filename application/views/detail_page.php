
<link href="<?= base_url();?>css/details.css"  rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neuton:regular,italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>js/functions2.js"></script>

<div class="detail">
<?php
	$cid = $cazare_id;
	$cname = $name;

?>
	
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
        
        <p> <?= $description; ?> </p>
        
        <p>&nbsp;&nbsp;<h3>Camere disponibile: <?= $nr_room; ?>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<b>Pret/camera: <?= $pret; ?>/Ron</b></h3></p>        
        
        <div class="inf">
          
            <p class="small">Nr. maxim de persoane: <?= $max_pers; ?> </p>
            <p class="small">Distanta de strand: <?= $dist_strand; ?> </p>
            <p class="small">Distanta de centru: <?= $dist_centru; ?> </p>
        </div>  <!--inf-->
         <ul class="detail_comfort">
        <?
			if($tv = 1)
			{
            	echo '<li>TV</li>';
            }
            if($frigider==1)
			{
            	echo '<li>Frigider</li>';
            }
            if($internet==1)
			{
            	echo '<li>Internet</li>';
            }
		?>
    
         <?
		    if($grill==1)
			{
            	echo '<li>Grill</li>';
            }
            if($apacalda==1)
			{
            	echo '<li>Apa calda</li>';
            }
			 if($parcare_in==1)
			{
            	echo '<li>Parcare in curte</li>';
            }
		?>
        </ul>
    
    </div>  <!--detail_text-->

    <div id="contact">
    	<ul> 
        	<li><h3>Ofertant:</h3> <?= $contact_name; ?></li>
         	<li><h3>adressa:</h3> <?= $cazare_address; ?></li>
            <li><h3>tel:</h3> <?= $contact_tel; ?></li>
            <li><h3>email:</h3> <?= $contact_email; ?></li>
        </ul>
    </div>
                
 </div> <!-- detail -->     
