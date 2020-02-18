<?php //var_dump($person); ?>

<?php if (!empty($person)){

echo "<form>";
	echo "<input value = ".$person['id']." name = 'id'>";
	echo "<input value = ".$person['name']." name = 'name'>";
	echo "<input value = ".$person['phone']." name = 'phone'>";
	echo "<input value = ".$person['mail']." name = 'mail'>";

	echo "<input value = 'person' name = 'controller' type = 'hidden'>";
	echo "<input value = 'update' name = 'action' type = 'hidden'>";
	echo "<input value = 'Ok' type = 'submit' onclick = 'return confirm(\"Are you sure?\")'>";
echo "</form>";

} else {
	echo "Err";
}