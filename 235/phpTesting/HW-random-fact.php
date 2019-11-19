<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>Random Jokes</title>
        <link rel="stylesheet" href="HW-rand.css">
    </head>

    <body>
        <h1>Random Facts! Get now for only 1 click!</h1>
        <p>This is the random fact page! I hope you enjoy it!</p>
        
        <?php
        $jokes = ["The scientific term for brain freeze is 'sphenopalatine ganglioneuralggia.'", "Canadians say 'sorry' so much that a law was passed in 2009 declaring that an apology can't be used as evidence of admission to guilt.", "Back when dinosaurs existedd, there used to be volcanoes that were erupting on the moon.", "The only letters that don't appear on the periodic table are J & Q.", "One habit of intelligent humans is beingg easily annoyed by people around them, but saying nothing in order to avoid a meaningless argument.", "If a Polar Bear and a Grizzly Bear mate, their offspring is called a 'Pizzy Bear'.", "There were two AI chatbots created by Facebook to talk to each other, but they were shut down after they started communicating in a language they made for themselves."];

        $jokeNum = rand(0, count($jokes) - 1);
        echo "<h2>Random fact.</h2>";
        echo "<p>$jokes[$jokeNum]</p>";

        ?>

        <form action="HW-random-fact.php" method="post">
        <input type="submit" value="Get another Fact!">
        </form>
    </body>

    

</html>






