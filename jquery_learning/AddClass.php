<!DOCTYPE html>
<html>
    <head>
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("button").click(function() {
                    $("h1,h2,p").addClass("blue");
                    $("div").addClass("important");
                })
            })
        </script>
        <style>
            .important {
                font-weight: bold;
                font-size: xx-large
            }
            .blue {
                color: blue
            }
        </style>
    </head>
    <body>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>

        <p>This is a paragraph.</p>
        <p>This is not a paragraph</p>
        <a href="/index.php">Link to Home</a>
    </body>
</html>