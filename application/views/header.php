<? echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<title><?= $title ?></title>
<?
/*$meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'cauta altfel, cauta cu noi, cauta aproape orice'),
        array('name' => 'keywords', 'content' => 'caut, cautare, google in negru, cautare altfel, aproapeorice'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
		array('name' => 'google-site-verification', 'content' => 'nsXTkZ50_VnaUV-K14Deu0FxSVtNEQnUmsavm2iPtgI')
    );
echo meta($meta); */
?>

<!--<link rel="shortcut icon" href="<?= base_url();?>favicon.gif" />-->


<link href="<?= base_url();?>css/base.css" type="text/css" rel="stylesheet" /> 
<link href="<?= base_url();?>css/main.css" type="text/css" rel="stylesheet" /> 
<link href="<?= base_url();?>css/scrollable/horizontal.css"  rel="stylesheet" type="text/css" /> 
<link href="<?= base_url();?>css/scrollable/button.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/scrollable/navi.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/rangeinput.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/list.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/details.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/add_wizzard.css"  rel="stylesheet" type="text/css" />



<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neuton:regular,italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>js/jquery.opacityrollover.js"></script>


<script type="text/javascript" src="<?= base_url();?>js/functions.js"></script>

</head>

<body>

		<? $jump='false';
		
			if($this->session->flashdata('message') ) { ?>
        
            <div id="inform" onClick="hide_flashdata();">
               <div>
                    <h2>Information</h2>              
                            <p><? echo $this->session->flashdata('message');?></p>
               </div>
            </div>
        <? } ?>

<div id="container">
	<div class="transparency"> </div> <!-- transparent background -->
    <div id="header">
        <div id="logo_panel">
        	<? echo anchor("",img(array('src'=>'img/logo.png','border'=>'0','alt'=>'CazareCarei.ro'))); ?>
        </div>  
       
        <div id="login_panel">
			<? if($this->session->userdata('logged_in'))
				{
				 echo anchor("login/logout", img(array('src'=>'img/logout_button.png','border'=>'0','alt'=>'Iesire')), array('class'=>'logout'));
				}
				else
				{
				 echo anchor("login/", img(array('src'=>'img/login_button.png','border'=>'0','alt'=>'Logare')), array('class'=>'loggin','rel'=>'#overlay'));		
				}
			?>
        </div>
        
        <? if($this->session->userdata('user'))
				{
				 echo '<div id="user_panel">';
				 	echo '<p>' .$this->session->userdata('user'). '</p>';
				 echo '</div>';
				}
		?>
  
            <!-- overlayed element : login window -->
            <div class="apple_overlay" id="overlay">
                <!-- the external content is loaded inside this tag -->
                <div class="contentWrap"></div>
        	</div>
            
            
	</div> <!--header-->
    
    <div id="contents">
    
		