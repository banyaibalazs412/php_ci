<?php
class users_model extends CI_Model{

    public function get_users(){
        $q_string = "    SELECT 
                                id,
                                email,
                                username
                        FROM                             
                             users";

        $query =  $this->db->query($q_string);
        return $query->result();
    }

    public function get_user_by_id($id){
        $q_string = "    SELECT 
                                id,
                                email,
                                username
                        FROM 
                             users
                        WHERE
                            id =" . $id;

        $query =  $this->db->query($q_string);
        return $query->row();
    }

    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }

    public function update_user($post_data){
        if(array_key_exists('email',$post_data) && array_key_exists('username',$post_data))
        {
            $this->db->set('email',$post_data['email']);
            $this->db->set('username',$post_data['username']);
            $this->db->where('id',$post_data['id']);
            $this->db->update('users');
        }
    }

    public function add_user($post_data){
        if(array_key_exists('email',$post_data) && array_key_exists('username',$post_data)
                && array_key_exists('password',$post_data))
        {
            $password = hash("sha256",$post_data['password']);

            $this->db->set('email',$post_data['email']);
            $this->db->set('username',$post_data['username']);
            $this->db->set('password',$password);
            $this->db->insert('users');
        }
    }
}
?>