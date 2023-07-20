<?php
include_once("config.php");
$result=mysqli_query($conn,"SELECT * FROM bookstore");
?>

<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body align="center">
        <h1>SHELF-MASTER</h1>
        <br><br>
        <h2>Book Details</h2>
        <table align="center" border=1>
            <tr>
                <th>Book ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
            </tr>
            <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['author']."</td>";
                    echo "<td>".$row['genre']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['quantity']."</td>";
                    echo "<td><a href='update.php?id=$row[id]'>Update</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h3><a href="add.php">Click to Add Book</a></h3>
    
    </body>
</html>