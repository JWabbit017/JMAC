<?php
    $version = '1b';

    // originally I had written part of the editor in PHP, but got stuck and decided JS would be easier. Check out Build 1a for the original
?>
<!DOCTYPE html>
<html>
    <head>
        <title>JMAC <?=$version;?></title>
        <script src="sources/form_creation.js" defer></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="container">
            <header class="barrel">
                <section>
                    <h1>JM's Article Creator</h1>
                    <p>For use on internet forums</p>
                </section>
                <aside>
                    <span class="subtext">Build <?=$version;?></p>
                </aside>
            </header>
            <main class="barrel">   
                <div id="content">
                    <header>   
                        <nav>
                            <span class="subtext">Elements:</span>
                            <hr>
                            <ul id="elementlist">

                            </ul>
                            <hr>
                        </nav>
                        <section>
                            <ul>
                                <li>
                                    <details class="rolldown">
                                    <summary>Text</summary>    
                                        <button class="addelement p">New Paragraph</button>
                                        <button class="addelement h">New Heading</button>
                                        <button class="addelement blockquote">New Blockquote</button>
                                        <button class="addelement span">New Span<div class="hovertip Nspan" title="An inline text element">(?)</div></button>
                                        <button class="addelement details">New Details<div class="hovertip Ndet" title="Expandable text element with a summary">(?)</div></button>
                                    </details>
                                </li>
                                <li><div class="divider"></div></li>
                                <li>
                                    <details class="rolldown">
                                    <summary>Images</summary>
                                        <button class="addelement img">New Image</button>
                                        <button class="addelement figure">New Figure<div class="hovertip Nfig" title="An image with attached caption">(?)</div></button>
                                        <button class="element svg">New SVG</button>
                                    </details>
                                </li>
                                <li><div class="divider"></div></li>
                                <li>
                                    <details class="rolldown">
                                    <summary>Containers</summary>
                                        <button class="addelement div">New Container<div class="hovertip Ncon" title="A content divider">(?)</div></button>
                                        <button class="element flexdiv">New Flex Container<div class="hovertip Nfcon" title="A container which can determine the layout of its contents">(?)</div></button>
                                        <button class="addelement table">New Table<div class="hovertip experimental" title="Experimental feature; may not work correctly">(!)</div></button>
                                        <button class="addelement ul">New UL<div class="hovertip Nul" title="An unordered HTML list">(?)</div></button>
                                    </details>
                                </li>
                            </ul>
                        </section>
                    </header>
                    <main id="center">

                    </main>
                </div>
            </main>
            <footer class="barrel">
                <p>This project is associated with <a href="https://www.galactis-group.com" target="_blank">Galactis Group</a>. No copyright pending.</p>
            </footer>
        </div>
    </body>
</html>