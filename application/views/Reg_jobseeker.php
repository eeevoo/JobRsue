<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/Style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-text" href="Index"><h5>Карьера и бизнес в РГЭУ(РИНХ)</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">
        <li class="nav-item">
          <a class="nav-link" href="Reg_employer">Работодателям <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reg_jobseeker">Соискателям</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kontaсts.html">Контакты </a>
        </li>

</ul>
    </div>
</nav>
<div id="content" class="content">
  <header class="Reg_employer">
<div class="row">
  <div class="col-sm-3"><img ilign="center" src="../img/2.2.jpeg" class="img-fluid"></div>

  <div class="col-sm-7">
    <div class="reg">
      <h1>Соискателям</h1>
     <div class="authorize">
      <!--  <h3>Авторизация</h3>

        <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> -->
      <h3> Регистрация Соискателя </h3>
      <form action="save_user.php" method="post">
      <div class="reg">
      <label for="exampleFormControlInput1">Ф.И.О.</label>
      <input  name="Full_Name" type="text" class="form-control"  placeholder="">
      <label for="exampleFormControlSelect1">Пол</label>
      <select name="Male" class="form-control" id="exampleFormControlSelect1">
        <option>ж</option>
        <option>м</option>
      </select>


      <label for="exampleFormControlInput1">Колличество полных лет</label>
      <input  name="age" type="text" class="form-control"  placeholder="">
              <label for="exampleFormControlSelect1">Образование</label>
              <select name="edu" class="form-control" id="exampleFormControlSelect1">
                <option>Высшее</option>
                <option>Среднее професиональное</option>
                    <option>Среднее общее</option>
                        <option>Нет</option>
                      </select>
                        <label for="exampleFormControlInput1">Тел.</label>
                        <input name="Number" type="text" class="form-control"  placeholder="">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      <!--  <label for="exampleInputPassword1">Проверка пароля </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                        <br>
                      <button type="submit" class="btn btn-primary">Заргестрироваться</button>
                      </div>

</div>
                      <div style="display:none;" class="nav_up" id="nav_up"></div> <!-- кнопка вверх-->
                      <div style="display:none;" class="nav_down" id="nav_down"></div> <!-- кнопка вниз-->


                      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
                      <script src="js/bootstrap.js"></script>
                      <script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
</body>
