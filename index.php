<?php
/* Main webpage for Markdown to HTML Converter */
require 'converter.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Markdown to HTML Converter | Elina Beniaminov</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/frontend.js"></script>
    </head>

    <body>
    <section class="container">
        <h1 class="project-header">Markdown to HTML Converter</h1>
        <p></p>

        <div class="column form-container">
            <form id="markdown_form" method="POST" action="" enctype="multipart/form-data">
                <textarea id="markdown" value=""></textarea>
                <button type="submit" class="button">Submit</button>
            </form>
            <div id="form_validation"></div>
        </div>

        <div class="column grey-content">
            <div id="html_content"></div>
        </div>
    </section>
    </body>
</html>