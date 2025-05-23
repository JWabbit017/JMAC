<?php

?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>JMAC Docs</title>
        <meta charset="UTF-8">
        <base href="http://localhost/Frame/">
        <link rel="stylesheet" href="css/desktop-main.css">
        <script src="./JMAC.js"></script>
        <script src="js/script.js" defer></script>
    </head>
    <body>
        <div id="container">
            <nav id="sidebar">
                <header>
                    <img src="media/images/jmac_logo_v1.png" width="95" height="57" alt="JMAC logo"><strong>Docs</strong>
                </header>
                <hr>
                <ul id="infobar">
                    <li><span>Methods</span>
                        <details><summary>Element Methods</summary>
                            <ul>
                                <li><a href="index.php/DumpFieldset" target="_self">DumpFieldSet()</a></li>
                            </ul>
                        </details>
                        <details><summary>Array Methods</summary>
                            <ul>
                                <li><a href="index.php/DynSort" target="_self">DynSort()</a></li>
                                <li><a href="index.php/KeyExists" target="_self">KeyExists()</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><span>JMath</span>
                        <details><summary>Basic Calculations</summary>
                            <ul>
                                <li><a href="index.php/Average" target="_self">Average()</a></li>
                                <li><a href="index.php/Sum">Sum()</a></li>
                                <li><a href="index.php/Random">Random()</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><span>JConstructor</span>
                        <details><summary>Element Creation</summary>
                            <ul>
                                <li><a href="index.php/Form" target="_self">Form()</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
                <hr>
                <footer>
                    <a href="sitemap.php">Sitemap</a>
                </footer>
            </nav>
            <main>
                <?php isset($_GET['file']) ? include 'media/info/'.$_GET['file'].'.php' : include 'media/info/default.php';?>
            </main>
        </div>
    </body>
</html>