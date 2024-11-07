<!doctype html>
<html lang=nl>

<?php include('include/head.php')?>

<body>
	<div class="container">
		<?php 
		include('include/nav.php');
		if (!isset($_GET['page'])) {
			include("include/start.php");
			}
			else {
			$verwijzing = 'include/'.$_GET['page'].".php";
			include($verwijzing);	
			}

		include('include/footer.php');
		?>

	</div>
</body>

</html>