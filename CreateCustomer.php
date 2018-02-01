<?PHP

include '../customer.php';
include '../DAL/registerdataMapper.php';


try{
  ///  if(isset($_POST['submit'])){
        $customer = new Article( $_POST['Shwele'], $_POST['Lokwe'], $_POST['0785373131'], $_POST['1'], $_POST['30-12-2011'], $_POST['1'], $_POST['1'], $_POST['1'], $_POST['Sethucarter@gmail.com']);

        //$customer = new Article( $_POST['Firstname'], $_POST['Lastname'], $_POST['ContactNumber'], $_POST['AddressId'], $_POST['LastUpdate'], $_POST['AccountId'], $_POST['QuestionId'], $_POST['AnswerId'], $_POST['Email']);
        $registration_datamapper = new registerdataMapper();
        $registration_datamapper->Create($Customer);
        header("refresh:2; url=articles.php");
   // }
}catch(PDOException $e){
    echo 'ERROR: '. "<br>" . $e->getMessage();
}



?>
