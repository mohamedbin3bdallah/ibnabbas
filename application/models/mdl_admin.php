
<?php

    class mdl_admin extends CI_model {
        
        public function check_login($data){
            $this->db->where('ad_username',$data['user']);
            $this->db->where('ad_password',$data['pass']);
            $query = $this->db->get('admins');
            if($query->num_rows == 1) {
                return $query->row() ;
            }
        }
        
        public function create_admin($data) {
            $data_in = array(
                'ad_username' => $data['username'],
                'ad_password' =>  $data['pass'],	
                'ad_fname'  => $data['fname'],
                'ad_lname' => $data['lname'],
                'ad_mail'   => $data['mail'],
                'ad_photo'  => $data['photo'],
                'status'    => $data['status'],
                'role_id'   => $data['role']
            );
            $this->db->insert('admins',$data_in);
            return $this->db->insert_id();
        }
        
        public function update_admin($data) {
            $data_in = array(
                'ad_username' => $data['username'],
                'ad_password' =>  $data['pass'],	
                'ad_fname'  => $data['fname'],
                'ad_lname' => $data['lname'],
                'ad_mail'   => $data['mail'],
                'ad_photo'  => $data['photo'],
                'status'    => $data['status'],
                'role_id'   => $data['role']
            );
            $id = $data['id'];
            $this->db->where('ad_id',$id);
            $this->db->update('admins',$data_in);
            return $this->db->insert_id();
        }

        public function get_certain_admin($id) {
            $this->db->where('ad_id',$id);
            $this->db->select('*');
            $this->db->from('admins');
            $this->db->join('roles','admins.role_id = roles.role_id');
            $query = $this->db->get();
                if($query->num_rows() > 0){
                  return $query->result();
                }
        }
        
        public function get_certain_admin_user($user) {
            $this->db->where('ad_username',$user);
            $this->db->select('*');
            $this->db->from('admins');
            $query = $this->db->get();
                if($query->num_rows() > 0){
                  return $query->result();
                }
        }

        
        public function get_admin_role() {
            $query = $this->db->get('roles');
            if($query->num_rows > 0) {
                return $query->result();
            }
        }
        
        public function list_all_admin() {
            $query = $this->db->get('admins');
            if($query->num_rows > 0) {
                return $query->result();
            }
        }
        
        public function delete_admin($id) {
            $this->db->where('ad_id',$id);
            $this->db->delete('admins');
            return TRUE;
        }
        

    }