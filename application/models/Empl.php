<?php
class Empl extends CI_Model{
  //Добавление нового работодателя
    public function add_empl($company,$contact_person,$tel,$email,$site,$user_name,$passw)
    {
      $sql = "INSERT INTO employer (company,contact_person,tel,email,site,user_name,passw)  VALUES ('".$company."','".$contact_person."','".$tel."','".$email."','".$tel."','".$user_name."','".$passw."')";
     $this->db->query($sql);
        echo "Работодатель успешно зарегистрирован";
    }
    public function search_empl($user_name,$passw)
    {


      $sql="SELECT * FROM employer WHERE user_name='$user_name'";

      $query = $this->db->query($sql);

      $row = $query->row_array();

      if(empty($row['user_name']))
      {
        exit("нет такого!");
      }
      else
      {
        if($row['passw']==$passw)

        {

                  $_SESSION['user_name']= $row['user_name'];
                  $_SESSION['ID_employer']= $row['ID_employer'];

        echo "Вы вошли , как $user_name <a href='Vakancy'> добавить вокансию  </a>";

        }


        else {
          echo "пароль не такой";
        }
      }
    }
}


?>
