require.config({
  //baseUrl: '../js',//
  //baseUrl 用于加载模块的根路径。在配置这个属性后，以后的文件都是在这个路径下查找内容了。
//  以下是相对路径的规则：
//如果 <script/> 标签引入 require.js 时没有指定 data-main 属性，则以引入该 js 的 html 文件所在的路径为根路径。
//如果有指定 data-main 属性，也就是有指定入口文件，则以入口文件所在的路径为根路径。
//如果在 require.config() 中有配置 baseUrl，则以 baseUrl 的路径为根路径。（一般要写baseUrl并且baseUrl写成绝对路径）
//以上三条优先级逐级提升，如果有重叠，后面的根路径覆盖前面的根路径。
   
    baseUrl: '/static_test/requirejs/js/',//这个用绝对路径保险点          
    paths: {
        jquery: 'lib/jquery1',//对于 baseUrl的路径
    }
});

require(['jquery', 'script/hello'],function ($, hello) {
    $("#btn").click(function(){
      hello.showMessage("show msg test");
    });
});