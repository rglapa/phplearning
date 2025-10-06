<!DOCTYPE html>
<html lang="en">

    <head>
        <script src="/jquery.min.js"></script>
        <link rel="stylesheet" href="/styles.css">
        <meta charset="UTF-8">
        <title>Dimensions</title>
        <script>
            $(function () {
                $("#b1").on("click", function () {
                    alert("Box width = " + $("div").width());
                })
                $("#b2").on("click", function () {
                    $("#div1").width("400px");
                })
                $("#b3").on("click", function () {
                    alert("Box height = " + $("#div2").height());
                })
                $("#b4").on("click", function () {
                    $("#div2").height("400px");
                })
            })
        </script>
        <style>
            button {
                margin: 10px;
                cursor: pointer
            }

            div {
                margin: 10px;
                padding: 12px;
                width: 140px
            }
        </style>
    </head>

    <body>
        <p>Click the below buttons to see the result:</p>
        <div id="div1" style="background-color:#93ff93;">Box</div>
        <button id="b1">Get Width</button>
        <button id="b2">Set Width</button>
        <br>
        <div id="div2" style="background-color:#93ff93">Box2</div>
        <button id="b3">Get Height</button>
        <button id="b4">Set Height</button>
        <br>
        <div class="box">
            <a href="/">Link to Home</a>
        </div>
    </body>

</html>