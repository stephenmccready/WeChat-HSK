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
<h4>WeChat Structure:</h4><br/>
Pages<br/>
  - audio<br/>
    - audio.js (loads audio files from {{yourdomain}}/audio/HSK{{HSK}}{{Lesson}}/{{HSK}}-{{Lesson}}-{{item.src}}.m4a)<br/>
    - audio.json<br/>
    - audio.wxml<br/>
    - audio.wxss<br/>
  - index<br/>
    - index.js<br/>
    - index.json<br/>
    - index.wxml<br/>
    - index.wxss<br/>
  - resources<br/>
    - pause.png<br/>
    - rewind.png<br/>
  - text<br/>
    - text.js (loads json data from {{yourdomain}}/includes/getWorkBookAnswers.php?HSK=' + {{HSK}} + "&Lesson=" + {{Lesson}})<br/>
    - text.json<br/>
    - text.wxml<br/>
    - text.wxss<br/>
  app.js<br/>
  app.json<br/>
  app.wxss<br/>
  project.config.json<br/>
<br/>
* Note: Use your FTP client or control panel to create the audio directories on your domain. <br/>
  If you transfer the audio directories from your local machine to your domain, the WeChat app will not be able to read the audio files from those directories.<br/>
