<?php

require_once 'utils/common.php';
require_once 'Models/Admin.php';
require_once 'DAO/DAOAdmin.class.php';

session_start();
noMagicQuotes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SYSTEM ADMIN</title>
    <link rel='stylesheet' href='css/gestion/gestionCSS.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css'>
    <link rel="stylesheet" href="css/gestion/styleGestion.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="js/custom/utils.js"></script>
    <script>
        function cliquerMenu(indexMenu) {
            let contenu = document.getElementById("contenu");

            if(indexMenu === 1) { /** 1 === liste d'admin */
                contenu.setAttribute("src", "View/Admin/adminList.php");
            } else if(indexMenu === 2) { /** 2 === ajouter une admin */
                contenu.setAttribute("src", "View/Admin/addAdmin.php");
            }else if(indexMenu === 3) { /** 3 ===  liste d'artiste */
                contenu.setAttribute("src", "View/Artiste/artisteList.php");
            }else if(indexMenu === 4){ /** 4 === ajouter une artistes */
                contenu.setAttribute("src", "View/Artiste/addArtiste.php");
            }else if(indexMenu === 5) {/** 5 === liste d'événement */
                contenu.setAttribute("src", "View/Events/evenementList.php");
            }else if(indexMenu === 6){ /** 6 === ajouter une événement */
                contenu.setAttribute("src", "View/Events/addEvenement.php");
            }else if(indexMenu === 7){ /** 7 === tous les photos */
                contenu.setAttribute("src", "View/Gallery/photoList.php");
            }else if(indexMenu === 8){ /** 8 === ajouter une photo */
                contenu.setAttribute("src", "View/Gallery/addPhoto.php");
            }
        }
    </script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-lg has-bg-image">
        <div class="image-wrapper">
            <img src="images/sider.jpg" alt="sidebar background" />
        </div>

        <div class="sidebar-layout">
            <div class="sidebar-header">
                    <span style="
                text-transform: uppercase;
                font-size: 15px;
                letter-spacing: 3px;
                font-weight: bold;
              ">Anomic Elements</span>
            </div>
            <div class="sidebar-content">
                <nav class="menu open-current-submenu">
                    <ul>
                        <li class="menu-item sub-menu">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-vip-diamond-fill"></i>
                                    </span>
                                <span class="menu-title">Gestion des Admins</span>
                                <span class="menu-suffix">&#x1F525;</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(1)">
                                            <span class="menu-title">Liste d'admin</span>
                                        </a>
                                    </li>


                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(2)">
                                            <span class="menu-title">Ajouter une Admin</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-bar-chart-2-fill"></i>
                                    </span>
                                <span class="menu-title">Artiste</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(3)">
                                            <span class="menu-title">Tous les Artistes</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(4)">
                                            <span class="menu-title">Ajouter une Artiste</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item sub-menu">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-global-fill"></i>
                                    </span>
                                <span class="menu-title">Evénement</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#"  onclick="cliquerMenu(5)">
                                            <span class="menu-title">Tous les événements</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"  onclick="cliquerMenu(6)">
                                            <span class="menu-title">Ajouter une événement</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-brush-3-fill"></i>
                                    </span>
                                <span class="menu-title">Gallery</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(7)">
                                            <span class="menu-title">Tous les photos</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" onclick="cliquerMenu(8)">
                                            <span class="menu-title">Ajouter une photo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </nav>
            </div>
            <!-- <div class="sidebar-footer"><span>Sidebar footer</span></div> -->
        </div>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <header class="header">
            <a id="btn-collapse" href="#">
                <i class="ri-menu-line ri-xl"></i>
            </a>
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg">
                <i class="ri-menu-line ri-xl"></i>
            </a>
            <?php
            if (!empty($_SESSION['admin'])) {
            echo "<p class=' ml-8 mr-8 ' style='margin-right: 5px'>  Bonjour, " . $_SESSION['admin']->username ."</p>";
            echo "<div class='inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35] ml-8 '><a href=".'user_logout.php'. "/>Se déconnecter</a></div>";
            }
            ?>



        </header>
        <main class="content">
            

            <iframe id="contenu" src="" height="80%"></iframe>


        </main>
        <div class="overlay"></div>
    </div>
</div>
<!-- partial -->
<script src='js/lib/popper.min.js'></script>
<script src="js/lib/scriptGestion.js"></script>

</body>
</html>


