<heading />
    <title>Example</title>
    <style>
        span {
            color: green;
        }
    </style>
    <link rel="stylesheet" href="/styles.css">
    <script>
        function showHint(str) {
            if (str.length === 0) {
                document.getElementById("txtHint").innerHTML = "";

            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","php_ajax.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
<endheading />
<p><b>Search your favorite tutorials:</b></p>
<form>
    <label>
        <input type="text" onkeyup="showHint(this.value)">
    </label>
</form>
<p>Entered Course name: <span id="txtHint"></span></p>
<div class="box">
    <a href="/">Link to Home</a>
</div>
<footer />