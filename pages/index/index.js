Page({
  data: {
    items: [
      { value: '01', name: '1' },
      { value: '02', name: '2' },
      { value: '03', name: '3', checked: 'true' },
      { value: '04', name: '4' },
      { value: '05', name: '5' },
      { value: '06', name: '6' },
    ],
    lessons: [
      { value: '01', name: '1' },
      { value: '02', name: '2' },
      { value: '03', name: '3', checked: 'true' },
      { value: '04', name: '4' },
      { value: '05', name: '5' },
      { value: '06', name: '6' },
      { value: '07', name: '7' },
      { value: '08', name: '8' },
      { value: '09', name: '9' },
      { value: '10', name: '10' },
      { value: '11', name: '11' },
      { value: '12', name: '12' },
      { value: '13', name: '13' },
      { value: '14', name: '14' },
      { value: '15', name: '15' },
      { value: '16', name: '16' },
      { value: '17', name: '17' },
      { value: '18', name: '18' },
      { value: '19', name: '19' },
      { value: '20', name: '20' }
    ],
    dispHSK:'03',
    dispLesson:'03'
  },
  radioHSKChange: function (e) {
    var items = this.data.items;
    for (var i = 0, len = items.length; i < len; ++i) {
      items[i].checked = items[i].value == e.detail.value
    }
    wx.setStorage({
      key: "HSK",
      data: e.detail.value
    })
    this.setData({
      items: items,
      dispHSK: e.detail.value
    });
  },
  radioLessonChange: function (e) {
    var items = this.data.lessons;
    for (var i = 0, len = items.length; i < len; ++i) {
      items[i].checked = items[i].value == e.detail.value
    }
    wx.setStorage({
      key: "Lesson",
      data: e.detail.value
    })
    this.setData({
      lessons: items,
      dispLesson: e.detail.value
    });
  },
  onLaunch: function () {
    wx.setStorage({
      key: "HSK",
      data: 3
    })
    wx.setStorage({
      key: "Lesson",
      data: 3
    })
  },
  onReady(e) {
    wx.setNavigationBarTitle({ title: '汉语水平考试 HSK'})
  }
})
