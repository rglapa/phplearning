<!DOCTYPE html>
<html lang="en">
<head>
    <title>Children</title>
    <style>
        .descendants * {
            display: block;
            border: 2px solid lightgrey;
            color: lightgrey;
            padding: 5px;
            margin: 15px;
        }
    </style>
    <script src="jquery.min.js"></script>
    <script>
        $(function() {
            $("divp2").children().css({"color":"red", "border":"2px solid red"})
        })
    </script>
</head>
<body>
<div id="divp2" class="descendants" style="width:500px">div (current element)
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
</div>
<div id="divp1"><button onclick="location.href='index.php'">Link to home</button></div>
</body>
</html>