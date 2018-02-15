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
                <h1 class="titleMain cenX">ELECTRONICS</h1>

                <div class="row rowBackSS"></div>
                <h3 class="subTitle">BATTERIES | CIRCUITS | ARDUINO | ROBOTICS | ELECTRIC BICYCLE</h3>
            </div>

            <div class="homeSouth">
                <h4><a class="subTitle noColor" href="#">VIEW PROJECTS</a></h4>
                <button class="smoothScrollBtn" type="button"><img src="/images/Down-Arrow.png" width="30"/></button>
            </div>
        </div>

        <a class="anchor" id="top"></a>

        <div class="container-fluid sec temp">
            <div class="container">

                <div class="borderProj">
                    <a href="discharge-protection-circuit" class="noColor">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <span class="helper"></span><img src="/images/IMG_1718.jpg" class="projImg"></img>
                            </div>
                            <div class="projText col-lg-8 col-md-12">
                                <h3 class="regTitle">BATTERY PROTECTION CIRCUIT</h3>
                                <p class="subP pad0 italic">scalable, cheap, simple</p>
                                <?php
                                    $content = "Every battery pack has custom
                                    protection circuits made for its specific configuration.
                                    In order to assemble my own battery packs, I must create
                                     these circuits myself. Therefore, I made a discharge protection
                                     design using only low level components that is easily
                                     scalable for any configuration I want to make (just change
                                      one resistor!). As well, my circuit has an ultra low
                                      current consumption of 30μA max, and an auto shutoff for
                                      ZERO current draw in the “off” state.";

                                    $content = substr($content, 0, 302) . " ...";

                                    echo '<p class="subP desc">' . $content . '</p>';
                                 ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="borderProj">
                    <a href="air-conditioner-DIY" class="noColor">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <span class="helper"></span><img src="air-conditioner-DIY/images/me-wiring.jpg" class="projImg"></img>
                            </div>
                            <div class="projText col-lg-8 col-md-12">
                                <h3 class="regTitle">DIY AIR CONDITIONER | ARDUINO</h3>
                                <?php
                                    $content = "What started out as a joke
                                         turned into a reality. Last year I lived in the dorms,
                                         and our room had an uncontrolled furnace. The room was
                                         around 26 to 28 degrees celsius at all times, so I thought
                                         I would do something about it. The idea was to take the
                                         cold winter air from outside and distribute it into two
                                          separate rooms automatically, driven by temperature
                                           sensors. But we had to do it cheap, so we used cardboard
                                            for the ventilation shafts and hot glued it to the
                                             ceiling. This is probably what attracted a lot of
                                             attention, for this sketchy yet functional build.";

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
                    <p class="subText white extPad">I want to be able to solve any future problems I encounter
                     with my knowledge of electronics and computer software. My major does not teach hard
                     electronics, so I am mostly learning electronics through my own research and experiments.
                     I have started off focused on battery technology, so far designing custom protection circuits
                     for future projects. I am slowly designing robots / automation technology in my spare time,
                     which will function as tools to make my work more efficient.</p>
                </div>
            </div>

            <div class="container-fluid sec">
                <div class="container">
                    <h3 class="subTitle">MY SETUP</h3>
                    <p class="subP">Recently my desk has been looking a little crazy.<br/><br/>
                        Over the past few months, I have been slowly adding equipement to my studio. An oscilloscope
                        from the 1970's, variable power supply, solar cells, and lots of batteries. Around the corner
                        I have dozens of computers and random electronics to take apart. Since my research is
                        mostly experimental, this space gives me a good base for working on larger projects.</p>
                    <img src="images/IMG_2045.jpg" width="100%" style="padding: 60px"/>
                </div>

                <div class="container">
                    <h3 class="subTitle">THE FUTURE</h3>
                    <p class="subP">I have many exciting plans for the future of my electronics research. A few
                    months ago I decided to sell my school parking pass to buy electric bicycle parts.
                    The goal is to develop the "smartest" electric fat bicycle for about $500, it's going to be insane (just wait).
                    In the future I will work with solar, alternating current, high voltage and high frequency (wireless technologies).
                    I will continue creating custom machines that automate mundane tasks, so that I can take on larger
                    projects while keeping the cost down. I'm sure I'll encounter many situations in the future of my own work,
                    where I see an opportunity for automation.</p>
                </div>
            </div>

        <div class="container-fluid btnLinks extPad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
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
