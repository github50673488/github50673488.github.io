<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <p><span>Hello</span>, how are you?</p>
        <p>Me? I'm <span>good</span>.</p>
        <script>
            $("p").find("span").css('color', 'red');
        </script>
    </body>
</html>
