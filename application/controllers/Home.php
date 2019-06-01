<?php
class Home extends CI_Controller
{
public function Index()
{

  $this->load->view('Index');
}
public function Reg_employer()
{

  $this->load->view('Reg_employer');
}
public function Reg_jobseeker()
{

  $this->load->view('Reg_jobseeker');
}
public function Add_empl()
    {
        if(!empty($_POST)){
            $this->load->model('Empl');
          $data['Aem']=$this->Empl->add_empl($_POST['company'],$_POST['contact_person'],$_POST['tel'], $_POST['email'],$_POST['site'],
            $_POST['user_name'],$_POST['passw']);
              $this->load->view('Temp1',$data);

        }
    }
public function search_empl()
{

  if(!empty($_POST)){
    $this->load->model('Empl');

      $data['Em']=$this->Empl->search_empl($_POST['login'],$_POST['p']);
    $this->load->view('Temp',$data);
  }
}


public function Add_Vak()
    {

        if(!empty($_POST)){
            $this->load->model('Vak');
            $this->Vak->add_vak($_POST['position'],$_POST['salary'],$_POST['data'], $_POST['graph'],$_POST['experience'],
            $_POST['comment']);
echo "<a href='Vakancy'><-</a>";




        }
    }

public function Vakancy()
{
$ID_employer=$_SESSION['ID_employer'];

$this->load->model('Vak' );
$data['VakaFlaka']=$this->Vak->search_vak($_SESSION['ID_employer']);
  $this->load->view('Vakancy' , $data);

}

}
 ?>
