<?php
    class Movies extends CI_Controller{

        public function show(){
            $data['result'] = $this->movies_model->get_movies();
            $data["main"] = 'movies/movies_show';
            $data['title']= 'Movies List';
            $this->load->view('layouts/main',$data);
        }

        public function delete_movie($id){
            $this->movies_model->delete_movie($id);
            redirect('/movies/show');
        }

        public function update_view($id)
        {
            $data['result'] = $this->movies_model->get_movies_by_id($id);
            $data['main'] = 'movies/movies_update';
            $data['title'] = 'Update Movie - ' . $id ;
            $this->load->view('layouts/main',$data);
        }

        public function update_movie(){
            $post_data = $this->input->post();
            $this->movies_model->update_movie($post_data);
            redirect('/movies/show');
        }

        public function add_view(){
            $data['users'] = $this->movies_model->get_users();
            $data['main'] = 'movies/movies_add';
            $data['title'] = 'Create Movie';
            $this->load->view('layouts/main',$data);
        }

        public function add_movie(){
            $post_data = $this->input->post();
            $this->movies_model->add_movie($post_data);
            redirect('/movies/show');

        }
    }
?>