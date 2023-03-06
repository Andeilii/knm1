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
<h1>Registrácia</h1>
    <form action="signup.inc.php" method="post">
        <div>
            <label for="name"><p3>Meno</p3></label>
            <input type="text" id="box" name="name">
        </div>
        <br>
        <div>
            <label for="email"><p3>Email</p3></label>
            <input type="email" id="box" name="email">
        </div>
        <br>
        <div>
            <label for="password"><p3>Heslo</p3></label>
            <input type="password" id="box" name="pwd">
        </div>
        <br>
        <div>
            <label for="password_confirmation"><p3>Zopakujte heslo</p3></label>
            <input type="password" id="box" name="pwdrepeat">
        </div>
        <br>
        <button type="submit" class="buttonx" name="submit">Registrovať</button>
    </form>
    <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
    echo "<p3>Vyplňte, prosím, všetky polia!</p3>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p3>Použite, prosím, riadny e-mail!</p3>";
        }
        else if ($_GET["error"] == "passworddontmatch") {
            echo "<p3>Heslá sa nezhodujú!</p3>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p3>Prezývka alebo e-mail použitý! Vyberte si, prosím, iný!</p3>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p3>Ste zaregistrovaný! <a href='login.php'><p4>Prihlásiť</p4></a></p3>";
                    }    
    }
    ?>

    
</div>
 