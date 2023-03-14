<?php include 'header.php'; ?>

	<section id="cart_items">
		<div class="container">
			<a href="add_item.php" style="float: right;">&plus; Add New Item</a>
			<h1>All Items</h1>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="name">Item Name</td>
							<td class="image"></td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Category</td>
							<td class="options" colspan="2">Options</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php


						$sql = "SELECT a.item_name, a.item_img, a.item_desc, a.item_price, b.category_desc FROM `items` a JOIN `category` b ON a.item_category_id = b.cat_id ORDER BY a.item_id;";
						$query = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($query)) {
							$name = $row['item_name'];
							$img = $row['item_img'];
							$desc = $row['item_desc'];
							$price = $row['item_price'];
							$cat = $row['category_desc'];
							
					?>

					<tr>
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
							<?php echo $cat; ?>
						</td>
						<td>
							<a href="">Edit</a>
						</td>
						<td>
							<a href="">Delete</a>
						</td>
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