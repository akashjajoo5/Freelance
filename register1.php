<html>
<body>
<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="Project";
	$fname=$_POST["fname"];
    $lname=$_POST["lname"];
	$number=$_POST["Number"];
    $mailid=$_POST["mail"];
    $pass=$_POST["Password"];
    $jtype=$_POST["jtype"];
    $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql4="select * from WData where emailid='".$mailid."'";
	    $result=mysqli_query($conn,$sql4);
        if(mysqli_num_rows($result)>0)
        {
            echo '<script language="javascript">';
            echo 'alert("Email-id already in use")';
            echo '</script>';
            header('refresh: 0.1; http://localhost/WT/signup.php');
        }
        else
        {
            $conn=mysqli_connect($servername,$username,$password);
            if(!$conn)
            {
                die("Connection failed: ".mysqli_connect_error());
            }
         // echo "Connection successful<br>";
            $sql1="CREATE DATABASE Project";
            if(mysqli_query($conn,$sql1))
            {
               // echo "Database created successfully<br>";
            }
            else
            {
              // echo "Database not created<br>";
            }
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            $sql2="CREATE TABLE WData(
                fname VARCHAR(10) NOT NULL,
                lname VARCHAR(10) NOT NULL,
                pnumber VARCHAR(10) NOT NULL,
                emailid VARCHAR(100) NOT NULL,
                pass VARCHAR(15) NOT NULL,
                jtype VARCHAR(10) NOT NULL)";
            if(mysqli_query($conn,$sql2))
            {
               // echo "Table created successfully<br>";

            }
            else
            {
               //echo "Table not created<br>".$conn->error;
            }
            $sql3="INSERT INTO WData (fname,lname,pnumber,emailid,pass,jtype) values ('$fname','$lname','$number','$mailid','$pass','$jtype')";
            if(mysqli_query($conn,$sql3))
            {
                echo '<script language="javascript">';
                echo 'alert("Account successfully created!")';
                echo '</script>';
            }
            else
            {
                echo "Data not inserted<br>".$conn->error;
            }
          /*  $sql4="select * from WData";
            $result=mysqli_query($conn,$sql4);
            if(mysqli_num_rows($result)>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<br><br>Name: ".$row["fname"]." ".$row["lname"]."<br>Number: ".$row["pnumber"]."<br>Email id: ".$row["emailid"]."<br>Password: ".$row["pass"]."<br>Type: ".$row["jtype"];
                }
            }
            else
            {
                echo "0 results";
            } */
            mysqli_close($conn);
            header('refresh: 0.1; http://localhost/WT/loginindex.php');
        }
?>
</body>
</html>
