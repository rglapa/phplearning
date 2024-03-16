<!DOCTYPE html>
<html lang="en">
<head>
    <title>GetPost</title>
    <script src="/jquery.js"></script>
    <script>
        $(function() {
            $("button").on("click", function() {
                $.get("/demo_test.asp", function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                })
            })
        })
    </script>
</head>
<body>
<button>Send an http get request to a page and get the result back.</button>
<br>
<p>
    <button onclick="location.href='/index.php'">Link to Home</button>
</p>
</body>
</html>