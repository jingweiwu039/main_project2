<?php 

include "../lib/php/utils.php";
$users = file_get_json("../data/users.json");

function findUser($users, $id) {
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        if ($user->id == $id) {
            return $user;
        }
    }
    return null;
}

function showUserPage($users, $id){
    $user = findUser($users, $id);
    if (!$user) throw new Exception('user not found');
    $classes = join(", ", $user->classes);

    echo <<<HTML
<div>
	<form>
        <h2>$user->name</h2>
        <input type="hidden" name="id" value="$user->id">
		<label class="form-label" for="name">Name</label>
        <input type="text" name="name" value="$user->name">
        <br/>

		<label class="form-label" for="type">Type</label>
        <input type="text" name="type" value="$user->type">
        <br/>

		<label class="form-label" for="email">Email</label>
        <input type="text" name="email" value="$user->email">
        <br/>

		<label class="form-label" for="classes">Classes</label>
        <input type="text" name="classes" value="$classes">
        <br/>

		<input type="submit" formmethod="post" value="Update">
	</form>
</div>
HTML;
}

function showUserList($users) {
    echo "<h2>Users</h2><ul>";
	for($i = 0; $i < count($users); $i++){
        $user = $users[$i];
		echo "<li><a href='users.php?id=$user->id'>{$user->name}</a></li>";
	}
    echo "</ul>";
}

function updateUser($users) {
    echo <<<HTML
    <p>Sorry the website is under maintenance. Please try again later!</p>
    <a href="users.php">Go back</a>
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
    <?php 
    if(!empty($_POST)) {
        updateUser($users);
    }else if(isset($_GET['id'])) {
        showUserPage($users, $_GET['id']);
    } else {
        showUserList($users);
    }
    ?>
</body>	
</html>