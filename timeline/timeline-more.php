
							<div id="more-section" class="col-lg-6">
								<div class="central-meta">
									<div class="about">
										<div class="personal">
											<h5 class="f-title"><i class="ti-info-alt"></i> Edit Info</h5>
										</div>
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
												</li>
												<li class="nav-item">
													<a href="#location" class="nav-link" data-toggle="tab" >Education & Work</a>
												</li>
												<li class="nav-item">
													<a href="#interest" class="nav-link" data-toggle="tab"  >interests</a>
												</li>
												<li class="nav-item">
													<a href="#lang" class="nav-link" data-toggle="tab" >Account
													 Setting</a>
												</li>
												<li class="nav-item">
													<a href="#lang" class="nav-link" data-toggle="tab" >Change Password</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="basic" >
													<ul class="basics">
														<?php include 'edit-profile-basic.php'; ?>
													</ul>
												</div>
												<div class="tab-pane fade" id="location" role="tabpanel">
													<div class="location-map">
														<div id="map-canvas"></div>
													</div>
												</div>
												<div class="tab-pane fade" id="work" role="tabpanel">
													<div>
														<?php include 'edit-work-education'; ?>
													</div>
												</div>
												<div class="tab-pane fade" id="interest" role="tabpanel">
													<ul class="basics">
														<li>Footbal</li>
														<li>internet</li>
														<li>photography</li>
													</ul>
												</div>
												<div class="tab-pane fade" id="lang" role="tabpanel">
													<ul class="basics">
														<li>english</li>
														<li>french</li>
														<li>spanish</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->