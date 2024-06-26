<?php
$host='localhost';
$username='root';
$password='';
$dbname='my_store';
$conn=new mysqli($host,$username,$password,$dbname);
// if($conn)
// {
//     echo 'ok';
// }
// else{
//     echo 'not ok';
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store management</title>
</head>
<body>
    <?php
    if(isset($_POST['category_name']))
    {
        $category_name= $_POST['category_name'];
        $entry_date= $_POST['entry_date'];

        $sql = "INSERT INTO add_category (category_name, entry_date)
VALUES ('$category_name','$entry_date')";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
    }
    ?>
    <form action="category.php" method="post">
        Add category:  <br>
        <input type="text" name="category_name" required> <br>
        <input type="date" name="entry_date" required> <br>
        <input type="Submit" value="submit">
    </form>
</body>
</html>