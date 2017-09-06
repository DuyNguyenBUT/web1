$(".alert").delay(5000).slideUp();


function xacnhanxoa(msg){
	if(window.confirm(msg)){
		return true;
	}
	return false;
}