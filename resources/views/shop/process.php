

<?php include 'database.php'; ?>
 
<?php

 
$name=$_POST['name'];
$name= $_POST['surname'];
$name= $_POST['email'];
$name= $_POST['date'];
$name= $_POST['time'];
$name= $_POST['tel_nr'];
$name= $_POST['adresas'];
$name= $_POST['user_message'];

mysqli_query($connect"INSERT INTO employees1(name,surname,email,date,time,tel_nr,adresas,user_message)
                VALUES('$name,'$surname,'$email','$date','time','tel_nr', 'adresas','user_message')");






    TRY {
    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
        $username1 = $_POST['username1'];
        $password1 = $_POST['password1'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

if (isset($_POST['UserID'])) {

    $id = $_POST['UserID'];

    $sql = "UPDATE members SET"
        . "UserName=".$conn->quote($username1)
        . "password=".$conn->quote($password1)
        . "FirstName=".$conn->quote($firstname)
        . "LastName".$conn->quote($lastname)
        . " WHERE UserID = ".$conn->quote($id);
    $members = $conn->query($sql);
} else {

    $sql = "INSERT INTO members("
        . "UserName, password, FirstName, LastName"
        . " ) VALUES ("
        . $conn->quote($username1).","
        . $conn->quote($password1).","
        . $conn->quote($firstname).","
        . $conn->quote($lastname).")";
        $members = $conn->query($sql);
        }
    } elseif (isset($_GET['ID'])) {
        $userEditDataRows = $conn->query('SELECT * FROM members WHERE UserID ='.$conn-    >quote($_GET['UserID']));
        if (sizeof($userEditDataRows)>0) {
    $row = $userEditDataRows[0];
    $username1 = $row['username1'];
    $password1 = $row['password'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $id = $_GET['UserID'];
        }

    }

$table .= '</table>';

    } catch (PDOException $e) {
     exit("Connection failed: " . $e->getMessage());
    }
    ?>