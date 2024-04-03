<!DOCTYPE html>
<html lang="en">
<head>
    <title>Finding</title>
    <link rel="stylesheet" href="/styles.css">
    <style>
        .descendants * {
            display: block;
            border: 2px solid lightgrey;
            color: lightgrey;
            padding: 5px;
            margin: 15px;
        }
    </style>
    <script src="/jquery.min.js"></script>
    <script>
        $(function() {
            $("#divp1").find("span").css({"color": "red","border":"2px solid red"});
        })
    </script>
</head>
<body>
<div id="divp1" class="descendants" style="width:500px;">div (current element)
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
</div>
<div class="box">
    <a href="/index.php">Link to Home</a>
</div>
</body>
</html>