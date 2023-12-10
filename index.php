<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type = "text/css"/><!--CSS file added -->
    <script src="app.js"></script><!--Javasript file added -->
    <title>Dolphin CRM</title>
</head>
<body class = "container">
    <?php require "adminChecker.php"?>
    <header>
        <div>
            <img src="" alt=""><!--Logo-->
            <p>DOLPHIN CRM</p>
        </div>
    </header>
    <div id = "gridBox">
    </div>
    <!--Footer containing date using php date function -->
    <?php include "footer.php";?>
</body>
</html>