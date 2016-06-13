<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class c_goods extends CI_Controller {

  /*
  **构造函数
  */
  public function __construct() 
  {
    parent::__construct();
    $this -> load -> database();
    $this -> load -> model('m_goods');
    $this -> load -> model('m_goodsCat');
    $this -> load -> model('m_goodsDiscount');
  }

  public function goods() 
  {
    $data = array('title' => "书店进销存管理系统");
    $this->load->view('common/header.php',$data);
    $this->load->view('common/menu.php');
    $this->load->view('base/goods.php');
    $this->load->view('common/footer.php');
  }

  /*
  **添加商品
  */
  public function addGood()
  {
    $goodCliassify = $this -> input->post('goodCliassify');
    $goodName = $this -> input->post('goodName');
    $goodAlias = $this -> input->post('goodAlias');
    $goodMnemonniccode = $this -> input->post('goodMnemonniccode');
    $goodPinyin = $this -> input->post('goodPinyin');
    $goodManufacture = $this -> input->post('goodManufacture');
    $goodPrice = $this -> input->post('goodPrice');

    $query = $this -> m_goods -> checkGoodID($goodID);
    if($query -> num_rows() == 0)
    {
      $this -> m_goods -> addGood($goodClassify, $goodName, $goodAlias, $goodMnemonniccode, $goodPinyin, $goodManufacture, $goodPirce);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*添加商品类别*/
  public function addGoodCat()
  {
    $goodCatIndex = $this -> input -> post('goodCatIndex');
    $goodCatName = $this -> input -> post('goodCatName');
    $goodCatDes = $this -> input -> post('goodCatDes');

    $query = $this -> m_goodsCat ->checkGoodCat($goodCatName);
    if($query -> num_rows() == 0)
    {
      $this -> m_goodsCat -> addGoodCat($goodCatIndex, $goodCatName, $goodCatDes);
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }


  /*
  **添加商品折扣
  */
  public function addGoodDis()
  {
    $goodID = $this -> input -> post('goodID');
    $goodDiscount = $this -> input->post('goodDiscount');
    $query = $this -> m_goodsDiscount -> checkDiscountsGood($goodID);
    if($query -> num_rows == 0)
    {
      $this -> m_goods -> addDiscount($goodID, $disDis)
      $data = array('msg' => 'true');
    }
    else $data = array('msg' => 'false');
    
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*
  **删除商品
  */
  public function delGood()
  {
    $goodID = $this -> input -> post('goodID');

    $query = $this -> m_goods -> checkUserID($goodID);
    if($query -> num_rows() != 0)
    {
      $this -> m_goods -> delGood($goodID);
      $data = array('msg' => 'true');
    }
    else
    {
      $data = array('msg' => 'false');
    }

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*删除商品折扣*/
  public function delGoodDis()
  {
    $goodDisID = $this -> input -> post('goodDisID');

    $query = $this -> m_goodsDiscount -> checkUserID($goodDisID);
    if($query -> num_rows != 0)
    {
      $query = $this -> m_goodsDiscount -> delDiscount($goodDisID);
      $data = array('msg' => 'true');
    }
    else
    {
      $data = array('msg' => 'false');
    }

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*删除商品类别*/
  public function delGoodCat()
  {
    $goodCatID = $this -> input -> post('goodCatID');

    $query = $this -> m_goodsCat -> delGoodCat($goodCatID);
    if($query -> num_rows != 0)
    {
      $query = $this -> m_goodsCat -> delGoodCat($goodCatID);
      $data = array('msg' => 'true');
    }
    else
    {
      $data = array('msg' => 'false');
    }

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*查找所有商品*/
  public function checkAllGood()
  {
    $allInfo = $this -> m_goods -> checkAllGoods();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*查找所有商品类别*/
  public function checkAllGoodCat()
  {
    $allInfo = $this -> m_goods -> checkAllGoodCat();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }

  /*查找所有商品折扣*/
  public function checkAllGoodDis()
  {
    $allInfo = $this -> m_goods -> checkAllDiscounts();
    $result = $allInfo -> result();
    $data = array('data' => $result);
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
  }


  /*
  **修改商品，待编辑
  */
  public function changeGoods()
  {

  }

}
?>