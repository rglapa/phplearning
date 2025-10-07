<heading />
<title>GetPost</title>

<script src="/jquery.min.js"></script>
<script>
    $(function () {
        $("button").on("click", function () {
            $.get("/demo_test.asp", function (data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            })
        })
    })
</script>
<endheading />
<button>Send an http get request to a page and get the result back.</button>
<br>

<div class="backButton">
    Test text
</div>
Heading: <?php echo($heading) ?>
<div class="box">
    <a href="/">Link to Home</a>
</div>
<footer />