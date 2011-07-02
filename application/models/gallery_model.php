<?php
class Gallery_model extends CI_Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function __Construct()
	{
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../pictures');
		$this->gallery_path_url = base_url().'pictures/';
	}
	
	function do_upload($nr) {
		
		$this->gallery_path = $this->gallery_path.'/'.$nr;
		
	
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 0
		);
		
		$this->load->library('upload', $config);
		//$this->upload->do_upload();
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('error_page', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->view('error_page', $data);
		}
		
		$image_data = $this->upload->data();
		
		
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path,
			'maintain_ration' => true,
			'width' => 500,
			'height' => 375
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
		$this->image_lib->clear();
		
		$this->gallery_path =$this->gallery_path . '/thumbs';
		
		$thumb_config = array(
			'image_library' => 'gd2',
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path,
			'maintain_ration' => true,
			'width' => 104,
			'height' => 79
		);
		
		$this->image_lib->initialize($thumb_config);
		if (!$this->image_lib->resize())
		{	
			$error = array('error' => $this->image_lib->display_errors());

			$this->load->view('error_page', $error);
		}
	}
	
	function get_images($nr) {
		
		$files = get_filenames($this->gallery_path.'/'.$nr.'/thumbs/');
		
		echo $files;
		
		$images = array();
		
		/*foreach($files as $file)
		{
			$images []= array (
				'url' => $this->gallery_path_url.'/'.$nr .'/'. $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}*/
		
		return $files;
	}
	
}



