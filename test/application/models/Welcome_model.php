    <?php
    
    defined('BASEPATH') or exit('No direct script access allowed');
    
    class Welcome_model extends CI_Model
    {
    public function __construct()
    {
    parent::__construct();
    } 
    
    
    public function insert($table,$data){
    
   //  where this->db->where('id',$id);,$id
    $this->db->insert($table,$data);
    
    }

    public function getall($table){
    //return $this->db->get($table)->row_array(); // single row
      return $this->db->get($table)->result_array();  // multiple rows

    }

     public function getone($table,$id){
        $this->db->where('id',$id);
    return $this->db->get($table)->row_array(); // single row
     // return $this->db->get($table)->result_array();  // multiple rows

    }

      public function getuser($table,$email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
    return $this->db->get($table)->row_array(); // single row
    // echo $this->db->last_query();

    }


    public function update($table,$data,$id){
     $this->db->where('id',$id);
    $this->db->update($table,$data);
   // echo $this->db->last_query();


    }

    public function delete($table,$id){
     $this->db->where('id',$id);
    $this->db->delete($table);
   //  echo $this->db->last_query();


    }
    
    /**
    wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
    * @param  integer (optional)
    * @return object
    * Get single goal
    */
    
    }