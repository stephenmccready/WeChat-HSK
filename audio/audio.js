var HSK
var Lesson
var LessonArray = new Array
var audioCurrentTimeX = 0
Page({
  onLoad: function (options) {
    wx.getStorage({
      key: 'HSK',
      success: function (res) {
        HSK = res.data
      }
    }),
    wx.getStorage({
      key: 'Lesson',
      success: function (res) {
        Lesson = res.data
      }
    }),
    wx.getStorage({
        key: 'LessonArray',
        success: function (res) {
          LessonArray = res.data
        }
    })
  },
  onReady(e) {
    wx.setNavigationBarTitle({ title: 'HSK ' + HSK + '-' + Lesson })
    this.audioCtx1 = wx.createAudioContext('myAudio1')
    this.audioCtx2 = wx.createAudioContext('myAudio2')
    this.audioCtx3 = wx.createAudioContext('myAudio3')
    this.audioCtx4 = wx.createAudioContext('myAudio4')
    this.audioCtx5 = wx.createAudioContext('myAudio5')
    this.audioCtx6 = wx.createAudioContext('myAudio6')
    this.audioCtx7 = wx.createAudioContext('myAudio7')
    this.audioCtx8 = wx.createAudioContext('myAudio8')
    this.audioCtx9 = wx.createAudioContext('myAudio9')
    this.audioCtx10 = wx.createAudioContext('myAudio10')
    this.audioCtx11 = wx.createAudioContext('myAudio11')
    this.audioCtx12 = wx.createAudioContext('myAudio12')
    this.audioCtx13 = wx.createAudioContext('myAudio13')
    this.audioCtx14 = wx.createAudioContext('myAudio14')
    this.audioCtx15 = wx.createAudioContext('myAudio15')
    this.audioCtx16 = wx.createAudioContext('myAudio16')
    this.audioCtx17 = wx.createAudioContext('myAudio17')
    this.audioCtx18 = wx.createAudioContext('myAudio18')
    this.audioCtx19 = wx.createAudioContext('myAudio19')
    this.audioCtx20 = wx.createAudioContext('myAudio20')
    this.setData({
      audioArray: LessonArray,
      HSK: HSK,
      Lesson: Lesson,
      audioCurrentTime: 0,
      audioCurrentTimeX: 0
    });
  },
  audioPlay1() { this.audioCtx1.play() },
  audioPlay2() { this.audioCtx2.play() },
  audioPlay3() { this.audioCtx3.play() },
  audioPlay4() { this.audioCtx4.play() },
  audioPlay5() { this.audioCtx5.play() },
  audioPlay6() { this.audioCtx6.play() },
  audioPlay7() { this.audioCtx7.play() },
  audioPlay8() { this.audioCtx8.play() },
  audioPlay9() { this.audioCtx9.play() },
  audioPlay10() { this.audioCtx10.play() },
  audioPlay11() { this.audioCtx11.play() },
  audioPlay12() { this.audioCtx12.play() },
  audioPlay13() { this.audioCtx13.play() },
  audioPlay14() { this.audioCtx14.play() },
  audioPlay15() { this.audioCtx15.play() },
  audioPlay16() { this.audioCtx16.play() },
  audioPlay17() { this.audioCtx17.play() },
  audioPlay18() { this.audioCtx18.play() },
  audioPlay19() { this.audioCtx19.play() },
  audioPlay20() { this.audioCtx20.play() },
  audioPause1() { this.audioCtx1.pause() },
  audioPause2() { this.audioCtx2.pause() },
  audioPause3() { this.audioCtx3.pause() },
  audioPause4() { this.audioCtx4.pause() },
  audioPause5() { this.audioCtx5.pause() },
  audioPause6() { this.audioCtx6.pause() },
  audioPause7() { this.audioCtx7.pause() },
  audioPause8() { this.audioCtx8.pause() },
  audioPause9() { this.audioCtx9.pause() },
  audioPause10() { this.audioCtx10.pause() },
  audioPause11() { this.audioCtx11.pause() },
  audioPause12() { this.audioCtx12.pause() },
  audioPause13() { this.audioCtx13.pause() },
  audioPause14() { this.audioCtx14.pause() },
  audioPause15() { this.audioCtx15.pause() },
  audioPause16() { this.audioCtx16.pause() },
  audioPause17() { this.audioCtx17.pause() },
  audioPause18() { this.audioCtx18.pause() },
  audioPause19() { this.audioCtx19.pause() },
  audioPause20() { this.audioCtx20.pause() },
  audioRewind1() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx1.seek(audioCurrentTimeX)
  },
  audioRewind2() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx2.seek(audioCurrentTimeX)
  },
  audioRewind3() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx3.seek(audioCurrentTimeX)
  },
  audioRewind4() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx4.seek(audioCurrentTimeX)
  },
  audioRewind5() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx5.seek(audioCurrentTimeX)
  },
  audioRewind6() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx6.seek(audioCurrentTimeX)
  },
  audioRewind7() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx7.seek(audioCurrentTimeX)
  },
  audioRewind8() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx8.seek(audioCurrentTimeX)
  },
  audioRewind9() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx9.seek(audioCurrentTimeX)
  },
  audioRewind10() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx10.seek(audioCurrentTimeX)
  },
  audioRewind11() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx11.seek(audioCurrentTimeX)
  },
  audioRewind12() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx12.seek(audioCurrentTimeX)
  },
  audioRewind13() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx13.seek(audioCurrentTimeX)
  },
  audioRewind14() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx14.seek(audioCurrentTimeX)
  },
  audioRewind15() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx15.seek(audioCurrentTimeX)
  },
  audioRewind16() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx16.seek(audioCurrentTimeX)
  },
  audioRewind17() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx17.seek(audioCurrentTimeX)
  },
  audioRewind18() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx18.seek(audioCurrentTimeX)
  },
  audioRewind19() {
    audioCurrentTimeX = audioCurrentTimeX - 3
    if (audioCurrentTimeX < 0) { audioCurrentTimeX = 0 }
    this.audioCtx19.seek(audioCurrentTimeX)
  },
  audioProgress: function(itemID) {
    var percentComplete = (itemID.detail.currentTime/itemID.detail.duration)*100
    audioCurrentTimeX = itemID.detail.currentTime
    this.setData({
      audioCurrentTime: percentComplete
    })
    percentComplete=null;
  },
  audioEnd: function (itemID) {
    this.setData({
      audioCurrentTime: 100
    })
  }
})
