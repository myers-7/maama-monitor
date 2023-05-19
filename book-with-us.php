<!DOCTYPE html5>
<html>
<head>
<style>
        body{
        background-image:url('copy.png');
        background-size: 100% 100%;
        background-attachment: fixed; }


    .topnav a {
    background-color: black;
width: 100;
color: gold;
text-align: left;
padding: 14px 16px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
font: 20px;
position:relative;
float: center;
    }

h2{
    text-align: left;
    color: brown;
}

footer {
    font-size: medium;
    
text-align: center;
position: fixed;
bottom: 0;

width: 100%;
height: 60px;
background-color: grey;
}

    .center{
     margin-left:auto;
     margin-right:auto;
 }
    </style>

<title>contact the pearl in Uganda</title>
</head>

<body>

     
<div class="topnav">
<a class="active">  
<a href="tourism-ug.php">Home</a>
<a href="book-with-us.php">Order with us</a>
<a href="about-us.php">About us</a>
<input id="srchbar" type="Search" placeholder="Search">

</div>
<div>
<h2>Want to place an order?</h2>
<h2>Fill in the information below:</h2>

<br>
<table border="1"width="35%"height="100" class="left">
<form action="insert.php" method="POST">
<tr><td>
<fieldset><legend>Select category</legend>
        <select name="nationality"> 
        <option value="">select</option>
        <option value="TOURIST">EXPECTING MOTHER</option>
        <option value="UGANDAN">OTHER</option>
</select><br><br>
</fieldset>
</td> </tr>
<tr><td>
<fieldset>
<legend>Select region</legend>
        <select name="travel_places"> 
        <option value="">select</option>
        <option value="Queen Elizabeth">WESTERN UGANDA</option>
        <option value="Rwenzori Mountains"> CENTRAL UGANDA </option>
        <option value="Lake Mburo">EASTERN UGANDA</option>
        <option value="Murchson Falls">NORTHERN UGANDA</option>
       
    </select><br><br>
</fieldset>
<br></td> </tr>
<tr><td>
    <fieldset>
        <legend> Personal information:</legend>
        <label for="sur_id"> sur_name : </label>
        <input type="text" name="sur_name" id="sur_id"><br><br>
        <label for="fn_id"> First name  : </label>
        <input type="text" name="first_name" id="f_name"><br><br>
        <label for="email"> Enter your email:</label>
        <input type="email" name="email" id="email">
</fieldset>
<tr><td>
<fieldset>
<legend>(F) Authorisation and Policies :</legend>
      <p style="font-size: 20px;color: black;"><input type="checkbox" name="authorisation" id="checkbox">
          By checking the check box, i agree to the information given above is correct and can be trusted.</p>
       </fieldset><br>

    <input type="submit" name="submit" value="submit">


 </fieldset>
 </td> </tr>
</form>

</table>
<footer>

<p>&copy; Copyright 2023, All rights reserved.</p>

<p> <a href="mailto:maamamonitor@gmal.com">maamamonitor@gmail.com</a></p>
<p>Author: Maama-monitor</p>    
 

</footer>
</body>
</html>



