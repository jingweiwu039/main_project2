<?php 
include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


// print_p([$_GET,$_POST]);

if(isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(",",$_POST['user-classes']);

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			break;
		case "delete":
			break;
	}
}

if(isset($_POST['user-name'])){
	$users[$_GET['id']]->name = $_POST['user-name'];
	$users[$_GET['id']]->type = $_POST['user-type'];
	$users[$_GET['id']]->email = $_POST['user-email'];
	$users[$_GET['id']]->classes = explode(",",$_POST['user-classes']);

	file_put_contents($filename,json_encode($users));
}

function showUserPage($user){

$id = $_GET['id'];
$addoredit = $id =="new" ? "Add" : "Edit";
$classes = implode(",",$user->classes);
  // heredoc

echo <<<HTML
<nav class="display-flex">
	<div class="user-back"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	
</nav>

<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the User Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the User Type">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter the User Email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter the User Classes, comma separated">
	</div>
	<div class="form-control">
		<input class="form-button-s" type="submit" value="Save Changes">
	</div>
</form>
HTML;
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<div class="navbar">
		<ul class="nav nav-flex">
			<h1 class="logo">User Admin</h1>
			<div class="nav-items-wrapper">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
			</div>
		</ul>				
	</div>

	<div class="container">
		<div class="card soft">

			<?php 
            if (isset($_GET['id'])) {
            	showUserPage($users[$_GET['id']]);
            } else {

			?>
			<h2>Users List</h2>

			<nav class="user-nav">
				<ul>
			<?php

			for ($i=0; $i<count($users); $i++) { 
			    echo "<li>
				   <a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
			    </li>";
			}
			?>
				</ul>
			</nav>

			<?php } ?>
		</div>			
	</div>


	<?php include "../parts/footer.php"; ?> 
</body>
</html>