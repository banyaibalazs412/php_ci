<?php
class movies_model extends CI_Model{

    public function get_movies(){
        $q_string = "    SELECT 
                            movies.id AS id,
                            users.username AS username,
                            movies.name AS name,
                            movies.category AS category,
                            movies.rate AS rate
                        FROM 
                             movies,
                             users
                        WHERE
                            movies.user_id=users.id";

       $query =  $this->db->query($q_string);
       return $query->result();
    }

    public function get_movies_by_id($id){
        $q_string = "    SELECT 
                            movies.id AS id,
                            movies.user_id AS user_id,
                            movies.name AS name,
                            movies.category AS category,
                            movies.rate AS rate
                        FROM 
                             movies
                        WHERE
                            movies.id =" . $id;

        $query =  $this->db->query($q_string);
        return $query->row();
    }

    public function delete_movie($id){
        $this->db->where('id',$id);
        $this->db->delete('movies');
    }

    public function update_movie($post_data){
        if(array_key_exists('name',$post_data) && array_key_exists('category',$post_data)
                && array_key_exists('rate',$post_data)){
           $this->db->set('name',$post_data['name']);
           $this->db->set('category',$post_data['category']);
           $this->db->set('rate',$post_data['rate']);
           $this->db->where('id',$post_data['id']);
           $this->db->update('movies');
        }
    }

    public function get_users(){
        $q_string = "    SELECT 
                            users.id AS user_id,
                            users.username AS username
                        FROM 
                             users";

        $query =  $this->db->query($q_string);
        return $query->result();
    }

    public function add_movie($post_data){
        if(array_key_exists('name',$post_data) && array_key_exists('category',$post_data)
            && array_key_exists('rate',$post_data) && array_key_exists('user_id',$post_data)){
            $this->db->set('user_id',$post_data['user_id']);
            $this->db->set('name',$post_data['name']);
            $this->db->set('category',$post_data['category']);
            $this->db->set('rate',$post_data['rate']);
            $this->db->insert('movies');
        }
    }
}
?>