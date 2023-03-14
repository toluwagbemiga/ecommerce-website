<?php include 'header.php'; ?>

	<section id="cart_items">
		<div class="container">
			<h1>All Orders</h1>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="options">Tracking Number</td>
							<td class="quantity">Customer Name</td>
							<td class="name">Item Name</td>
							<td class="image"></td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="price">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php


						$sql = "SELECT b.item_name, b.item_img, b.item_desc, b.item_price, c.firstname, c.lastname, a.ordertrack_num, a.order_quantity FROM `orders` a JOIN `items` b JOIN `users` c ON a.order_cust_id = c.user_id AND a.order_item_id = b.item_id ORDER BY a.order_id;";
						$query = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($query)) {
							$name = $row['item_name'];
							$img = $row['item_img'];
							$desc = $row['item_desc'];
							$price = $row['item_price'];
							$fname = $row['firstname'];
							$lname = $row['lastname'];
							$track = $row['ordertrack_num'];
							$qty = $row['order_quantity'];
							$total = $price * $qty;
							
					?>

					<tr>
						<td>
							<?php echo $track; ?>
						</td>
						<td>
							<?php echo $fname . " " . $lname; ?>
						</td>
						<td>
							<?php echo $name; ?>
						</td>
						<td>
							<img src="../images/<?=$img?>" alt="itemImage" width="100" height="100">
						</td>
						<td>
							<?php echo $desc; ?>
						</td>
						<td>
							<?php echo "&#8369;" . $price . ".00"; ?>
						</td>
						<td>
							<?php echo $qty; ?>
						</td>
						<td>
							<?php echo "&#8369;" . $total . ".00"; ?>
						</td>
						<td></td>
					</tr>
					<?php
						}
					?>
				</form>
				</tbody>
				</table>
			</div>
		</div>
	</section>