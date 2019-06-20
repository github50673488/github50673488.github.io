require.config({
      baseUrl: '/static_test/requirejs/js/',//这个用绝对路径保险点          
    paths: {
        jquery: 'lib/jquery1',//对于 baseUrl的路径
    }
});

require(['jquery','script/b_3'],function ($, b_3) {
    $("#btn").click(function(){
      b_3.doSomething();
    });
});