<?php
$conn = mysqli_connect("localhost", "user1", "azerty", "Examen");
$sql = "SELECT * FROM ExamenConteneurs";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
 <head>
<title>Examen Conteneurs</title>
<meta charset="UTF-8">
<h1>Relevés</h1>
<style type="text/css">
 table, th, td, h1{
 border: 1px solid black;
 text-align: center;
 }
 </style>
 </head>
 <body>
 <form method="post">
<div class="champ">
<label for="etu">Nom et prénom de l'étudiant : </label>
<input type="text" id="etu">
</div>
 </form>
 <br><br>
 <table>
 <tr>
 <th>Temps</th>
 <th>Températures</th>
 </tr>
<?php while($row = mysqli_fetch_array($result)){ ?>
<tr>
<td><?php echo $row['temps']; ?></td>
 <td><?php echo $row['temperature']; ?></td>
</tr>
<?php } ?>
 </table>
</body>
</html>