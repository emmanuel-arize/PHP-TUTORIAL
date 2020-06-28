<?php
 require "CONNECTING.inc.php";
 $conn=$conn;
// getting user ip address
$user_ip=$_SERVER['REMOTE_ADDR'];

  function ip_exists($ip){
      global $user_ip ;
      //echo $user_ip;
  }

  function update_count(){
      $query="SELECT count FROM hits_count";
      global $conn;
      //$query="SELECT username, firstname FROM users";
      $result=mysqli_query($conn, $query);
      if ($rows=mysqli_num_rows($result)!=null) {
        //echo $rows;
          /*while ($rows=mysqli_fetch_assoc($result)) {
           
              // echo "your id is: ".$rows['firstname']." food: ".$rows['username']."<br>";
              echo "yuor row number is :".$rows['count']."<br>";
              
          }*/
            $count_up=$rows + 1;
             $query_update="UPDATE hits_count SET count='$count_up' ";
             if(mysqli_query($conn, $query_update)){
               echo "ok";
             }
         
         

      }
     
  }
 
// next time 127
update_count();
?>