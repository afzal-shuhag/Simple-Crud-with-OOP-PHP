
<?php include 'inc/header.php' ?>

<?php
if(isset($_GET['delId'])){
  $id = $_GET['delId'];
  $delete = $crd->delete($id);
}
 ?>
  <div class="middlebar clear">
    <?php
    if(isset($delete)){
      echo $delete;
    }
     ?>
    <table class="table clear">
      <tr>
        <th width="25%">Name</th>
        <th width="25%">Email</th>
        <th width="25%">Address</th>
        <th width="25%">Action</th>
      </tr>
      <?php
        $data = new Crud();
        $getData = $data->getData();
        if($getData){
          while($result = $getData->fetch_assoc()){
      ?>
      <tr>
        <td width="25%"><?php echo $result['name']; ?></td>
        <td width="25%"><?php echo $result['email']; ?></td>
        <td width="25%"><?php echo $result['address']; ?></td>
        <td width="25%"> <a href="update.php?id=<?php echo $result['id']; ?>">Edit</a> <a onclick="return confirm('Are you sure to delete!!?')" href="?delId=<?php echo $result['id']; ?>">Delete</a> </td>
      </tr>
    <?php } } ?>
    </table>

    <a class="button" href="create.php">Create</a>

  </div>


<?php include 'inc/footer.php' ?>
