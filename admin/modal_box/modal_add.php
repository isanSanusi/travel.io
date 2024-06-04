    <div id="myModalAdd" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Bus Information</h2>
            <form id="editForm" method="POST" action="update_bus.php">
                <input type="hidden" id="busId" name="id">
                <div class="container_input">
                    <div class="card_input">
                        <label for="busCompany">Bus Company:</label>
                        <input type="text" id="busCompany" name="bus_company" required>
                        <label for="destinationCity">Destination City:</label>
                        <input type="text" id="destinationCity" name="destination_city" required>
                    </div>
                    <div class="card_input">
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" required>
                        <label for="departureCity">Departure City:</label>
                        <input type="text" id="departureCity" name="departure_city" required>
                    </div>
                    <div class="card_input">
                        <label for="departureTime">Departure Time:</label>
                        <input type="time" id="departureTime" name="departure_time" required>
                        <label for="travelDate">Travel Date:</label>
                        <input type="date" id="travelDate" name="travel_date" required>
                    </div>
                    <div class="card_input">
                        <label for="arrivalTime">Arrival Time:</label>
                        <input type="time" id="arrivalTime" name="arrival_time" required>
                        <label for="seatsAvailable">Seats Available:</label>
                        <input type="number" id="seatsAvailable" name="seats_available" required>
                    </div>        
                    <button type="submit" class="btn btn-confirm">Add New Buses</button>
                </div>
            </form>
        </div>
    </div>