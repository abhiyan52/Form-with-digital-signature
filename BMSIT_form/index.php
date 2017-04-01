
<?php 
 include_once('assets/link.php'); 
 require 'dbinfo.php';
 $query="SELECT date FROM authenticate";
 
 $result_obj=$connection->query($query);

?>
<!DOCTYPE html>
<html>
<head> 


<LINK REL="SHORTCUT ICON"
      HREF="assets/th.jpg">

  <meta charset="utf-8">
  <title> </title>
  <meta name="description" content="BMSIT FORM">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" owner="Abhiyan timilsina">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="assets/homepage.css" >
  <link rel="stylesheet" href="assets/css.css" >


</head>
<body>

<
<div>
    <form method="post"  action="final.php">
    <label for="fname">USN</label>
    <input type="text" id="USN" name="USN" placeholder="Your USN" pattern="1[Bb][yY]1[3-9][Ii][sS][0-9][0-9][0-9]" autofocus required> 
    <div class="invalid"><p id="nepal">The USN should be in capital<p> </div>
    <label for="name">NAME</label>
    <input type="text" id="Name" name="name" placeholder="Your Name" pattern="[A-Z][a-z]+" required>
    <div class="invalid">Name not is proper format </div> 
    <label for="Semester" required>SEMESTER</label>
    <select name="semester" id="Semester"  required>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select>
    
    <label for="date">Date</label>
           
    <select name="date">
     <?php    while($row=$result_obj->fetch_array(MYSQLI_BOTH))
 { ?>
    <option><?=$row['date']?></option>
 <?php } ?>
            </select>
        
        
    

 <input type="file" accept="image/*" capture name="files">
<label for="fileupload">Upload</label> 

<input type="hidden" id="kunal" name="img"> 
 


    
     <div id="signature-pad" class="m-signature-pad">
    <div class="m-signature-pad--body">
        <canvas id="abhiyan" width="250px" height="100px">
         </canvas>
        <hr width="250px" align="left">
    </div>
 <div align ="left">
        <p>Sign above</p>
          <button type="button" class="button clear" data-action="clear">Clear</button>
      <button type="button" class="button save" data-action="save-png" align="right">Save</button>
      </div>
   </div>
<script type="text/javascript" src="assets/signature_pad.js"></script>

<script type="text/javascript" src="assets/app.js"></script>
<input type="submit" value="submit">
    </form>
</div>
<footer>
     <p align="center">MADE BY ABHIYAN TIMILSINA</p> 
    
</footer>

</body>
</html>