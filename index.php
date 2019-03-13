<?php
if($_POST["message"]) {
    mail("bradshimp@gmail.com", "Form to email message", $_POST["name"], "From: bradshimp@gmail.com");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title> Stevco Fundraising - Local NY Products </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto" rel="stylesheet">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="item1">
                    <img class="bowtie" src="images/logo.png"> &nbsp;
                    <a href="#"> Stevco Fundraising </a>
                </li>
                <li><a href="#"> Brochures </a></li>
                <li><a href="#"> About Us </a></li>
                <li><a href="#"> Get Started </a></li>
            </ul>
        </nav>
        <section class="flex spacebetween vertcenter bright-blue texture">
            <h1 class="boxheader">
                Local Fundraising Makes a Difference
            </h1>
            <img class="logo" src="images/Logo - Local NY.png" alt="We love local Central New York products" />
        </section>

    </header>
    <section class="banner flex">
        <header>
            <h3> Want to learn more about our local NY options? </h3>
        </header>
        <p><a href="#form-top" class="big-button"> Get an info packet </a></p>
    </section>
    <section class="banner texture" id="form-top">
        <form action="index.php" method="POST" class="flex-column-center">
            <header>
                <h3> Request Free Info Packet </h3>
            </header>

            <fieldset class="flex-column">
                <legend> Your Contact Information: </legend>
                <div class="flex spacebetween pad-vert">
                    <label for="name"> Name: </label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div class="flex spacebetween pad-vert">
                    <label for="group"> Group: </label>
                    <input type="text" id="group" name="user_group">
                </div>
                <div class="flex spacebetween pad-vert">
                    <label for="mail"> Email: </label>
                    <input type="email" id="email" name="user_email">
                </div>
            </fieldset>

            <fieldset class="flex-column">
                <legend> Address to Send Packet To:</legend>
                <div class="flex spacebetween pad-vert">
                    <label for="address1"> Address: </label>
                    <input type="text" id="address1" name="user_address1">
                </div>
                <div class="flex spacebetween pad-vert">
                    <label for="city"> City: </label>
                    <input type="text" id="city" name="user_city">
                </div>
                <div class="flex spacebetween pad-vert">
                    <label for="state"> State: </label>
                    <input type="text" id="state" name="user_state">
                </div>
                <div class="flex spacebetween pad-vert">
                    <label for="zip"> Zip Code: </label>
                    <input type="number" id="zip" name="user_zip">
                </div>
            </fieldset>

            <button type="submit" class="big-button"> Get Packet </button>
        </form>
    </section>
    <main>
        <article class="flexarticle">
            <header id="pbpie">
                <h2> Raise More Money With Tasty Local Products </h2>
            </header>

            <p>
                Everyone knows that local is better. At Stevco, we help you offer
                local items in your school, sports, or group fundraiser.
                We do this by partnering with recognized local bakeries,
                coffee shops, and other small businesses.
            </p>
            <h3> Good Taste </h3>
            <p>
                While it's great to support local business, there are other
                benefits for your group. It all starts with taste. We choose
                items that we love, and we think you will too.
            </p>
            <p>
                Groups that choose our local fundraising brochures often see
                growth year over year, and people actually look forward to buying
                great local products.
            </p>
            <h3> A Fresh Idea </h3>
            <p> While some fundraising companies look to increase their bottom
                line by finding the cheapest products to sell, we offer a different
                approach. </p>
            <p> We think that quality is better than cutting corners. When
                customers are satisfied, it makes fundraising easier. That's
                why groups that work with us can make high profits while
                having happy customers.
            </p>
            <p class="bigbutton"> Find Out More </p>
        </article>
        <aside id="brochures">

            <section class="flex-column">
                <header>
                    <h3> Family Favorites </h3>
                </header>
                <img class="brochuresmall" src="images/StevFF1.png" alt="Stevco Family Favorites Fundraising Brochure">
                <a href="family-favorites.html#no-js-slider-1" target="_blank" class="bigbutton"> View Brochure </a>
            </section>

            <section class="flex-column">
                <header>
                    <h3> Leo's Pies &amp; Cheesecakes </h3>
                </header>
                <img class="brochuresmall" src="images/StevTF1.png"
                    alt="Leo's Pies and Cheescakes Fundraising Brochure" />
                <a href="traditional-favorites.html#no-js-slider-1" target="_blank" class="bigbutton"> View Brochure
                </a>

            </section>

        </aside>
    </main>

    <section class="banner flex">
        <header class="nobgcolor">
            <h3> Want to learn more about our local NY options? </h3>
        </header>
        <p><a href="#" class="big-button"> Get an info packet </a></p>
    </section>


    <article id="service">
        <header>
            <h2> A Different Level of Service </h2>
        </header>
        <p> You are an amazing person. We know this, because
            in addition to your job and family, you are spending
            time helping coordinate a fundraiser. This is probably just
            one many extra things you do. </p>
        <p> This qualifies you for special treament. You deserve
            a good fundraising experience. We work hard to make that
            happen.
        </p>
        <h3>Included for Free </h3>
        <ul>
            <li> All items packaged and labeled per participant </li>
            <li> Scheduled delivery shows up at the right time and place </li>
            <li> We can handle loose ends directly so you don't have to </li>
            <li> Boxes are labeled with large letters for easy set up (new idea) </li>
            <li> We help unload and bring orders in </li>
        </ul>
    </article>
    <aside id="products">
        <header>
            <h2> What People Are Saying ... </h2>
        </header>
        <blockquote>
            Just a quote.
            <footer> - Person Coordinator </footer>
        </blockquote>
        <blockquote>
            Just a quote. A longer quote. Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Quis fugiat facere aliquam
            id ipsum. Veniam deleniti quae dolores, a itaque obcaecati
            nobis esse rerum. Id quidem mollitia doloremque velit
            incidunt.
            <footer> - Person Coordinator </footer>
        </blockquote>
        <img src="#" caption="Leo's Chocolate Peanut Butter Pie">
    </aside>

    <footer>
        <p>
            &copy; 2019 Saber Services, Inc.
        </p>
    </footer>
</body>

</html>