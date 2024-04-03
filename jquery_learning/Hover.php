<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hover</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="/jquery.min.js"></script>
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
<div class="box">
    <p><a href="/index.php">Link to Home</a></p>
</div>
</body>
</html>