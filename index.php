<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="/styles.css">
    <script src="jquery.js"></script>
    <script src="multislider/js/multislider.min.js"></script>
    <script src="jquery.cycle.lite.js"></script>
</head>
<body>

<div id="exampleSlider">
    <div class="MS-content">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
        <div class="item">Item 4</div>
        <div class="item">Item 5</div>
        <div class="item">Item 6</div>
        <div class="item">Item 7</div>
        <div class="item">Item 8</div>
        <div class="item">Item 9</div>
        <div class="item">Item 10</div>
    </div>
    <div class="MS-controls">
        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
</div><br><br>
<div id="slideshow1">

</div>
<script>
    $(function() {
        $("button").on("click", function() {
            $.get("/demo_test.asp", function(data, status) {
                alert("Data: " + data + "\nStatus: " + status)
            })
        })
    });
    $("#exampleSlider").multislider({
        interval: 4000,
        slideAll: true,
        duration: 1500
    });
    $('#slideshow1').cycle();
</script>
<button>Send an HTTP GET request to a page and get the result back</button><br>
<br>
<div id="main" >
    <div class="box">
        <a href='/hello.php'> Link to Hello</a>
    </div>
    <div  class="box">
        <a href="/children.php">Link to children</a>
    </div>
    <div class="box">
        <a href="/jquery_learning/AddClass.php">Link to AddClass</a>
    </div>
    <div class="box">
        <a href="/jquery_learning/RemoveClass.php">Link to RemoveClass</a>
    </div>
</div>
<br>
<div id="main">
    <div class="box">
        <a href="jquery_learning/Filtering.php">Link to Filtering</a>
    </div>
    <div class="box">
        <a href="jquery_learning/GetPost.php">Link to GetPost</a>
    </div>
    <div class="box">
        <a href="jquery_learning/Hover.php">Link to Hover</a>
    </div>
    <div class="box">
        <a href="php_learning/Echoing.php">Link to Echoing</a>
    </div>
</div>
<br>

<div id="main">
    <div class="box">
        <a href="php_learning/Abstract.php">Link to Abstract</a>
    </div>
    <div class="box">
        <a href="php_learning/Interfaces.php">Link to Interfaces</a>
    </div>
    <div class="box">
        <a href="php_learning/Iterables.php">Link to Iterables</a>
    </div>
    <div class="box">
        <a href="php_learning/MySQLInsert.php">Link to MySQL</a>
    </div>
</div>
<br>

<!-- Test comment -->
<div id="main">
    <div class="box" >
        <a href="jquery_learning/phpinfo.php">Link to PHPInfo</a>
    </div>
    <div class="box">
        <a href="/php_learning/Filters.php">Link to Filters</a>
    </div>
    <div class="box">
        <a href="/php_learning/Constructor.php">Link to Constructor</a>
    </div>
    <div class="box">
        <a href="/php_learning/Destructor.php">Link to Destructor</a>
    </div>
</div>
<br>
<div id="main">
    <div class="box">
        <a href="/php_learning/StaticProperty.php">Link to Static Properties</a>
    </div>
    <div class="box">
        <a href="/jquery_learning/Descendants.php">Link to Descendants</a>
    </div>
    <div class="box">
        <a href="/jquery_learning/Appending.php">Link to Appending</a>
    </div>
    <div class="box">
        <a href="/jquery_learning/Finding.php">Link to Finding</a>
    </div>
</div>
<br>
<div id="main">
    <div class="box">
        <a href="/jquery_learning/Not.php">Link to Not</a>
    </div>
    <div class="box">
        <a href="/php_learning/CompleteForm.php">Link to CompleteForm</a>
    </div>
    <div class="box">
        <a href="/php_learning/ForEach.php">Link to ForEach</a>
    </div>
    <div class="box">
        <a href="/php_learning/LogicalOperators.php">Link to Logical Operators</a>
    </div>
</div>
<br>
<div id="main">
    <div class="box">
        <a href="/php_learning/PassingFunctions.php">Link to Passing Functions</a>
    </div>
    <!-- New test -->
    <div class="box">
        <a href="/php_learning/Factorial.php">Link to Factorial</a>
    </div>
    <div class="box">
        <a href="/php_learning/example.php">Link to AJAX Search</a>
    </div>
    <div class="box">
        <a href="/php_learning/AutoComplete.php">Link to AutoComplete</a>
    </div>
</div>

</body>
</html>