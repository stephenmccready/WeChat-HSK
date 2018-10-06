var HSK
var Lesson
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
      })
  },
  onReady(e) {
    var obj = this
    wx.setNavigationBarTitle({ title: 'HSK ' + HSK + '-' + Lesson })
    var myURL = 'https://www.stephenmccready.asia/mi/includes/getWorkBookAnswers.php?HSK=' + HSK + "&Lesson=" + Lesson

    wx.request({
      url: myURL,
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        obj.setData({
          answerArray: res.data
        })
      },
      fail: function (res) {
        obj.setData({
          errMsg: res.errMsg+"<br/><br/>Re-open mini-program in debugging mode"
        })
      }
    })
  }
})
