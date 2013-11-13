 function getSubCateg(categ) {
 
  
if ( categ.value == "" ) {

 document.getElementById("subCategList").style.display="none";

  document.getElementById("brandList").style.display="none";

    document.getElementById("descControl").style.display="none";
	
	  document.getElementById("image").style.display="none";
	  
	    document.getElementById("rating").style.display="none";

			

} else {

	document.getElementById("subCategList").style.display="block";
    
	//document.getElementById("brandList").style.display="block";

   
    
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
     document.getElementById("subCategList").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","action/postProcessCateg.php?categ="+categ.value,true);
 xmlhttp.send();
 
	}
 }
 
 
 
  function getBrands(categ_subCateg) {
  
 var categ_sub=categ_subCateg.value.split(",");

 if (categ_sub[0] !="") {
 
 document.getElementById("brandList").style.display="block";
 
document.getElementById("descControl").style.display="block";
	
	  document.getElementById("image").style.display="block";
	  
	  document.getElementById("rating").style.display="block"; 
	  
	    document.getElementById("submitButton").style.display="block"; 
  
  
  
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
     document.getElementById("brandList").innerHTML=xmlhttp.responseText;
     }
   }
  
 xmlhttp.open("GET","action/postProcessSubCateg.php?categ="+categ_sub[0]+"&subCateg="+categ_sub[1],true);
 xmlhttp.send();
 
 } else {
 
 document.getElementById("brandList").style.display="none";
 
 document.getElementById("descControl").style.display="none";
	
	  document.getElementById("image").style.display="none";
	  
	    document.getElementById("rating").style.display="none"; 
 
 
 }
 
 
 }

 