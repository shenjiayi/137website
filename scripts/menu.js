var isShowing= false;
var menuItem = null;

function show(id)
{
	hide();
	menuItem = document.getElementById(id);
	if(menuItem!=null)
	{
		menuItem.style.visibility='visible';
		// menuItem.style.z-index:9999; 
		isShowing=true;
	}
}

function hide()
{
	if(isShowing) 
		menuItem.style.visibility='hidden';
	isShowing=false;
}