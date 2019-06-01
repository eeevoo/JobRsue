<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/StyleVakancy.css">
    <title>Document</title>
</head>
<body>

  <?php $user_name=$_SESSION['user_name'];
  $ID_employer=$_SESSION['ID_employer'];
    ?>
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
  <div class="abc">

  <marquee direction="right"> <h1> <?php echo "Здравствуйте $user_name ваш id $ID_employer "; ?>  </h1> </marquee>
</div>






      <div class="Vak">
      <h1> Ваши Вакансии </h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Должность</th>
            <th>Зарплата</th>
            <th>Опыт работы</th>
            <th>Дата размещения</th>
            <th>График работы</th>
            <th>Комментарий</th>

          </tr>
        </thead>

        <?php

      foreach ($VakaFlaka as $key => $value):
      ?>
        </tbody>
        <tbody>
          <tr>
          <th scope="row"><?php echo $value ['ID_vacancy'] ;  ?></th>
            <td><?php echo  $value['position']; ?></td>
            <td><?php echo  $value['salary']; ?></td>
            <td> <?php echo  $value['data']; ?></td>
            <td> <?php echo  $value['graph']; ?></td>
            <td> <?php echo  $value['experience']; ?></td>
            <td>   <?php echo  $value['comment']; ?></td>
          </tr>

<?php endforeach?>
        </tbody>
      </table>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Добавть вокансию
      </button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Добавление вакансии</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="POST">
                <div class="form-group">
            <input type="text" class="form-control form-control-lg" placeholder="Должность" name="position">
            <input type="text" class="form-control form-control-lg" placeholder="Зарплата" name="salary">
            <input type="date" class="form-control form-control-lg" placeholder="дата" name="data">
            <input type="text" class="form-control form-control-lg" placeholder="график" name="graph">
            <input type="text" class="form-control form-control-lg" placeholder="Опыт" name="experience">
            <input type="text" class="form-control form-control-lg" placeholder="Крментарий" name="comment">

            <br>
            <input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="submit" formaction='Add_Vak'>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
