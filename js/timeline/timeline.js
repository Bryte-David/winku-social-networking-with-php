var aboutSection = document.getElementById('about-section');
var addPostSection = document.getElementById('add-post-section');
var timelinePhotosSection = document.getElementById('timeline-photos-section');
var timelineMoreSection = document.getElementById('more-section');
var timelineFriendsSection = document.getElementById('friend-section');

//disabling the publish is the content and image are empty
document.getElementById('postbtn').onclick = function post() {
	var cont = document.getElementById("content").value;
	var img  = document.getElementById("img").value;
	var ext = img.slice(img.length-4, img.length);

	if (cont == "" && img == "") {
		return false;
	}
}



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



// window.onload = () =>{
// 	showTimeline();
// }

