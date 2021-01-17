							
							<div id="timeline-photos-section" class="col-lg-6">
								<div class="central-meta">
									<ul class="photos">
<?php 
if (isset($_GET['pepl'])) {
	$id = $_GET['pepl'];

	//*********** Get the signed in user uploaded photos *************////
	$select = mysqli_query($con, "SELECT image FROM posts INNER JOIN users ON posts.userId = users.id WHERE userId = '$id' ORDER BY date_posted DESC ");
	if (mysqli_num_rows($select) > 0) {
		while ($row = mysqli_fetch_assoc($select)) {
?>
										<li>
											<a class="strip" href="<?php echo base_url ?>uploads/posts/<?php echo $row['image'] ?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="<?php echo base_url ?>uploads/posts/<?php echo $row['image'] ?>" alt=""></a>
										</li>
<?php 


		}
	}else{
		echo "No Photos Yet";
	}

}else{


//*********** Get the signed in user uploaded photos *************////
$select = mysqli_query($con, "SELECT image FROM posts INNER JOIN users ON posts.userId = users.id WHERE userId = '$userId' ORDER BY date_posted DESC ");
if (mysqli_num_rows($select) > 0) {
	while ($row = mysqli_fetch_assoc($select)) {
		
?>
										<li>
											<a class="strip" href="<?php echo base_url ?>uploads/posts/<?php echo $row['image'] ?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="<?php echo base_url ?>uploads/posts/<?php echo $row['image'] ?>" alt=""></a>
										</li>
<?php 
		}
	}else{
		echo "No Photos Yet";
	}
}


 ?>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->