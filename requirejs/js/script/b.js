define(['script/a'], function (a) {
    var b = {
        doSomething: function () {
            a.showMessage();
        },
        getName: function () {
            return "hangge.com";
        }
    };
    return b;
});