define(['script/b'], function (b) {
var a={
     showMessage : function () {
        console.log("欢迎访问 hangge.com" +
                b.getName()//如果b模块也在装载的时候依赖了a，这就是模块依赖循环
                );
    }
};

    return a;
});
