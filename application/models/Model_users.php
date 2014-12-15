<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	public function getProfile(){
		
	}

    public function blog()
    {
        $this->load->model('Blog');

        $data['query'] = $this->Blog->get_last_ten_entries();

        $this->load->view('blog', $data);
    }

    public function getUsers(){

        $query = $this->db->query("select * from member");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function login($username, $password){
       $this->db-> select('id, username, password');
       $this->db-> from('users');
       $this->db-> where('username', $username);
       $this->db-> where('password', MD5($password));
       $this->db-> limit(1);
     
       $query = $this ->db -> get();
     
       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
   }

   public function validate(){

      $this->db->where('username', $this->input->post('username'));

      $this->db->where('password',md5($this->input->post('password')));

      $query = $this->db->get('users');

      if($query->num_rows == 1){

        return true;
      }
 

   }


  public function create_member(){

    $username = $this->input->post('username');

    $new_member_insert_data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email' => $this->input->post('email'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password'))

    );


  }


   public function check_if_username_exists($username){
        
        $this->db->where('username',$username);
        $result = $this->db->get('users');

        if($result->num_rows() >0){
          return TRUE;
        }
        else{
          return FALSE;
        }
  }

  public function check_if_email_exists($email){
        
        $this->db->where('email',$email);
        $result = $this->db->get('users');

        if($result->num_rows() >0){
          return TRUE;
        }
        else{
          return FALSE;
        }
  }


    var $title   = '';
    var $content = '';
    var $date    = '';

    function getAllMember(){
    	$query = $this->db->get('member');

    	$query = $this->db->query('select * from staff');

    	foreach ($query->result() as $row)
		{
		   echo $row->StaffName;
		   echo $row->StaffRole;
		   echo $row->StaffAddress;
		}


    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }




}

?>