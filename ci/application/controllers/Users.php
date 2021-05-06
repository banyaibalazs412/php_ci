<?php
class Users extends CI_Controller{

    public function show(){
        $data['result'] = $this->users_model->get_users();
        $data["main"] = 'users/users_show';
        $data['title']= 'Users List';
        $this->load->view('layouts/main',$data);
    }

    public function delete_user($id){
        $this->users_model->delete_user($id);
        redirect('/users/show');
    }

    public function update_view($id)
    {
        $data['result'] = $this->users_model->get_user_by_id($id);
        $data['main'] = 'users/users_update';
        $data['title'] = 'Update User - ' . $id ;
        $this->load->view('layouts/main',$data);
    }

    public function update_user(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[5]|max_length[25]');



        if($this->form_validation->run() == FALSE){
            redirect('/users/show');
        }else{
            $post_data = $this->input->post();
            $this->users_model->update_user($post_data);
            redirect('/users/show');
        }


    }

    public function add_view(){
        $data['main'] = 'users/users_add';
        $data['title'] = 'Create User';
        $this->load->view('layouts/main',$data);
    }

    public function add_user(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[5]|max_length[25]|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[25]');

        if($this->form_validation->run() == FALSE){
            redirect('/users/show');
        }else{
            $post_data = $this->input->post();
            $this->users_model->add_user($post_data);
            redirect('/users/show');
        }

    }
}
?>