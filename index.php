<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт-напоминалка</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div style="position: absolute; bottom: 850px; right: 750px">
    <h1 class="text-center;">Добро пожаловать!</h1>
    </div>
    <div style="position: absolute; bottom: 800px; right: 270px">
    <h1 class="text-center;">Создавайте заметки и напоминания, которые помогут ничего не забыть</h1>
    </div>
    <div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-50 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Регистрация</h2>
				</div>
				<div class="card-body">
					<form action="register.php" method="post">
						<div class="form-group">
							<label for="login">Логин</label>
							<input type="login" id="login" class="form-control" name="login" />
						</div>
						<div class="form-group">
							<label for="password">Пароль</label>
							<input type="password" id="password" class="form-control" name="pass" />
						</div>
                        <div class="form-group">
							<label for="password">Повторите Пароль</label>
							<input type="password" id="password" class="form-control" name="repeatpass" />
						</div>
                        <div class="form-group">
							<label for="email">Почта</label>
							<input type="email" id="email" class="form-control" name="email" />
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Зарегистрироваться" name="">
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; REMINDER</small>
				</div>
			</div>
		</div>
	</div>
    
</body>
</html>
