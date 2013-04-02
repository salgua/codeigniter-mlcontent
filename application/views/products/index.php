<?php
/**
* Mlcontent display products index example
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
	<title>Products</title>
</head>
<body>

<div id="container">
	<h2>List of products</h2>
<?php foreach ($products as $product) :?>
	<li><?php echo $product['id']." - ".mlang($product['ml-content']) //use the default language ?></li>
<?php endforeach; ?>
</div>

</body>
</html>