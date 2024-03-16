<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hover</title>
    <script src="/jquery.js"></script>
    <script>
        $(function() {
            $("#p1").on("mouseenter", function() {
                alert("You entered p1")
            })
            .on("mouseleave", function() {
                alert("Bye! You now leave p1")
            })
        })
    </script>
</head>
<body>
<p id="p1">This is a paragraph</p>
<p><button onclick="location.href='/index.php'">Link to Home</button></p>
</body>
</html>