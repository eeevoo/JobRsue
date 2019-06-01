
<?php
class Vak extends CI_Model{

  public function add_vak($position,$salary,$data,$graph,$experience,$comment)
  {
    $ID_employer=$_SESSION['ID_employer'];
    $sql = "INSERT INTO vakancy (position,salary,data,experience,graph,comment,ID_employer)  VALUES ('".$position."','".$salary."','".$data."','".$experience."','".$graph."','".$comment."','".$ID_employer."')";
   $this->db->query($sql);
     
  }

public function search_vak ($ID_employer)


{

$sql="SELECT * FROM vakancy WHERE ID_employer='$ID_employer'";
 $query = $this->db->query($sql);
return $query->result_array();


 /*$_SESSION['ID_vacancy']= $row['ID_vacancy'];
  $_SESSION['salary']= $row['salary'];
    $_SESSION['position']= $row['position'];
      $_SESSION['data']= $row['data'];
        $_SESSION['experience']= $row['experience'];
          $_SESSION['graph']= $row['graph'];
            $_SESSION['comment']= $row['comment'];
*/
}


}


?>
