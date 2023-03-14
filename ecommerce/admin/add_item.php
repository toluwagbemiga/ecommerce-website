<?php
	include 'header.php';
	include '../core/connect.php';

?>		


				<div class="col-sm-5">
					<div class="signup-form"><!--sign up form-->
						<h2>Add New Item</h2>

						<form action="add_item.php" method="POST" >
							
							<input type="text" name="item_name" placeholder="Item Name">
							<input type="text" name="item_desc" placeholder="Item Description"><input type="file" name="img">
							<input type="number" name="item_price" placeholder="Item Price">
							<select name="cat">
								<option selected="">Choose a Category</option>
								<?php
									$sql = "SELECT * FROM `category`";
									$query = mysqli_query($conn, $sql);
									$count = mysqli_num_rows($query);

									while ($row = mysqli_fetch_array($query)) {
										
								?>
								<option value="<?php $row['cat_id'] ?>"><?php echo $row['category_desc'] ?></option>
								<?php
									}
								?>
							</select><br><br>
							<input type="submit" name="add" value="Add Item">
						</form>
						
					</div><!--/sign up form-->
				</div>

<?php
	if (isset($_POST['add'])) {
		$name = $_POST['item_name'];
		$desc = $_POST['item_desc'];
		$img = $_FILES['img'];
		$price = $_POST['item_price'];
		$cat = $_POST['cat'];

		$pname = $img['name'];
		$tname = $img['tmp_name'];

		$upload_dir = "../images/". $pname;
		move_uploaded_file($tname, $upload_dir);

		$sql = "INSERT INTO `items` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`, `item_category_id`) VALUES (NULL, '$name', '$desc', '$pname', '$price', '$cat');";

		if(mysqli_query($conn, $sql)){
			header("Location: items.php");
		}else{
			echo "ERROR " . $sql . "<br>" . mysqli_error($conn); 
		}
	}
?>