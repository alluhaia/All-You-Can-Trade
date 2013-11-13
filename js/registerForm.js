



// function to validate password & confirm password
function validatePassword(conPass) {



}

function validateUsername(username)  {






}


function getRegion(country) {

	// getCity(country);

if (country.value != "" ) {
 if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("regionList").innerHTML=xmlhttp.responseText;
	      }
   }
 xmlhttp.open("GET","action/regionProcess.php?country="+country.value,true);
  xmlhttp.send();
 
	}


}






function getCity(country_region) {


var country_reg;

country_reg=country_region.value.split(",");
country=country_reg[0];
region=country_reg[1];

 if ( country !="") {
 
  if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("cityList").innerHTML=xmlhttp.responseText;
     }
   }
  
 
 xmlhttp.open("GET","action/cityProcess.php?country="+country+"&region_id="+ region,true);
 xmlhttp.send();
 
 } 
 
 
 }
 
