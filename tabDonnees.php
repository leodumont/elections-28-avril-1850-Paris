<?php

$info_db = "host=host dbname=dbname user=user password=mdp";
$conn_db = pg_connect($info_db) or die("Connexion impossible");

$sql = 'SELECT "NUM_ARROND", "Sue1850", "Leclerc1850" FROM paris ORDER BY "NUM_ARROND" ASC';
$resultats = pg_query($sql) or die(pg_last_error());

echo"<table>
 <tr>
  <th>Arrondissements</th>
  <th>Voix Sue</th>
  <th>Voix Leclerc</th>
 </tr>";

while($tableau = pg_fetch_array($resultats)) {
	echo"<tr>
			<td>$tableau[NUM_ARROND]</td>
			<td>$tableau[Sue1850]</td>
			<td>$tableau[Leclerc1850]</td>
		</tr>";
}

echo"</table>";

?>