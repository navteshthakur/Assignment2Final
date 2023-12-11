<?php

	try{
		$conn = new PDO('mysql:host=localhost;dbname=laterlier_database','root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', '', 'laterlier_database');
        if(mysqli_connect_error()){
          die("Database Connection Failed" . mysqli_connect_error());
        }
      }
      public function create1($purchaseOrder,$gid,$colour,$size,$price,$quantity){
        $sql1 = "INSERT INTO inventory (purchaseOrder, gid, colour, size, price,quantity) VALUES ('$purchaseOrder','$gid','$colour','$size','$price','$quantity')";
        $res1 = mysqli_query($this->connection, $sql1);
        if($res1){
          return true;
         }
        else{
         return false;
        }
      }

public function read1()
  {
    $query = "SELECT * FROM inventory";
    $result = $this->connection->query($query);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }else{
      echo "No found records";
    }
  }
public function updateRecord($purchaseOrder,$ugid,$ucolour,$usize,$uprice,$uquantity,$id)
  {
      $query = "UPDATE inventory SET purchaseOrder='$purchaseOrder',gid ='$ugid', colour ='$ucolour', size ='$usize', price ='$uprice', quantity ='$uquantity' WHERE id='$id'";
      $sql = $this->connection->query($query);
      if ($sql==true) {
        header("Location:view.php?msg2=update");
      }else{
        echo "Update failed!";
      }
    
  }

   // Fetch single data for edit from customer table
   public function displayRecordById($id)
   {
     $query = "SELECT * FROM inventory WHERE id = '$id'";
     $result = $this->connection->query($query);
     if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       return $row;
     }
   }
 

  // Delete customer data from customer table
  public function deleteRecord($id)
  {
    $query = "DELETE FROM inventory WHERE id = '$id'";
    $sql = $this->connection->query($query);
    if ($sql==true) {
      header("Location:view.php?msg3=delete");
    }else{
      echo "Delete Failed!";
    }
  }
  }
$database = new Database();
?>