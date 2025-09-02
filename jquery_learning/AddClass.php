<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="../jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("p").click(function() {
                    $(this).hide();
                });
            });
        </script>
        <title>
            Hteor
        </title>
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
        <a href="/index.html">Link to Home</a>
    </body>
</html>