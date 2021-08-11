<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            li { margin: 3px; padding: 3px; background: #EEEEEE; }
            li.hilight { background: yellow; }
        </style>
    </head>
    <body>
        <ul>
            <li><b>Click me!</b></li>
            <li>You can also <b>Click me!</b></li>
        </ul>
        <script>
            $(document).bind("click", function (e) {
                //$(e.target).parents("li").toggleClass("hilight");// 这个要点到Click me! 才行
                $(e.target).closest("li").toggleClass("hilight");// 这个点到li里头任何均可
            });
        </script>
    </body>
</html>
