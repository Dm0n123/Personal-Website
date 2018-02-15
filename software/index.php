<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" href="css/page.css">

        <div class="homeImg container-fluid">
            <div class="homeDiv center container">
                <h1 class="titleMain cenX">CODE REPOSITORY</h1>

                <div class="row rowBackSS"></div>
                <h3 class="subTitle" id="here">JAVA | C | ARDUINO | ASSEMBLY | WEB DESIGN</h3>
            </div>

            <div class="homeSouth">
                <h4><a class="stealthLink subTitle pad0" href="#">VIEW PROJECTS</a></h4>
                <button class="smoothScrollBtn" type="button"><img src="/images/Down-Arrow.png" width="30"/></button>
            </div>
        </div>

        <a class="anchor" id="top"></a>

        <div class="container-fluid sec temp">
            <div class="container">
                <div class="borderProj">
                    <a href="timelapse-auto-ramp" class="noColor">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <span class="helper"></span><img src="timelapse-auto-ramp/results/thumbs/sunset-cmp.jpg" class="projImg"></img>
                            </div>
                            <div class="projText col-lg-8 col-md-12">
                                <h3 class="regTitle">TIMELAPSE AUTO-RAMP | JAVA</h3>
                                <p class="subP pad0 italic">a photoshop plugin</p>
                                <?php
                                    $content = "My algorithm analyzes image data generated by photoshop to perform calculations,
                                    which are evenly applied to smooth out exposure levels in a timelapse. The result is a perfectly exposed
                                     time lapse sequence for difficult lighting conditions such as a sunrise. ";

                                    $content = substr($content, 0, 302) . " ...";

                                    echo '<p class="subP desc">' . $content . '</p>';
                                 ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="borderProj">
                    <a href="pathfinding" class="noColor">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <span class="helper"></span><img src="images/standard-fix.gif" class="projImg"></img>
                            </div>
                            <div class="projText col-lg-8 col-md-12">
                                <h3 class="regTitle">A* PATHFINDING VISUAL.. | JAVA</h3>
                                <?php
                                    $content = "I made this visualization to show
                                        the beauty of pathfinding. You can modify all major features
                                        of my algorithm through the graphics interface. Create maps
                                        in the grid easily and test the efficiency of the algorithm
                                        on the fly. Try it in diagonal mode, or non diagonal, variable
                                        speed, show steps or timed efficiency. If you zoom far enough
                                        on the mouse wheel you can view all calculations as they occur
                                        for \"F cost\" (top left), \"G cost\" (bottom left) and \"H cost\" (bottom right).";

                                    $content = substr($content, 0, 302) . " ...";

                                    echo '<p class="subP desc">' . $content . '</p>';
                                 ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid backDark sec">
            <div class="container">
                <h3 class="subTitle white">MY GOAL</h3>
                <p class="subText white extPad">I have been developing software since 2015,
                    with a particular focus on solving problems I encounter in my everyday life.
                     Here you will find releases of my favourite projects over the past few
                     years. Multimedia tools, low-level data structures, and simulations to
                     name a few. My goal is to create simple, lightweight code to solve real
                      world problems. If you are interested in my work, you can download
                      each program for free, and look at the source code on github. Let me
                      know if you find any issues, feedback is always appreciated.</p>
            </div>
        </div>

        <div class="container-fluid sec">
            <div class="container">
                <h3 class="subTitle">TECHNICAL SKILLS</h3>
                <h3 class="subTitle">JAVA</h3>
                <p class="subP">My first programming language.<br/><br/>
                    I have 3 years experience developing desktop applications using object oriented principles.
                    Java is my go to language where I feel the most comfortable taking on new concepts. It is a nice balance
                    between the efficiency of C, as well as a slightly higher level approach to problem solving.
                    I have developed a photoshop plugin for timelapses, and a pathfinding visualization in Java in my spare time.</p>
            </div>

            <div class="container">
                <h3 class="subTitle">C</h3>
                <p class="subP">I have 2 years experience designing low-level data structurs and algorithms.
                                I love C for its control. Low-level programming excites me because you become
                            very close to the hardware and can exploit significant performance improvements. I am excited by
                            the thought process that goes into designing the most efficient hashing data structure,
                        linked list, or searching function.</p>
            </div>

            <div class="container">
                <h3 class="subTitle">ASSEMBLY</h3>
                <p class="subP">Going even closer to the hardware we have assembly programming. My favourite course
                                last semester focused on implementing high level C constructs, such as recursive functions
                                in assembly code. Understanding the stack and memory at its lowest level gave the greatest
                                insight on the "magic" that goes on inside a computer and may be my favourite form of programming.</p>

            </div>

            <div class="container">
                <h3 class="subTitle">HTML, CSS, JAVASCRIPT, BOOTSTRAP</h3>
                <p class="subP">I learned these technologies through building this website! I don't normally work
                on the front end, so this project gave me some great exposure. I decided to build this website
            from scratch (without a website builder), so that I can gain a better understanding of the technology.</p>
            </div>
        </div>

        <div class="container-fluid btnLinks extPad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 bot">
                        <div class="leftCenter">
                            <h3 class="sub2">FOUND A BUG?</h3>
                            <p class="subText">Let me know</p>
                            <a class="btn btn-success btn-lg w100" href="https://github.com/DevonCrawford" role="button">Github</a>
                        </div>
                    </div>
                    <div class="col-md-4 bot">
                        <div class="leftCenter">
                            <h3 class="sub2">CONTRIBUTE</h3>
                            <p class="subText">Take part in the project</p>
                            <a class="btn btn-secondary btn-lg w100" href="/contact" role="button">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
        <script type="text/javascript" src="scripts/shift.js"></script>
    </body>
</html>
