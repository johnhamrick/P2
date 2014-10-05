
<!DOCTYPE html>
<html>
<head>
	
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Project 2 | John Hamrick | CSCI E-15</title>
<?php require'logic.php'; ?>

<link href='style.css' rel="stylesheet">
</head>
<body>
	<div class='container'>
		<h1>Password Generator</h1>
		<h2>ala The xkcd Comic Strip</h2>

	<p class='password'><?php echo $newPassword ?></p>

		<form method='POST' action='index.php'><br>
			<p class='options'>

				<label for='numWords'># of Words</label>
				<input name='numWords' type='number' min='1' max='4' required='required' id = "numWords"/>(Max 4)<br>
				<br>
				<input name='add_number' type='checkbox' id='add_number' value = '1'>
				<label for='add_number'>Add a number</label><br>
				<input name='add_symbol' type='checkbox' id='add_symbol' value = '1'>
				<label for='add_symbol'>Add a symbol</label><br>

			</p>
			<input type='submit' class='btn btn-default' value='Generate'>
		</form>

		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>
			
	</div>
	
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

</body>
</html>
