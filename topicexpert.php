<?php
// Include the session.php file to enforce session-based authentication
include('session.php');
?>
<DOCTYPE html> 
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    <title>javaboi</title>
    <link rel="stylesheet" href="styles2.css">
    </head>
    
    <body>
        <header>
            <h2 class="logo">javaboi</h2>
                <nav class="navigation"> <a href="#">Home</a>
                      <a href="#">About</a>                
                      <a href="#">Contact</a>
                      <a href="login.html" class="btnlogout">LOG OUT</a>
  
     
                 </nav>
       </header>
       <div>
        <nav class="choose_levels">
            <div class="level-box">
                <a href="learnexp.php" class="btn">Level 1</a>
            </div>
            <div class="level-box">
                <a href="learnexp1.php" class="btn">Level 2</a>
            </div>
            <div class="level-box">
                <a href="compiler.html" class="btn">Level 3</a>
            </div>
            <div class="level-box">
                <a href="compiler.html" class="btn">Level 4</a>
            </div>
        </nav>
    </div>
    </body>