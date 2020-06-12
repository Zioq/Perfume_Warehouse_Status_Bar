<?php


class Page  {

    static private $_title = "";

    static public function setTitle(string $title) {
        self::$_title = $title;
    }

    static public function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <title><?php echo self::$_title; ?></title>
        </head>
        <body>
            <h1><?php echo self::$_title; ?></h1>

    <?php
    }

    static function DisplayWarehouse(Array $stats) { ?>
            
            
        <table>
            <tr>
                <td>Jo Malone</td>
                <td><progress value="<?php echo $stats["Jomlaone"]; ?>" max="<?php echo WAREHOUSE_CAPACITY; ?>"></td>
            </tr>
            <tr>
                <td>Diptyque</td>
                <td><progress value="<?php echo $stats["Diqtyque"]; ?>" max="<?php echo WAREHOUSE_CAPACITY; ?>"></td>
            </tr>
            <tr>
                <td>Burberry</td>  
                <td><progress value ="<?php echo $stats["Burberry"]; ?>" max="<?php echo WAREHOUSE_CAPACITY; ?>"></td>
            </tr>
            <tr>
                <td>Bvlgari</td>
                <td><progress value="<?php echo $stats["Bvlgari"]; ?>" max="<?php echo WAREHOUSE_CAPACITY; ?>"></td>
            </tr>
        </table>

    <?php }


    static function footer()    { ?>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        </body>
        </html>

    <?php }

    }

?>