<!DOCTYPE html>
<html>

<head>
    <title>sfdf</title>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script>
        $(document).ready(function() {
            $(".ex .hide").click(function() {
                $(this).parents(".ex").hide("slow");
            });
        });

    </script>
    <style>
        .ex {
            background-color: #e5eecc;
            padding: 7px;
            border: solid 1px #c3c3c3;
        }

        .ex1 {
            background-color: #CDEEEE;
            padding: 7px;
            border: solid 1px #c3c3c3;
        }

    </style>
</head>

<body>

    <h3>中国办事处</h3>
    <div class="ex">
        <!--class="ex"-->
        <button class="hide" type="button">隐藏</button>
        <p>联系人：张先生<br />
            北三环中路 100 号<br />
            北京</p>
    </div>

    <h3>美国办事处</h3>
    <div class="ex">
        <button class="hide" type="button">隐藏</button>
        <p>联系人：David<br />
            第五大街 200 号<br />
            纽约</p>
    </div>

</body>

</html>
