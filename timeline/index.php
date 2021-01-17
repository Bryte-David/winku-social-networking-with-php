<?php 
include '../header.php';
include '../connection.php';
include '../utils/update-profile.php';
include '../utils/update-photo.php';
include '../utils/publish-post.php';


// fetching the user details
$userId = $_SESSION['uid'];

$query = "SELECT * FROM users WHERE id = '$userId' ";
$sql = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($sql);
$name = ucwords($result['name']);
$username = ucwords($result['username']);
$email = $result['email'];
$phone = $result['phone'];
$dob = $result['dob'];
$gender = $result['gender'];
$city = $result['city'];
$country = $result['country'];
$about_me = $result['about_me'];
$profile_pic = $result['profile_pic'];
$cover_pic = $result['cover_pic'];

?>



<?php 
//fetching others users details

if (isset($_GET['pepl'])) {
	$id = $_GET['pepl'];
	$select = "SELECT * FROM users WHERE id = '$id' ";
	$query = mysqli_query($con, $select);
	$row = mysqli_fetch_assoc($query);
	$name = ucwords($row['name']);
	$username = ucwords($row['username']);
	$email = $row['email'];
	$phone = $row['phone'];
	$dob = $row['dob'];
	$gender = $row['gender'];
	$city = $row['city'];
	$country = $row['country'];
	$about_me = $row['about_me'];
	$profile_pic = $row['profile_pic'];
	$cover_pic = $row['cover_pic'];

}

 ?>
	<section>
		<div class="feature-photo">
			<figure >
				
				<img style="width: 1366px; height: 400px" src="<?php echo base_url ?>uploads/coverpics/<?php echo $cover_pic; ?>" alt="">
			</figure>
			<div class="add-btn">
				<span>1205 friends</span>
<?php 
//^^^^^^^^^^ Something to show when a user is friends with another user ******************//
				if (isset($_GET['pepl'])) {
					$id = $_GET['pepl'];

					$getFriends = mysqli_query($con, "SELECT * FROM friends_list WHERE (user_id = '$userId' AND friends_id = '$id') OR (user_id = '$id' AND friends_id = '$userId') ");
					if (mysqli_num_rows($getFriends) == 1) {

?>
				 <button class="btn btn-success" id="unfriendbtn"  title="" data-ripple="">Unfriend</button>
<?php 
				}else{

?>
				<button class="btn btn-primary" title="" id="addbtn" onclick="sendFriendsReq(<?php echo $id ?>)" data-ripple="">Add Friend</button>
<?php  

				} 
			} 

?>

<?php 
					//change button to cancel request after adding friend note== sending a request was handle with ajax and javascript, when the page refresh it should still be cancel request 
				if (isset($_GET['pepl'])) {
					$id = $_GET['pepl'];
				
						$getReq = mysqli_query($con,"SELECT * FROM friend_requests WHERE (req_sender = '$userId' AND req_receiver = '$id') OR (req_sender = '$id' AND req_receiver = '$userId') ");
						$res = mysqli_fetch_assoc($getReq);
						// print_r( $res);
								if(@$res['req_sender'] == $userId){
?>
								<button class="btn btn-primary" id="cancelbtn" onclick="cancelSentReq(<?php echo $id ?>)" title="" data-ripple="">Cancel Request</button>

<?php
						}elseif(@$res['req_receiver'] == $userId) {
							?>
							<button class="btn btn-success" id="acceptbtn" onclick="acceptReq(<?php echo $id; ?>)" title="" data-ripple="">Accept Request</button>
<?php
						}
										
					}

?>
							
					 

			</div>
<?php 
	if (!isset($_GET['pepl'])) {
	
	
 ?>
			<form class="edit-phto" method="POST" enctype="multipart/form-data">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file" name="coverpic" />
				</label>
				<button type="submit" name="cp" class="">upload</button>
				</label>
			</form>
<?php } ?>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure id="fig-dp">
								<img style="width: 195px; height: 182px" src="<?php echo base_url ?>uploads/displaypics/<?php echo $profile_pic; ?>" alt="">
<?php 
	if (!isset($_GET['pepl'])) {
 ?>
								<form class="edit-phto" method="POST" enctype="multipart/form-data">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
											<input type="file" name="displaypic" />
										</label>
										<button type="submit" name="dp" class="">upload</button>
									</label>
								</form>
<?php } ?>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5><?php echo $name; ?></h5><p id="demo"></p>
								  <span><?php echo "@".$username; ?></span>
								</li>
								<li>
									<a class="" id="showtimeline" type="button" title="" data-toggle="tab" data-ripple="">time line</a>
									<a class="" type="button" id="showphotos" title="" data-ripple="">Photos</a>
									<a class="" type="button" id="showvideos" title="" data-ripple="">Videos</a>
									<a class="" type="button" id="showfriends" title="" data-ripple="">Friends</a>
									<a class="" type="button" id="showgroup" title="" data-ripple="">Groups</a>
									<a class="" type="button" id="showabout"  title="" data-ripple="">about</a>
							<?php 
								if (!isset($_GET['pepl'])) {
									echo '<a class="" type="button" id="showmore" title="" data-ripple="">more</a>';
								}
								else{};
							?>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									
								</aside>
							</div>
							
							<?php include 'add-post.php'; ?>
							<?php include 'timeline-photos.php'; ?>
							<?php include 'timeline-videos.php'; ?>
							<?php include 'timeline-friends.php'; ?>
							<?php include 'about.php'; ?>
							<?php 
								if (!isset($_GET['pepl'])) {
									include 'timeline-more.php';
								}
								else{};
							 ?>
							

							
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<script type="text/javascript">
		var aboutSection = document.getElementById('about-section');
var addPostSection = document.getElementById('add-post-section');
var timelinePhotosSection = document.getElementById('timeline-photos-section');
var timelineMoreSection = document.getElementById('more-section');
var timelineFriendsSection = document.getElementById('friend-section');

document.getElementById("showtimeline").onclick = function showTimeline(){
	//use ajax and file get content instead of this
	addPostSection.style.display = "block";
	aboutSection.style.display = "none";
	timelinePhotosSection.style.display = "none";
	timelineMoreSection.style.display = "none";
	timelineFriendsSection.style.display = "none";
}

document.getElementById("showphotos").onclick = function showPhotos(){
	timelinePhotosSection.style.display = "block";
	addPostSection.style.display = "none";
	aboutSection.style.display = "none";
	timelineMoreSection.style.display = "none";
	timelineFriendsSection.style.display = "none";
}

document.getElementById("showabout").onclick =  function showAbout(){
	aboutSection.style.display = "block";
	timelinePhotosSection.style.display = "none";
	addPostSection.style.display = "none";
	timelineMoreSection.style.display = "none";
	timelineFriendsSection.style.display = "none";
}

document.getElementById("showfriends").onclick =  function showFriends(){
	timelineFriendsSection.style.display = "block";
	aboutSection.style.display = "none";
	timelinePhotosSection.style.display = "none";
	addPostSection.style.display = "none";
	timelineMoreSection.style.display = "none";
}

document.getElementById("showvideos").onclick = function showVideos() {
	alert("videos")
}

document.getElementById("showmore").onclick = function showMore(){
	timelineMoreSection.style.display = "block";
	aboutSection.style.display = "none";
	timelinePhotosSection.style.display = "none";
	addPostSection.style.display = "none";
	timelineFriendsSection.style.display = "none";
}



	</script>



 <?php 
include '../footer.php';
  ?>