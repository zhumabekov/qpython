
        <main class="main-content">
            <div class="sub-nav">
                <h3><span>Python негіздері</span><span class="hiden burgerMenu"><img src="ui/img/menu.png"></span></h3>
                <ul class="secondaryMenu">
                    <li onclick="openSubPage('inf1')"><img src="ui/img/file.png" alt="">Бағдарлама сипаттамасына кіріспе</li>
                    <li onclick="openSubPage('inf2')"><img src="ui/img/file.png" alt="">Айнымалылар және деректер типтері</li>
                    <li onclick="openSubPage('inf3')"><img src="ui/img/file.png" alt="">Консольді енгізу және шығару</li>
                </ul>
            </div>
            <?php 
                if (!isset($_GET["subpage"]) || $_GET["subpage"] == "inf1") { 
                    include "ui/page/1.html";
                }
                if (isset($_GET["subpage"]) && $_GET["subpage"] == 'inf2'){ 
                    include "ui/page/2.html"; 
                }
                if (isset($_GET["subpage"]) && $_GET["subpage"] == 'inf3'){ 
                    include "ui/page/3.html"; 
                }
            ?>
        </main> 