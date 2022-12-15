<html lang="en">
  <head>
    <title>Cinema Website</title>
 <link rel="stylesheet" href="css/style.css">

  </head>
<body>
    <div class="centerdiv">
        <h1>Project 300 Cinema</h1>
        <h2>Book Tickets</h2>
    </div>
    <form action="index.php" method="post">
        <div class="centerdiv">
            <fieldset>
                <legend>Movie Details</legend>
                <label for="movie_name">Movie Name:</label>
                <input type="text" id="movie_name" name="movie_name" required>

                <label for="seats_required">Seats Required:</label>
                <input type="number" id="seats_required" name="seats_required" min="0" required>

                <label for="location">Location:</label>
                <select id="location" name="location" required>
                    <option value="Dublin">Dublin</option>
                    <option value="Sligo">Sligo</option>
                    <option value="Galway">Galway</option>
                </select>
            </fieldset>
        </div>
        <div class="centerdiv">
            <fieldset>
                <legend>Booking Details</legend>
                <label for="booking_name">Booking Name:</label>
                <input type="text" id="booking_name" name="booking_name" required>

                <label for="booking_email">Booking Email:</label>
                <input type="email" id="booking_email" name="booking_email" required>

                <label for="booking_phone">Booking Phone Number:</label>
                <input type="tel" id="booking_phone" name="booking_phone" required>
                <button type="submit">Book Tickets</button>
            </fieldset>
        </div>
        <div class="centerdiv">
            <fieldset>
                <legend>Payment Details</legend>
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>

                <label for="expiry_date">Expiry Date:</label>
                <input type="month" id="expiry_date" name="expiry_date" required>

                <label for="card_cvv">Card CVV:</label>
                <input type="text" id="card_cvv" name="card_cvv" required>

            </fieldset>
    </form>
    </div>
</body>
  
</html>