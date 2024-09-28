<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users extends Controller {

    public function __construct(){
        parent:: __construct();
        $this->call->model('users_model');
    }

    public function read(){
        $data['userdata'] = $this->users_model->read();
        $this->call->view('/users/display', $data);

    }

    public function create(){
        if($this->form_validation->submitted()){

            $sma_last_name = $this->io->post('sma_last_name');
            $sma_first_name = $this->io->post('sma_first_name');
            $sma_gender = $this->io->post('sma_gender');
            $sma_email = $this->io->post('sma_email');
            $sma_address = $this->io->post('sma_address');

            $this->users_model->create($sma_last_name, $sma_first_name, $sma_gender, $sma_email, $sma_address);
            redirect('users/display');

        }
       
        $this->call->view('/users/create');
        

    }

    public function update($id){
        if($this->form_validation->submitted()){

            $sma_last_name = $this->io->post('sma_last_name');
            $sma_first_name = $this->io->post('sma_first_name');
            $sma_gender = $this->io->post('sma_gender');
            $sma_email = $this->io->post('sma_email');
            $sma_address = $this->io->post('sma_address');

            $this->users_model->update($sma_last_name, $sma_first_name, $sma_gender, $sma_email, $sma_address, $id);
            redirect('users/display');

        }
        $data['users'] = $this->users_model->get_one($id);
        $this->call->view('/users/update', $data);
       
    }

    public function delete($id){
        
        if ($this->users_model->delete($id)) {
            
            redirect('users/display');
        } else {
         
            redirect('users/display'); 
        }
    }
	
}
?>