<?php 
include"conection.php";

if (is set($_POST['search'])) {
	
	$sql = "SELECT * FROM TABLA";
	$search_termn = mysql_real_escape_string("POST"['Nombre']);
	$search_termn = mysql_real_escape_string("POST"['ApellidoP']);
	$search_termn = mysql_real_escape_string("POST"['ApellidoM']);
	$search_termn = mysql_real_escape_string("POST"['Cuip']);
	$sql .= "WHERE (NOMBBRE = '{$search_termn}') AND (ApellidoPaterno = '{$search_termn}' AND (ApellidoMaterno = '{$search_termn}')";
}

$query = mysql_query($sql) or die(mysql_errno());

?>

<table>
	<tr>
		<td>Nombre de clase</td>
		<td>Nofsdfse</td>
		<td>Nfsdfsdf</td>
		<td>Nsdfse</td>
		<td>Noxcvxcve</td>
		<td>Nvxcvxcve</td>
		<td>Nxvccxve</td>
		<td>CXvxcvvcse</td>
	</tr>
	<?php while ($row = mysql_fetch_array($query)) {?>
	<tr>
		<td><?php echo $row['Nombredeclase']; ?></td>
		<td><?php echo $row['safdssdf']; ?></td>
		<td><?php echo $row['sdfsdfs']; ?></td>
		<td><?php echo $row['xcvxvcxvxcvcxv']; ?></td>
		<td><?php echo $row['xvxcxcvx']; ?></td>
		<td><?php echo $row['gdgfrsfgfd']; ?></td>
	</tr>
	<?php} ?>
</table>



<tr>
            <th scope="row">Tobacco</th>
            <td>50</td>
            <td colspan="2">
              <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-lg btn-warning btn-sm">Edit</button>
              <button type="button" class="btn btn-lg btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">Tomato</th>
            <td>10</td>
            <td colspan="2">
              <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-lg btn-warning btn-sm">Edit</button>
              <button type="button" class="btn btn-lg btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">Tomacco</th>
            <td>1000</td>
            <td colspan="2">
              <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-lg btn-warning btn-sm">Edit</button>
              <button type="button" class="btn btn-lg btn-danger btn-sm">Delete</button>
            </td>
          </tr>