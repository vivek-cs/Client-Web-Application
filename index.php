<?php
include('session.php');
include('header.php');
include('db.php');

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php
$sql ="SELECT * FROM clients";
$results = mysqli_query($db,$sql);


?>

<div class="container">
    <?php
    if(isset($_SESSION['message'])){
        echo'<div class="alert alert-success">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }

    ?>

    <h2>Your client information</h2>
    <div class="float-right">
       Hello,<?php echo $_SESSION['username']; ?>/<a href="logout.php">logout
</a>
<br>
        Total clients:<?php echo mysqli_num_rows($results); ?>
    </div>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach($results as $result){
        ?>
        <tr>
            <td><?php echo $result['name'] ;?></td>
            <td><?php echo $result['email'] ;?></td>
            <td><?php echo $result['phone'] ;?></td>
            <td><?php echo $result['address'] ;?></td>
            <td><?php echo $result['description'] ;?></td>
            <td><?php echo $result['created'] ;?></td>
            <td>
                <a href="view.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-success btn-sm">View</button></a>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $result['id']; ?>">
                        Edit
                </button>


               <a onclick="return confirm('Do you want to delete?')" href="delete.php?id=<?php echo $result['id']; ?>"> <button class="btn btn-outline-danger btn-sm">Delete</button></a>
            </td>
        </tr>




<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form  action="update.php" method="POST">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $result['email']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $result['email']; ?>">
        </div>
        
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $result['phone'] ;?>">
        </div>
        
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $result['address']; ?>">
        </div>
         
         <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">
                <?php echo $result['description']; ?>
            </textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="update" class="btn btn-primary">Save changes</button>
      </div>

    </div>
    </form>

  </div>
</div>

<?php } ?>
    </tbody>
</table>
</div>





<script type="text/javascript">
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
