<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user1 = $_SESSION['USER_ID'];
$link=mysqli_connect('localhost','root','','splitwise');
if(!$link)
{ 
die('Failed to connect to server: ');
} 
$query="select * from group_pay where payer_userid='$user1'";
$result=mysqli_query($link,$query);
if($result==False){
  echo"Fetch Unsuccessful";
}
if(mysqli_num_rows($result)>=1){

echo "
<html>
<head>
  <meta charset='utf-8'>
  <title>My Account</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
  integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
  <style>

/* Google fonts - Open Sans */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
/* colors */
/* body */
* {
  margin: 0;
  padding: 0;
}

body {
  background-image: url('bg_1.jpg');
  height: 100%;
  background-position: center;
  /* background-repeat: no-repeat; */
  /* background-size: cover; */
}
#head1 {
  color: orange;
  display: inline-block;
  margin: 20px 50px;
}

.sign {
  display: inline-block;
  margin-left: 850px;
 
}

#logout {
  display: inline-block;
  
}

#contact_us {
  display: inline-block;
  margin-left: 20px;
}
#account {
  display: inline-block;
  margin-left: 20px;
}


.btn {
  text-decoration: none;
}

#logo {
  display: inline-block;
  margin: 20px;
  margin-top: 80px;
  margin-left: 80px;
}

footer{
  margin-top:490px;
 
}
/* links */
.nfl a, .mlb a, .nhl a, .pga a {
  text-decoration: none;
  transition: color 0.2s ease-out;
}

.nfl a {
  color: #4fc0d2;
}

/* wrapper */
.wrapper {
  width: 100%;
  max-width: 1000px;
  margin: 20px auto 100px auto;
  padding: 0;
  background: rgba(26, 26, 26, 0.9);
  color: rgba(255, 255, 255, 0.9);
  overflow: hidden;
  position: relative;
}

/* lists */
.row ul {
  margin: 0;
  padding: 0;
}

.row ul li {
  margin: 0;
  font-size: 16px;
  font-weight: normal;
  height: 30px;
  list-style: none;
  display: inline-block;
  width: 20%;
  box-sizing: border-box;
}
@media only screen and (max-width: 767px) and (min-width: 480px) {
  .row ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 479px) {
  .row ul li {
    font-size: 13px;
  }
}

.title ul li {
  padding: 15px 13px;
}

.row ul li {
  padding: 5px 10px;
}

/* rows */
.row {
  padding: 20px 0;
  height: 50px;
  font-size: 0;
  position: relative;
  overflow: hidden;
  transition: all 0.2s ease-out;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.row:hover {
  background-color: rgba(26, 26, 26, 0.9);
  height: 65px;
}
@media only screen and (max-width: 767px) {
  .row:hover {
    height: 85px;
  }
}
@media only screen and (max-width: 359px) {
  .row:hover {
    height: 105px;
  }
}

.title {
  padding: 25px 0 5px 0;
  height: 45px;
  font-size: 0;
  background-color: rgba(255, 255, 255, 0.1);
  border-left: 3px solid rgba(255, 255, 255, 0.1);
}

.title:hover {
  height: 45px;
  background-color: rgba(255, 255, 255, 0.1);
  border-left: 3px solid rgba(255, 255, 255, 0.1);
}

@media only screen and (max-width: 767px) {
  .title-hide {
    display: none;
  }
}

.nfl {
  border-left: 3px solid #1c616c;
}


.row-fadeIn-wrapper {
  opacity: 0;
  font-size: 0;
  height: 0;
  overflow: hidden;
  position: relative;
  transition: all 0.2s ease-out;
  -webkit-animation: fadeIn 0.4s ease-out 2s 1 alternate;
          animation: fadeIn 0.4s ease-out 2s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

.row-fadeIn-wrapper:hover {
  height: 30px;
}
@media only screen and (max-width: 767px) {
  .row-fadeIn-wrapper:hover {
    height: 55px;
  }
}
@media only screen and (max-width: 359px) {
  .row-fadeIn-wrapper:hover {
    height: 75px;
  }
}

.fadeIn {
  padding: 20px 0;
  font-size: 0;
  position: absolute;
  transition: all 0.2s ease-out;
  width: 100%;
}

.fadeIn:hover {
  background-color: rgba(26, 26, 26, 0.9);
}

/* row two - fadeOut */
.row-fadeOut-wrapper {
  font-size: 0;
  overflow: hidden;
  position: relative;
  transition: all 0.2s ease-out;
  -webkit-animation: fadeOut 0.4s ease-out 8s 1 alternate;
          animation: fadeOut 0.4s ease-out 8s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  opacity: 1;
  height: 100px;
}

.row fadeIn nfl{
  height: 100%;
  width: 100%;
}

.row-fadeOut-wrapper:hover {
  height: 100px;
}

/* update content */
.update-row {
  -webkit-animation: update 0.5s ease-out 12s 1 alternate;
          animation: update 0.5s ease-out 12s 1 alternate;
}

.update1 {
  position: absolute;
  top: 25px;
  display: inline-block;
  opacity: 1;
  -webkit-animation: update1 1s ease-out 12s 1 alternate;
          animation: update1 1s ease-out 12s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

.update2 {
  position: absolute;
  top: 25px;
  display: inline-block;
  opacity: 0;
  -webkit-animation: update2 4s ease-out 13s 1 alternate;
          animation: update2 4s ease-out 13s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

/* more content */
ul.more-content li {
  position: relative;
  top: 15px;
  font-size: 13px;
  margin: 0;
  padding: 10px 13px;
  display: block;
  height: 50px;
  width: 100%;
  color: rgba(128, 128, 128, 0.9);
}
@media only screen and (max-width: 767px) {
  ul.more-content li {
    font-size: 11px;
  }
}

/* small content */
.small {
  color: rgba(102, 102, 102, 0.9);
  font-size: 10px;
  padding: 0 10px;
  margin: 0;
}
@media only screen and (max-width: 767px) {
  .small {
    display: none;
  }
}

@keyframes fadeIn {
  from {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    padding: 0;
  }
  to {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    padding: 0 0 65px 0;
  }
}
@keyframes fadeIn {
  from {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    padding: 0;
  }
  to {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    padding: 0 0 65px 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    height: 65px;
  }
  to {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    height: 0;
  }
}
@keyframes fadeOut {
  from {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    height: 65px;
  }
  to {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    height: 0;
  }
}
@-webkit-keyframes update {
  0% {
    background: rgba(51, 51, 51, 0.1);
  }
  50% {
    background: rgba(255, 255, 255, 0.1);
  }
  100% {
    background: rgba(51, 51, 51, 0.1);
  }
}
@keyframes update {
  0% {
    background: rgba(51, 51, 51, 0.1);
  }
  50% {
    background: rgba(255, 255, 255, 0.1);
  }
  100% {
    background: rgba(51, 51, 51, 0.1);
  }
}
@-webkit-keyframes update1 {
  0% {
    opacity: 0;
  }
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes update1 {
  0% {
    opacity: 0;
  }
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes update2 {
  0% {
    opacity: 0;
    color: rgba(255, 255, 255, 0.9);
  }
  20% {
    opacity: 1;
    color: #52d29a;
  }
  100% {
    opacity: 1;
    color: rgba(255, 255, 255, 0.9);
  }
}
@keyframes update2 {
  0% {
    opacity: 0;
    color: rgba(255, 255, 255, 0.9);
  }
  20% {
    opacity: 1;
    color: #52d29a;
  }
  100% {
    opacity: 1;
    color: rgba(255, 255, 255, 0.9);
  }
}
.wrapper{
  margin-top:100px;
}
.abcd{
    padding-bottom:50px;
}
</style>
</head>
<body>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
crossorigin='anonymous'></script>
<header>
<nav>

  <div id='head1'>
    <h1>SplitWise</h1>
  </div>
  <div class='sign'>
    <div id='logout'>
      <!-- Button trigger modal -->
      <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'><a href='log_out.php' style='text-decoration:none;color:black;font-weight:bolder;' >Log out </a> </button>
    </div>
    <div id='contact_us'>

      <!-- Button trigger modal -->
      <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
        <a href='home.php' style='text-decoration:none; '>
        <div style='color:black ; font-weight: 500; '>
         Home
          
        </div>
        </a>
      </button>

    

    </div>
    <div id='account'>
    <!-- Button trigger modal -->
    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1'>
      <a href='account_infoo.php' style='text-decoration:none;color:black;font-weight:bolder;'> Account</a>
     
    </button>

 
  </div>
  </div>



</nav>
<section class='wrapper'>
<!-- Row title -->
<main class='row title abcd'>
  <ul>
    <li>Amount</li>
    <li>Reason</li>
    <li>Borrower number</li>
    <li>Date and Time</li>
  </ul>
</main>";
while ($row = mysqli_fetch_assoc($result))
{ 
echo"
<!-- Row 1 - fadeIn -->
<section class='row-fadeIn-wrapper'>
  <article class='row fadeIn nfl'>
    <ul>
      <li>".$row["amount"]."</li>
      <li>".$row["description"]."</li>
      <li>".$row["borrower_num"]."</li>
      <li>".$row["date_time"]."</li>
    </ul>
</article>
</section>";}
echo"
</div>
</body>
<footer class='bg-dark text-center text-white'>
    
<!-- Copyright -->
<div class='text-center p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
  © 2022 Copyright:
  <a class='text-white' href='https://www.iiitdmj.ac.in/' target='_blank'>IIITDMJ</a>
</div>
<!-- Copyright -->
</footer>
</html>";
}
else{
  include("successs.php");
  
  echo "<center><h1>No past transactions !!!</h1><center>";
}} 
else{ 
header('location:home.php'); 

exit(); 
} 
?>