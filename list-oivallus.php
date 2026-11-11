<?php 
    require_once("conn.php");

    $sql = "SELECT * FROM ideas";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "
            <table class='ideas-table'>
                <tr>
                    <th>Day</th>
                    <th>Idea</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tbody>";

        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>" . $row['day'] . "</td>
                    <td>" . $row['idea'] . "</td>
                    <td>" . $row['category'] . "</td>
                    <td>Edit</td>
                    <td><a href='delete-oivallus.php?id=" . $row['id'] . "'>Delete</td>
                </tr>
            ";
        }

        echo "
        </tbody>
        </table>
        ";
            
    } else {
        "db empty";
    }
?>