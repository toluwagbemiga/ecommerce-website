<?php include 'header.php'; ?>
<section id="cart_items">
		<div class="container">
			<h1>Customers</h1>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="quantity">Name</td>
							<td class="name">Usename</td>
							<td class="price">Address</td>
							<td class="quantity">Contact Number</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php


						$sql = "SELECT * FROM `users` WHERE `usertype` = '';";
						$query = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($query)) {
							$fname = $row['firstname'];
							$lname = $row['lastname'];
							$user = $row['username'];
							$address = $row['address'];
							$num = $row['user_contact'];
							
					?>

					<tr>

						<td>
							<?php echo $fname . " " . $lname; ?>
						</td>
						<td>
							<?php echo $user; ?>
						</td>
						<td>
							<?php echo $address; ?>
						</td>
						<td>
							<?php echo $num; ?>
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