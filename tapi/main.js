window.onload=function(){
	var tapi_cnt=document.getElementById('tapimg');
	var tpcnt=document.getElementById('tpcnt');
	//var a=document.getElementById('tpcnt');
	var cnt_value=0,fl_num=20,fl_cnt=0,fl_x=0,fl_y=600,cnt=4,fl_end=0;
	var item1=0,item2=0,item3=0,item4=0,a=0,shnum=0;
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
		if (shnum==0 && scps>=1) {
			shower();
		}
	};

	var addPcnt=function(){
		cnt_value+=scps;
		document.getElementById('tpcnt').innerHTML=cnt_value;
		if (cnt_value>=fl_num && fl_end==0) {
			fl_cnt+=1;
			fl_num+=2;
			tpflag();
		}
	};

	setInterval(addPcnt,1000);
	setInterval(parsecond,50);

	function shower(){
		$(document).ready(function () {
			shnum+=1;
	    	//アニメーションスピード
	    	var scrollSpeed = 0.1;
	    	//画像サイズ
	    	var imgWidth = 512;
	    	//画像の初期位置
	    	var posY = 0;
	    	$('.tapioca').css("height","1024px");
	    	//ループ処理
	    	setInterval(function(){
	        	//画像のサイズまで移動したら0に戻る。
	        	if (posY >= imgWidth) posY= 0;
	        	//scrollSpeed分移動
	        	posY += scrollSpeed;
	  			$('.tapioca').css("background-position","50% "+posY+"px");
	    	}, 1);
		});
	};

	function tpflag(){
		var img = document.createElement('img');
		img.src = './image/maru4.png';
		img.id=fl_cnt;
		//$(function(){$('img').attr("id",fl_cnt);});
		document.getElementById('fl_tp').appendChild(img);
		$('#'+fl_cnt).css("width","120px");
		$('#'+fl_cnt).css("height","120px");
		$('#'+fl_cnt).css("position","absolute");
		$('#'+fl_cnt).css("transform","translate("+fl_x+"%, "+fl_y+"%)");
	    fl_x+=100;
	    if (fl_cnt==cnt) {
	    	fl_y-=100;
	    	fl_x=0;
	    	cnt+=4;
	    }
	    	if (fl_cnt==29) {fl_end=1;
	    }
		if (fl_end==1) {
			alert('flag=---------');
		}
	};
};