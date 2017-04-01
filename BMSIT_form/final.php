
<?php 





    require 'dbinfo.php';
   
   
   $query="INSERT INTO bmsit_form  (USN,NAME,Semester,Month,Signature,Picture) values (?,?,?,?,?,?)";
   
   $stmt=$connection->prepare($query);
  
   $stmt->bind_param("ssissb",$usn,$name,$semester,$date,$sig,$pic);
   
   $usn=$_POST['USN'];
   $name=$_POST['name'];
   $semester=$_POST['semester'];
   $date=$_POST['date'];
   $sig=$_POST['img'];
   $pic=$_POST['files'];
 
    $stmt->execute();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> Your Response has been recorded!!! </p>
        <a href="index.php">enter another </a>
    </body>
</html>
