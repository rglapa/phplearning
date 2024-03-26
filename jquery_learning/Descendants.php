<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Descendants
    </title>
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
    <script src="/jquery.js"></script>
    <script>
        $(function() {
            $("div").children().css({"color":"red","border":"2px solid red"});
        })
    </script>
</head>
<body>
<div class="descendants" style="width:500px;"> div (current element)
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
    <p>p (child)
        <span>span (grandchild)</span>
    </p>
</div>
<div class="box">
    <p><a href="/index.php">Link to Home</a></p>
</div>

</body>
</html>