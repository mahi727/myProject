<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:20 PM
 */
class Application extends CI_Model
{
    public function get_books_info($cond)
    {
        $query_string = "";
        if (isset($cond['book_name']) && !empty($cond['book_name'])) {
            $query_string = " AND `book_name` LIKE '%$cond[book_name]%' ";
        }
        return $this->db->query("SELECT * FROM `books_details` WHERE 1=1 $query_string")->result_array();
    }


    public function add()
    {
        $book_name = $this->input->post('book_name');
        $auth_name = $this->input->post('auth_name');
        $date = $this->input->post('publish_date');
        return $this->db->query("INSERT INTO `books_details` (book_name,auth_name,publish_date) VALUES ('$book_name','$auth_name','$date')");
    }

    public function get_row_by_id($id)
    {
        return $this->db->query("SELECT * FROM `books_details` where id = '$id' ")->row();
    }

    function edit($data, $id )
    {
        $row_id = $id;
        $book_name = $data['book_name'];
        $auth_name = $data['auth_name'];
        $publish_date = $data['publish_date'];
        return $this->db->query("UPDATE `books_details` SET book_name = '$book_name',  auth_name = '$auth_name', publish_date = '$publish_date'  WHERE id = '$row_id' ");
    }

    function read($id)
    {
       return $this->db->query("SELECT * FROM `books_details` WHERE id = '$id' ")->row();
       //return $query->row();
    }

    function delete($id)
    {
        $query = $this->db->query("DELETE FROM `books_details` WHERE id = '$id' ");
        return $query;
    }


}