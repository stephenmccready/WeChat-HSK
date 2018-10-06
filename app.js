App({
  onLaunch: function () {
    //Call API from local cache to get data
    var logs = wx.getStorageSync('logs') || []
    logs.unshift(Date.now())
    wx.setStorageSync('logs', logs)
    wx.setStorage({
      key: "HSK",
      data: "03"
    })
    wx.setStorage({
      key: "Lesson",
      data: "03"
    })
    wx.setStorage({
      key: "LessonArray",
      data: [
      { src: '01', id: 1 },
      { src: '02', id: 2 },
      { src: '03', id: 3 },
      { src: '04', id: 4 },
      { src: '05', id: 5 },
      { src: '06', id: 6 },
      { src: '07', id: 7 },
      { src: '08', id: 8 },
      { src: '09', id: 9 },
      { src: '10', id: 10 },
      { src: '11', id: 11 },
      { src: '12', id: 12 },
      { src: '13', id: 13 },
      { src: '14', id: 14 },
      { src: '15', id: 15 },
      { src: '16', id: 16 },
      { src: '17', id: 17 },
      { src: '18', id: 18 },
      { src: '19', id: 19 },
      { src: '20', id: 20 }]
    })
  },
  getUserInfo: function (cb) {
    var that = this;
    if (this.globalData.userInfo) {
      typeof cb == "function" && cb(this.globalData.userInfo)
    } else {
      //Call login interface
      wx.login({
        success: function () {
          wx.getUserInfo({
            success: function (res) {
              that.globalData.userInfo = res.userInfo;
              typeof cb == "function" && cb(that.globalData.userInfo)
            }
          })
        }
      });
    }
  },
  globalData: {
    userInfo: null
  }
})
