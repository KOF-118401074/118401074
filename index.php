<?php?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <style>
            body {
  background: url("img/homepage2.jpg");
  background-size: 100%
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: lightblue;
  color: white;
}


li {
  display: inline;
}

<meta name="viewport" content="width=device-width, initial-scale=1">

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:  #e6f2ff; //#e6f2ff;
}

.topnav a {
  float: left;
  color: black;     //black writing
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:  #e6f2ff;    //colour inside the button
  color: black;
}

.topnav a.active {
  background-color:  #e6f2ff;   //colour of the home button 
  color: white;
}


</style>

        <meta charset="UTF-8">
        <title>Homepage</title>
    </head>

    <body>
        
    
        
   <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="index.html">Curriculum Vitae</a>
  <a href="tiltedpage_scroll_demo.html">My Interests</a>
  
  <a href="consultinghomepage.php">Consulting Services</a>
</div>

        
        <img src="img/welcome.png" alt="welcome" width="328" height="328">

     </body>
    
    
</html>
