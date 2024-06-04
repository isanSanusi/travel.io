<?php
    $sql = "SELECT * FROM buses";
    $result = $conn->query($sql);
?>


<div class="card">
        <button class="btn_add_buses" onclick="openModalAdd()">Add Buses +</button>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Bus Company</th>
                    <th>Departure City</th>
                    <th>Destination City</th>
                    <th>Travel Date</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Price</th>
                    <th>Seats</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$counter."</td>
                            <td>".$row["bus_company"]."</td>
                            <td>".$row["departure_city"]."</td>
                            <td>".$row["destination_city"]."</td>
                            <td>".$row["travel_date"]."</td>
                            <td>".$row["departure_time"]."</td>
                            <td>".$row["arrival_time"]."</td>
                            <td>".$row["price"]."</td>
                            <td>".$row["seats_available"]."</td>
                            <td class='td_btn'>

                                <button  
                                class='btn btn-edit' onclick='openModalUpdate(
                                    ".$row['id'].", \"".$row["bus_company"]."\", \"".$row["departure_city"]."\", \"".$row["destination_city"]."\", \"".$row["travel_date"]."\", \"".$row["departure_time"]."\", \"".$row["arrival_time"]."\", ".$row["price"].", ".$row["seats_available"].")'>Edit
                                </button>

                                <button class='btn btn-delete'
                                onclick='openModalDelete(".$row["id"].")'>Delete</button>
                            </td>
                        </tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='10'>No buses found</td></tr>";
                }
                ?>
            </tbody>
        </table>
</div>