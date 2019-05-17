<?php

//$_POST $_GET $_SESSION
session_start();
include_once('top-part.php');?>
	<title>Josh Thomas | Shop</title>
	<script type="text/javascript">
		var priceArray = {s1:17.00, s2:22.50, s3:26.75};	
			// This function calculates a price for each please like me season 
			function calculatePrice() 
			{
			  var qty = 0;
			  var subtotal = 0;
			  var total = 0;
			  for(i in priceArray){
			  	qty = parseInt(document.getElementById('plmq'+i).value);
			  	subtotal = qty * priceArray[i];
		
			  	document.getElementById('plmsub'+i).value= subtotal.toFixed(2);
			  	total += subtotal;
			  }

			  document.getElementById('totalPrice').value = total.toFixed(2);
			  
			  return true;
			}
	</script>
<?php include_once('mid-part.php'); ?>
<main>
	<form action = "cart.php" name="checkout" method = "post" target = "_blank">
		<div class="season_info">
			<!--http://covers.booktopia.com.au/big/9317731097379/please-like-me.jpg-->
			<img src = "images/season1.jpg" title="Season 1" alt = " Please Like Me Season 1" id="plmS1" width="200" height="282"/>
			<div class="purchase_info">
				<br>
				Price: $17.00
				<br>
				<br>
				Quantity: <input class="qty" name = "plm[s1]" id = "plmqs1" type="number" oninput = 'calculatePrice()' value="0" min="0" max="5">
				<br>
				<br>
				Disc Format:
				<select name = "media[s1]">
						<option value = "DVD"> DVD </option>
						<option value = "BluRay"> Blue-Ray </option>
				</select>
				<br>
				<br>
				App Stores:
				<!--https://www.iconfinder.com/icons/1314287/android_apps_brand_google_logo_play_store_icon#size=128-->
				<a href="https://play.google.com/store/tv/show?id=ntS8mOXGJDo&cdid=tvseason-SM5HtcrL0ERLDDoLRXVA4A&gdid=tvepisode-xXbd1qgHO9A&hl=en" target = "_blank"><img src = "images/google.png" height = "50" width = "50" title="Google Play" alt="Google Play"/></a>
				<!--https://www.iconfinder.com/icons/1314239/app_apple_display_itunes_music_service_store_icon#size=128-->
				<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-1/id616877503" target = "_blank"><img src = "images/itunes.png" title="iTunes Store" alt="iTunes Store" height = "50" width = "50"/></a>
				<br>
				<br>
				Subtotal: <input readonly class="qty" id = "plmsubs1" name="plmsubs1" value="0" type="text">
			</div>
			<h4>Season 1: Please Like Me<br></h4>
			<h4>Description</h4>
			<!--https://shop.abc.net.au/products/please-like-me-dvd-s1-->
			<p>
				Based on the award-winning comedy of Josh Thomas, the six-part series is about cavoodles, custard tarts, boyfriends and girlfriends. Mostly, though, it’s about growing up quickly and realising that your parents are not heroes, but big dopes with no idea what’s going on – just like you. 
			</p>
			<details>
				<summary>More Details...</summary>
				<!--https://itunes.apple.com/au/tv-season/please-like-me-season-1/id616877503-->
				<p>
					With his 21st birthday just around the corner, life finally seems to be coming together for Josh (Josh Thomas). But the events of one day throw his world into chaos.(Wade Briggs). It’s all a bit more than Josh had planned for - which was just to plate up a tasty dinner.
				</p>
			</details>
		</div>
		<div class="season_info">
			<!--http://covers.booktopia.com.au/big/9317731110108/please-like-me.jpg-->
			<img src = "images/season2.jpg" title="Season 2" alt = " Please Like Me Season 2" id="plmS2" width="200" height="282"/>
			<div class="purchase_info">
				<br>
				Price: $22.50
				<br>
				<br>
				Quantity: <input class="qty" name = "plm[s2]" id = "plmqs2" type="number" oninput = 'calculatePrice()' value="0" min="0" max="5">
				<br>
				<br>
				Disc Format:
				<select name = "media[s2]">
						<option value = "DVD"> DVD </option>
						<option value = "BluRay"> Blue-Ray </option>
				</select>
				<br>
				<br>
				App Stores:
				<!--https://www.iconfinder.com/icons/1314287/android_apps_brand_google_logo_play_store_icon#size=128-->
				<a href="https://play.google.com/store/tv/show?id=ntS8mOXGJDo&cdid=tvseason-SM5HtcrL0ERLDDoLRXVA4A&gdid=tvepisode-xXbd1qgHO9A&hl=en" target = "_blank"><img src = "images/google.png" height = "50" width = "50" title="Google Play" alt="Google Play"/></a>
				<!--https://www.iconfinder.com/icons/1314239/app_apple_display_itunes_music_service_store_icon#size=128-->
				<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-2/id906508728" target = "_blank"><img src = "images/itunes.png" title="iTunes Store" alt="iTunes Store" height = "50" width = "50"/></a>
				<br>
				<br>
				Subtotal: <input readonly class="qty" id = "plmsubs2" name = "plmsubs2" value="0" type="text">
			</div>
			<h4>Season 2: Please Like Me<br></h4>
			<h4>Description</h4>
			<p>
				The coming-of-age comedy returns having received critical acclaim in Australia and the USA, where it was hailed as “best new comedy”. The award-winning Please Like Me is back for a second season, written by and starring Josh Thomas.
			</p>	
			<details>
				<summary>More Details...</summary>
				<!--https://itunes.apple.com/au/tv-season/please-like-me-season-2/id906508728-->
				<p>
					In Season Two, Josh tries to get through the day without upsetting anyone. There's a new dog, a new rabbit and a new baby. There’s no big twist.It isn't Lost.
				</p>
			</details>
		</div>
		<div class="season_info">
			<!--http://covers.booktopia.com.au/big/9317731117909/please-like-me.jpg-->
			<img src="images/season3.jpg" title="Season 3" alt=" Please Like Me Season 3" id="plmS3" width="200" height="282"/>
			<div class="purchase_info">
				<br>
				Price: $26.75
				<br>
				<br>
				Quantity: <input class="qty" name = "plm[s3]" id = "plmqs3" type="number" oninput = 'calculatePrice()' value="0" min="0" max="5">
				<br>
				<br>
				Disc Format:
				<select name = "media[s3]">
						<option value = "DVD"> DVD </option>
						<option value = "BluRay"> Blue-Ray </option>
				</select>
				<br>
				<br>
				App Stores:
				<!--https://www.iconfinder.com/icons/1314287/android_apps_brand_google_logo_play_store_icon#size=128-->
				<a href="https://play.google.com/store/tv/show?id=ntS8mOXGJDo&cdid=tvseason-SM5HtcrL0ERLDDoLRXVA4A&gdid=tvepisode-xXbd1qgHO9A&hl=en" target = "_blank"><img src = "images/google.png" height = "50" width = "50" title="Google Play" alt="Google Play"/></a>
				<!--https://www.iconfinder.com/icons/1314239/app_apple_display_itunes_music_service_store_icon#size=128-->
				<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-3/id1047334958" target = "_blank"><img src = "images/itunes.png" title="iTunes Store" alt="iTunes Store" height = "50" width = "50"/></a>
				<br>
				<br>
				Subtotal: <input readonly class="qty" id = "plmsubs3" name = "plmsubs3" value="0" type="text">
			</div>
			<h4>Season 3: Please Like Me<br></h4>
			<h4>Description</h4>
			<!--https://shop.abc.net.au/products/please-like-me-s3-2dvd-->
			<p>
				Kicking off with a half-hour romcom and ending with an unforgettable family Christmas lunch, this season is filled with food, sex, drugs, dancing, singing, secrets and a transgender chicken.
			</p>
			<details>
				<summary>More Details....</summary>
				<!--https://itunes.apple.com/us/tv-season/please-like-me-season-3/id1041583976-->
				<p>
					The award-winning comedy/drama Please Like Me, created by Josh Thomas, is back, as an unconventionally astute twentysomething makes sense of his friends and family and a cast of intriguing characters competes for screen time with John the Cavoodle.
				</p>
			</details>
		</div>
		<div id="total">
			<label></label>Total: <input readonly class="qty" id = "totalPrice" name = "totalPrice" type="text" value="0" oninput = 'calculatePrice()'>
			<br>
			<br>
			<label></label><input id="submit" type = "submit" value = "Submit">
		</div>
	</form>
</main>

<?php include_once('end-part.php'); ?>

