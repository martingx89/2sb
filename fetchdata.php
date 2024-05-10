<?php
function get_routes_data($atts){

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "local";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM wp_routes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<script>';
            echo 'console.log("ok")';
            echo '</script>';
        }
    } else {
        echo "0 results";
        echo '<script>';
        echo 'console.log("nok")';
        echo '</script>';
    }
    $conn->close();

}
add_shortcode('routes_shortcode', 'get_routes_data');
?>