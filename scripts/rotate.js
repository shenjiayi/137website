var imageArray = new Array(3);
for(i=0;i<imageArray.length;i++){
	imageArray[i] = "img/printer"+(i+1)+".jpg";
}


var imageCounter=0;
function rotate(){
	var imageObject = document.getElementById('placeholder');
	imageObject.src = imageArray[imageCounter];
	++imageCounter;
	if(imageCounter==3)
		imageCounter=0;
}


function startRotation(){
	document.getElementById('placeholder').src ="img/printer1.jpg";
	setInterval('rotate()',2000);
}