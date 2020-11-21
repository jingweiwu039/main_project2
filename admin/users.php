<?php 
include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


// print_p($users);
// print_p([$_GET,$_POST]);

if(isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
			$id = $_GET['id'];
			$users[$id]->name = $_POST['user-name'];
			$users[$id]->type = $_POST['user-type'];
			$users[$id]->email = $_POST['user-email'];
			$users[$id]->classes = explode(",",$_POST['user-classes']);

			file_put_contents($filename,json_encode($users, JSON_PRETTY_PRINT));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
		case "create":
			$id = count($users);
			$newUser = new stdClass();
			$newUser->name = $_POST['user-name'];
			$newUser->type = $_POST['user-type'];
			$newUser->email = $_POST['user-email'];
			$newUser->classes = explode(",",$_POST['user-classes']);
			$users[] = $newUser;

			file_put_contents($filename,json_encode($users, JSON_PRETTY_PRINT));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
		case "delete":
			array_splice($users, $_GET['id'],1);
			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
			
	}
}

function showUserPage($user){

$id = $_GET['id'];
$addoredit = $id =="new" ? "Add" : "Edit";
$action = $id == "new" ? "create" : "update";
$classes = $id == "new" ? "" : implode(",",$user->classes);
  // heredoc
$display = <<<HTML
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;
$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$action">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" type="text" name="user-name" id="user-name" value="$user->name" placeholder="Enter the User Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input class="form-input" type="text" name="user-type" id="user-type" value="$user->type" placeholder="Enter the User Type">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input class="form-input" type="text" name="user-email" id="user-email" value="$user->email" placeholder="Enter the User Email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input class="form-input" type="text" name="user-classes" id="user-classes" value="$classes" placeholder="Enter the User Classes, comma separated">
	</div>
	
	<div class="form-control">
		<input type="submit" class="form-button" value="Save Changes">
	</div>
</form>
HTML;


$output = $id == "new" ? $form :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	";

$delete = $id =="new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";



echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>		
</nav>
$output
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