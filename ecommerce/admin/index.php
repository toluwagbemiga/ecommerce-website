<?php include 'header.php'; ?>
<main>
	<div class="container">
		<div class="card bg-warning" style="float: left; margin-right: 8%;">
			<div class="text-header">
				<a href="">More info &plus;</a>
			</div>
			<div class="text-content">
				<?php
					$sql = "SELECT COUNT(item_id) AS item FROM items; ";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
				?>
				<h3><?php echo $row['item']; ?></h3>
				<p>Total Number of Items</p>
			</div>			
		</div>
		<div class="card bg-warning" style="float: left; margin-right: 8%;">
			<div class="text-header">
				<a href="">More info &plus;</a>
			</div>
			<div class="text-content">
				<?php
					$sql = "SELECT COUNT(order_id) AS qty FROM orders";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
				?>
				<h3><?php echo $row['qty'] . " Items"; ?></h3>
				<p>Total Number of Orders</p>
			</div>			
		</div>
		<div class="card bg-warning" style="float: left; margin-right: 8%;">
			<div class="text-header">
				<a href="">More info &plus;</a>
			</div>
			<div class="text-content">
				<?php
					$sql = "SELECT SUM(order_total_amt) AS price FROM `orders`; ";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
				?>
				<h3>&#8369; <?php echo $row['price']; ?>.00</h3>
				<p>Total Sales</p>
			</div>			
		</div>
		<div class="card bg-warning" style="float: left; margin-right: 8%;">
			<div class="text-header">
				<a href="">More info &plus;</a>
			</div>
			<div class="text-content">
				<?php
					$sql = "SELECT COUNT(user_id) AS user FROM users WHERE usertype = 'shipper'; ";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
				?>
				<h3><?php echo $row['user']; ?></h3>
				<p>Total Number of Customers</p>
			</div>			
		</div>
		<div class="card bg-warning" style="float: left;">
			<div class="text-header">
				<a href="">More info &plus;</a>
			</div>
			<div class="text-content">
				<?php
					$sql = "SELECT COUNT(user_id) AS ship FROM users WHERE usertype = 'shipper'; ";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
				?>
				<h3><?php echo $row['ship']; ?></h3>
				<p>Total Number of Shippers</p>
			</div>			
		</div>
	</div>
</main>