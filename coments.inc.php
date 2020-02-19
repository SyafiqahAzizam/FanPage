

<?php
function setComments($conn2){
    if(isset($_POST['commentSubmit'])){
       $uid= $_POST['uid'];
       $date=$_POST['date'];
       $message=$_POST['message'];

       $sql="INSERT INTO comments (uid,date,message) VALUES ('$uid','$date','$message')";

       $result= $conn2->query($sql);
      
    }
  
}

function getComments($conn2)
{
    
        $sql="SELECT * FROM comments";
        $result=$conn2->query($sql);

        while(  $row=$result->fetch_assoc()){
            echo"<div class='comment-box><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo $row['message']."<br><br>";

            echo"</p></div>";
        }
      
    
}