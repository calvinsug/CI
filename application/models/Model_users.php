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