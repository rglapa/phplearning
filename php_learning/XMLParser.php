<!DOCTYPE html>
<html lang="en">
<head>
    <title>XML Parser</title>
    <link rel="stylesheet" href="/styles.css">
    <script>
        function showCD(str) {
            if (str === "") {
                document.getElementById("txtHint").innerHTML = "";
            }

            let xmlHTTP;
            if (window.XMLHttpRequest) {
                xmlHTTP = new XMLHttpRequest();
            } else {
                xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlHTTP.onreadystatechange = function() {
                if (xmlHTTP.readyState === 4 && xmlHTTP.status === 200) {
                    document.getElementById("txtHint").innerHTML = xmlHTTP.responseText;
                }
            }
            xmlHTTP.open("GET","hello.php?q="+str, true);
            xmlHTTP.send();
        }
    </script>
</head>
<body>
<form>
    Select a Course:
    <label>
        <select name="cds" onchange="showCD(this.value)">
            <option value="">Select a course:</option>
            <option value="Android">Android</option>
            <option value="Html">HTML</option>
            <option value="Java">Java</option>
            <option value="Microsoft">MS technologies</option>
        </select>
    </label>
</form>
<div id="txtHint"><b>Course info will be listed here...</b></div>
<br>
<div class="box">
    <a href="/index.php">Link to Home</a>
</div>
</body>
</html>