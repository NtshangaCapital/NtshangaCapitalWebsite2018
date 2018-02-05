<!DOCTYPE html>
<?php
include_once "C:/xampp/htdocs/Ntshangacapital/dbConnection.php";
include 'SessionCheck.php';
include 'registerdataMapper.php';
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Company Profile</title>
    <link rel="stylesheet" type="text/css" href="css/CompanyProfile.css">

</head>
<body>

        <div class="wrapper">
            <section id="hero-section" >
                        <h2 id="companyheader" >Company Profile Page</h3>


            </section>

            <div class="container">
                <div class="row">



                    <div class=" col-sm-8 col-xs-12">

                        <div class="single-post">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                     
                        <center>
                             <div class="vl" >
                            <img alt=" " src="images/logo.png" height="60" width="60" class=" imgframe" />
                            <div id="companydescription">
                                <h3>Company Name</h3>
                              
                            </div><br />
                            <p>
                                campany description
                                We are a dynamic team of creative and
                                innovative people & Business Experts.who are seeking to provide services to companies in need of them,we develop technology advanced systems that improve and assist companies in thei revenue.
                            </p>
                                 <br />
                                 <?php



                                 ?>
                                 <h2 id="requestedservices">Offered Services</h2><br />
                                 <div>
                                    <!--  <lable id="lblservice1">Offered Services</lable>-->
                                     <!--   <input id="service1" type="checkbox" name=" " />-->
                                 </div>
                                 <div>
                                     <lable id="lblservice2">Proffessional IT services by our expert</lable>
                                   <!--  <input id="service2" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <lable id="lblservice3">Complete Business Solution</lable>
                                    <!-- <input id="service3" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <lable id="lblservice4">Management company Services and Solution</lable>
                                     <!--<input id="service4" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <lable id="lblservice5">Omnline Content</lable>
                                    <!-- <input id="service5" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <lable id="lblservice6">Design and development services</lable>
                                     <!--<input id="service6" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <lable id="lblservice7">boosting of website traffic</lable>
                                     <!--<input id="service6" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <h2 id="requestedservices">Your Details</h2><br />
                                 <div>
                                     <!--  <lable id="lblservice1">Offered Services</lable>-->
                                     <!--   <input id="service1" type="checkbox" name=" " />-->
                                 </div>
                                 <!-- 
                                 <div>
                                     <h3>Company Name</h3><br />
                                     <lable id="lblservice2">Ntshanga Capital</lable>
                                      <input id="service2" type="checkbox" name=" " />-
                                 </div>
                                   -->
                                 <br />
                                 <div>
                                     <h3>Manager Name</h3><br />
                                    <!-- <lable id="lblservice8">Siphosethu Lokwe</lable>-->
                                     <input class="Text" type="text" value="<?PHP echo $firstname; ?>" name="fn" size="19"/>

                                     <!-- <input id="service3" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <h3>Address Line 1</h3><br />
                                     <!--<lable id="lblservice6">2523 N.U1</lable>-->
                                     <input class="Text" type="text" value="<?PHP echo $lastname; ?>" name="ln" size="19"/>

                                     <!--<input id="service4" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <h3>Address Line 2</h3><br />
                                     <!--<lable id="lblservice10"> </lable>-->
                                     <input class="Text" type="text" value="<?PHP echo $phone; ?>" name="cn" size="19"/>

                                     <!-- <input id="service5" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <div>
                                     <h3>Email Address</h3><br />
                                     <!--<lable id="lblservice11">SethuCarter@gmail.com</lable>-->
                                     <input class="Text" type="text" value="<?PHP echo $email; ?>" name="em" size="19"/>

                                     <!--<input id="service6" type="checkbox" name=" " />-->
                                 </div>
                                 <br />
                                 <br />
                                 
                                 </div>
                        
                        </center>
                    </div>
                        </div>


                    </div>

                </div>
         


 <script>
if(empty($_POST['agree']) || $_POST['agree'] != 'agree') {
echo 'Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy';
}
</script>
        

</body>
</html>