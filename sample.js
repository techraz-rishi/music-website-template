var left = document.getElementById("left");
var right = document.getElementById("right");
var upper = document.getElementById("upper");
var upperleft = document.getElementById("upperleft");
var upperright = document.getElementById("upperright");
var lower = document.getElementById("lower");
var lowerleft = document.getElementById("lowerleft");
var lowerright = document.getElementById("lowerright");

var choose = document.getElementById("choose");

	choose.addEventListener("click",function(){
	
	if(left.className === "hide")
	{
		left.className = "design";
	}
	else{ 
			left.className = "hide";
		}
		
	if(right.className === "hide")
	{
		right.className = "design";
	}
	else{ 
			right.className = "hide";
		}
if(lower.className === "hide")
	{
		lower.className = "design";
	}
	else{ 
			lower.className = "hide";
		}
if(upper.className === "hide")
	{
		upper.className = "design";
	}
	else{ 
			upper.className = "hide";
		}
if(lowerleft.className === "hide")
	{
		lowerleft.className = "design";
	}
	else{ 
			lowerleft.className = "hide";
		}
if(upperleft.className === "hide")
	{
		upperleft.className = "design";
	}
	else{ 
			upperleft.className = "hide";
		}
if(upperright.className === "hide")
	{
		upperright.className = "design";
	}
	else{ 
			upperright.className = "hide";
		}
if(lowerright.className === "hide")
	{
		lowerright.className = "design";
	}
	else{ 
			lowerright.className = "hide";
		}
		
});



function change(){document.getElementById('text').innerHTML="<pre>       Now Select..:) </pre>";}