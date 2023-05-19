<input	type="search” 
name="txtSearch" 
placeholder="Enter search string"
value="<?php echo $_GET['txtSearch']; ?>" />

<?php 






$con = new ('localhost','root',
                  '','store');
mysqli






                  try
                  {
                      $con=new PDO("mysql:host='localhost';dbname=store",'root','');
                      $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                      //echo 'connected';
                  }
                  catch(PDOException $e)
                  {
                      echo '<br>'.$e->getMessage();
                  }
$search ='%' . $_GET['search'] . '%';
$sql = "SELECT * FROM categories WHERE name Like ?";
// $stm = pdo
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from employee_info where department like '%$search%' or name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}

// // Check connection
// if ($con->connect_error) {
//     echo "Connection failed: <br>" . $con->connect_error;
// }
//   echo "Connected successfully <br>";


// SELECT
$sql = "SELECT id, name FROM categories";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
       	echo '<li>';
    echo $row["name"];
    	echo '</li>';

  }
} else {
  echo "0 results";
}





// // // INSERT
// $sql = "INSERT INTO categories (name, pic, details)
// VALUES ('Ali', 'cap.png', ' example detials ')";

// if ($con->query($sql) === TRUE) {
//   echo "New record created successfully <br>";
// } else {
//   echo "Error: " . $sql . "<br>" . $con->error;
// }


// // UPDATE 
// $sql2 = "UPDATE categories SET name='Ahmed' WHERE id=32";

// if ($con->query($sql2) === TRUE) {
//   echo "Record updated successfully <br>";
// } else {
//   echo "Error updating record: " . $con->error;
// }


// // DELETE 
// $sql3 = "DELETE FROM categories WHERE id=2";

// if ($con->query($sql3) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $con->error;
// }


//for user informationa making available for all pages

    // $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    // $user = $array->fetch_assoc();

	$base_path = "http://localhost/dev.test/store";
?>