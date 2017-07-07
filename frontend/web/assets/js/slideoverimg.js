/*
	Team: JUDE
	Coding By: Li Hongyi, 1511373, 5 July 2017
	This is a js document to make three h2s joggle over their respective project image.
*/

function go0(){
	var t,tt;
	//var xx=document.getElementsByClassName("proa");
	
	
	var x=document.getElementsByClassName("proa");
    
    var obj=x[0].getElementsByTagName('h2')[0];
			obj.style.top="-128px";
			var change=function(){
				var obj_h=parseInt(obj.style.top);
				
				if(obj_h<0){
					
					obj.style.top=(obj_h+Math.floor((0-obj_h))*0.1)+"px"
				}//if
				else{clearInterval(t)}
			} 
			var back=function(){
				var obj_hh=parseInt(obj.style.top);
				if(obj_hh>=-128){obj.style.top=(obj_hh+Math.floor((-128-obj_hh)*0.1))+"px"}
				else{clearInterval(tt)}
			}

		 x[0].onmouseover=function(){clearInterval(tt);t=setInterval(change,20);}
		 x[0].onmouseout=function(){clearInterval(t);tt=setInterval(back,20)};

	
}
function go1(){
	var t,tt;
	//var xx=document.getElementsByClassName("proa");
	
	
	var x=document.getElementsByClassName("proa");
    
    var obj=x[1].getElementsByTagName('h2')[0];
			obj.style.top="-128px";
			var change=function(){
				var obj_h=parseInt(obj.style.top);
				
				if(obj_h<0){
					
					obj.style.top=(obj_h+Math.floor((0-obj_h))*0.1)+"px"
				}//if
				else{clearInterval(t)}
			} 
			var back=function(){
				var obj_hh=parseInt(obj.style.top);
				if(obj_hh>=-128){obj.style.top=(obj_hh+Math.floor((-128-obj_hh)*0.1))+"px"}
				else{clearInterval(tt)}
			}

		 x[1].onmouseover=function(){clearInterval(tt);t=setInterval(change,20);}
		 x[1].onmouseout=function(){clearInterval(t);tt=setInterval(back,20)};

	
}
function go2(){
	var t,tt;
	//var xx=document.getElementsByClassName("proa");
	
	
	var x=document.getElementsByClassName("proa");
   8
    var obj=x[2].getElementsByTagName('h2')[0];
			obj.style.top="-128px";
			var change=function(){
				var obj_h=parseInt(obj.style.top);
				
				if(obj_h<0){
					
					obj.style.top=(obj_h+Math.floor((0-obj_h))*0.1)+"px"
				}//if
				else{clearInterval(t)}
			} 
			var back=function(){
				var obj_hh=parseInt(obj.style.top);
				if(obj_hh>=-128){obj.style.top=(obj_hh+Math.floor((-128-obj_hh)*0.1))+"px"}
				else{clearInterval(tt)}
			}

		 x[2].onmouseover=function(){clearInterval(tt);t=setInterval(change,20);}
		 x[2].onmouseout=function(){clearInterval(t);tt=setInterval(back,20)};

	
}
window.onload=function(){
	go0();
	go1();
	go2();

}