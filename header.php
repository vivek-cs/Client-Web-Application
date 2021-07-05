<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- As a link -->
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="index.php">Navbar</a>
	<?php
 if(!empty($_SESSION['username'])){
	?>
	<a class="navbar-brand" href="add.php">Add client</a>
<?php }?>
</nav>


<style type="text/css">
	.navbar{
		background-color: #217cd6!important;
	}
	.navbar .navbar-brand{
		color: #fff;
	}
	.navbar .navbar-brand:hover{
		color: #fff;
	}
	.container{
		margin-top: 20px;
	}
</style>