							
							<div id="add-post-section" class="col-lg-6">
								<div class="loadMore">
									<?php 
										if (!isset($_GET['pepl'])) {
																
										?>
										<?php echo $posted; ?>
									<div class="central-meta item">
										
										<div class="new-postbox">
											<figure>
												<img src="../uploads/<?php echo $profile_pic ?>" alt="">
											</figure>
											<div class="newpst-input">
												<form method="POST" enctype="multipart/form-data">
													<textarea rows="2" id="content" name="content" placeholder="write something"></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input id="img" name="img" type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input name="vid" type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<button id="postbtn" name="publish" type="submit">Publish</button>
															</li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->
<?php } ?>

<?php 
// ********** Get other users post when you visit their timeline ******//

if (isset($_GET['pepl'])) {
	$id = $_GET['pepl'];

	$sel = mysqli_query($con, "SELECT * FROM posts INNER JOIN users ON posts.userId = users.id WHERE userId = '$id' ORDER BY date_posted DESC ");

	if (mysqli_num_rows($sel) > 0) {
		while ($res = mysqli_fetch_assoc($sel)) {
			
		}
	}else{
		echo "No Post";
	}

}else{
//*********** Get the signed in user publised post *************////
$select = mysqli_query($con, "SELECT * FROM posts INNER JOIN users ON posts.userId = users.id WHERE userId = '$userId' ORDER BY date_posted DESC ");
if (mysqli_num_rows($select) > 0) {
	while ($row = mysqli_fetch_assoc($select)) {
		

 ?>
									
										
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
												<figure>
													<img src=" <?php echo base_url ?>uploads/displaypics/<?php echo $row['profile_pic'] ?>" alt="">
												</figure>
												<div class="friend-name">
													<ins><a href="" title=""><?php echo $row['name'] ?></a></ins>
													<span>published: <?php echo $row['date_posted'] ?></span>
												</div>
												<div class="post-meta">
													<img src="<?php echo base_url ?>/uploads/posts/<?php echo $row['image'] ?>" alt="">
													<div class="description">
														<p>
															<?php echo $row['content'] ?>
														</p>
													</div>
													<div class="we-video-info">
														<ul>
															<li>
																<span class="like" data-toggle="tooltip" title="like">
																	<i class="ti-heart"></i>
																	<ins>2.2k</ins>
																</span>
															</li>
															<li>
																<span class="comment" data-toggle="tooltip" title="Comments">
																	<i class="fa fa-comments-o"></i>
																	<ins>52</ins>
																</span>
															</li>
															
															<li>
																<span class="dislike" data-toggle="tooltip" title="dislike">
																	<i class="ti-heart-broken"></i>
																	<ins>200</ins>
																</span>
															</li>
															<li class="social-media">
																<div class="menu">
																  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																	</div>
																  </div>
																	<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																	</div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																	</div>
																  </div>

																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="coment-area">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="images/resources/comet-1.jpg" alt="">
														</div>
														<div class="we-comment">
															<div class="coment-head">
																<h5><a href="time-line.html" title="">Jason borne</a></h5>
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
															</div>
															<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
														</div>
														<ul>
															<li>
																<div class="comet-avatar">
																	<img src="images/resources/comet-2.jpg" alt="">
																</div>
																<div class="we-comment">
																	<div class="coment-head">
																		<h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
																		<span>1 month ago</span>
																		<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																	</div>
																	<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
																</div>
															</li>
															<li>
																<div class="comet-avatar">
																	<img src="images/resources/comet-3.jpg" alt="">
																</div>
																<div class="we-comment">
																	<div class="coment-head">
																		<h5><a href="time-line.html" title="">Olivia</a></h5>
																		<span>16 days ago</span>
																		<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																	</div>
																	<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<div class="comet-avatar">
															<img src="images/resources/comet-1.jpg" alt="">
														</div>
														<div class="we-comment">
															<div class="coment-head">
																<h5><a href="time-line.html" title="">Donald Trump</a></h5>
																<span>1 week ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
															</div>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
																<i class="em em-smiley"></i>
															</p>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">more comments</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="images/resources/comet-1.jpg" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<span class="em em-expressionless" title="add icon"></span>
																</div>
																<div class="smiles-bunch">
																	<i class="em em---1"></i>
																	<i class="em em-smiley"></i>
																	<i class="em em-anguished"></i>
																	<i class="em em-laughing"></i>
																	<i class="em em-angry"></i>
																	<i class="em em-astonished"></i>
																	<i class="em em-blush"></i>
																	<i class="em em-disappointed"></i>
																	<i class="em em-worried"></i>
																	<i class="em em-kissing_heart"></i>
																	<i class="em em-rage"></i>
																	<i class="em em-stuck_out_tongue"></i>
																</div>
																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
<?php 
 		}
}else{
	echo "no post yet";
}
}

 ?>
			
								</div>
							</div><!-- centerl meta -->
