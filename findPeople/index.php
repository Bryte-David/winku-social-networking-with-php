<?php 
include '../header.php';
include '../connection.php';
 ?>
<?php 
	$userId = $_SESSION['uid'];
	$select = "SELECT * FROM users WHERE id != '$userId' ";
	$sql = mysqli_query($con, $select);
	while($result = mysqli_fetch_assoc($sql)){
		
	};
	
	// print_r($result);

?>
 <section>
		<div class="page-header">
			<div class="header-inner">
				<h2>People Nearby</h2>
				<nav class="breadcrumb">
				  <a href="index-2.html" class="breadcrumb-item"><i class="fa fa-home"></i></a>
				  <span class="breadcrumb-item active">People Nearby</span>
				</nav>
			</div>
		</div>
	</section>

<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									
									

								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<!-- <div class="nearby-pepl">
										<div class="nearby-map">
											<div id="map-canvas"></div>
										</div>
									</div> --><!-- near by map -->
									<ul class="nearby-contct">
<?php 
	$userId = $_SESSION['uid'];
	$select = "SELECT * FROM users WHERE id != '$userId' ORDER BY date_created DESC, name ASC ";
	$sql = mysqli_query($con, $select);
	while($result = mysqli_fetch_assoc($sql)){
		$dp =  $result['profile_pic'];
		$name = $result['name'];
		$city = $result['city'];
		$country = $result['country'];
		$id = $result['id'];


?>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="<?php echo base_url ?>timeline/?pepl=<?php echo $id ?>" title=""><img src="<?php echo base_url ?>/uploads/displaypics/<?php echo $dp ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="<?php echo base_url ?>timeline/?pepl=<?php echo $id ?>" title=""><?php echo $name ?></a></h4>
													<!-- <span>ftv model</span> -->
													<em><?php if (!empty($city || $country)) {
														echo '<i class="fa fa-map-marker">';
													} ?></i><?php echo $city.' '. $country; ?></em>
													<a type="button" title=""  class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<?php } ?>

									</ul>
								</div><!-- photos -->
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
																	
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>




<?php 
include '../footer.php';

?>