<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>

</head>
<body>
    <form onsubmit="submittingForm()" action="/" method="GET">
        <button type="button" class="btn btn-primary" id="primary">Primary</button>
        <button type="button" class="btn btn-secondary" id="primary">Secondary</button>
        <input type="button" name="test" class="btn btn-success" id="success" value="Success"/>
        <!-- <img/> -->
        <button type="button" class="btn btn-danger" id="danger" onclick="dangerDarsan()">Danger</button>
        <button type="button" class="btn btn-warning"
        onclick="eneIdtaiElementSoli('the-child')">Warning</button>
        <button type="button" class="btn btn-info" onmouseover="document.getElementById('the-child').innerText = 'Info deer mouse irlee!'">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="submit" class="btn btn-dark">Dark</button>
    </form>
    <?php //$user; print_r($user); die(); ?>

    <button type="button" class="btn btn-link">Link</button>

    <div class="with-child" id="with-child">
        <p class="the-child" id="the-child">
            I'm the child
            <span>ene span baina</span>
        </p>
    </div>
    <style>
    /* css ornoo = cascading STYLE sheet*/
    p#the-child {
        /* display: block !important; */
    }
    p.daragdsan {
        background-color: green;
        color: white;
    }
    </style>
    <script src="jquery.js"></script>
    <script src="main.js"></script>

    <?php
    function tooBod($variable){
        // function happens here
        return $variable;
    }

    function xoyorVariable($neg, $xoyor) {
        return;
    }
    xoyorVariable(1,2);    
    ?>
    <form method="POST" action="post.php">
        <input type="text" name="name" id="nameinput" required />
        <input type="submit">
    </form>
</body>
</html>