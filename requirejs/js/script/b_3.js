define(['script/a_3'], function (a_3) {
    var b_3 = {
        doSomething: function () {
            a_3.showMessage();
        },
        getName: function () {
            return "hangge.com";
        }
    };
    return b_3;
});