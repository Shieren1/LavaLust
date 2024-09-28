<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {

    public function read(){
        return $this->db->table('sma_users')->get_all();
    }

    public function create($sma_last_name, $sma_first_name, $sma_gender, $sma_email, $sma_address){
        $data = array(
         'sma_last_name' => $sma_last_name,
         'sma_first_name' => $sma_first_name,
         'sma_gender' => $sma_gender,
         'sma_email' => $sma_email,
         'sma_address' => $sma_address
        );

        return $this->db->table('sma_users')->insert($data);
     }

    public function get_one($id){
        return $this->db->table('sma_users')->where('id', $id)->get();
    }

    public function update($sma_last_name, $sma_first_name, $sma_gender, $sma_email, $sma_address, $id){
        $data = array(
            'sma_last_name' => $sma_last_name,
            'sma_first_name' => $sma_first_name,
            'sma_gender' => $sma_gender,
            'sma_email' => $sma_email,
            'sma_address' => $sma_address
           );
   
        return $this->db->table('sma_users')->where('id', $id)->update($data);
    }

    public function delete($id){
        return $this->db->table('sma_users')->where('id', $id)->delete();   
    }
    
	
}
?>