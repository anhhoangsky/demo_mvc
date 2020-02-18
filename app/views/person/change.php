<?php //var_dump($person); ?>

<?php if (!empty($person)){
echo "<div class = 'form'>";
echo "<form>";
	echo "<div> Edit form: </div>";
	echo "<input type = 'hidden' value = ".$person['id']." name = 'id' placeholder='Id'>";

echo	'<div style = "color: red; text-align: center">';
		if(isset($_GET['ername']) and $_GET['ername'] == 'ername') echo "<div>Wrong username</div>";
echo '</div>';
	echo "<input value = ".$person['name']." name = 'name' placeholder='Name' required>";

echo '<div style = "color: red; text-align: center" >'		;
		if(isset($_GET['erphone']) and $_GET['erphone'] == 'erphone') echo "<div>Wrong phone</div>";
echo '</div>';
	echo "<input value = ".$person['phone']." name = 'phone' placeholder='Phone'>";

echo '<div style = "color: red; text-align: center" >';
		if(isset($_GET['ermail']) and $_GET['ermail'] == 'ermail') echo "<div>Wrong mail</div>";
echo '</div>';
	echo "<input value = ".$person['mail']." name = 'mail' placeholder='Mail'>";

	echo "<input value = 'person' name = 'controller' type = 'hidden'>";
	echo "<input value = 'update' name = 'action' type = 'hidden'>";
	echo "<input value = 'Ok' type = 'submit' onclick = 'return confirm(\"Are you sure?\")'>";
echo "</form>";
echo "</div>";
} else {
	echo "Err";
}
