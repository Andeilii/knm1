

<?php
include_once 'header.php'
?>


<?php
// ERROR OFF // turned off error_reporting for undefined array key 'filter'
error_reporting(0); ?>

<?php

require_once __DIR__ . '/lib/perpage.php';
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();

$name = "";
$code = "";
$cd = "";
$otec = "";
$matka = "";
$manžel = "";
$prameň = "";
$zápis = "";

$queryCondition = "";
if (! empty($_POST["search"])) {
    foreach ($_POST["search"] as $k => $v) {
        if (! empty($v)) {

            $queryCases = array(
                "name",
                "code",
                "cd",
                "otec",
                "matka",
                "manžel",
                "prameň",
                "zápis"
            );
            if (in_array($k, $queryCases)) {
                if (! empty($queryCondition)) {
                    $queryCondition .= " AND ";
                } else {
                    $queryCondition .= " WHERE ";
                }
            }
            switch ($k) {
              case "name":
                $name .= $v;
                $queryCondition .= "merge_meno LIKE '%" . $v . "%'";
                break;
            case "code":
                $code .= $v;
                $queryCondition .= "merge_priezvisko LIKE '%" . $v . "%' ";
                break;
            case "cd":
                $cd = $v;
                $queryCondition .= "Číslo_domu LIKE '%" . $v . "%'";
                break;
            case "otec":
                $otec = $v;
                $queryCondition .= "Otec LIKE '%" . $v . "%' ";
                break;
            case "matka":
                $matka = $v;
                $queryCondition .= "Matka LIKE '%" . $v . "%' ";
                break;
            case "manžel": 
                $manžel = $v;
                $queryCondition .= "Manžel_ka LIKE '%" . $v . "%' ";
                break;
            case "zápis": 
                $zápis = $v;
                $queryCondition .= "Rok_zápisu LIKE '%" . $v . "%'";
                break;  
                case "prameň": 
                  $prameň= $v;
                  $queryCondition .= "Typ_prameňa LIKE '%" . $v . "%'";
                  break;
            }
        }
    }
}

$filter= 'id';
switch($_POST["filter"]) {
  case 'Priezvisko': $filter = 'Priezvisko'; break;
    }
switch($_POST["filter"]) {
case 'Meno': $filter = 'Meno'; break;
  }
switch($_POST["filter"]) {
  case 'Číslo_domu': $filter = 'Číslo_domu'; break;
  }
switch($_POST["filter"]) {
    case 'Rok_zápisu': $filter = 'Rok_zápisu'; break;
  }
switch($_POST["filter"]) {
 case 'Vek': $filter = 'Vek'; break;
  }      
if (isset($filter)){
$orderby = " ORDER BY $filter";

$sql = "SELECT * FROM maintable ".$queryCondition;
$href = 'wide.php';
}
$perPage = 11;
$page = 1;
if (isset($_POST['page'])) {
    $page = $_POST['page'];
}
$start = ($page - 1) * $perPage;
if ($start < 0)
    $start = 0;

$query = $sql . $orderby . " limit " . $start . "," . $perPage;
$result = $database->select($query);

if (! empty($result)) {
    $result["perpage"] = showperpage($sql, $perPage, $href);
}
?>

    
        <div>
          <div class="content-left">
          <h1 style="color:gold">Vyhľadávanie</h1>
            <form name="frmSearch" method="post" action="">

                    <p>
                        <input type="text" id="input-name" placeholder="Meno"
                            name="search[name]"
                            value="<?php echo $name; ?>" /> <input
                            type="text" placeholder="Priezvisko"
                            name="search[code]" id="input-code"
                            value="<?php echo $code; ?>" /> <input
                            type="submit" name="go" class="btnSearch"
                            value="Hľadaj">


                            

                            <input type="reset"
                            class="btnReset" value="Reset"
                            onclick="window.location='wide.php'">
                            <br><br>
                            <h2 style="color:gold">Ďalšie možnosti</h2>

                            <input type="text" id="input-cd" placeholder="Číslo domu"
                            name="search[cd]"
                            value="<?php echo $cd; ?>" />
                            <input type="text" id="input-prameň" placeholder="Typ prameňa"
                            name="search[prameň]"
                            value="<?php echo $prameň; ?>" />
                            <input type="text" id="input-zápis" placeholder="Rok zápisu"
                            name="search[zápis]"
                            value="<?php echo $zápis; ?>" />
                            <br> <h2 style="color:gold">Rodinní príslušníci</h2>
                            <input type="text" id="input-otec" placeholder="Meno otca"
                            name="search[otec]"
                            value="<?php echo $otec; ?>" />
                            <input type="text" id="input-matka" placeholder="Meno matky"
                            name="search[matka]"
                            value="<?php echo $matka; ?>" />
                            <input type="text" id="input-manžel" placeholder="Meno manžela/lky"
                            name="search[manžel]"
                            value="<?php echo $manžel; ?>" />
                            <br>
                          <div class="sort">
                         
                            <select name="filter" class="filter" id="order">
                              <option value="Priezvisko" selected>---ZORADIŤ STRANU PODĽA</option>
                              <option value="Priezvisko">Priezviska</option>
                              <option value="Meno">Mena</option>
                              <option value="Číslo_domu">Čísla domu</option>
                              <option value="Rok_zápisu">Roku záznamu</option>
                              <option value="Vek">Veku</option>
                             
                            </select>
                           
                            <br>
                            <h5>Uložené záznamy</h5>
                            <div class="table-responsive">
				<table class="table-extra" id="table-extra">
					<tr>
						<th ><p1>Meno</p1></th>
						<th ><p1>Priezivsko</p1></th>
						<th ><p1>Pozostalý</p1></th>
						<th ><p1>Záznam</p1></th>
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
        <?php
            if (isset($_SESSION["name"])) {
            echo " 

      
      
             ";
    
            }
 
            else {
             echo "<div class='neviem' id='skus'><br>
            <p1> Nie ste prihlásený!</p1> <a href='login.php'><p2>Prihlásiť</p2></a>
              <br><br>
            </div>";
            
        

            }

    ?>
			</div>




                            </div>

                    </p>
                    </div>
                      </div>
                <div class="content-right">
                <table class="stripped" id="table-main">
                    <thead>
                        <tr>
                            <th width="3%">Poz.</th>
                            <th width="6%">Meno</th>
                            <th width="9%">Priezvisko</th>
                            <th width="5%">Vek</th>
                            <th width="2%">Č.d.</th>
                            
                            <th width="8%">Lokalita</th>
                            <th width="8%">Typ prameňa</th>
                            <th width="6%">Záznam</th>
                            <th width="4%">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    if (! empty($result)) {
                        foreach ($result as $key => $value) {
                            if (is_numeric($key)) {
                                ?>
                     <tr>
                       <td><?php echo $result[$key]['Pozostalý']; ?></td>
                       <td><?php echo  $result[$key]['Meno']; ?></td>
                       <td><?php echo $result[$key]['Priezvisko']; ?></td>
                       <td><?php echo $result[$key]['Vek']; ?></td>
                       <td><?php echo $result[$key]['Číslo_domu']; ?></td>
                
                       <td><?php echo$result[$key]['Lokalita']; ?></td>
                       <td><?php echo$result[$key]['Typ_prameňa']; ?></td>
                       <td><?php echo$result[$key]['Rok_zápisu']; ?></td>
                       <td><?php
                       if ($result[$key]['id'] < "374") {
                        echo '<a href="exactw_28.php?data='.$result[$key]['id'].'" target="_blank" class="exact">Viac</a>'; 
                      } elseif ($result[$key]['id'] < "750") {
                       
                        echo '<a href="exactw_48.php?data='.$result[$key]['id'].'" target="_blank" class="exact">Viac</a>';
                      } elseif ($result[$key]['id'] < "1728") {
                       
                        echo '<a href="exactw_birm.php?data='.$result[$key]['id'].'" target="_blank" class="exact">Viac</a>';
                      } elseif ($result[$key]['id'] < "3800") {
                       
                        echo '<a href="exactw_zos.php?data='.$result[$key]['id'].'" target="_blank" class="exact">Viac</a>';
                      }
                      
                      else {
                       
                        echo "";
                      } 


                     ?>
                    </td>
                    </tr>
                    <?php
                            }
                        }
                    }
                    else {
                      echo "
                      <br>
                      <br>
                      <br>
                      <h2 span>Žiaden záznam</span></h2>
                      
                      
                      ";
                    }
                    if (isset($result["perpage"])) {
                        ?>
                        <tr>
                            <td colspan="9" align=right> <?php echo $result["perpage"]; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                  <script>
               if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


</script>


</div>
                  <div class="footer">
                  <p8><span>©2023 Andrej Lisko </span></p8>
                  
                </div>
            </form>
    </div>
<?php  ?>
</body>
</html>