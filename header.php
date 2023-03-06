
<?php
 session_start();


?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/navw.css?version=23"/>


<title>Vyhľadávanie</title>



</head>
<style>

body{
    height: fixed 1100px;
    width: fixed 1100px;


  height: 100%;
  width: 100%;

  margin: 0;
  box-sizing: border-box;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  margin:auto;
  padding:0;
  text-align: center;
    background-image: url("pic/pozad_wide.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    

}



.container {

   

    font-family: 'Quicksand', sans-serif;
    font-weight: bold;
    font-size: 20px;

    display: grid;

    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: 10px 1fr 1fr 80px;

    
    
    box-sizing: border-box;
}

.container div{
    border: 0px solid #000000;

}

h1 {

   
    font-family: 'Verdana', sans-serif;
    text-transform: uppercase;
    text-align: center;
}

p4 {

    color: gold;  
    font-family: 'Verdana', sans-serif;
    cursor: pointer;
    

}

p4:hover {

color: gold;  
text-decoration: underline;

}


p5 {

color: gold;  
font-family: 'Verdana', sans-serif;
cursor: pointer;
background-color: black;
    border:1px solid white;    
    height:100px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:100px


}

p5:hover {
  background-color: black;
    border:1px solid gold;    
    height:100px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:100px;
}



a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}


h2 {

font-size: 18px;   
font-family: 'Verdana', sans-serif;
text-transform: uppercase;
text-align: center;
}

.content-left{
 padding: 25px;


}

.content-right {

    grid-row-start: 2;
    grid-row-end: span 2;
    grid-column-start: 2;
    grid-column-end: 4;
    min-height: 650px;
    z-index: 1;
    justify-content: center; 
   align-items: center; 
    
    
}
 


.footer {
    grid-column: 1 / span 3;
    text-align: bottom;
    position: relative;



}

.footer span {
    position: absolute;
    bottom: 0;
    right: 45%;
    left: 45%;
    align-text: center;
}


.buttonx{
  max-width: 140px;
  width: 140px;
  font-family: 'Verdana', sans-serif;
  padding: 8px 0px;
  font-size: 15px;
  cursor: pointer;
  border-radius: 25px;

  border: 2px solid #000000;
  margin-top: 10px;
  background-color: white;
  

}


.buttonx:hover{

    font-size: 15px;
    width: 140px;
    max-width:140px;
    max-height:45px;
    text-shadow: 1px 1px #000000;
    border: 3px solid #000000;
}

button, input[type=submit].btnSearch {
  width: 140px;
  padding: 8px 0px;
  font-size: 15px;
  cursor: pointer;
  border-radius: 25px;
  color: #000000;
  border: 2px solid #d2d6dd;
  margin-top: 10px;
  background-color: gold;

}


button, input[type=submit].btnSearch:hover {
    font-size: 15px;
    width: 145px;
    text-shadow: 1px 1px #000000;
}


.btnReset:hover {
    font-size: 15px;
    width: 145px;
    text-shadow: 1px 1px #000000;
}

.btnReset {
    width: 140px;
    padding: 8px 0px;
    font-size: 15px;
    cursor: pointer;
    border-radius: 25px;
    color: #000000;
    border: 2px solid #d2d6dd;
    margin-top: 10px;
}

button, input[type=submit].perpage-link {

    font-size: 14px;
    padding: 5px 10px;
    border: 1px solid #808080;
    border-radius: 4px;
    margin: 0px 5px;
    background-color: #F8F8FF;
    cursor: pointer;
}

.current-page {
    width: auto;
    font-size: 14px;
    padding: 6px 12px;
    border: 2px solid #000000;
    border-radius: 4px;
    margin: 0px 5px;
    background-color: #fff;
    cursor: pointer;
}

.exact {
  width: 30px;
  position: relative;
  display: block;
  padding: 5px 10px;
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
  white-space: nowrap;
  background-color: #000000;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  transition: background-color 0.2s;

}

.exact:hover {
 color: gold;

}


#order {
  width: 48%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  font-size: 14px;

}


#input-name {
    width: 48%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}


#input-code {
    width: 49%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-cd {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-prameň {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-zápis {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-otec {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-matka {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#input-manžel {
    width: 32%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}

#order {
    width: 99%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 14px;


}



#table-main {

  box-shadow: 2px 2px 8px white;
  
  
}


#menu {
max-width: 200px;


}

#menu1 {
margin-right: auto;
max-width: 200px;


}

#signinn {
margin-right: 2px;


}

#open-modal {
  background-color: inherit;
  display: none;

}



#table-main td, #table-main th {
  padding: 14px;
  border-collapse:collapse;
  background-color: white;
  opacity: 0.95;
}

#table-main{
background-color: #f2f2f2;
border-collapse:collapse;
background-color: inherit;
   table-layout: fixed;
   width: 97%; 
}


#table-main tr:hover {background-color: gold;}

#table-main th {
  font-size: 10px;
  text-align: center;
  text-align: left;
  background-color: #000000;
  color: white;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  font-size: 1.0rem;
 
}

#table-main tr {
  font-size: 16px;
  font-family: 'Quicksand', sans-serif;

}

.footer {
 font-size: 15px;



}

p1{
color: white;
opacity: 0.4;

}


h2{
    align-items: center;
    color: gold;
  }

    h4{

color: gold;
opacity: 1;
font-size: 20px;
font-family: 'Verdana', sans-serif;
text-transform: uppercase;


    }
    h5{
align-content: center;
text-align:center;
color: gold;
opacity: 1;
font-size: 20px;
font-family: 'Verdana', sans-serif;
text-transform: uppercase;
}

p8{

padding-right: 15px;
    bottom: 0;
    color: white;
    opacity: 1;
    font-size: 10px;
    font-family: 'Verdana', sans-serif;
    text-transform: uppercase;
  }
p1{
          font-family: 'Verdana', sans-serif;
          color: white;
          opacity: 0.6;



          }
      p2{
          font-family: 'Verdana', sans-serif;
          color: white;
          opacity: 0.9;
          
          



          }
          
          p2:hover{
          text-decoration: underline;
          
          
          



          }








#table-extra td, #table-extra th {
  padding: 12px;
  border-collapse:collapse;
  background-color: white;
  opacity: 0.9;
}

#table-extra{
background-color: black;
border-collapse:collapse;
background-color: inherit;margin: 2px;
width: 100%; 
   height: 100%; 
   table-layout: fixed; 

}


#table-extra tr:hover {background-color: white;}

#table-extra th {
  font-size: 10px;
  text-align: center;
  border: 0px solid #ffffff;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #000000;
  color: black;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  font-size: 0.9rem;
  font-family: 'Verdana', sans-serif;
 
}

#table-extra tr {
  font-size: 15px;
  border: 1px solid #000000;
}




  .modal {
  display: none;
  position: fixed;
  z-index: 99999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


</style>
</head>
<body ontouchstart>
  <nav class="nav">
    <a href="index.html" id= "menu" class="nav__link">⟰ Hlavné menu</a>
    <?php
    if (isset($_SESSION["name"])) {
      echo "<div class='nav__link' id='menu1'>
      Vyhľadávanie
      <div class='nav__link-group'>
          <a href='mainmap.html' class='nav__link'>Mapové</a>
          <a href='wide.php' class='nav__link'>Rozšírené</a>

        </div>
      </div>";
        echo "<a href='logout.inc.php' class='nav__link'>Odhlásiť ⍈</a>";
    
    }
 
    else {
       echo "<div class='nav__link' id='menu1'>
      Vyhľadávanie
      <div class='nav__link-group'>
          <a href='mainmap.html' class='nav__link'>Mapové</a>
          <a href='wide.php' class='nav__link'>Rozšírené</a>

        </div>
      </div>";
        echo
            "<a href='login.php' class='nav__link' id='signinn'>Prihlásiť</a>";
            
        

    }
    ?>
   
      </nav>
  <div class="container">