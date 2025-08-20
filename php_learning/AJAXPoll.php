<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajax Poll</title>
    <link rel="stylesheet" href="/styles.css">
    <script>
        function getVote(int) {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if(this.readyState===4 && this.status===200) {
                    document.getElementById("poll").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","poll_vote.php?vote="+int, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<div id="poll">
    <h3>Do you like PHP and AJAX so far?</h3>
    <form>
        <label>
            Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
            No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
        </label>
    </form>
</div>
<br>
<div class="box">
    <a href="/index.html">Link to Home</a>
</div>
</body>
</html>