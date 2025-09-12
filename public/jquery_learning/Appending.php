<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appending</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="/jquery.min.js"></script>
    <script>
        $(function() {
            $("#btn1").on("click", function() {
                $("#p1").append(" <b>Appended text</b>.");
            });
            $("#btn2").on("click", function() {
                $("ol").append("<li>Appended item.</li>");
            });
        });
    </script>
</head>
<body>
<p>This is a paragraph</p>
<p>This is not not another paragraph</p>

<ol>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ol>
<div>
    <button id="btn1">Append Text</button>
    <button id="btn2">Append list item</button>
</div>

<br>
<div class="box">
    <a href="/">Link to Home</a>
</div>
</body>
</html>