<html>
    <link rel="stylesheet" href="style.css">
    <body align="center">
        <h3><a href="index.php">Go to home</a></h3>
        <form name="addBook" method="post" onsubmit="return addValidation()" action="add.php" >
            <table border=1 align="center">
                <tr>
                    <th>Book Title</th>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <th>Book Author</th>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><input type="text" name="genre"></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td><input type="text" name="quantity"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="add" value="Add Book">
        </form>
        <script src="add.js"></script>
    </body>
    <?php
        if(isset($_POST['add']))
        {
            $title=$_POST['title'];
            $author=$_POST['author'];
            $genre=$_POST['genre'];
            $price=$_POST['price'];
            $qty=$_POST['quantity'];
            include_once("config.php");

            $result=mysqli_query($conn,"INSERT INTO bookstore(title,author,genre,price,quantity) VALUES('$title','$author','$genre','$price','$qty')");

            echo "<h3>Book added successully   <a href='index.php'>View all books</a></h3>";
        }
        
            
    ?>
</html>