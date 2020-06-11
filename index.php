<?php
	require "resp.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add author</title>
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>
  <body class="text-center">
	<div class="main">
		<form class="form-add" action="/resp.php" method="POST">
		  <h1 class="h3 mb-3 font-weight-normal">Add link</h1>
		  <label for="link" class="sr-only">link</label>
		  <input type="text" id="link" name="lnk" class="form-control" placeholder="link" required autofocus>
			<br>
		  <button class="btn btn-lg btn-primary btn-block" type="submit">Add new</button>
		  <br>
		  <div><input class="short-link" type="text" value=""></div>
		  <p class="mt-5 mb-3 text-muted"><a href='/'>clear</a></p>
		</form>
	<div>
	<script src="sc.js"></script>
</body>
</html>
