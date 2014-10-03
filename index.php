<!DOCTYPE html>
<html>
<head>
	
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='style.css' rel="stylesheet">
	<title>Project 2 | John Hamrick | CSCI E-15</title>

		<?
php require
'logic.php';
?>

</head>
<body>

	<div class='container'>
		<h1>Password Generator</h1>
		<h2>ala The xkcd Comic Strip</h2>
	
		<p class='password'>
			when-pay-weight-ruler		</p>
		
		<form method='POST' action='index.php'><br>

				<p class='options'>
			
				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''> (Max 4)
				<br>
		</p>
		
			<input type='submit' class='btn btn-default' value='Gimme Another'>
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

