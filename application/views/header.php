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

<link href="<?= base_url();?>css/add_wizzard.css"  rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>css/error.css"  rel="stylesheet" type="text/css" />



<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neuton:regular,italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>js/jquery.opacityrollover.js"></script>
<script type="text/javascript" src="<?= base_url();?>js/functions.js"></script>

</head>

<body>
    
<div id="container">
	<div class="transparency"> </div> <!-- transparent background -->
    <div id="header">
        <div id="logo_panel">
        	<? echo anchor("",img(array('src'=>'img/logo.png','border'=>'0','alt'=>'CazareCarei.ro'))); ?>
        </div>  
       
        <div id="login_panel">
			<? if($this->session->userdata('logged_in'))
				{
				 echo anchor("home/logout", img(array('src'=>'img/logout_button.png','border'=>'0','alt'=>'Iesire')), array('class'=>'logout'));
				}
				else
				{
				 echo anchor("home/login", img(array('src'=>'img/login_button.png','border'=>'0','alt'=>'Logare')), array('class'=>'modalInput','rel'=>'#login_window'));		
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
        <!--<div id="login_show">
            
            <div class="contentWrap">
            	<? //$this->load->view('login_page'); ?>
            </div>
        </div> -->
        
        <div class="modal" id="login_window">    
    		<p id="close_login"> X <p>
            <p id="login_err"> </p>
			<?php echo form_open('home/login'); ?>
                <?php echo form_fieldset('Access cont');?>
                
                    <div class="textfield">
                        <?=form_label('email', 'user_name')?>
                        <?=form_error('user_name')?>
                        <? $data = array(
                              'name'        => 'user_name',
                              'maxlength'   => '30',
							  'type'	=>	'email',
                              'required'   => 'required',
                            );
                        
                        echo form_input($data)?>
                    </div>
                    
                    <div class="textfield">
                        <?=form_label('parola', 'user_pass')?>
                        <?=form_error('user_pass')?>
                        <? $data = array(
                              'name'        => 'user_pass',
                              'maxlength'   => '30',
							  'type'	=>	'password',
                              'required'   => 'required',
                            );
                        
                        echo form_input($data)?>
                    </div>
                    
                    <div class="buttons">
                        <?=form_submit('login','Intra in cont')?>
                    </div>
                    
                <?php echo form_fieldset_close()?>
            <?php echo form_close();?>
            
            <!-------------------------------------   Add user   -------------------------------------->
            <p id="click_inreg"> Daca nu ai inca un cont aici poti inregistra !</p>
            <?=form_open('home/create_account')?>
				<?=form_fieldset('Creare cont')?>
                
                    <div class="textfield">
                        <?=form_label('Adressa email', 'user_name')?>
                        <?=form_error('user_name')?>
                        <? $data = array(
                              'name'        => 'user_name',
                              'maxlength'   => '30',
							  'type'	=>	'email',
                              'required'   => 'required',
                            );
                        
                        echo form_input($data)?>
                    </div>
                    
                    <div class="textfield">
                        <?=form_label('parola', 'user_pass1')?>
                       <?=form_error('user_pass1')?>
                        <? $data = array(
                              'name'        => 'user_pass1',
                              'maxlength'   => '30',
							  'type'	=>	'password',
                              'required'   => 'required',
                            );
                        
                        echo form_input($data)?>
                    </div>
                    
                    <div class="textfield">
                        <?=form_label('parola', 'user_pass2')?>
                       <?=form_error('user_pass2')?>
                        <? $data = array(
                              'name'        => 'user_pass2',
                              'maxlength'   => '30',
							  'type'	=>	'password',
                              'required'   => 'required',
                            );
                        
                        echo form_input($data)?>
                    </div>
                    
                    <div class="buttons">
                        <?=form_submit('create_acc', 'Inregistrare')?>
                    </div>
                    
                <?=form_fieldset_close()?>
            <?=form_close();?>
                   
      </div>  <!--login window-->
              
	</div> <!--header-->
    
    <div id="contents">
    
	