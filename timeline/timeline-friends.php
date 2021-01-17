							<div id="friend-section" class="col-lg-6">
								<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>55</span></li>
											 <?php 
											 	if (!isset($_GET['pepl'])) {
											 		
											  ?>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>60</span></li>
											<?php } ?>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active fade show " id="frends" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											
										</ul>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
										  </div>
										  <?php 
											 	if (!isset($_GET['pepl'])) {
											 		
											  ?>
										  <div class="tab-pane fade" id="frends-req" >
											<ul class="nearby-contct">
	<!-- ********    SELECT FRIENDS REQUEST *********** -->
			<?php 
				$query = "SELECT * FROM friend_requests INNER JOIN users ON friend_requests.req_sender = users.id WHERE req_receiver = '$userId' ORDER BY friend_requests.id DESC  "; 
				$sql = mysqli_query($con, $query);
				while ($result = mysqli_fetch_assoc($sql)) {

				
			 ?>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="<?php echo base_url ?>/uploads/<?php echo $result['profile_pic'] ?>" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="<?php echo base_url ?>timeline?pepl=<?php echo $result['id'] ?>" title=""><?php echo $result['name'] ?></a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>	
<?php } ?>
											
										</ul>	
											  <button class="btn-view btn-load-more"></button>
										</div>
									<?php } ?>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->