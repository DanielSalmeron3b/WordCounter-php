<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <title>WordCounter</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>

<body>
    <header class="row s12">
        <h1>Word Counter</h1>
    </header>
    <section>
        <article class="container">
            <?php
            if (isset($_POST['btnCount'])) :
                require "wordcount.php";
                $clean_text = wordcount($_POST['area']);
                $complement = count($clean_text) > 1 ? "words" : "word";
                echo "<p>There's a total of: " . count($clean_text) . " $complement</p>\n";
            else :
            ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="frmText" id="frmText" class="col s12">
                    <div class="row col s12">
                        <div class="input-field col s12">
                            <textarea name="area" id="text-box" placeholder="Write/copy your text here..." class="materialize-textarea col s12"></textarea>
                            <br />
                        </div>
                    </div>
                    <div class="12u">
                        <button type="submit" name="btnCount" id="btnCount" class="btn waves-effect waves-light">
                            <i>Count!</i>
                        </button>
                    </div>
                </form>
                <script src="js/main.js"></script>
            <?php
            endif;
            ?>
        </article>
    </section>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<!-- Materialize CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</html>