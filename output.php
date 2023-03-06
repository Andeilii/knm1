<?php
include 'condat.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Hľadaj</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
<div class="container my-5">
    <form method="post">
        <input type="text" placeholder="Lisska"
        name="search">

        <button class="btn btn-dark btn-sm"  name="submit">Hľadaj</button>

    </form>
    <div class="container my-5">
        <table class="table">
          <?php
if(isset($_POST['submit'])){
    $search=$_POST['search'];

    $sql="Select * from knm1848 where Meno like '%$search%'
    or Priezvisko like '%$search%'";
    $result=mysqli_query($conn,$sql);
    if($result){
    if(mysqli_num_rows($result)>0){
      echo '<thead>
      <tr>
      <th>Meno</th>
      <th>Priezvisko</th>
      <th>Číslo domu</th>
      </tr>
      </thead>
      ';
    while ($row=mysqli_fetch_assoc($result)){
      echo '<tbody>
      <tr>
      <td>'.$row['Meno'].'</td>
      <td><a href="exact1.php?data='.$row['id'].'">'.$row['Priezvisko'].'</a></td>
      <td>'.$row['Číslo_domu'].'</td>
      </tr>
      </tbody>';
      }
    }else{
      echo '<h2 class=:text-danger>Bez záznamu</h2>';
    }
    }
}


           ?>

        </table>
    </div>

</body>
</html>
