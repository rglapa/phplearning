<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJAX</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="/jquery.min.js"></script>
    <script>
        $(function() {
            $("#driver").on("click",function() {
                $('#stage').load('jquery/result.html');
            });
        });
    </script>
</head>
<body>
<p>Click on the button to load /jquery/result.html file -</p>
<div id="stage" style="background-color:white;">
    STAGE
</div>

<input type="button" id="driver" value="Load Data"/>
<br><br>
<div class="box">
    <a href="/index.html">Link to Home</a>
</div>
</body>
</html>