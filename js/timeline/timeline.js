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


function showCp(){
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "../utils/getProfilePic.php?pic=cp");
	ajax.onreadystatechange == function(){
		if (this.readyState == 4 && this.status == 200) {
			let response = this.responseText;
			console.log(response);
		}
	}
	ajax.send();
}

// var updatebtn = document.getElementById('update-btn');
// updatebtn.addEventListener('click', updateDetails);

// function updateDetails(){
// 	var ajax = new XMLHttpRequest();
// 	ajax.open("POST", "../utils/update-profile.php");
// 	ajax.onreadystatechange = function (event) {
// 	if (event.target.readyState == 4 && event.target.status == 200) {
//             let response = event.target.responseText;
//             console.log(response);
//         }
// 	}
// 	ajax.send();
// }

// document.getElementById("showphotos").onclick = function showPhotos(){
// 	let photos = document.getElementById('timeline-photos-section');
// 	let ajax = new XMLHttpRequest();
// 	console.log(ajax);
// 	ajax.open("GET", "../utils/navigate.php/?req=photos");
// 	ajax.onreadystatechange = function(){
// 		if (this.readyState == 4 && this.status == 200) {
// 			let response = this.responseText;
// 			document.getElementById("page").innerHTML = response;
// 			console.log(response);
// 		}
// 	}
// 	ajax.send();
// }


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



window.onload = () =>{
	showTimeline();
}

