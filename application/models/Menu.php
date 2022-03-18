<?php

class Menu extends CI_Model
{

    private $table = 'table';

    public function __construct()
    {
        $this->load->database();
    }
    //model cart to add


    function find($m_id)
    {
        return $this->db->where('m_id', $m_id)->get('menu')->row();
    }

    public function get_items()
    {

        date_default_timezone_set('Asia/Bangkok');
        $date = date("Y-m-d");

        $this->db->order_by("Id", "DESC");
        //$this->db->where('status', "open");

        $array = array('Date' =>  $date,  'status' => "open");

        $this->db->where($array);
        return $this->db->get('recript')->result();
    }

    public function get_items_close()
    {

        $this->db->order_by("Id", "DESC");
        $this->db->where('status', "close");
        return $this->db->get('recript')->result();
    }
    public function get_items_open()
    {

        $this->db->order_by("Id", "DESC");

        return $this->db->get('recript')->result();
    }

    // close and  open table
    public function detailTable($Id)
    {
        $this->db->select('*');
        $this->db->from('recript');
        $this->db->join('recript_detail', 'recript_detail.Number = recript.Number');
        $this->db->where('Id', $Id);
        $query = $this->db->get();

        return $query->result();
    }

    public function closetable($Id)
    {

        $close = "close";
        $data = array(
            'status' => $close,

        );
        $this->db->where('Id', $Id);
        $this->db->update('recript', $data);

        //  if($query){
        //     echo '<script> alert("แก้ไขสำเร็จ") </script>';
        //  }else{
        //     echo '<script> alert("แก้ไขไม่สำเร็จ") </script>';
        //  }


    }
    /////////////////////////////////

    public function create_item($value)
    {
        $this->db->insert($this->table, $value);
    }

    public function deldata($m_id)
    {
        $this->db->delete('menu', array('m_id' => $m_id));
    }

    function showmenu()
    {
        $result = $this->db->get('menu');
        return $result;
    }

    function showLogin()
    {
        $this->db->select('username, password');
        $result = $this->db->get('admin');
        return $result;
    }
  
    public function category()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('category', 'category.c_id = menu.m_category');
        $query = $this->db->get();
        return $query->result();
    }
    public function category_type()
    {
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }
    public function addimg()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            //print_r($data);
            $filename = $data['file_name'];
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_price' => $this->input->post('m_price'),
                'm_category' => $this->input->post('m_category'),

                'm_img' => $filename
            );

            $query = $this->db->insert('menu', $data);

            //if($query){
            //  echo 'add ok';
            //}else{
            //    echo 'false';
            //}

        }
    }

    function getSearchMenu($data)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('category', 'category.c_id = menu.m_category');
        $this->db->like('m_id', $data, 'both');
        $this->db->or_like('m_img', $data, 'both');
        $this->db->or_like('m_name', $data, 'both');
        $this->db->or_like('m_price', $data, 'both');
        $this->db->or_like('c_name', $data, 'both');
        $this->db->or_like('m_detail', $data, 'both');
        $result = $this->db->get();
        return $result;
    }

    public function read($m_id)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('m_id', $m_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }


    public function edit()
    {
        $oldimg = $this->input->post('oldimg');

       // print($oldimg);
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {

            $data = $this->upload->data();
            //print_r($data);
            $filename = $data['file_name'];
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_price' => $this->input->post('m_price'),
                'm_img' => $oldimg
            );

            $this->db->where('m_id', $this->input->post('m_id'));
            $query = $this->db->update('menu', $data);
        } else {
            $data = $this->upload->data();
            //print_r($data);
            $filename = $data['file_name'];
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_price' => $this->input->post('m_price'),
                'm_img' => $filename
            );

            $this->db->where('m_id', $this->input->post('m_id'));
            $query = $this->db->update('menu', $data);

            //  if($query){
            //     echo '<script> alert("แก้ไขสำเร็จ") </script>';
            //  }else{
            //     echo '<script> alert("แก้ไขไม่สำเร็จ") </script>';
            //  }

     
        }
    }
    function Detail()
    {
        $id = $_GET['id'];
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where(array('m_id' => $id));

        $query = $this->db->get();
        return $query->result();
    }
    public function showdataDrink()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('category', 'm_category=c_id');
        $this->db->where('m_category', '1');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdataFood()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('category', 'm_category=c_id');
        $this->db->where('m_category', '2');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdataSet()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('category', 'm_category=c_id');
        $this->db->where('m_category', '3');
        $query = $this->db->get();
        return $query->result();
    }


    public function showbill($tal)
    {
        $this->db->select('*');
        $this->db->from('recript');
        // $this->db->join('recript_detail', 'recript_detail.Number = recript.Number');
        $array = array('customer_tel' => $tal,  'status' => "close");


        $this->db->where($array);
        //$this->db->where('customer_tel	', $tal);
        $this->db->order_by("Time", "DESC");
        $this->db->LIMIT("10");
        $query = $this->db->get();

        return $query->result();
    }

    public function showbill_detail($num)
    {
        $this->db->select('*');
        $this->db->from('recript_detail');
        // $this->db->from('recript_detail', 'recript_detail.Number = recript.Number');
        $this->db->where('Number', $num);

        $query = $this->db->get();

        return $query->result();
    }
}
