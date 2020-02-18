<div class = "form">
<form>
	<div> Add new form: </div>
	<div style = "color: red; text-align: center" >
		<?php if(isset($_GET['ername']) and $_GET['ername'] == 'ername') echo "<div>Wrong username</div>" ?>
	</div>
	<input value = '<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>' name = 'name' placeholder='Name' autofocus required>

	<div style = "color: red; text-align: center" >
		<?php if(isset($_GET['erphone']) and $_GET['erphone'] == 'erphone') echo "<div>Wrong phone</div>" ?>
	</div>
	<input value = '<?php if(isset($_GET["phone"])) echo $_GET["phone"]; ?>' name = 'phone' placeholder="Phone">;

	<div style = "color: red; text-align: center" >
		<?php if(isset($_GET['ermail']) and $_GET['ermail'] == 'ermail') echo "<div>Wrong mail</div>" ?>
	</div>
	<input value = '<?php if(isset($_GET["mail"])) echo $_GET["mail"]; ?>' name = 'mail' placeholder="Mail">

	<input type = 'hidden' value = 'person' name = 'controller'>
	<input type = 'hidden' value = 'insert' name = 'action'>
	<input type = 'submit' value = 'Insert' name = 'submit-insert'>
</form>
</div
