<?php session_start();?>
<?php include_once('top-part.php'); ?>
<?php
	$products = array('s1' => 'Please Like Me Season 1','s2' => 'Please Like Me Season 2','s3' => 'Please Like Me Season 3');
	$prices = array('s1' => 17.00,'s2' => 22.50,'s3' => 26.75);
	$total=0;
?>
<?php
	$expires = \DateTime::createFromFormat('my', $_POST['exMonth'].$_POST['exYear']);
	$now     = new \DateTime();

	if ($expires < $now) {
    // expired card will redirect the customer back to checkout page
	header("Location: checkout.php");
	}
?>
<?php 
	$ccard = $_POST['card'];
	 if (!preg_match('/^[0-9\s?\-\/]{13,18}$/',$ccard))
    {
    	// invalid card match will redirect the customer back to checkout page
		header("Location: checkout.php");
    }
?>
<body>
<?php
	if(isset($_POST['firstName'])){
		$firstName = $_POST['firstName'];
		$handle = fopen('orders.txt', 'a');
		fwrite($handle, "Order Details"."\n");
		fwrite($handle, "First Name:"."\t".$firstName."\n");
	}
	
	if(isset($_POST['lastName'])){
		$lastName = $_POST['lastName'];
		fwrite($handle, "Last Name:"."\t".$lastName."\n");
	}

	if(isset($_POST['address'])){
		$address = $_POST['address'];
		fwrite($handle,"Address:"."\t".$address."\n");
	}

	if(isset($_POST['e_address'])){
		$e_address = $_POST['e_address'];
		fwrite($handle,"Email Address:"."\t".$e_address."\n");
	}

	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		fwrite($handle,"Phone:"."\t"."\t".$phone."\n");
	}
	
	// how to extract option from delivery method????
	if(isset($_POST['deliveryMethod'])){
		$deliveryMethod = $_POST['deliveryMethod'];
		fwrite($handle, "Delivery Price:"."\t".$deliveryMethod."\n");
		//fclose($handle);
	}

	echo "Customer Receipt";
	echo"<br>";
	echo"---------------------------------------------------";
	echo "<br>";
	echo "Name:"."\n".$firstName."\n".$lastName;
	echo "<br>";
	echo "Address:"."\n".$address;
	echo "<br>";
	echo "Phone:"."\n".$phone;
	echo "<br>";
	echo "Email Address: "."\n".$e_address;
	echo "<br>";
	echo"---------------------------------------------------";
	foreach($_SESSION['cart'] as $season => $qty){
				echo"<br>";
				echo "Product Name: " .$products[$season]."<br>";
				//new lines
				$prod = $products[$season];
				fwrite($handle, "Product Name:".$prod."\n");

				echo "Media Type: ".$_SESSION['media'][$season]."<br>";
				$media = $_SESSION['media'][$season];
				fwrite($handle, "Media Type:".$media."\n");
				printf("Product Price: $%1.2f",$prices[$season]);
				$price = $prices[$season];
				fwrite($handle, "Product Price:"."$".$price."\n");
				echo "<br>";
				echo "Quantity: ".$qty."<br>";
				fwrite($handle,"Quantity: ".$qty."\n");
				$subtotal = $qty * $prices[$season];
				printf("Subtotal Price: $%1.2f",$subtotal);
				fwrite($handle, "Subtotal: "."$".$subtotal."\n");
					$total += $subtotal;
				echo"<br>";
				echo"---------------------------------------------------";
		}
		$total += $_POST['deliveryMethod'];
			echo"<br>";
			printf("Final Order Total:$%1.2f",$total);
			echo"<br>";
			echo"---------------------------------------------------";

	fwrite($handle, "Final Order Total:"."$".$total."\n");
	fclose($handle);
?>
<?php
	// unset the cart when order finalised
	if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
		// unset the cart items
	    unset($_SESSION['cart']);
	    unset($_SESSION['media']);
	}
?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</body>
</html>
