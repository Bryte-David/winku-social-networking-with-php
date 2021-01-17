
// *****  FUNCTION TO SEND FRIENDS REQUEST ***** //

let theResonse = ''; 
 function sendFriendsReq(id) {
 	var ajax = new XMLHttpRequest();
 	ajax.open("GET", "../utils/addFriend.php?uid="+id);
 	ajax.onreadystatechange = function(){
 		if (this.readyState == 4 && this.status == 200) {
 			if (this.responseText == "Request Sent") {
 				changeBtn("addbtn", "Cancel Request");
 			}
 			
 		}
 	}
 	ajax.send();
}

// ****** FUNCTION TO CANCEL ALREADY SENT REQUEST

function cancelSentReq(id){
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "../utils/cancelFriendsReq.php?uid="+id);
	ajax.onreadystatechange = function(){
 		if (this.readyState == 4 && this.status == 200) {
 			if (this.responseText == "Deleted") {
 				changeBtn("cancelbtn", "Add Friend");
 			}
 			
 		}
 	}
 	ajax.send();
}


// ****** FUNCTION TO ACCEPT ALREADY SENT REQUEST

function acceptReq(id){
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "../utils/acceptFriendsReq.php?uid="+id);
	ajax.onreadystatechange = function(){
 		if (this.readyState == 4 && this.status == 200) {
 			console.log(this.responseText)
 			if (this.responseText == "Accepted") {
 				changeBtn("acceptbtn", "Unfriend");
 			}
 			
 		}
 	}
 	ajax.send();
}





// CHANGE THE BUTTON TEXT //
function changeBtn(btnId, text){
	document.getElementById(btnId).innerHTML = text;
}

