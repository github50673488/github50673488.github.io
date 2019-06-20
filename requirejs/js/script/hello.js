define(//自定义一个 （hello）模块,相当一个命名空间
        ['jquery'], //同时该模块也是依赖于 jQuery
        function ($) {
            var hello = {
                //变量定义区
                moduleName: "hello module",
                moduleVersion: "1.0",
                
                //函数定义区
                showMessage: function (name) {
                    if (undefined === name) {
                        return;
                    } else {
                        $('#messageBox').html('欢迎访问 ' + name);
                    }
                }
            };
            return hello;
        });