<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test task 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/form.js"></script>
</head>
<body>
	<div class="container">
		<form action="/form1.php" method="post" role='form' class="form-horizontal">
		<div class="form-group">
			<label for="name" class="contorl-label col-md-2">Имя: </label>
			<div class="col-md-10">
			<input type="text" name="name"  class="form-control" placeholder="Введите имя">
			</div>
		</div>
		<div class="form-group">
			<label for="subname" class="contorl-label col-md-2">Фамилия: </label>
			<div class="col-md-10">
			<input class="form-control" type="text" name="subname" placeholder="Введите фамилию" >
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="contorl-label col-md-2">Почта: </label>
			<div class="col-md-10">
			<input class="form-control" type="text" name="email" placeholder="Введите e-mail">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="contorl-label col-md-2">Пароль: </label>
			<div class="col-md-10">
			<input class="form-control" type="text" name="password" placeholder="Введите пароль">
			</div>
		</div>
		<div class="form-group ">
			<label class="contorl-label col-md-2" for="retyped_password">Подтверждение пароля: </label>
			<div class="col-md-10">
			<input class="form-control" type="text" name="retyped_password" placeholder="Повторите пароль">
			</div>
		</div> 
			<input type="submit" value="Отправить" class="btn btn-success ">
		</form>
	</div>

</body>
</html>  