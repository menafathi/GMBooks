<?php

namespace App\Models;

use CodeIgniter\Model;

class DbOk extends Model
{

    public function cheack_row($id,$parmetar){
        $query = $this->db->table("department")->getWhere(array("id"=>$id))->getRow();
        return $query->$parmetar;
    }

    public function get_department(){
        $query = $this->db->table("department")->get();
        $data = $query->getResult();
        return json_encode($data);
    }

    public function get_Books($id){
        $query = $this->db->table("books")->where(array("id_dep"=>$id))->limit(4)->get();
        $result = $query->getResult();
        return $result;
    }

    public function get_limted_books($id,$parmetar){
        $query = $this->db->table("books")->where(array("id_dep"=>$id))->limit(4,$parmetar)->get();
        $result = $query->getResult();
        return json_encode($result);
    }

    public function get_all_row($id){
        $query = $this->db->table("books")->where(array("id_dep"=>$id))->countAllResults();
        return $query;
    }

    public function get_Books_item($id){
        $query = $this->db->table("books")->getWhere(array("id"=>$id))->getRow();
        return $query->id;
    }


    public function data_book($id){
        $query = $this->db->table("books")->where(array("id"=>$id))->get();
        return $query->getResult();
    }
    public function data_id_user($id){
        $query = $this->db->table("books")->getWhere(array("id"=>$id))->getRow();
        return $query->id_user;
    }
    public function data_user($id){
        $query = $this->db->table("users")->getWhere(array("id"=>$id))->getRow();
        return $query->username;
    }

    public function data_user_det($id){
        $query = $this->db->table("users")->where(array("id"=>$id))->get();
        return $query->getResult();
    }

    public function data_user_books($id){
        $query = $this->db->table("books")->where(array("id_user"=>$id))->limit(4)->get();
        return $query->getResult();
    }

    public function Cheack_user($id){
        $q = $this->db->table("users")->getWhere(array("id"=>$id))->getRow();
        return $q->id;
    }

    public function count_users($id){
        $q = $this->db->table("books")->where(array("id_user"=>$id))->countAllResults();
        return $q;
    }

    public function get_limted_books_with_user($id,$parmetar){
        $query = $this->db->table("books")->where(array("id_user"=>$id))->limit(4,$parmetar)->get();
        $result = $query->getResult();
        return json_encode($result);
    }

    public function get_all_users(){
        $query = $this->db->table("users")->limit(4)->get();
        $result = $query->getResult();
        return($result);
    }

    public function count_all_users(){
        $q = $this->db->table("users")->countAllResults();
        return $q;
    }

    public function get_limted_users($parmetar){
        $query = $this->db->table("users")->limit(4,$parmetar)->get();
        $result = $query->getResult();
        return json_encode($result);
    }


    //11111111
    public function serch_book($name){
        $query = $this->db->table("books")->like(array("name"=>$name))->limit(4)->get();
        $result = $query->getResult();
        return($result);
    }

    public function serch_book_with_limted($name,$parmetar){
        $query = $this->db->table("books")->like(array("name"=>$name))->limit(4,$parmetar)->get();
        $result = $query->getResult();
        return json_encode($result);
    }

    public function serch_book_count($name){
        $query = $this->db->table("books")->like(array("name"=>$name))->countAllResults();
        return($query);
    }

    function select_user($username,$password){
        $query = $this->db->table("users")->getWhere(array("username"=>$username,"password"=>$password))->getRow();
        return $query->id;
    }

    public function insert_user($username,$password,$description){
        if(empty($this->select_user($username,$password))){
            $query = $this->db->table("users")->insert(array("username"=>$username,"password"=>$password,"description"=>$description));
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function login($username,$password){
        $query = $this->db->table("users")->getWhere(array("username"=>$username,"password"=>$password))->getRow();
        return $query;
    }
}
