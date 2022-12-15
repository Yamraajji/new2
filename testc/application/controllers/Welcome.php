<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
   public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome_model');

     }

 
    
 

	public function index()

	{ 
	    $data['title']='start';
	 $this->load->view('templates/header',$data);
		 
		 $this->load->view('templates/first_page');
		 
         $this->load->view('templates/footer');

	}
	
	public function form()

	{  

	 $data['title']='form';
	 $this->load->view('templates/header',$data);
		$this->load->view('Forms');
		 $this->load->view('templates/footer');
	}
   

	public function formsubmita()

		{   
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
             

      
       $filename =rand(0,99999)."".$_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"]; 
     

       $folder ="pic/".$filename;   
      
   if (move_uploaded_file($tempname, $folder)) {
               
			$data=array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'photo'=>$filename,
				 );

         $msg = "Image uploaded successfully";
    $this->Welcome_model->insert('first',$data);
        } 

      
  


  }


   public function formsubmit()

		{   
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
             
             
	$data=array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				 );
  $this->Welcome_model->insert('first',$data);

		}

  public function upload(){
  	 $data['title']='view';
	 $this->load->view('templates/header',$data);
	 $this->load->view('multiple_upload');
	 $this->load->view('templates/footer',$data);


  }		

    public function upload_file(){
  	 $data['title']='view';

  	 $countfiles = count($_FILES['photo']['name']);
  	 
    $upload_location ="pic/";  
     
     for($i= 0;$i < $countfiles;$i++){
   
      // File name
      $filename = rand(999,99999)."".$_FILES['photo']['name'][$i];

         // File path
         $path = $upload_location."".$filename;
         // Upload file
    if(move_uploaded_file($_FILES['photo']['tmp_name'][$i],$path)){
    	echo "done";
        /*$files_arr[] = $path;*/
       
   }
}
     

  }	



              

     public function view()

	{  
           
	 $data['title']='view';
	 $this->load->view('templates/header',$data);

	$data1['response'] =$this->Welcome_model->getall('first');
          
            

		  $this->load->view('view',$data1);

		$this->load->view('templates/footer');

		
     }

         public function ajaxview()

	{  
           
	 $data['title']='view';
	 $this->load->view('templates/header',$data);

	$data1['response'] =$this->Welcome_model->getall('first');
          
            

		  $this->load->view('ajaxview',$data1);

		$this->load->view('templates/footer');

		
     }



public function edit()

	{ 	$data['title']="edit";

		$this->load->view('templates/header',$data);

		$id=$this->input->get('id');
		
		$data1['response'] =$this->Welcome_model->getone('first',$id);
		
		$this->load->view('edit',$data1);
		$this->load->view('templates/footer');
		

		
     }

   public function edit1()

	{ 	$data['title']="edit ajax";

		$this->load->view('templates/header',$data);

		$id=$this->input->get('id');
		
		$data1['response'] =$this->Welcome_model->getone('first',$id);
		
		$this->load->view('edit1',$data1);
		$this->load->view('templates/footer');
		

		
     }



	public function update()

		{   
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$id = $this->input->post('id');


			$data1=array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				 );

$this->Welcome_model->update('first',$data1,$id);
   

		}

		public function delete()

		{   
		
		  //	 $id = $this->input->get('id');
			 $id = $this->input->post('id');

  $this->Welcome_model->delete('first',$id);


		}

           public function login()

	{  
           
	 $data['title']='login';
	 $this->load->view('templates/header',$data);           
        
		  $this->load->view('login');

		$this->load->view('templates/footer');

		
     }




		public function logincheck()

	{ 	
         
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$response =$this->Welcome_model->getuser('first',$email,$password);
	   
	   $userid = $response['id'];  
      
    $this->session->set_userdata('userid',$userid);
       

     $sess_id=$this->session->userdata('userid');
             if(isset($sess_id)){
         redirect('dashboard');

             }
             else
             { $this->session->set_userdata('login','wrong');
          redirect('login');
             }
   }

    public function dashboard(){

          $data['title']="login Dashboard";
         $this->load->view('templates/header',$data);
          $this->load->view('dashboard');
         $this->load->view('templates/footer');

		
     }

     public function ajax()

	{  

	 $data['title']='form';
	 $this->load->view('templates/header',$data);
		$this->load->view('templates/ajaxregistration');
		 $this->load->view('templates/footer');
	}

     
	function email()
	{
   $data['title']='form';
	 $this->load->view('templates/header',$data);
	 $this->load->view('email');
	 $this->load->view('templates/footer');

    }
	function mails()
	{

      $mail_config['smtp_host'] = 'smtp.gmail.com';
     $mail_config['smtp_port'] = '465';
     $mail_config['smtp_user'] = 'governmentpolytechnicchopan@gmail.com';
    $mail_config['smtp_pass'] = 'gpchopan@2001';
    $mail_config['smtp_crypto'] = 'tls';
    $mail_config['protocol'] = 'mail';
      $mail_config['mailtype'] = 'html';
   $mail_config['send_multipart'] = FALSE;
   $mail_config['charset'] = 'iso-8859-1';
    $mail_config['wordwrap'] = TRUE;
    $mail_config['mailpath'] = '/usr/sbin/sendmail';

   /*
   $config['protocol'] = 'sendmail';
   $config['charset'] = 'iso-8859-1';
   $config['wordwrap'] = TRUE;
*/

   
		$email= $this->input->post('email');
		$subject= $this->input->post('subject');
		$message= $this->input->post('message');

     $this->load->library('email');
      $this->email->initialize($mail_config);
    $this->email->set_newline("\r\n");
    $this->email->from('governmentpolytechnicchopan@gmail.com', 'Yamraaj');
   $this->email->to($email);
    /*$this->email->cc('grobest2@gmail.com');
   $this->email->bcc('grobest2@gmail.com'); */

   $this->email->subject($subject);
   $this->email->message($message);



    if($this->email->send()){
    	echo "sent";

    } 
    else {
    	print_r($this->email->print_debugger());
     	
    }
      


	}

	public function destroyer()
	{

		$this->session->sess_destroy();
		redirect('login');
	}
   

}
