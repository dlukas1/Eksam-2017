<?php
echo "salajased_paroolid.txt sisu on: <br/>";
			include 'salajased_paroolid.txt';
			echo "<br/><br/><br/>";
?>


<form method="post"> 
	New entry: <input type="text" name="new"><br><br>
	<p><input type="submit" name="submit" value = "Add new"></p>
</form>

<?php


if (isset($_POST['submit']) && isset($_POST['new'])) {

	$newent = htmlspecialchars($_POST['new'])."<br>";
	
	$file = 'salajased_paroolid.txt';
	file_put_contents($file, $newent, FILE_APPEND | LOCK_EX);
	header('Location: LukasUus.php');
	
}
?>

<form method="post">
	<input type="submit" name="exit" value="log out">
</form>
<?php
if (isset($_POST['exit'])) {
	header('Location: Lukas.php');
}
?>