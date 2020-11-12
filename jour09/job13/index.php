<?php 


$connexion = mysqli_connect('localhost:3307', 'root', '', 'jour08');
$requete = mysqli_query($connexion, "SELECT salles.nom, etage.nom FROM salles INNER JOIN etage ON salles.id_etage = etage.id");

$result = mysqli_num_rows($requete);


?>


<table>
 <thead>
  <tr> 
    <th>Nom des salles</th>
    <th>Nom de l'étage</th>
  </tr>
 </thead>

 <tbody>
<?php 

while($rs = mysqli_fetch_array($requete)){
   
    echo "<tr><td>$rs[0]</td>";
    echo "<td>$rs[1]</td></tr>";
}


?>

 </tbody>

</table>
  
<style type="text/css">
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: Arial;
border: thin solid #6495ed;
width: 50%;
padding: 10px;
background-color: #D0E3FA;

}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 70%;
padding: 8px;
text-align: center;
background-color: #ffffff;
}

 </style>
