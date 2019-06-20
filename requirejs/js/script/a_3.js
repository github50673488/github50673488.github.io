//define(['script/b_3'], function (b_3) {
define(['require'], function (require) {//要想办法把装载依赖变成运行依赖，这需要引用特别的require依赖
    var a_3 = {
        showMessage: function () {
//        console.log("欢迎访问 hangge.com" +
//                b_3.getName()//如果b模块也在装载的时候依赖了a，这就是模块依赖循环
//                );

            require(['script/b_3'], function (b_3) {//变成了运行的时候再依赖b
                console.log("欢迎访问 " + b_3.getName());
            });
        }
    };

    return a_3;
});
