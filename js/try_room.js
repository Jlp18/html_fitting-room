function scroll(n){
	temp = n;
	document.getElementById("gundong").scrollTop=document.getElementById("gundong").scrollTop+temp;
	if(temp==0) return;
	setTimeout("scroll(temp)",20);
}

var listArray = new Array;

function men_show(){
	document.getElementById("men_icon_b").style.backgroundColor="#FF6600";
	document.getElementById("women_icon_b").style.backgroundColor="white";
	document.getElementById("model_men").style.display="block";
	document.getElementById("model_women").style.display="none";
	document.getElementById("ss_men_xt").style.display="block";
	document.getElementById("ss_women_xt").style.display="none";
}

function women_show(){
	document.getElementById("men_icon_b").style.backgroundColor="white";
	document.getElementById("women_icon_b").style.backgroundColor="#FF6600";
	document.getElementById("model_men").style.display="none";
	document.getElementById("model_women").style.display="block";
	document.getElementById("ss_men_xt").style.display="none";
	document.getElementById("ss_women_xt").style.display="block";
}


function getHeight(){
	if(document.getElementById("gdheight").offsetHeight>340){
		document.getElementById("ssjt").style.display="block";
	}
}
function show23(){
	document.getElementById("secondAndthirdPart").style.display=document.getElementById("secondAndthirdPart").style.display=="block"?"none":"block";
	getHeight()
}

function show3(){
	document.getElementById("thirdPart").style.display=document.getElementById("thirdPart").style.display=="none"?"block":"none"
}

function xtCss(num,picid){
	var divlength = new Array;
	for(i=2;i<9;i++){
		divlength[i] = document.getElementById("ss_xtxs_"+i).getElementsByTagName("div").length;
		if(num==i){
			for(var j=0;j<divlength[i];j++){
				document.getElementById("ss_xtxs_"+i).childNodes[j].childNodes[0].className="try_room_clothes_xt2";
			}
		}
	}
	if(document.getElementById("model_"+num).style.display=="block"){
		document.getElementById("pic"+picid).className="try_room_clothes_xt1"
	}
	else{
		document.getElementById("pic"+picid).className="try_room_clothes_xt2";
	}
}

function tryClothes(num,img,picid,cssname){
	xtCss();
	document.getElementById("model_"+num).src=img;
	document.getElementById("model_"+num).style.display="block";
	cssname.className = cssname.className="try_room_clothes_xt1";
}

function insert_div(name,num,img,xtpic,picid){
	new_content='<img src='+xtpic+' class="try_room_clothes_xt1" width="40" height="50" id="pic'+picid+'"'+ 'onclick='+'"'+'shiyi('+  num+",'"+img+"',"+picid+",this"+')" />';
	var parent = document.getElementById(name);
	var newDiv = document.createElement("div");
	newDiv.id = picid+"child222";
	parent.appendChild(newDiv);
	newDiv.innerHTML = new_content;
	getHeight();
	
	//enCookie(Num,img,xtpic,picid);
}





function xt(Num,img,xtpic,picid){
	document.getElementById("ss_xtxs_"+Num).style.width=100+"%";
	var divlength = new Array;
	for(j=2;j<9;j++){
		divlength[j]=document.getElementById("ss_xtxs_"+j).getElementsByTagName("div").length;
	}
	if(Num<6){
		men_show();
		document.getElementById("secondAndthirdPart").style.display="block";
		document.getElementById("model_"+Num).src=img;
		document.getElementById("model_"+Num).style.display="block";
	}
	else{
		women_show();
		document.getElementById("secondAndthirdPart").style.display="block";
		document.getElementById("model_"+Num).src=img;
		document.getElementById("model_"+Num).style.display="block";
		
	}
	
	if(isAdd(picid)){
		xtCss(Num,picid);
		return;
	}
	
	listArray.push(picid);
	if(divlength[Num]<1){
		insert_div("ss_xtxs_"+Num,Num,img,xtpic,picid);
	}
	else{
		for(var i=0;i<divlength[Num];i++){
			document.getElementById("ss_xtxs_"+Num).childNodes[i].childNodes[0].className="try_room_clothes_xt2";
		}
		insert_div("ss_xtxs_"+Num,Num,img,xtpic,picid);
	}
}

function isAdd(picid){
	for(var i=0;i<listArray.length;i++){
		if(listArray[i]==picid){
			return true;
		}
	}
	return false;
}

function deleteClothes(){
	document.getElementById("ssjt").style.display="none";
	var divnum = new Array;
	for(i=2;i<9;i++){
		document.getElementById("model_"+i).style.display="none";
		//document.getElementById("model_"+i).src="img/tm.gif";
		divnum[i]=document.getElementById("ss_xtxs_"+i);
		while(divnum[i].hasChildNodes()){
			divnum[i].removeChild(divnum[i].firstChild);
		}
	}
	listArray.splice(0,listArray.length,"删除不重复数组- -##");
}

