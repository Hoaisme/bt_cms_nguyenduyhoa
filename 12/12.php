<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/12.less', 'css/12.css');
        ?>
        <link href="css/12.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <div class='type-12'>
            <div class='container'>
            </div>
        </div>
    </body>

</html>