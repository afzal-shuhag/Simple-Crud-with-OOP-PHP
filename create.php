
<?php include 'inc/header.php' ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $add = $crd->insert($name,$email,$address);
  }
 ?>

  <div class="middlebar clear">
    <?php
      if(isset($add)){
        echo $add;
      }
     ?>
      <form class="" action="" method="post">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="text" name="address" placeholder="Enter Address">
        <input type="submit" name="submit" value="submit">
      </form>

      <a class="button" href="index.php">Home</a>
  </div>


<?php include 'inc/footer.php' ?>
