# WeChat-HSK
汉语水平考试 Hànyǔ Shuǐpíng Kǎoshì (HSK) mini program<br/>
<br/>
Work in progress HSK 2-1 and 3-1 to 3-8 (available as of 2018-10-12, more being added each week)<br/>
<br/>
Allows students to practice the workbook listening exercises, textbook texts and textbook listening exercises.<br/>
<br/>
<h4>Server Domain Resources:</h4>
MySQL database containing the HSKWBText table.<br/>
/includes/getWorkBookAnswers.php <== php script to retrieve workbook answer text from the MySQL database<br/>
/audio/~.m4a <== Workbook audio files<br/>
<br/>
<h4>WeChat Project:</h4><br/>
Pages<br/>
&nbsp;- audio<br/>
&nbsp;&nbsp;- audio.js (loads audio files from {{yourdomain}}/audio/HSK{{HSK}}{{Lesson}}/{{HSK}}-{{Lesson}}-{{item.src}}.m4a)<br/>
&nbsp;&nbsp;- audio.json<br/>
&nbsp;&nbsp;- audio.wxml<br/>
&nbsp;&nbsp;- audio.wxss<br/>
&nbsp;- index<br/>
&nbsp;&nbsp;- index.js<br/>
&nbsp;&nbsp;- index.json<br/>
&nbsp;&nbsp;- index.wxml<br/>
&nbsp;&nbsp;- index.wxss<br/>
&nbsp;- resources<br/>
&nbsp;&nbsp;- pause.png<br/>
&nbsp;&nbsp;- rewind.png<br/>
&nbsp;- text<br/>
&nbsp;&nbsp;- text.js (loads json data from {{yourdomain}}/includes/getWorkBookAnswers.php?HSK=' + {{HSK}} + "&Lesson=" + {{Lesson}})<br/>
&nbsp;&nbsp;- text.json<br/>
&nbsp;&nbsp;- text.wxml<br/>
&nbsp;&nbsp;- text.wxss<br/>
&nbsp;app.js<br/>
&nbsp;app.json<br/>
&nbsp;app.wxss<br/>
&nbsp;project.config.json<br/>
<br/>
* Note: Use your FTP client or control panel to create the audio directories on your domain. <br/>
  If you transfer the audio directories from your local machine to your domain, the WeChat app will not be able to read the audio files from those directories.<br/>
