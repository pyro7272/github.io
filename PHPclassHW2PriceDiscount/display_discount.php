<?php
	//get the data from the from
	$product_description = $_POST['product_description'];
	$list_price = $_POST['list_price'];
	$discount_percent = $_Post['discount_percent'];

	//calculate the discount
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price -$discount;

	//apply currency formatting to the dollar and the percent amounts
	$list_price_formatted = "$".number_format($list_price, 2);
	$discount_percent_formatted = number_format($discount_percent, 1)."%";
	$discount_formatted = "$" .number_format($discount, 2);
	$discount_price_formatted = "$".number_format($discount_price, 2);

	//escape the unformatted input
	$product_description_escaped = htmlspecialchars($product_description);

?>

<!DOCTYPE hmtl>
<html>

<head>
	<title>Product Discount Calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
	<main>
		<h1>Product Discount Calculator</h1>
		
				<label>Product Description:</label>
				
				<label>List Price:</label>

				<label>Standard Discount:</label>

				<label>Discount Amount:</label>

				<label>Discount Price:</label>


	</main>

</body>
</html>

