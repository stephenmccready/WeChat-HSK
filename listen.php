<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>🎧  HSK 03-01</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.1.1/css/bootstrap.min.css">
<style>
*,html,body{margin:0;padding:0;}
.container-fluid{padding:0;}
#head{padding:0.85em;background-color:#eee;}
#toggleBox{padding:0 0.85em 0.85em 0.85em;background-color:#eee;}
.btn-lg{min-width:2.85em;}
.btn-group{margin-bottom:.25em;}
.row label{width:100%;}
#option-container{width:100%;}
#option-container label{width:50%;}
#HSKtitle{padding-top:.85em;}
#audio-container{padding-top:.85em;}
.audLabel{font-size:2em;}
.audCont{padding-top:0.5em;display:inline-block;vertical-align: middle;}
.audX{display:inline-block;vertical-align: middle;}
#text-container h5{text-align:center;}
.card-body{padding:5px !important;}
</style>
</head>
<body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
<div class="container-fluid">
<div id="head">
	<form>
	<div class="form-group">
		<h5>HSK</h5>
		<div class="btn-group btn-group-toggle" data-toggle="buttons">
			<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK1" value="01"> 一</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK2" value="02"> 二</label>
			<label class="btn btn-lg btn-success active"><input type="radio" name="HSK" id="HSK3" value="03" checked> 三</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK4" value="04"> 四</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK5" value="05"> 五</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="HSK" id="HSK6" value="06"> 六</label>
		</div>
	</div>
	<div class="form-group" data-toggle="buttons">
		<h5>课</h5>
		<div class="btn-group btn-group-toggle">
			<label class="btn btn-lg btn-success active">
				<input type="radio" name="Lesson" id="Lesson01" value="01" checked> 一</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson02" value="02"> 二</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson03" value="03"> 三</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson04" value="04"> 四</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson05" value="05"> 五</label>
		</div>	
		<div class="btn-group btn-group-toggle">
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson06" value="06"> 六</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson07" value="07"> 七</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson08" value="08"> 八</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson09" value="09"> 九</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson10" value="10"> 十</label>
		</div>	
		<div class="btn-group btn-group-toggle">
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson11" value="11"> 十一</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson12" value="12"> 十二</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson13" value="13"> 十三</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson14" value="14"> 十四</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson15" value="15"> 十五</label>
		</div>	
		<div class="btn-group btn-group-toggle" id="btn16-20">
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson16" value="16"> 十六</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson17" value="17"> 十七</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson18" value="18"> 十八</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson19" value="19"> 十九</label>
			<label class="btn btn-lg btn-success"><input type="radio" name="Lesson" id="Lesson20" value="20"> 二十</label>
		</div>
	</div>
</form>
</div><!-- container -->
<div id="toggleBox" class="sticky-top">
	<div id="option-container" class="btn-group btn-group-toggle sticky-top" data-toggle="buttons">
  		<label class="btn btn-success active">
    		<input type="radio" name="display-option" id="audio-display" value="audio" checked> Audio
  		</label>
  		<label class="btn btn-success">
    		<input type="radio" name="display-option" id="text-display" value="text"> Text
  		</label>
	</div>
	<h5 id="HSKtitle" class="text-center">HSK 3 课 1</h5>
</div>
<div id="audio-container">
	<div class="row text-center">
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">一</div>
			<div class="audCont">
				<audio id="aud1" controls="controls">
				<source id="src1" src="audio/03-01-01.m4a">Your browser does not support the audio format.</audio>
			</div>
			<div class="audX" lang="zh"><button id="btn1" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">二</div>
			<div class="audCont">
			<audio id="aud2" controls="controls">
			<source id="src2" src="audio/03-01-02.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn2" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">三</div>
			<div class="audCont">
			<audio id="aud3" controls="controls">
			<source id="src3" src="audio/03-01-03.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn3" class="audbtn btn btn-default">◀</button></div>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">四</div>
			<div class="audCont">
			<audio id="aud4" controls="controls">
			<source id="src4" src="audio/03-01-04.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn4" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">五</div>
			<div class="audCont">
			<audio id="aud5" controls="controls">
			<source id="src5" src="audio/03-01-05.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn5" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">六</div>
			<div class="audCont">
			<audio id="aud6" controls="controls">
			<source id="src6" src="audio/03-01-06.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn6" class="audbtn btn btn-default">◀</button></div>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">七</div>
			<div class="audCont">
			<audio id="aud7" controls="controls">
			<source id="src7" src="audio/03-01-07.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn7" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">八</div>
			<div class="audCont">
			<audio id="aud8" controls="controls">
			<source id="src8" src="audio/03-01-08.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn8" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">九</div>
			<div class="audCont">
			<audio id="aud9" controls="controls">
			<source id="src9" src="audio/03-01-09.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn9" class="audbtn btn btn-default">◀</button></div>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十</div>
			<div class="audCont">
			<audio id="aud10" controls="controls">
			<source id="src10" src="audio/03-01-10.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn10" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十一</div>
			<div class="audCont">
			<audio id="aud11" controls="controls">
			<source id="src11" src="audio/03-01-11.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn11" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十二</div>
			<div class="audCont">
			<audio id="aud12" controls="controls">
			<source id="src12" src="audio/03-01-12.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn12" class="audbtn btn btn-default">◀</button></div>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十三</div>
			<div class="audCont">
			<audio id="aud13" controls="controls">
			<source id="src13" src="audio/03-01-13.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn13" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十四</div>
			<div class="audCont">
			<audio id="aud14" controls="controls">
			<source id="src14" src="audio/03-01-14.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn14" class="audbtn btn btn-default">◀</button></div>
		</div>
		<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十五</div>
			<div class="audCont">
			<audio id="aud15" controls="controls">
			<source id="src15" src="audio/03-01-15.m4a"></audio>
			</div>
			<div class="audX" lang="zh"><button id="btn15" class="audbtn btn btn-default">◀</button></div>
		</div>
	</div>
	<div id="aud16-20">
		<div class="row text-center">
			<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十六</div>
				<div class="audCont">
				<audio id="aud16" controls="controls">
				<source id="src16" src="audio/03-01-16.m4a"></audio>
				</div>
				<div class="audX" lang="zh"><button id="btn16" class="audbtn btn btn-default">◀</button></div>
			</div>
			<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十七</div>
				<div class="audCont">
				<audio id="aud17" controls="controls">
				<source id="src17" src="audio/03-01-17.m4a"></audio>
				</div>
				<div class="audX" lang="zh"><button id="btn17" class="audbtn btn btn-default">◀</button></div>
			</div>
			<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十八</div>
				<div class="audCont">
				<audio id="aud18" controls="controls">
				<source id="src18" src="audio/03-01-18.m4a"></audio>
				</div>
				<div class="audX" lang="zh"><button id="btn18" class="audbtn btn btn-default">◀</button></div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">十九</div>
				<div class="audCont">
				<audio id="aud19" controls="controls">
				<source id="src19" src="audio/03-01-19.m4a"></audio>
				</div>
				<div class="audX" lang="zh"><button id="btn19" class="audbtn btn btn-default">◀</button></div>
			</div>
			<div class="col-xs-11 col-sm-4 audLabel">
			<div class="audX" lang="zh">二十</div>
				<div class="audCont">
				<audio id="aud20" controls="controls">
				<source id="src20" src="audio/03-01-20.m4a"></audio>
				</div>
				<div class="audX" lang="zh"><button id="btn20" class="audbtn btn btn-default">◀</button></div>
			</div>
		</div>
	</div>
</div> <!-- audio-container -->
<div id="text-container"></div> <!-- text-container -->
</div> <!-- .container-fluid -->
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
				source.src = "audio/"
					+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val()+"-0"+i.toString()+".m4a";
			} else {
				source.src = "audio/"
					+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val()+"-"+i.toString()+".m4a";
			}
			audio.load();
		}
		loadText();
		$('#HSKtitle').html("HSK "+$('input[name=HSK]:checked').val().replace(/^[0]+/g,"")
							+"&nbsp;课 "+$('input[name=Lesson]:checked').val().replace(/^[0]+/g,""));
		$(document).attr("title", "🎧  HSK "+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val());
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
   	
   	$("button, input[type='button']").click(function() {
   		var id=this.id.replace(/btn/gi, "aud");
  		var aud = document.getElementById(id);
  		var newTime = aud.currentTime;
  		if(newTime>2.5) {
  			newTime = newTime-2.5;
  		} else {
  			newTime = 0;
  		}
		aud.currentTime=newTime;
   	});
   	
   	$('#text-container').hide();
   	loadText();
	$(document).attr("title", "🎧  HSK "+$('input[name=HSK]:checked').val()+"-"+$('input[name=Lesson]:checked').val());
	$('#HSKtitle').html("HSK "+$('input[name=HSK]:checked').val().replace(/^[0]+/g,"")
							+"&nbsp;课 "+$('input[name=Lesson]:checked').val().replace(/^[0]+/g,""));
}); /* $(document).ready */
function loadText() {
	$("#text-container").html("");
	var request=new XMLHttpRequest();
	request.onreadystatechange=function() {
		if (request.readyState===4) {
			if (request.status===200) {
				var textArray=JSON.parse(request.responseText);
				for (var i = 0; i < textArray.length; i++) {
					var x;
					switch(textArray[i].id){
						case "1":x="一";break;case "2":x="二";break;case "3":x="三";break;case "4":x="四";break;
						case "5":x="五";break;case "6":x="六";break;case "7":x="七";break;case "8":x="八";break;
						case "9":x="九";break;case "10":x="十";break;case "11":x="十一";break;case "12":x="十二";break;
						case "13":x="十三";break;case "14":x="十四";break;case "15":x="十五";break;case "16":x="十六";break;
						case "17":x="十七";break;case "18":x="十八";break;case "19":x="十九";break;case "20":x="二十";break;
					}
    				var cardbody="<div class='card border-light'>"
    					+ "<div class='card-header text-center'>"+x+"</div>"
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
