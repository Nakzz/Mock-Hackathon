<!--Need help, don't know how to get the template to work and make it look like rest of the page. So far, this page only has the info. Will be made to look nicer once template is implemented. Also, should this page file be html or php?-->
<!--This page contains info on location, travel guide, and local amenities-->
<html>
    <head>
        <title>Hack500</title> <!--Placeholder Title-->
    </head>
    <!--Is this how we get the whole drop down stuff?-->
    <?php 
        include("includes/header.php");
        include("includes/nav-bar.php");
    ?>
    <body>
        <main>
            <h1>Travel and Location</h1>
            <div>
                <h2>Location of Event: </h2>
                <p> UW Madison’s Education Building </p>
                <p> Address: 1000 Bascom Mall, Madison, WI 53706 </p>
                <!--Insert image of Education building here-->
            </div>
            <!--Directions Guide-->
            <div>
                <h2>Travel Guide:</h2>
                <p>How to get there:</p>
                <!--Insert image of google maps on the location of education building and Sellery-->
                <br>
                <p>Getting there by bus:</p>
                <p> The closest bus stop is bus 80/81/82 on Langdon Street, near North Park Street. From there, cross North Park Street and continue up Observatory Drive. The Education Building will be on your left.</p>
                <br>
                <p> Busses along University Avenue and West Johnson Street can also be used, but will require more walking. Get out at the North Park Street stop and walk north until you reach Observatory Drive. Continue up Observatory Drive and the Education Building will be on your left.</p>
                <br>
                <p>Getting there by car:</p>
                <p> Take Highway 12 to Park Street (Exit 261B). Drive North on Park Street until you reach the lake. Helen C. White Parking Garage will be on your left.</p>
            </div>
            <div>
                <h2>Overnight Accomodations:</h2>
                <p> Participants who need overnight accommodations will be housed at Sellery Residence Hall nearby.</p>
                <p>Address:</p>
                <p>821 W Johnson St, Madison, WI 53706</p>
                <!--I think this part should be included. However, the wording of this does need a lot of work. Please help. -VS-->
                <p>In order to get overnight accommodations, indicate that need in the registration form and a follow up email sent by University Housing will direct you to booking a room. If intent was not specified originally, please fill out our contact form so that you can get the proper accommodations right away if overnight accommodations are now needed. Cancellation of room is handled by University Housing, thus you will be directed to them if that is needed.</p>
            </div>
            <!--Local Amenities-->
            <div>
                <h2>Local Amenities</h2>
                <!--Should this be an ordered list instead?-->
                <p>Building is fully wheelchair accessible.</p>
                <br>
                <p> Parking is available at the Helen C. White parking garage. Parking costs approximately $1.50 per hour, though overnight rates are available.</p>
                <br>
                <p> Overnight accommodation is available at Sellery Hall. If you need a room, please indicate so on your registration form.
                </p>
                <br>
                <p> In addition to the food provided at the event and vending machines in the building, there are a variety of options available at the Memorial Union. These include Der Rathskeller, Strada, Carte, Daily Scoop, Badger Market, Peet’s Coffee, Der Stiftskeller, and Lakeview Lounge.
                </p>
                <br>
                <p> UHS is the local health service that is nearby if needed. Service is provided from 9 am to 5 pm and walk in appointments are available. It is right across from Sellery Residence Hall from Johnson St.
                </p>
                <p>Address:</p>
                <p>333 E Campus Mall, Madison, WI 53715, Floors 5-7</p>
            </div>
        </main>
    </body>
</html>