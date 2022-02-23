<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Menu');
    $this->load->library('session');
  }

  public function index()
  {
    $this->load->view('index');
  }

  public function admin_home()
  {
    $data['Menu'] = $this->Menu->get_items();
    $this->load->view('admin_home', $data);
  }
  public function table_close()
  {
    $data['Menu'] = $this->Menu->get_items_close();
    $this->load->view('admin_home', $data);
  }
  public function table_open()
  {
    $data['Menu'] = $this->Menu->get_items_open();
    $this->load->view('admin_home', $data);
  }







  public function admin_menu()
  {
    $result['Menu'] = $this->Menu->category();
    $this->load->view('admin_menu', $result);
  }

  public function admin_login()
  {
    $this->load->view('admin_login');
  }

  public function admin_addmenu()
  {
    $result['type'] = $this->Menu->category_type();
    $this->load->view('admin_addmenu', $result);
  }




  public function admin_opentable($Id)
  {
    $result['detail'] = $this->Menu->detailTable($Id);
    $this->load->view('admin_opentable', $result);
  }

  public function close($Id)
  {
    $this->Menu->closetable($Id);
    echo '<script> alert("ปิดโต๊ะสำเร็จ") </script>';
    redirect("welcome/admin_home", "refresh");
  }


  public function slip($Id)
  {
    $result['detail'] = $this->Menu->detailTable($Id);
    $this->load->view('slip', $result);
  }




  public function menu()
  {
    $data['Menu'] = $this->Menu->category();
    $this->load->view('user_menu', $data);
  }

  public function edit($m_id)
  {
    $data['query'] = $this->Menu->read($m_id);
    $this->load->view('admin_editcard', $data);
  }

  public function editdata()
  {
    $this->Menu->edit();

    echo '<script> alert("แก้ไขสำเร็จ") </script>';
    redirect("welcome/admin_menu", "refresh");
  }

  public function addimg()
  {
    $this->Menu->addimg();
    redirect('welcome/admin_addmenu', 'refresh');
  }

  public function login($table)
  {
    $data['table'] = $table;
    $this->load->view('user_login', $data);
  }

  public function del($m_id)
  {
    $this->Menu->deldata($m_id);
    redirect('welcome/admin_menu', 'refresh');
  }

  public function cart()
  {
    $data['items'] = array_values(unserialize($this->session->userdata('cart')));
    $data['total'] = $this->total();

    // print_r($data);
    $this->load->view('cart', $data);
  }
  public function detail()
  {
    $result['Menu'] = $this->Menu->detail();
    $this->load->view('cart', $result);
  }

  function openTable()
  {
    // เตรียมข้อมูล
    $number_table =  $this->input->post('number_table', TRUE);
    $customer_tel =  $this->input->post('customer_tel', TRUE);


    date_default_timezone_set('asia/bangkok');
    $table_open =  date('d/m/y H:i:s');

    // เตรียมใส่ array 
    $data = array(
      'number_table' => $number_table,
      'customer_tel' => $customer_tel,
      'table_open' => $table_open
    );

    $this->session->set_userdata($data);

    // เชื่อมต่อ model 
    $this->db->insert('table', $data);

    $data['number_table'] = $number_table;
    $data['customer_tel'] = $customer_tel;
    $data['Menu'] = $this->Menu->category();


    $this->load->view('user');
    //redirect('welcome/index', 'refresh');

  }

  function closetable($table)
  {
    // เตรียมข้อมูล
    $number_table = $table;
    date_default_timezone_set('asia/bangkok');
    $table_close =  date('d/m/y H:i:s');

    // เตรียมใส่ array 
    $data = array(
      'number_table' => $number_table,
      'table_close' => $table_close
    );



    // $this->session->sess_destroy();
    // $this->session->unset_userdata($data);
    // เชื่อมต่อ model 
    $this->db->where('number_table', $table);
    $this->db->update('table', $data);

    $data['number_table'] = $number_table;


    $data['table'] = $table;
    $this->load->view('logout', $data);
    // redirect('welcome/1', 'refresh');

  }

  public function formlogin()
  {

    $username = $this->input->post('username');
    $password = ($this->input->post('password'));

    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where(array('username' => $username, 'password' => $password));
    $query = $this->db->get();

    $user = $query->row();

    if ($user->username) {

      $_SESSION['id'] = $user->id;
      $_SESSION['username'] = $user->username;
      $_SESSION['password'] = $user->password;

      echo '<script> alert("ล็อคอินสำเร็จ") </script>';
      redirect("welcome/admin_home", "refresh");
    } else {

      echo '<script> alert("อีเมลล์หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
      redirect("welcome/admin_login", "refresh");
    }
  }
  public function user()
  {
    $data = array(
      'number_table' => $this->session->userdata("number_table"),
      'customer_tel' => $this->session->userdata("customer_tel"),
      'table_open' => $this->session->userdata("table_open")
    );

    $this->load->view('index', $data);
  }

  public function logout($table)
  {
    $data = array(
      'number_table' =>  $this->session->userdata("number_table"),
      'table_close' =>  $this->session->userdata("table_close")
    );

    $data['table'] = $table;
    $this->load->view('user_login', $data);
    $this->session->sess_destroy();
  }
  public function search()
  {
    $data = $this->input->post('searchmenu');
    $result['menu'] = $this->Menu->getSearchMenu($data);
    $this->load->view('admin_search', $result);
  }

  public function searchmenu()
  {
    $data = $this->input->post('searchmenu');
    $result['menu'] = $this->Menu->getSearchMenu($data);
    $this->load->view('user_search', $result);
  }
  public function showFood()
  {
    $data['Menu'] = $this->Menu->showdataFood();
    $this->load->view('user_menu', $data);
  }

  public function showDrink()
  {
    $data['Menu'] = $this->Menu->showdataDrink();
    $this->load->view('user_menu', $data);
  }

  public function showSet()
  {
    $data['Menu'] = $this->Menu->showdataSet();
    $this->load->view('user_menu', $data);
  }
  /////////
  public function recript_ins()
  {
    $this->load->database();

    $data['items'] = array_values(unserialize($this->session->userdata('cart')));

    $number_table1 = $this->session->userdata("number_table");
    $customer_tel = $this->session->userdata("customer_tel");

    $number_table2 = "โต๊ะ " . $number_table1;
    date_default_timezone_set('asia/bangkok');
    $date1 =  date('y-m-d');
    $time1 =  date('H:i:s');

    $status = 'open';

    $rsn = $this->db->query("SELECT Number FROM recript");
    $dataN['rsn'] = $rsn->result_array();
    $dataC0 = $rsn->num_rows();
    $dataC = $dataC0 + 1;
    //echo $dataC;   
    // เตรียมใส่ array 
    if ($dataC > 0 && $dataC < 10) {
      $c1 = '000' . $dataC;
    } elseif ($dataC >= 10 && $dataC < 100) {
      $c1 = '00' . $dataC;
    } elseif ($dataC >= 100 && $dataC < 1000) {
      $c1 = '0' . $dataC;
    } elseif ($dataC >= 1000) {
      $c1 = $dataC;
    }
    $no = 'Re-' . $c1;
    $data_rc = array(
      'Id' => $dataC,
      'Number' => $no,
      'Table' => $number_table2,
      'Date' => $date1,
      'Time' => $time1,
      'status' => $status,
      'customer_tel' => $customer_tel
    );


    // เชื่อมต่อ model 
    $this->db->insert('recript', $data_rc);



    $Id_rc = $no;
    $item_me = array_values(unserialize($this->session->userdata('cart')));
    foreach ($item_me as $item) {
      $data_rc2 = array(
        'Number' => $Id_rc,
        'Name' => $item['m_name'],
        'Num' => $item['quantity'],
        'Price' => $item['m_price']
      );


      // เชื่อมต่อ model 
      $this->db->insert('recript_detail', $data_rc2);
    }
    //$id_recript = $Id_rc;



    @session_start();
    $_SESSION["rc_id"] = $no;



    redirect('welcome/recript');
  }
  /////////
  ///////////////////////บิล////////////////////////////////////
  public function recript()
  {
    $this->load->database();
    //$this->session->sess_destroy();

    $data['items'] = array_values(unserialize($this->session->userdata('cart')));



    // $id_recript = array_values(unserialize($this->session->userdata('rc_id')));



    $id_recript = $_SESSION["rc_id"];

    $rs = $this->db->query("SELECT * FROM recript where Number = '$id_recript'");
    $data['rs'] = $rs->result_array();

    $rs2 = $this->db->query("SELECT * FROM recript_detail where Number = '$id_recript'");
    $data['rs2'] = $rs2->result_array();
    //  $data = $data['rs2'];
    /* $this->load->view('recript', $rs);*/





    // print_r($data);
    $this->load->view('recript', $data);
  }
  ////////////จบ/////////////////////////////////////



  //cart to add //

  public function addcart($m_id)
  {
    $index = $this->exists($m_id);
    $cart = array_values(unserialize($this->session->userdata('cart')));

    $cart[$index]['quantity']++;
    $this->session->set_userdata('cart', serialize($cart));
    redirect('welcome/cart');
  }

  public function delcart($m_id)
  {
    $index = $this->exists($m_id);
    $cart = array_values(unserialize($this->session->userdata('cart')));
    if ($cart[$index]['quantity'] <= 1) {
      unset($cart[$index]);
      $this->session->set_userdata('cart', serialize($cart));
      redirect('welcome/cart');
    } else {
      $cart[$index]['quantity']--;
      $this->session->set_userdata('cart', serialize($cart));
      redirect('welcome/cart');
    }
  }


  public function buy($m_id)
  {
    // $data['items'] = array_values(unserialize($this->session->userdata('cart')));
    // $data['total'] = $this->total();

    $product = $this->Menu->find($m_id);

    $item = array(
      'm_id' => $product->m_id,
      'm_name' => $product->m_name,
      'm_price' => $product->m_price,
      'm_img' => $product->m_img,
      'quantity' => 1
    );

    // print_r($data);

    if (!$this->session->has_userdata('cart')) {
      $cart = array($item);
      // print_r($cart);
      $this->session->set_userdata('cart', serialize($cart));
    } else {
      $index = $this->exists($m_id);

      $cart = array_values(unserialize($this->session->userdata('cart')));
      if ($index == -1) {
        array_push($cart, $item);
        $this->session->set_userdata('cart', serialize($cart));
      } else {
        $cart[$index]['quantity']++;
        $this->session->set_userdata('cart', serialize($cart));
      }
    }
    // $this->load->view('welcome/cart', $data);

    redirect('welcome/cart');
  }

  private function exists($m_id)
  {
    $cart = array_values(unserialize($this->session->userdata('cart')));
    for ($i = 0; $i < count($cart); $i++) {
      if ($cart[$i]['m_id'] == $m_id) {
        return $i;
      }
    }
    
    return -1;
  }
  private function total()
  {
    //$this->session->sess_destroy();
    $items = array_values(unserialize($this->session->userdata('cart')));
    $s = 0;
    //print_r($items);
    foreach ($items as $item) {
      $s += $item['m_price'] * $item['quantity'];
    }
    return $s;
  }
  public function remove($m_id)
  {
    $index = $this->exists($m_id);
    $cart = array_values(unserialize($this->session->userdata('cart')));
    unset($cart[$index]);
    $this->session->set_userdata('cart', serialize($cart));
    redirect('welcome/cart');
  }



  public function showFood1()
  {
    $data['Menu'] = $this->Menu->showdataFood();
    $this->load->view('admin_menu', $data);
  }

  public function showDrink1()
  {
    $data['Menu'] = $this->Menu->showdataDrink();
    $this->load->view('admin_menu', $data);
  }

  public function showSet1()
  {
    $data['Menu'] = $this->Menu->showdataSet();
    $this->load->view('admin_menu', $data);
  }
  //////////////////end add to card//////////////////



  ////////////////// Bill //////////////////
  public function list_bill($tal)
  {
    $result['list'] = $this->Menu->showbill($tal);

    // print_r($result);
    $this->load->view('user_bill', $result);
   
  }
  public function bill_detail($num)
  {
    $result['list'] = $this->Menu->showbill_detail($num);

    //print_r($result);
    $this->load->view('user_bill_detail', $result);
  }
  //////////////////end Bill //////////////////

}
