<?php\
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../database/Database.php');
  // include_once '../lib/Database.php';
  // include_once '../helpers/Format.php';
?>

<?php

  /**
   *
   */
  class Crud
  {
    private $db;

    function __construct()
    {
      $this->db = new Database();
    }

    public function getData()
    {
      $query = " SELECT * FROM tbl_data ORDER BY id DESC ";
      $result = $this->db->select($query);
      return $result;

    }

    public function insert($name,$email,$address)
    {
      $query = "INSERT INTO tbl_data(name,email,address)
        VALUES('$name','$email','$address')";
        $result = $this->db->insert($query);

      if ($result) {
        $msg = "Successfully Added";
        return $msg;
      }else{
        $msg = "Sorry! Something went wrong";
        return $msg;
      }
    }

    public function getDataById($id)
    {
      $query = " SELECT * FROM tbl_data WHERE id = '$id' ";
      $result = $this->db->select($query);
      return $result;
    }

    public function update($name,$email,$address,$id)
    {
      $query = "
       UPDATE tbl_data
       SET
       name = '$name',
       email = '$email',
       address = '$address'

       WHERE id = '$id'
      ";
      $cartUpdate = $this->db->update($query);
      if($cartUpdate){
        $msg = " <span class='success'>Upated successffully...</span> ";
        return $msg;
      }else{
        $msg = " <span class='error'>Failed...</span> ";
        return $msg;
      }
    }

    public function delete($id)
    {
      $query = " DELETE FROM tbl_data WHERE id = '$id' ";
      $result = $this->db->delete($query);
      if($result){
        $msg = "<span class='success'>Deleted Successfully</span>";
        return $msg;
      }else{
        $msg = "<span class='error'>Something went wrong</span>";
        return $msg;
      }
    }


  }


 ?>
