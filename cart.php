<?php session_start();?>
<?php include_once('top-part.php'); ?>
	<title>Cart Page</title>
<?php $_SESSION['media'] = $_POST['media']; ?>
<?php
	$products = array('s1' => 'Please Like Me Season 1','s2' => 'Please Like Me Season 2','s3' => 'Please Like Me Season 3');
	$prices = array('s1' => 17.00,'s2' => 22.50,'s3' => 26.75);

	$total=0;
?>
<?php
	if (isset($_POST['plm']) && !empty($_POST['plm'])) {
	    // check each quantity in a foreach loop
	    foreach($_POST['plm'] as $season => $quantity){
	        // if data bad, redirect back to shop: header("Location: shop.php");
	        if (is_int($quantity)&& $quantity < 0 || $quantity > 5){
	            header("Location: shop.php");
	        }
	        // add good quantities from POST[plm] items to the cart
	        else{
	            $_SESSION['cart'][$season] = $_POST['plm'][$season];
	        }
	    }
	} else if(isset($_POST['delete'])) {
	              // unset the cart item corresponding to the value of the $_POST['delete'], ie s1, s2 or s3
	              unset($_SESSION['cart'][$_POST['delete']]);
	              }
?>
<?php include_once('mid-part.php'); ?>
<main>
	<form action = "cart.php" name="cart" method = "post" target = "_blank">
		<h4>Cart Summary</h4>
		<table id = "table" width="50%" cellspacing="20" cellpadding="5">
			<tr>
				<td><h4>Product</h4></td>
				<td><h4>Disc Format</h4></td>
				<td><h4>Price</h4></td>
				<td><h4>Quantity</h4></td>
				<td><h4>Total</h4></td>
				<td></td>
			</tr>
		<?php
			foreach($_SESSION['cart'] as $season => $qty){
				echo "<tr><td>".$products[$season]."</td>";
				echo "<td>".$_SESSION['media'][$season]."</td>";
				printf("<td>$%1.2f</td>",$prices[$season]);
				echo "<td>".$qty."</td>";
				$subtotal = $qty * $prices[$season];
				printf("<td>$%1.2f</td>",$subtotal);
				echo "<td><button type='submit' name='delete' value='$season'>Remove</button></td></tr>";
					$total += $subtotal;
		}
			printf("<td colspan='4'><h4>Final Order Total:<h4></td><td>$%1.2f</td>",$total);

			echo "<td></form><form action = 'checkout.php' name='checkout' method = 'post' target = '_blank'><button type='submit' name='checkout' value='checkout'>checkout</button></form></td>";
		?>
		</table>
	</form>
</main>
<?php include_once('end-part.php'); ?>

