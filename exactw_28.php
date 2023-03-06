

<?php
 session_start();


?>
 <?php
if(isset($_POST["Uložiť"]))
{
	if(isset($_SESSION["saved_records"]))
	{
		$item_array_id = array_column($_SESSION["saved_records"], "saved_id");
		if(!in_array($_GET["data"], $item_array_id))
		{
			$count = count($_SESSION["saved_records"]);
			$item_array = array(
				'saved_id'			=>	$_GET["data"],
				'saved_meno'			=>	$_POST["Meno"],
				'saved_priezvisko'		=>	$_POST["Priezvisko"],
        'saved_pozostalý'		=>	$_POST["Pozostalý"],
        'saved_zápis'		=>	$_POST["Zápis"],
        
				
			);
			$_SESSION["saved_records"][$count] = $item_array;
		}
		else
		{
		}
	}
	else
	{
		$item_array = array(
			'saved_id'			=>	$_GET["data"],
			'saved_meno'			=>	$_POST["Meno"],
			'saved_priezvisko'		=>	$_POST["Priezvisko"],
      'saved_pozostalý'		=>	$_POST["Pozostalý"],
      'saved_zápis'		=>	$_POST["Zápis"],
			
		);
		$_SESSION["saved_records"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["saved_records"] as $keys => $values)
		{
			if($values["saved_id"] == $_GET["data"])
			{
				unset($_SESSION["saved_records"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="exactw_28.php"</script>';
			}
		}
	}
}

?>
<?php

include 'condat.php';

// ERROR OFF // turned off error_repotring for undefined array key 'filter'
 error_reporting(0);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/navw.css"/>
    <link rel="stylesheet" type="text/css" href="css/pramenfoto.css"/>
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
    background-image: url("pic/pozad_ex3.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;


    }
      .container {

          font-family: 'Quicksand', sans-serif;
          font-weight: bold;
          font-size: 20px;

          display: grid;

          grid-template-columns: repeat(3, 1fr);
          grid-template-rows: 100px 1fr 1fr 50px;

          gap: 20px;

          padding: 10px;
          max-height: 450px;
          
      }

      .container div{

          border: 0px solid #000000;


      }

      .header {

          grid-column-start: 2;
          grid-column-end: 4;
          text-align: center;

      }

      .content-large {

        grid-row-start: 2;
        grid-row-end: 3;
        grid-column-start: 2;
        grid-column-end: 3;
        text-align: left;

      }

      .content-large:hover p2 {
        opacity: 1;

      }

      .content-small1 {
        grid-row-start: 1;
        grid-row-end: 3;
        overflow:hidden;
        text-align: left;
        max-height: 400px;

      }

      .content-small5 {
        
        text-align: left;

      }

      .content-large2 {
        
        text-align: left;

      }


      .content-large2 {
        grid-row-start: 2;
        grid-row-end: 4;
        grid-column-start: 3;
        grid-column-end: 4;
        overflow:scroll;
        overflow-x: hidden;
        
        

      }

      .content-small3 {
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 3;
        grid-row-end: 4;
        overflow:scroll;
        overflow-x: hidden;
        height: 200px;

   justify-content: center; 
   align-items: center; 

      }


      .save {
        width: 180px;
  padding: 8px 0px;
  font-size: 15px;

  cursor: pointer;
  border-radius: 25px;
  color: white;
  border: 2px solid #d2d6dd;
  margin-top: 10px;
  background-color: black;font-family: 'Verdana', sans-serif;

}



.save:hover {
  border: 2px solid gold;
}
      
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: gold;
  border-radius: 10px;
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





.neviem {
  z-index: 999999; 
  
}

      .image {
        width: 100%; 
    height: 100%;
    object-fit: contain;
    max-height: 350px;
      }

      .footer{
          grid-column: 1 / span 1;

          font-size: 14px;
          text-align:center;
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

          span{
              align-content: center;
              text-align:center;
              color: gold;
              opacity: 1;
              font-size: 40px;
              font-family: 'Verdana', sans-serif;
              text-transform: uppercase;


              }

              span b{
                  align-content: center;
                  text-align:center;
                  color: white;
                  opacity: 1;
                  font-size: 30px;
                  font-family: 'Verdana', sans-serif;
                  text-transform: uppercase;


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


            span a{
                  padding-right: 15px;
                  color: white;
                  opacity: 1;
                  font-size: 30px;
                  font-family: 'Verdana', sans-serif;
                  text-transform: uppercase;


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
             
p4 {

color: gold;  
font-family: 'Verdana', sans-serif;
cursor: pointer;


}

p4:hover {

color: gold;  
text-decoration: underline;

}

    </style>
  </head>
  <body ontouchstart>
    <nav class="nav">

      <a href="index.html" class="nav__link">Hlavné menu</a>
      <div class="nav__link">
          Vyhľadávanie
          <div class="nav__link-group">
            <a href="mainmap.html" class="nav__link">Mapové</a>
            <a href="wide.php" class="nav__link">Rozšírené</a>
            </div>
          </div>
        </nav>
      <?php
        $data=$_GET['data'];
        $sql="Select * from maintable where id='$data'";
        $result=mysqli_query($conn,$sql);
        if ($result){
          $row=mysqli_fetch_assoc($result);
          echo
          ' <div class="container">
            <div class="header">
            <span><b>'.$row["Pozostalý"].'</b>
              '.$row["Meno"].' '.$row["Priezvisko"].'</span>
             <span style="float:right"><a>'.$row["Rok_zápisu"].'</a></span></div>

             <div class="content-large">
             <br>
             <p1>Druhé meno:</p1><p2> '.$row["Druhé_meno"].'</p2>
             <br>
             <br>
             <p1>Pozostalosť po:</p1><p2> '.$row["Pozostalý_po_meno"].'</p2>
             <br>
             <br>
             <p1>Daňovníci v domácnosti:</p1><p2> '.$row["Daňovníci_menovite"].'</p2>
            
             

             </div>
             <div class="content-small1">
             <h5>Poznámka k daňovníkovi v zdrojovom prameni</h5>

             <img id="myImg" src="'.$row["pic"].'"     alt="'.$row["Meno"].' '.$row["Priezvisko"].'" class="image"/>

             </div>
                  <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
             </div>
             <div class="content-large2">
             <h4>Majetok</h4>
             
             <p1>Počet daňovníkov:</p1><p2> '.$row["Počet_daňovník"].'</p2>
             <br>
             <br>
             <p1>Počet zdanených usadlostí:</p1><p2> '.$row["Daň_domy"].'</p2>
             <br>
             <br>
             <p1>Daň na usadlosť rýnskych zlatých:</p1><p2> '.$row["Daň_zlaté"].' R. fl.</p2>
             <br>
             <br>
             <p1>Daň na usadlosť grajciarov:</p1><p2> '.$row["Daň_grajciare"].' xr.</p2>
             <br>
             <br>
             <p1>Osiata zem daňovníkov:</p1><p2> '.$row["Obilie_množstvo_méty"].' preršporských meríc</p2>
             <br>
             <br>
             <p1>Zisk z každej prešporskej merice:</p1><p2> '.$row["Obilie_zisk_zlaté"].' R. fl. a '.$row["Obilie_zisk_grajciare"].' xr. </p2>
             <br>
             <br>
             <p1>Výnos (úroda) z jednej sejby:</p1><p2> '.$row["Obilie_úroda"].' prešporských meríc</p2>
             <br>
             <br>
             <p1>Cena jednej sejby:</p1><p2> '.$row["Obilie_cena_zlaté"].' R. fl. a '.$row["Obilie_cena_grajciare"].' xr. </p2>
             <br>
             <br>
             <p1>Lúky daňovníkov:</p1><p2> '.$row["Lúky_spolu_kosce"].' kosca</p2>
             <br>
             <br>
             <p1>Zisk z lúk:</p1><p2> '.$row["Lúky_zisk_zlaté"].' R. fl. a '.$row["Lúky_zisk_grajciare"].' xr.</p2>
             <br>
             <br>
             <p1>Voly:</p1><p2> '.$row["Zverv_voly"].'</p2>
             <br>
             <br>
             <p1>Jalovice a kravy:</p1><p2> '.$row["Zverv_kravy"].'</p2>
             <br>
             <br>
             <p1>Voly a kravy staršie ako 3 roky:</p1><p2> '.$row["Zverv_kravy_3roky"].'</p2>
             <br>
             <br>
             <p1>Voly a kravy staršie ako 2 roky:</p1><p2> '.$row["Zverv_kravy_2roky"].'</p2>
             <br>
             <br>
             <p1>Tažké a jazdecké kone staršie ako 3 roky:</p1><p2> '.$row["Zverv_kone_3roky"].'</p2>
             <br>
             <br>
             <p1>Ovce jednoročné a viac:</p1><p2> '.$row["Zverm_ovce"].'</p2>
             <br>
             <br>
             <p1>Ošípané jednoročné a viac:</p1><p2> '.$row["Zverm_ošípané"].'</p2>
             <br>
             <br>
             <p1>Budovy, edifices:</p1><p2> '.$row["Budovy"].'</p2>
             <br>
             <br>
             
             </div>   ';
            }
            ?>
             <div class="content-small3">
             
             

             
			<div class="col-md-4">
				<form method="post" action="exactw_28.php?data=<?php echo $row["id"]; ?>">
					


						<input type="hidden" name="Meno" value="<?php echo $row["Meno"]; ?>" />

						<input type="hidden" name="Priezvisko" value="<?php echo $row["Priezvisko"]; ?>" />
            <input type="hidden" name="Pozostalý" value="<?php echo $row["Pozostalý"]; ?>" />
            <input type="hidden" name="Zápis" value="<?php echo $row["Rok_zápisu"]; ?>" />
            <h5>Uložené záznamy</h5>
            <?php
            if (isset($_SESSION["name"])) {
            echo " 
            <input type='submit' name='Uložiť' class='save' value='Uložiť' />
              <br>
              <br>
      

      
      
             ";
    
            }
 
            else {
             echo "<div class='neviem' id='skus'>
            <p2> Nie ste prihlásený! <a href='login.php'><p4>Prihlásiť</p4></a></p2>
              <br><br>
            </div>";
            
        

            }

    ?>
						

				</form>
			</div>
			<div class="table-responsive">
				<table class="table-extra" id="table-extra">
					<tr>
          <th width="6%"><p1>Meno</p1></th>
						<th width="11%"><p1>Priezivsko</p1></th>
						<th width="5%"><p1>Poz.</p1></th>
						<th width="5%"><p1>Záznam</p1></th>
					</tr>
					<?php
					if(!empty($_SESSION["saved_records"]))
					{
						$total = 0;
						foreach($_SESSION["saved_records"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["saved_meno"]; ?></td>
						<td> <?php echo $values["saved_priezvisko"]; ?></td>
            <td> <?php echo $values["saved_pozostalý"]; ?></td>
            <td> <?php echo $values["saved_zápis"]; ?></td>
					</tr>
					<?php
						}
					?>
					<?php
					}
					?>
						
				</table>
			</div>



















             </div>
             <div class="content-small5">
             <br>
             <br>

             <br>
             <p1>Lokalita:</p1><p2> <?php echo $row["Lokalita"]; ?></p2>
             <br>
             <br>
             <p1>Sign.:</p1><p2> <?php echo $row["Prameň"]; ?></p2>
             <br>
             <br>
             <p1>Metrologické jednotky v prameni:</p1><p2><br>Prešporská merica: ca. 2150 m2 al. 62 litrov <br>Kosec: ca. 2870 m2 </p2><a href='https://www.pulib.sk/web/kniznica/elpub/dokument/Olostiak4/subor/Tkac.pdf'><p1>(zdroj)</p1></a>
             </div>
            
          




      </div>

      <script>
               if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


</script>
     

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
</script>

  </body>
  </html>
