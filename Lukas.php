<!--Loo tavaline tekstifail (näiteks "salajased_paroolid.txt") ja piira ligipääsu sellele. Faili sisu nägemiseks on vaja teada parooli.-->
<i>//Parool on "realpass"</i><br><br>
<form method="post"> 
	Password: <input type="Password" name="pwd"><br><br>
	<p><input type="submit"></p>
</form>

<?php
	if (isset($_POST['pwd']) && !empty($_POST['pwd'])) {
		$upass = htmlspecialchars($_POST['pwd']);
		$realpass = "realpass";
			if ($upass == $realpass) {

				header('Location: LukasUus.php');
				/*echo "salajased_paroolid.txt sisu on: <br/>";
			include 'salajased_paroolid.txt';
			//include 'LukasUus.php';*/

			} else {
				echo "Vale parool";
			}
	}
?>