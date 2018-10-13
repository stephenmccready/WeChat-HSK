<?php 
include_once 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>HSK Listening Practice</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.1.1/css/bootstrap.min.css">
<style>
.btn-lg{min-width:2.85em;}
.btn-group{margin-bottom:.25em;}
.row label{width:100%;}
#head{padding-top:1em;padding-bottom:1em;background-color:#eee;}
#option-container{width:100%;}
#option-container label{width:50%;}
#text-container h5{text-align:center;}
.card-body{padding:5px !important;}
</style>
</head>
<body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<div id="head" class="container-fluid">
<form>
<div class="form-group">
	<h4>HSK</h4>
	<div class="btn-group btn-group-toggle" data-toggle="buttons">
		<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK1" value="01"> 1</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK2" value="02"> 2</label>
		<label class="btn btn-lg btn-success active"><input type="radio" name="HSK" id="HSK3" value="03" checked> 3</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK4" value="04"> 4</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK5" value="05"> 5</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK6" value="06"> 6</label>
	</div>
</div>
<div class="form-group" data-toggle="buttons">
	<h5>Lesson</h5>
	<div class="btn-group btn-group-toggle">
		<label class="btn btn-lg btn-success active">
			<input type="radio" name="Lesson" id="Lesson01" value="01" checked> 1</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson02" value="02"> 2</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson03" value="03"> 3</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson04" value="04"> 4</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson05" value="05"> 5</label>
	</div>	
	<div class="btn-group btn-group-toggle">
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson06" value="06"> 6</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson07" value="07"> 7</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson08" value="08"> 8</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson09" value="09"> 9</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson10" value="10"> 10</label>
	</div>	
	<div class="btn-group btn-group-toggle">
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson11" value="11"> 11</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson12" value="12"> 12</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson13" value="13"> 13</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson14" value="14"> 14</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson15" value="15"> 15</label>
	</div>	
	<div class="btn-group btn-group-toggle" id="btn16-20">
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson16" value="16"> 16</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson17" value="17"> 17</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson18" value="18"> 18</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson19" value="19"> 19</label>
		<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson20" value="20"> 20</label>
	</div>
</div>
<div id="option-container" class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-success active">
    <input type="radio" name="display-option" id="audio-display" value="audio" checked> Audio
  </label>
  <label class="btn btn-success">
    <input type="radio" name="display-option" id="text-display" value="text"> Text
  </label>
</div>
</form>
</div><!-- container -->

<div id="audio-container">
<div class="row text-center">
	<div class="col-xs-12 col-sm-4"><label id="label1">HSK 03-01 1</label><br/>
		<audio id="aud1" controls="controls">
		<source id="src1" src="audio/HSK0301/03-01-01.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label2">HSK 03-01 2</label><br/>
		<audio id="aud2" controls="controls">
		<source id="src2" src="audio/HSK0301/03-01-02.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label3">HSK 03-01 3</label><br/>
		<audio id="aud3" controls="controls">
		<source id="src3" src="audio/HSK0301/03-01-03.m4a">Your browser does not support the audio format.</audio>
	</div>
</div>
<div class="row text-center">
	<div class="col-xs-12 col-sm-4"><label id="label4">HSK 3-01 4</label><br/>
		<audio id="aud4" controls="controls">
		<source id="src4" src="audio/HSK0301/03-01-04.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label5">HSK 3-01 5</label><br/>
		<audio id="aud5" controls="controls">
		<source id="src5" src="audio/HSK0301/03-01-05.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label6">HSK 3-01 6</label><br/>
		<audio id="aud6" controls="controls">
		<source id="src6" src="audio/HSK0301/03-01-06.m4a">Your browser does not support the audio format.</audio>
	</div>
</div>
<div class="row text-center">
	<div class="col-xs-12 col-sm-4"><label id="label7">HSK 3-01 7</label><br/>
		<audio id="aud7" controls="controls">
		<source id="src7" src="audio/HSK0301/03-01-07.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label8">HSK 3-01 8</label><br/>
		<audio id="aud8" controls="controls">
		<source id="src8" src="audio/HSK0301/03-01-08.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label9">HSK 3-01 9</label><br/>
		<audio id="aud9" controls="controls">
		<source id="src9" src="audio/HSK0301/03-01-09.m4a">Your browser does not support the audio format.</audio>
	</div>
</div>
<div class="row text-center">
	<div class="col-xs-12 col-sm-4"><label id="label10">HSK 3-01 10</label><br/>
		<audio id="aud10" controls="controls">
		<source id="src10" src="audio/HSK0301/03-01-10.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label11">HSK 3-01 11</label><br/>
		<audio id="aud11" controls="controls">
		<source id="src11" src="audio/HSK0301/03-01-11.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label12">HSK 3-01 12</label><br/>
		<audio id="aud12" controls="controls">
		<source id="src12" src="audio/HSK0301/03-01-12.m4a">Your browser does not support the audio format.</audio>
	</div>
</div>
<div class="row text-center">
	<div class="col-xs-12 col-sm-4"><label id="label13">HSK 3-01 13</label><br/>
		<audio id="aud13" controls="controls">
		<source id="src13" src="audio/HSK0301/03-01-13.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label14">HSK 3-01 14</label><br/>
		<audio id="aud14" controls="controls">
		<source id="src14" src="audio/HSK0301/03-01-14.m4a">Your browser does not support the audio format.</audio>
	</div>
	<div class="col-xs-12 col-sm-4"><label id="label15">HSK 3-01 15</label><br/>
		<audio id="aud15" controls="controls">
		<source id="src15" src="audio/HSK0301/03-01-15.m4a">Your browser does not support the audio format.</audio>
	</div>
</div>
<div id="aud16-20">
	<div class="row text-center">
		<div class="col-xs-12 col-sm-4"><label id="label16">HSK 3-01 16</label><br/>
			<audio id="aud16" controls="controls">
			<source id="src16" src="audio/HSK0301/03-01-16.m4a">Your browser does not support the audio format.</audio>
		</div>
		<div class="col-xs-12 col-sm-4"><label id="label17">HSK 3-01 17</label><br/>
			<audio id="aud17" controls="controls">
			<source id="src17" src="audio/HSK0301/03-01-17.m4a">Your browser does not support the audio format.</audio>
		</div>
		<div class="col-xs-12 col-sm-4"><label id="label18">HSK 3-01 18</label><br/>
			<audio id="aud18" controls="controls">
			<source id="src18" src="audio/HSK0301/03-01-18.m4a">Your browser does not support the audio format.</audio>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-12 col-sm-4"><label id="label19">HSK 3-01 19</label><br/>
			<audio id="aud19" controls="controls">
			<source id="src19" src="audio/HSK0301/03-01-19.m4a">Your browser does not support the audio format.</audio>
		</div>
		<div class="col-xs-12 col-sm-4"><label id="label20">HSK 3-01 20</label><br/>
			<audio id="aud20" controls="controls">
			<source id="src20" src="audio/HSK0301/03-01-20.m4a">Your browser does not support the audio format.</audio>
		</div>
	</div>
</div>
</div> <!-- audio-container -->

<div id="text-container"></div> <!-- text-container -->

<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#efefef",
      "text": "#404040"
    },
    "button": {
      "background": "#8ec760",
      "text": "#ffffff"
    }
  }
})
});

$(document).ready(function() {
    $('input[type=radio][name=HSK],input[type=radio][name=Lesson]').change(function(e) {
        e.preventDefault();
		var audio;
		var source;		
		var len=21;
		console.log($('input[name=HSK]:checked').val());
		if($('input[name=HSK]:checked').val()<3){
			len=16;
			$('#btn16-20').hide();
			$('#aud16-20').hide();
		} else {
			$('#btn16-20').show();
			$('#aud16-20').show();
		}
		var i;
		for (i = 1; i < len; i++) {
			audio = document.getElementById('aud'+i.toString());
			source = document.getElementById('src'+i.toString());
			if(i<10){
				source.src = "audio/HSK"+$('input[name=HSK]:checked').val()+$('input[name=Lesson]:checked').val()+"/"
					+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val()+"-0"+i.toString()+".m4a";
				$("#label"+i.toString()).text("HSK "+$('input[name=HSK]:checked').val()
												+"-"+$('input[name=Lesson]:checked').val()
												+" "+i.toString());
			} else {
				source.src = "audio/HSK"+$('input[name=HSK]:checked').val()+$('input[name=Lesson]:checked').val()+"/"
					+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val()+"-"+i.toString()+".m4a";
				$("#label"+i.toString()).text("HSK "+$('input[name=HSK]:checked').val()
												+"-"+$('input[name=Lesson]:checked').val()
												+" "+i.toString());
			}
			audio.load();
		}
		loadText();
    });
	
    $('input[type=radio][name=display-option]').change(function(e) {
        e.preventDefault();
    	if($('input[name=display-option]:checked').val()==="text"){
			$('#audio-container').hide();
			$('#text-container').show();
    	} else {
			$('#text-container').hide();
			$('#audio-container').show();
    	}
   	});
   	$('#text-container').hide();
   	loadText();
}); /* $(document).ready */

function loadText() {
	$("#text-container").html("");
	var request=new XMLHttpRequest();
	request.onreadystatechange=function() {
		if (request.readyState===4) {
			if (request.status===200) {
				var textArray=JSON.parse(request.responseText);
				for (var i = 0; i < textArray.length; i++) {
    				var cardbody="<div class='card border-light'>"
    					+ "<div class='card-header text-center'>HSK "
    						+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val()+" "+textArray[i].id+"</div>"
    					+ "<div class='card-body'>"+textArray[i].L1;
    				if(textArray[i].L2!=""&&textArray[i].L2!=null){cardbody+="<br/>"+textArray[i].L2;}
    				if(textArray[i].L3!=""&&textArray[i].L3!=null){cardbody+="<br/>"+textArray[i].L3;}
    				if(textArray[i].L4!=""&&textArray[i].L4!=null){cardbody+="<br/>"+textArray[i].L4;}
    				if(textArray[i].L5!=""&&textArray[i].L5!=null){cardbody+="<br/>"+textArray[i].L5;}
    				if(textArray[i].L6!=""&&textArray[i].L6!=null){cardbody+="<br/>"+textArray[i].L6;}
    				if(textArray[i].L7!=""&&textArray[i].L7!=null){cardbody+="<br/>"+textArray[i].L7;}
    				if(textArray[i].L8!=""&&textArray[i].L8!=null){cardbody+="<br/>"+textArray[i].L8;}
    				cardbody+="</div>";
					$("#text-container").append(cardbody);
				}
			}
		}
	};
	var url="https://www.stephenmccready.asia/mi/includes/getWorkBookAnswers.php"
		+	"?HSK="+$('input[name=HSK]:checked').val()
		+	"&Lesson="+$('input[name=Lesson]:checked').val();
	request.open('GET', url, true);
	request.send();
}
</script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.1.1/bootstrap.min.js"></script>
</body>
</html>
