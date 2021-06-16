<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Ajax</title>
</head>
<body>
    <section class="content">
		<div class="box_form">
			<h1>Deixe seu Comentário:</h1>
			<form id="form1">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="name"/><br><br>
				<label for="comment">Comentário</label><br>
				<textarea name="comment" id="comment"></textarea><br><br>
				<input type="submit" form="form1" class="btn-sub" value="Enviar Comentário"/><br><br>
			</form>
		</div>
		    <div class="box_comment">
		</div>
	</section>
    
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='script.js'></script>
</body>
</html>