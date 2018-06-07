
function change(){
	var a = document.getElementById("sex");
for(var i = 0 ; i < a.length; i++)
{
	if(a[i].checked==true){
		if(a[i].value=='female'){
			document.getElementById("women").style.display="block";
			document.getElementById("men").style.display="none";
		}
	}
}
}
