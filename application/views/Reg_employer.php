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

    <a class="navbar-text" href="../"><h5>Карьера и бизнес в РГЭУ(РИНХ)</h5></a>
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
  <header class="Reg_employer">
<div class="row">
<div class="col-sm-3"><img ilign="center" src="../img/2.1.jpg" class="img-fluid">
</div>
<div class="col-sm-7">
<div class="reg">
      <h1>Работодателям</h1>
      <div class="reg">
      <form  method="POST">
   <div class="form-group">

        <h3>Авторизация</h3>
        <br>

        <input type="text" class="form-control form-control-lg" placeholder="Логин" name="login">
<br>
        <input type="text" class="form-control form-control-lg" placeholder="Пароль" name="p">
      </div>

          <input type="submit" class="btn btn-secondary btn-block" value="Вход" name="submit" formaction='search_empl'>

<br>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Регистрация работодателя
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
    <input type="text" class="form-control form-control-lg" placeholder="Логин" name="user_name">

        <input type="text" class="form-control form-control-lg" placeholder="Пароль" name="passw">


<input type="text" class="form-control form-control-lg" placeholder="Название" name="company">

<input type="text" class="form-control form-control-lg" placeholder="Сайт" name="site">


    <input type="text" class="form-control form-control-lg" placeholder="Контактное лицо" name="contact_person">

<input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">

<input type="tel" class="form-control form-control-lg" placeholder="Телефон" name="tel">

<br>
<input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="submit" formaction='Add_empl'>

</div>
</form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    </div>
  </div>
</div>
</div>







</div>

</div>

</div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
