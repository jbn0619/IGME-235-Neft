<!DOCTYPE html>
<html langg="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="portfolio/portfolio.css"/>
        <title>Justin Neft's Portfolio</title>
    </head>

    <body>
        <header>
            <h1>Justin Neft</h1>
            <nav>
                <ul id="listItems">
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#documentation">Documentation</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact Me</a></li>                    
                </ul>
            </nav>
        </header>
        
        <main>
            <section id="intro">
                <h3>Justin Neft's 235 Portfolio</h3>
                <p>
                    Game Developer and Designer at RIT
                </p>
            </section>
    
            <h3>Projects</h3>
            <section id="portfolio">                
                <div class="project">
                    <h3><a id="lf" href="https://people.rit.edu/oagigm/lostandfoundthegame/">Lost & Found</a></h3>
                    <p class="description">
                        A strategic card game with cooperative and competative elemments that teaches players about midieval religious legal texts in 12th century Cairo.
                    </p>
                    <p class="date">
                        Date: Present
                    </p>
                </div>
                <div class="project">
                    <h3>Speed: The Game</h3>
                    <p class="description">
                        An endless-survival game that is a remake of a TI-84 - based game that was written in 2014 by Willus Larson a.k.a Six Lanes, formerly known as Seven Lanes.
                    </p>
                    <p class="date">
                        Date: Present
                    </p>
                </div>
                <div class="project">
                    <h3>Ultimis Project</h3>
                    <p class="description">
                        An endless-runner mobile game that was designed with simplicity and accessibility in mind by making controls and gameplay that are simple to learn and fun to play. Being developed in Unity with Luke Roberge as my partner.
                    </p>
                    <p class="date">
                        Date: Present
                    </p>
                </div>
                <div class="project">
                    <h3>Simple Emblem Evolved (Title Pending)</h3>
                    <p class="description">
                        A reimagining of the Fire Emblem series, developed with unity and C#. Using Pyxel Edit for 2D Sprite Art.
                    </p>
                    <p class="date">
                        Date: Present
                    </p>
                </div>
            </section>

            <section id="documentation">
                <h3>Documentation</h3>
                <p>
                    HTML, CSS and PHP were all used in the creation of this website. Justin Neft wrote the code, taking some inspiration and ideas from previous assignments in the IGME 235  course taught by Prof Andrew Wheeland. A good example of this is the PHP code that is used in the email functionality.
                </p>
            </section>
        </main>

        <footer>
            <section id="about">
                <h3>About</h3>
                <p>
                    Ever since I was young, I have wanted to develope and design games. I find the worlds and experiences they create to be fascinating and engrossing, to the point where I want to share these experiences with others around the world. To that end, I want to design games that are simple, fun and accessible for everyone to play and enjoy.
                </p>
            </section>
    
            <section id="contact">
                <h3>Contact Me</h3>

                <h1>Get in touch!</h1>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    
                        <label>Name</label> <br>
                        <input name="name" placeholder="Type Here"> <br>
                        
                        <label>Email</label> <br>
                        <input name="email" type="email" placeholder="person@sample.com"> <br>

                        <label>Topic</label> <br>
                        <textarea name="topic" placeholder="Type Here"></textarea> <br>
                        
                        <label>Message</label> <br>
                        <textarea name="message" placeholder="Type Here"></textarea> <br>
                        
                        <label>*What is 2+2? (Anti-spam)</label> <br>
                        <input name="human" placeholder="Type Here"> <br>

                        <br>
                        
                        <input id="submit" name="submit" type="submit" value="Submit">
                    
                    </form>

                <?php include "portfolio/emailForm.php"; ?>
                
            </section>
        </footer>   
    </body>
</html>