<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Home Page</title>
    <script src="jquery.js"></script>
    <script>
        $(function() {
            $("button").on("click", function() {
                $.get("/demo_test.asp", function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status)
                })
            })
        })
    </script>
</head>
<body>
<button>Send an HTTP GET request to a page and get the result back</button><br>
<p><button onclick="location.href='/hello.php'">Link to Hello</button></p>
<button onclick="location.href='/children.php'">Link to Children</button><br>
<p><button onclick="location.href='/jquery_learning/AddClass.php'">Link to AddClass</button></p>
<p><button onclick="location.href='/jquery_learning/RemoveClass.php'">Link to RemoveClass</button></p>
<p><button onclick="location.href='/jquery_learning/Filtering.php'">Link to Filtering</button></p>
<p><button onclick="location.href='/jquery_learning/GetPost.php'">Link to GetPost</button></p>
<p><button onclick="location.href='/jquery_learning/Hover.php'">Link to Hover</button></p>
<p><button onclick="location.href='php_learning/Echoing.php'">Link to Echoing</button></p>
</body>
</html>