<?php
require('top.php');

$name = '';
$phone = '';
$image = '';
$address	= '';
$msg = '';
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
	$image_required = '';
	$id = get_safe_value($con, $_GET['id']);
	$res = mysqli_query($con, "select * FROM `order_by_image` where id='$id'");
	$check = mysqli_num_rows($res);
	if ($check > 0) {
		$row = mysqli_fetch_assoc($res);

		$name = $row['name'];
		$phone = $row['phone'];

		$address = $row['address'];
	} else {
		header('location:product.php');
		die();
	}
}

if (isset($_POST['submit'])) {
	$name = get_safe_value($con, $_POST['name']);
	$phone = get_safe_value($con, $_POST['phone']);
	$address = get_safe_value($con, $_POST['address']);

	if (isset($_GET['id']) && $_GET['id'] == 0) {
		if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
			$msg = "Please select only png,jpg and jpeg image formate";
		}
	} else {
		if ($_FILES['image']['type'] != '') {
			if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
				$msg = "Please select only png,jpg and jpeg image formate";
			}
		}
	}

	if ($msg == '') {
		if (isset($_GET['id']) && $_GET['id'] != '') {
			if ($_FILES['image']['name'] != '') {
				$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'media/order/'. $image);
				$update_sql = "update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',address='$address',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image',best_seller='$best_seller',sub_categories_id='$sub_categories_id' where id='$id'";
			} else {
				$update_sql = "update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',address='$address',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',best_seller='$best_seller',sub_categories_id='$sub_categories_id' where id='$id'";
			}
			mysqli_query($con, $update_sql);
		} else {
			$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'media/order/'. $image);
			// mysqli_query($con, "INSERT INTO order_by_image (`name`, `phone`, `image`, `address`, `date`) VALUES ('$name ', '$phone', '$image', '$address', current_timestamp())");
			mysqli_query($con, "INSERT INTO `order_by_image` (`name`, `phone`, `image`, `description`, `date`) VALUES ('$name ', '$phone', '$image','$address ', current_timestamp())");
		}
?>
		<script>
			window.location.href = 'thank_you2.php';
		</script>
<?php
		die();
	}
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header" style="text-align: center;">
						<h2>ORDER YOUR KIRANA BY LIST</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<form method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="categories" class=" form-control-label">Name</label>
			<input type="text" name="name" placeholder="Your good name" class="form-control" required value="<?php echo $name ?>">
		</div>

		<div class="form-group">
			<label for="categories" class=" form-control-label">Phone no.</label>
			<input type="text" name="phone" placeholder="Your exciting phone no.?" class="form-control" required value="<?php echo $phone ?>">
		</div>

		<div class="form-group">
			<label for="categories" class=" form-control-label">Image</label>
			<input type="file" name="image" class="form-control" <?php echo  $image_required ?>>
		</div>

		<div class="form-group">
			<label for="categories" class=" form-control-label">Address</label>
			<textarea name="address" placeholder="Your Address" class="form-control" required><?php echo $address ?></textarea>
		</div>
		<div>
		<button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block" style="background-color:#04AA6D;color:white;border 1px green">
			<span id="payment-button-amount">Place Order</span>
		</button>
		</div>
		<hr/>
		<div class="field_error"><?php echo $msg ?></div>
	</form>
</div>

<?php
require('footer.php');
?>