<!DOCTYPE html>
<html>
<?php 
session_start();
$username = $_SESSION["username"];

?>
<head>
    <meta charset="utf-8" />
    <title>Edit Profile</title>
    <meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Login</title>
        <!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
    <style>
        body {
            margin: 0;
        }
        
        .top-div {
            margin-top: 0;
            width: 100%;
            height: 20px;
            background-size: 2500px;
            background-attachment: fixed;
        }
        
        .wrapper {
            margin: 0px;
            font-family: 'Roboto', 'Times New Roman', 'georgia';
        }
        
        #hero-section {
            padding: 20px 0;
            margin-bottom: 50px;
            background: #808080 url("https://yfwp2260wmb3b8wdx12drkyo-wpengine.netdna-ssl.com/wp-content/uploads/2015/04/BLOG_SubpageBanner.jpg") no-repeat top center;
            height: 170px;
            background-size: 2500px;
            background-attachment: fixed;
        }
        
        center {
            display: block;
            text-align: center;
        }
        
        #userDescription {
            border-radius: 500px;
            display: block;
            float: left;
            margin: 8px 0 10px;
        }
        
        img {
            border: 0;
            vertical-align: middle;
        }
        
        .single-post {
            margin-bottom: 100px;
        }
        
        div {
            display: block;
        }
        
        #companyheader {
            color: White;
            font-family: Britannic;
            margin-top: 0px;
            padding-right: 50px;
            text-align: center;
            font-size: 70px;
        }
        
        .conatiner {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        .vl {
            border-left: 2px solid;
            height: 500px;
            border-color: black;
            display: block;
            text-align: center;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: 250px;
            height: 100%;
            overflow: auto
        }
        
        #requestedservices {
            background-color: lightgreen;
            width: 48%;
            display: inline-block;
            padding: 10px 10px 10px 10px;
            font-size: 14px;
            color: white;
        }
        
        .imgframe {
            background: #D652D9;
            padding: 12px;
            border: 1px solid #999;
        }
    </style>
</head>

<body>
<div class="wrapper">
   <div class="div-label-span div-margin-bottom-5px">
            <!-- Logo -->
				<div class="logo float-left tran4s" style="background-color:#00d747;margin-top:-20px;padding:2%;">
                        <a href="index.html">
                            <img src="images/logo/logo_white.png" width="200" alt="Logo">
                        </a>
                    </div>
        
   
        <section id="hero-section">
            <h2 id="companyheader"><?php  
            if (isset($_SESSION["username"]))
            {
                echo 'Welcome '.$_SESSION["username"];
            }
            ?> </h2>
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
                        <div class="vl">
                            <img alt=" " src="images/logo.png" height="60" width="60" class=" imgframe" />
                            <div id="companydescription">
                                <h3>Company Name</h3>

                            </div><br />
                            <p>
                                campany description We are a dynamic team of creative and innovative people & Business Experts.who are seeking to provide services to companies in need of them,we develop technology advanced systems that improve and assist companies in thei revenue.
                            </p>
                            <br />
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
                                <lable id="lblservice8">Siphosethu Lokwe</lable>
                                <!-- <input id="service3" type="checkbox" name=" " />-->
                            </div>
                            <br />
                            <div>
                                <h3>Address Line 1</h3><br />
                                <lable id="lblservice6">2523 N.U1</lable>
                                <!--<input id="service4" type="checkbox" name=" " />-->
                            </div>
                            <br />
                            <div>
                                <h3>Address Line 2</h3><br />
                                <lable id="lblservice10"> </lable>
                                <!-- <input id="service5" type="checkbox" name=" " />-->
                            </div>
                            <br />
                            <div>
                                <h3>Email Address</h3><br />
                                <lable id="lblservice11">SethuCarter@gmail.com</lable>
                                <!--<input id="service6" type="checkbox" name=" " />-->
                            </div>
                            <br />

                        </div>

                    </center>
                </div>
            </div>
         </div>

        </div>

    </div>






</body>

</html>