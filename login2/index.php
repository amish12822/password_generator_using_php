<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
   
     <link rel="stylesheet" href="mf-4.css">


  <?php if (isset($user)): ?>
        <link rel="stylesheet" href="mf-4.css">
    <?php else: ?>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
           <?php endif; ?>


</head>
<body>
     
    
    <?php if (isset($user)): ?>
         
        
        <p class="logout"><a href="logout.php"> <button>Log Out</button></a></p>
 

    
<p class="logout1">
 <a href="index.html" target="_blank">
    <button>Generate Password</button>
</a>
</form> </p>







<div class="container">

        <div class="bbo1">
            <div class="bbo2">Hello <?= htmlspecialchars($user["name"]) ?></div>
        </div>

        <div class="kl2">
            <div class="kl1">
                <img src="https://img.freepik.com/free-vector/orange-blue-background-list_23-2149020601.jpg" alt=""> 
            </div>
        </div> 

        <div class="ml1">
            <div class="todo-app">

                <div class="aa1">
                    <div class="zp1"><pre>INFORMATION</pre></div>
                    
                    <div class="row">
                        <input type="text" id="input-box" placeholder="USER_ID">
                        <input type="text" id="input-box1" placeholder="PASSWORD">
                        <button onclick="addTask()">Add </button>
                    </div>
                    <hr>
                </div>

                <div class="wwe1">
                    <ul id="list-container">
                     <ul id="list-container1"></ul>                          
                    </ul>
                </div>

            </div>
        </div>

    </div>

    
<script src="mf-4.js"></script>






       
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>






    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    