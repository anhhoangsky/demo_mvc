<?php //$list = []; ?>
<a class = "btn" href = '?controller=person&action=show_form_add'>Add</a>
<?php if (!empty($list)){
echo "<table>";
	echo "<thead>";
 		echo "<tr>
			<th> Id </th>
			<th> Name </th>
			<th> Phone </th>
			<th> Mail </th>
		</tr>";
	echo "</thead>";

	echo "<tbody>";
		foreach ($list as $rw):
			echo "<tr>";
				echo "<td>".$rw['id']."</td>";
				echo "<td>".$rw['name']."</td>";
				echo "<td>".$rw['phone']."</td>";
				echo "<td>".$rw['mail']."</td>";
				echo "<td><a class = 'btn change-btn' href = '?controller=person&action=view_one&id=".$rw['id']."'>Change</a></td>";
				echo "<td><a class = 'btn delete-btn' href = '?controller=person&action=delete&id=".$rw['id']."' onclick = 'return confirm(\"Are you sure\")'>Delete</a></td>";
			echo "</tr>";
		endforeach;
	echo "</tbody>";

echo "</table>";
} else {
	echo "Info's list is empty";
}

// INSERT INTO `person`(`name`, `phone`, `mail`) VALUES ('Huy','0102030405','Huy@gmail.com');
// INSERT INTO `person`(`name`, `phone`, `mail`) VALUES ('Huy','0102030405','Huy@gmail.com');
// INSERT INTO `person`(`name`, `phone`, `mail`) VALUES ('Huy','0102030405','Huy@gmail.com');
?>
