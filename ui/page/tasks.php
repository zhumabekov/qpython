        <main class="main-content">
            <div class="sub-nav">
                <h3><span>Тапсырмалар</span><span class="hiden burgerMenu"><img src="ui/img/menu.png"></span></h3>
                <ul class="secondaryMenu">
                    <li onclick="openSubPage('task1')"><img src="ui/img/file.png" alt="">Тапсырма 1</li>
                    <li onclick="openSubPage('task2')"><img src="ui/img/file.png" alt="">Тапсырма 2</li>
                    <li onclick="openSubPage('task3')"><img src="ui/img/file.png" alt="">Тапсырма 3</li>
                </ul>
            </div>
            <div class="task-block">
                <h2>Практикалық жұмыс</h2>
                <?php 
                    if (!isset($_GET["subpage"]) || $_GET["subpage"] == "task1") { 
                        include "ui/page/task1.html";
                    }
                    if (isset($_GET["subpage"]) && $_GET["subpage"] == 'task2'){ 
                        include "ui/page/task2.html"; 
                    }
                    if (isset($_GET["subpage"]) && $_GET["subpage"] == 'task3'){ 
                        include "ui/page/task3.html"; 
                    }
                ?>
            </div>
        </main> 
