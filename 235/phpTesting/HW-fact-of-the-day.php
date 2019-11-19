<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>Random Jokes</title>
        <link rel="stylesheet" href="HW-day.css">
    </head>

    <body>
        <h1>Random Facts! Get now for only 1 click!</h1>
        <p>This is the random fact page! I hope you enjoy it!</p>
        
        <?php
        $sunday = ["The scientific term for brain freeze is 'sphenopalatine ganglioneuralggia.'", "Canadians say 'sorry' so much that a law was passed in 2009 declaring that an apology can't be used as evidence of admission to guilt.", "Back when dinosaurs existedd, there used to be volcanoes that were erupting on the moon.", "The only letters that don't appear on the periodic table are J & Q.", "One habit of intelligent humans is beingg easily annoyed by people around them, but saying nothing in order to avoid a meaningless argument.", "If a Polar Bear and a Grizzly Bear mate, their offspring is called a 'Pizzy Bear'.", "There were two AI chatbots created by Facebook to talk to each other, but they were shut down after they started communicating in a language they made for themselves."];

        $monday = ["The average person will spend six months of their life waiting for red lights to turn green", "A bolt of lightning contains enough energy to toast 100,000 slices of bread", "Cherophobia is the word for the irrational fear of being happy", "You can hear a blue whale’s heartbeat from two miles away", "Nearly 30,000 rubber ducks were lost a sea in 1992 and are still being discovered today", "There’s a Manhattan-specific ant", "The inventor of the frisbee was turned into a frisbee after he died"];

        $tuesday = ["There’s a bridge exclusively for squirrels.", "Subway footlongs aren’t a foot long.", "Marie Curie’s notebooks are still radioactive", "One in three divorce filings include the word 'Facebook.'", "Instead of saying 'cheese' before taking a picture, Victorians said “prunes”", "Roosters have built-in earplugs. ", "The Netherlands is so safe, it imports criminals to fill jails."];

        $wednesday = ["The world’s largest pyramid isn’t in Egypt.", "Coke saved one town from the Depression.", "Yes, you can smell rain. ", "A wild dog is the most successful predator.", "Sears used to sell houses.", "Manhattan tap water isn’t kosher.", "Cold water is just as cleansing as hot water."];

        $thursday = ["A U.S. Park Ranger once got hit by lightning seven times.", "Bottled water expiration dates are for the bottle, not the water.", "The most requested funeral song in England is by Monty Python.", "The world’s most successful pirate was a woman.", "Milk wagons gave us roadway lines. ", "Pandas fake pregnancy for better care.", "NASCAR drivers can lose up to 10 pounds in sweat due to high temperatures during races"];

        $friday = ["Your funny bone is actually a nerve", "Pineapples were named after pine cones", " Cap’N’Crunch’s full name is Horatio Magellan Crunch", "Apple briefly had its own clothing and lifestyle line in 1986", "The IKEA catalog is the most widely printed book in history", " Crocodiles are one of the oldest living species, having survived for more than 200 million years ", " The cracking sound your joints make is the sound of gases being released "];

        $saturday = ["The largest snowflake on record was 15 inches wide", "Scotland has more than 400 words for 'snow'", "The city of Boring has a sister city called Dull.", "McDonald’s once tried to sell bubblegum-flavored broccoli to encourage kids to eat healthier", "In the 1990s, North Korean teachers were required to play the accordion", "Doritos are flammable and can be used as kindling", "It’s illegal to own only one guinea pig in Switzerland"];

        $days = [$sunday, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday];

        $factNum = rand(0, count($sunday) - 1);
        $currentDay = date('w');
        $textDate = date('l');
        echo "<h2>Today is: $textDate</h2>";
        $currentDayArray = $days[$currentDay];
        echo "<p>$currentDayArray[$factNum]</p>";

        ?>

        <form action="HW-fact-of-the-day.php" method="post">
        <input type="submit" value="Get another Fact!">
        </form>
    </body>

    

</html>