<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
       parent::__construct();
	   $this->load->library('encryption');
	   $this->load->database();
   }
	
	public function index(){

		$this->load->view('login');
	}

	//Kullanıcı eklerken şifrenin korunması için hash işlemi
	private function hash_password($password){

  		return password_hash($password, PASSWORD_BCRYPT);
	}

	public function signIn(){
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		
		//XSS saldırılarına karşı zararlı kodlardan temizleme
		$username = $this->security->xss_clean($username);
		$password = $this->security->xss_clean($password);

		//Veri tabanında böyle bir kullanıcı var mı?
        $query=$this->db
            ->select("*")
            ->from("admin")
            ->where("username", $username)
        	->get();
        $result=$query->result();

        //Eğer böyle bir kullanıcı varsa ve şifresi uyuşuyorsa (Şifre Hashlenmiş durumda)
        if ($result && password_verify($password, $result[0]->password)){
        		//Oturum Açan kulanıcının bilgilerinin session değişkenine atanması
        		$sess_array=array(
			 		'Id'       => $result[0]->Id,
			 		'name'     => $result[0]->name,
			 		'username' => $result[0]->username,
			 		'img'      => $result[0]->img,
				);
				$this->session->set_userdata("admin_session",$sess_array);
				redirect(base_url().'product');
        } 
        else{
        	$this->session->set_flashdata("message","Hatalı kullanıcı adı veya şifre !!");
			redirect(base_url().'login');
        } 
	}
	//Bu fonksiyon sadece manuel olarak kullanıcı eklemek için oluşturuldu
	public function register(){
		$data = array(
     		'username' => "cgtysylr",
     		'password' => $this->hash_password(123456),
     		'name'     => "Çağatay SÖYLER",
     		'img'      => "assets/admin/images/admin.png",
     		'email'    => "cgtysylr@gmail.com",
		);
		return $this->db->insert('admin',$data);
	}

	public function logout(){
		$this->session->unset_userdata("admin_session");
		redirect(base_url().'login');
	}

}
