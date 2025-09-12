<!DOCTYPE html>
<html lang="en">
<head>
    <title>Not</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="/jquery.min.js"></script>
    <script>
        $(function() {
            $("p").not(".intro").css("background-color","yellow");
        })
    </script>
</head>
<body>
<h1>Welcome to the Homepage</h1>

<p>My name is Donald.</p>
<p class="intro">I live in Duckberg.</p>
<p class="intro">I love Duckberg.</p>
<p>My best friend is Mickey.</p>
<br>
<div class="box">
    <a href="/">Link to Home</a>
</div>
</body>
</html>