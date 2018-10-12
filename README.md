# WeChat-HSK
汉语水平考试 Hànyǔ Shuǐpíng Kǎoshì (HSK) mini program

Work in progress HSK 3-1 to 3-8 (available as of 2018-10-12, more being added each week)

Allows students to practice the workbook listening exercises, textbook texts and textbook listening exercises.

WeChat Structure:
Pages
  - audio
    - audio.js (loads audio files from {{yourdomain}}/audio/HSK{{HSK}}{{Lesson}}/{{HSK}}-{{Lesson}}-{{item.src}}.m4a)
    - audio.json
    - audio.wxml
    - audio.wxss
  - index
    - index.js
    - index.json
    - index.wxml
    - index.wxss
  - resources
    - pause.png
    - rewind.png
  - text
    - text.js (loads json data from {{yourdomain}}/includes/getWorkBookAnswers.php?HSK=' + {{HSK}} + "&Lesson=" + {{Lesson}})
    - text.json
    - text.wxml
    - text.wxss
  app.js
  app.json
  app.wxss
  project.config.json

* Note: Use your FTP client or control panel to create the audio directories on your domain. 
  If you transfer the audio directories from your local machine to your domain, the WeChat app will not be able to read the audio files from those directories.
