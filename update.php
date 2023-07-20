<?php
    include_once("config.php");
    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $genre=$_POST['genre'];
        $price=$_POST['price'];            
        $qty=$_POST['quantity'];

        $result=mysqli_query($conn,"UPDATE bookstore SET title='$title',author='$author',genre='$genre',price='$price',quantity='$qty' WHERE id='$id'");

        header("Location: index.php");
    }
?>

<?php
    //include_once("config.php");
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * from bookstore WHERE id=$id");

    while($row=mysqli_fetch_array($result))
    {
        $title=$row['title'];
        $author=$row['author'];
        $genre=$row['genre'];
        $price=$row['price'];            
        $qty=$row['quantity'];
    }
?>

<html>
    <head></head>
    <body align="center">
    <link rel="stylesheet" href="style.css">
        <form method="post" action="update.php">
        <table align="center" border=1>
            <tr>
                <th>Book Title</th>
                <th><input type="text" name="title" value=<?php echo $title;?>></th>
            </tr>
            <tr>
                <th>Author</th>
                <th><input type="text" name="author" value=<?php echo $author;?>></th>
            </tr>
            <tr>
                <th>Genre</th>
                <th><input type="text" name="genre" value=<?php echo $genre;?>></th>
            </tr>
            <tr>
                <th>Price</th>
                <th><input type="text" name="price" value=<?php echo $price;?>></th>
            </tr>
            <tr>
                <th>Quantity</th>
                <th><input type="text" name="title" value=<?php echo $qty;?>></th>
            </tr>
            <tr>
                <th><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></th>
                <th><input type="submit" name="update" value="Update"></th>
            </tr>
        </table>
        </form>
    </body>
</html>