<!DOCTYPE html>
<html lang="el">
<head>
    <title>Filtering</title>
    <script src="/jquery.min.js"></script>
    <script>
        $(function() {
            $("div").first().css("background-color", "yellow");
        })
    </script>
</head>
<body>
<h1>Welcome to my Homepage</h1>
<p>This is sort of a paragraph</p>
<div style="border: 1px solid black">
    <p>A paragraph in a div</p>
    <p>Another paragraph in a div</p>
</div>
<br>

<div style="border: 1px solid black">
    <p>A paragraph in a div</p>
    <p>Another paragraph in a div</p>
</div>
<br>

<div style="border: 1px solid black">
    <p>A paragraph in a div</p>
    <p>Another paragraph in a div</p>
</div>
<br>

<div>
    <button onclick="location.href='/'">Link to Home</button>
</div>
</body>
</html>