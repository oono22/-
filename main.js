window.onload=function(){
	var tapi_cnt = document.getElementById('tapimg');
	var tpcnt = document.getElementById('tpcnt');
	//var a=document.getElementById('tpcnt');
	var cnt_value = 0;
	var item1=0,item2=0,item3=0,item4=0,a=0;
	var imuch1=15,imuch2=100,imuch3=1100,imuch4=12000;
	var icps1=1,icps2=8,icps3=20,icps4=47,scps=0;

	tapi_cnt.onclick=function(){
		cnt_value += 1;
		tpcnt.innerHTML=cnt_value;
	};

	tapi_cnt.onmousedown=function(){
		tapi_cnt.style.width="280px";
		tapi_cnt.style.height="280px";
	};

	tapi_cnt.onmouseup=function(){
		tapi_cnt.style.width="300px";
		tapi_cnt.style.height="300px";
	};

	document.getElementById("item1").onclick = function(){
		if (cnt_value>=imuch1) {
			item1+=1;
			cnt_value-=Math.floor(imuch1);
			scps+=icps1;
			imuch1*=1.15;
			document.getElementById('tpcnt').innerHTML=cnt_value;
			document.getElementById("i_num1").innerHTML=item1;
			document.getElementById("i_much1").innerHTML=Math.floor(imuch1);
		};	
	};

	document.getElementById("item2").onclick = function(){
		if (cnt_value>=imuch2) {
			item2+=1;
			cnt_value-=Math.floor(imuch2);
			scps+=icps2;
			imuch2*=1.15;
			document.getElementById('tpcnt').innerHTML=cnt_value;
			document.getElementById("i_num2").innerHTML=item2;
			document.getElementById("i_much2").innerHTML=Math.floor(imuch2);
		};	
	};

	document.getElementById("item3").onclick = function(){
		if (cnt_value>=imuch3) {
			item3+=1;
			cnt_value-=Math.floor(imuch3);
			scps+=icps3;
			imuch3*=1.15;
			document.getElementById('tpcnt').innerHTML=cnt_value;
			document.getElementById("i_num3").innerHTML=item3;
			document.getElementById("i_much3").innerHTML=Math.floor(imuch3);
		};	
	};

	document.getElementById("item4").onclick = function(){
		if (cnt_value>=imuch4) {
			item4+=1;
			cnt_value-=Math.floor(imuch4);
			scps+=icps4;
			imuch4*=1.15;
			document.getElementById('tpcnt').innerHTML=cnt_value;
			document.getElementById("i_num4").innerHTML=item4;
			document.getElementById("i_much4").innerHTML=Math.floor(imuch4);
		};	
	};

	var parsecond=function(){
		document.getElementById('i_cps').innerHTML=scps;
		if (scps>=1) {
			document.getElementById('shower').style.animation= 'r2 15s linear infinite';
		}
	};

	var addPcnt=function(){
		cnt_value+=scps
		document.getElementById('tpcnt').innerHTML=cnt_value;
	};

	setInterval(addPcnt,1000);
	setInterval(parsecond,50);

};