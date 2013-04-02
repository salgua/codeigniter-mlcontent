<?php
/**
* Mlcontent create product form example
*
* @author Salvatore Guarino
* @link http://www.salgua.com
* @copyright Salvatore Guarino 2013
*
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create product</title>
</head>
<body>

<div id="container">
	<?php echo form_open('products/create'); ?>
	<?php echo form_label('EN', 'ml-content[en]')." ".form_input('ml-content[en]'); ?>
	<?php echo form_label('IT', 'ml-content[it]')." ".form_input('ml-content[it]'); ?>
	<?php echo form_submit('submit', 'Submit!');?>
	<?php echo form_close(); ?>
</div>

</body>
</html>