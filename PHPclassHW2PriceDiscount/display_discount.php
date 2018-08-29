<?php
	//get the data from the from
	$product_description = filter_input(INPUT_POST, 'product_description');
	$list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
	$discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);

	//calculate the discount
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price - $discount;
	$tax_rate = $discount_price * .08;
	$post_tax = $tax_rate + $discount_price;

	//apply currency formatting to the dollar and the percent amounts
	$list_price_formatted = "$".number_format($list_price, 2);
	$discount_percent_formatted = number_format($discount_percent, 1)."%";
	$discount_formatted = "$" .number_format($discount, 2);
	$discount_price_formatted = "$".number_format($discount_price, 2);
	$tax_rate_formatted = "$" .number_format($tax_rate, 2);
	$post_tax = "$" .number_format($post_tax, 2);

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
				<span><?php echo htmlspecialchars($product_description_escaped); ?></span><br>
				
				<label>List Price:</label>
				<span><?php echo htmlspecialchars($list_price_formatted); ?></span><br>

				<label>Standard Discount:</label>
				<span><?php echo htmlspecialchars($discount_percent_formatted); ?></span><br>


				<label>Discount Amount:</label>
				<span><?php echo htmlspecialchars($discount_formatted); ?></span><br>


				<label>Discount Price:</label>
				<span><?php echo htmlspecialchars($discount_price_formatted); ?></span><br>

				<label>Tax:</label>
				<span><?php echo htmlspecialchars($tax_rate); ?></span><br>

				<label>Post Tax:</label>
				<span><?php echo htmlspecialchars($post_tax); ?></span><br>


	</main>

</body>
</html>

