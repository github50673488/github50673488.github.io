;
(function (window, document, util, Food, Snake) {
  var foods = []

  for (var i = 0; i < 10; i++) {
    foods.push(new Food({
      color: `rgb(${util.getRandom(0, 256)}, ${util.getRandom(0, 256)}, ${util.getRandom(0, 256)})`,
	  // ${var}是变量的占位符
	  //代替字符串拼接
	  // 例如： var a = 1; console.log('一共有'+a+'个鸡蛋！')
	  // 那么现在你只要console.log(`一共有${a}个鸡蛋！`)
    }))
  }

  window.setInterval(function () {
    foods.forEach(function (item) {
      item.render()
    })
  }, 500)
})(window, document, util, Food)
