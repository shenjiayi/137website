var imagecount = 1;
var total = 4;



function slide(x){
	var image = document.getElementById("picture");
	var smallImg = document.getElementById("plane"+imagecount);
	smallImg.style.border = "0px solid black"
	imagecount = imagecount + x;
	if(imagecount>total){
		imagecount=1;
	}
	if(imagecount<1){
		imagecount=total;
	}
	smallImg = document.getElementById("plane"+imagecount);
	smallImg.style.border= "5px solid black";
	image.src ="img/plane"+imagecount+".jpg";
}

