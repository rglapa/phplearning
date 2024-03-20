<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Home Page</title>
    <style>
        html {
            padding: 50px;
            font-family: sans-serif;
        }
        html h1 {
            text-align: center;
        }
        html h2 {
            text-align: center;
            color: grey;
        }
        #exampleSlider {
            position: relative;
            border: 1px solid black;
        }
        @media (max-width: 767px) {
            #exampleSlider {
                border-color: transparent;
            }
        }
        #exampleSlider .MS-content {
            margin: 15px 5%;
            overflow: hidden;
            white-space: nowrap;
            border: 1px solid red;
        }
        @media (max-width: 767px) {
            #exampleSlider .MS-content {
                margin: 0;
            }
        }
        #exampleSlider .MS-content .item {
            display: inline-block;
            height: 100%;
            overflow: hidden;
            position: relative;
            vertical-align: top;
            border: 1px solid green;
            border-right: none;
            width: 20%;
        }
        @media (max-width: 1200px) {
            #exampleSlider .MS-content .item {
                width: 25%;
            }
        }
        @media (max-width: 992px) {
            #exampleSlider .MS-content .item {
                width: 33.3333%;
            }
        }
        @media (max-width: 767px) {
            #exampleSlider .MS-content .item {
                width: 50%;
            }
        }
        #exampleSlider .MS-content .item p {
            font-size: 30px;
            text-align: center;
            line-height: 1;
            vertical-align: middle;
            margin: 0;
            padding: 10px 0;
        }
        #exampleSlider .MS-controls button {
            position: absolute;
            border: none;
            background: transparent;
            font-size: 30px;
            outline: 0;
            top: 35px;
        }
        @media (max-width: 767px) {
            #exampleSlider .MS-controls button {
                display: none;
            }
        }
        #exampleSlider .MS-controls button:hover {
            cursor: pointer;
        }
        #exampleSlider .MS-controls .MS-left {
            left: 10px;
            background: aqua;
        }
        @media (max-width: 992px) {
            #exampleSlider .MS-controls .MS-left {
                left: -2px;
            }
        }
        #exampleSlider .MS-controls .MS-right {
            right: 10px;
        }
        @media (max-width: 992px) {
            #exampleSlider .MS-controls .MS-right {
                right: -2px;
            }
        }

    </style>
    <script src="jquery.js"></script>
    <script src="multislider/js/multislider.min.js"></script>

</head>
<body>
<div id="exampleSlider">
    <div class="MS-content">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
        <div class="item">Item 4</div>
        <div class="item">Item 5</div>
        <div class="item">Item 6</div>
        <div class="item">Item 7</div>
        <div class="item">Item 8</div>
        <div class="item">Item 9</div>
        <div class="item">Item 10</div>
    </div>
    <div class="MS-controls">
        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
</div><br><br>
<button>Send an HTTP GET request to a page and get the result back</button><br>
<p><button onclick="location.href='/hello.php'">Link to Hello</button></p>
<button onclick="location.href='/children.php'">Link to Children</button><br>
<p><button onclick="location.href='/jquery_learning/AddClass.php'">Link to AddClass</button></p>
<p><button onclick="location.href='/jquery_learning/RemoveClass.php'">Link to RemoveClass</button></p>
<p><button onclick="location.href='/jquery_learning/Filtering.php'">Link to Filtering</button></p>
<p><button onclick="location.href='/jquery_learning/GetPost.php'">Link to GetPost</button></p>
<p><button onclick="location.href='/jquery_learning/Hover.php'">Link to Hover</button></p>
<p><button onclick="location.href='php_learning/Echoing.php'">Link to Echoing</button></p>
<p><button onclick="location.href='php_learning/Abstract.php'">Link to Abstract</button>
    <button onclick="location.href='php_learning/Interfaces.php'">Link to Interfaces</button>
    <button onclick="location.href='php_learning/Iterables.php'">Link to Iterables</button>
    <button onClick="location.href='/php_learning/MySQLInsert.php'">Link to MySQL</button>
</p>
<button onclick="location.href='/jquery_learning/phpinfo.php'">Link to PHPInfo</button>
<script>
    $(function() {
        $("button").on("click", function() {
            $.get("/demo_test.asp", function(data, status) {
                alert("Data: " + data + "\nStatus: " + status)
            })
        })
    });
    $("#exampleSlider").multislider({
        interval: 4000,
        slideAll: true,
        duration: 1500
    });
</script>
</body>
</html>