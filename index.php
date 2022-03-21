<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QPython</title>
    <link rel="stylesheet" href="ui/css/style.css" />
    <link rel="shortcut icon" href="ui/img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="ui/js/lib/ace.js"></script>
    <script src="ui/js/lib/theme-monokai.js"></script>
    <script src="ui/js/ide.js"></script>
</head>
<body>
    <div class="wrapper">
        <nav>
            <ul>
                <li title="Python негіздері" onclick="openPage('inf')"><img class="nav-img" src="ui/img/open-book.png" alt=""></li>
                <li title="Тапсырмалар" onclick="openPage('tasks')"><img class="nav-img" src="ui/img/list.png" alt=""></li>
                <li title="IDE" onclick="openPage('ide')"><img class="nav-img" src="ui/img/code.png" alt=""></li>
            </ul>
            <span class="btn_toogle" onclick="toggleTheme()">
                <img src="ui/img/moon.png" id="moon" alt="">
                <img src="ui/img/sun.png" id="sun" class="hide" alt="">
            </span>
        </nav>
        
        <?php 
            if (!isset($_GET["page"]) || $_GET["page"] == "inf") { 
                include "ui/page/inf.php";
            }
            if (isset($_GET["page"]) && $_GET["page"] == 'tasks'){ 
                include "ui/page/tasks.php"; 
            }
            if (isset($_GET["page"]) && $_GET["page"] == 'ide'){ 
                include "ui/page/ide.html"; 
            }
        ?>
    </div>
</body>
</html>