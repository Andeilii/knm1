<?php
include_once 'header.php'
?>

<style>

.buttonx {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;
    
}

.content-left {

grid-row-start: 2;
grid-row-end: span 3;
grid-column-start: 2;
grid-column-end: 3;
min-height: 650px;
min-width: 100%;



}



#box {
    width: 99%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;
    font-color: white;
}


p3 {

color: white;   
font-family: 'Verdana', sans-serif;
text-align: center;
}



h1 {

   
font-family: 'Verdana', sans-serif;
text-transform: uppercase;
text-align: center;
color: gold;
}

h2 {

font-size: 18px;   
font-family: 'Verdana', sans-serif;
text-transform: uppercase;
text-align: center;
}
    </style>


<div class="content-left">
<h1>Prihlásenie</h1>
    <form action="login.inc.php" method="post">
        <div>
            <label for="name"><p3>Meno</p3></label>
            <input type="text" id="box" name="name">
        </div>
        <br>
        <div>
            <label for="password"><p3>Heslo</p3></label>
            <input type="password" id="box" name="pwd">
        </div>
        <br>
        <button type="submit" name="submit" class="buttonx" >Prihlásiť</button>
    </form>
    <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
    echo "<p3>Vyplňte, prosím, všetky polia!</p3>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p3>Nesprávne prihlasovacie údaje!</p3>";
        }
    
    }
    ?>
    <p3>Ste </p3><a href='signup.php'><p4>registrovaný?</p4></a>     

</div>
           