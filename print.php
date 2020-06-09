<?php
include "C:\wamp64\www\arbi projet\back-end\config2.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>ScreenShop</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
          <th>S.No</th>
            <th>Reference</th>
            <th>Id </th>
            <th>Nom </th>
            <th>Prenom </th>
            <th>Produit</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>date d'ajout</th>
            <th>Quantité</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from vendeur";
          $user_res=mysqli_query($con,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data["id"]; ?></td>
            <td><?php echo $user_data["nom"]; ?></td>
            <td><?php echo $user_data["prenom"]; ?></td>
            <td><?php echo $user_data['marque']; ?></td>
            <td><?php echo $user_data['produit']; ?></td>
            <td><?php echo $user_data['telephone']; ?></td>
            <td><?php echo $user_data['email']; ?></td>
            <td><?php echo $user_data['quantite']; ?></td>
            <td><?php echo $user_data['date_crea']; ?></td>
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
