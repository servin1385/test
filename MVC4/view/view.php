<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach($data as $key => $value){
    ?>
<div style="width:100%;height:200px;">
    <div style="width:10%;height:10px;background-color:rgb(146, 101, 134);float:left;margin-left:5px;margin-top:10px;padding:20px;"><?= $value['id'];?></div>
    <div style="width:10%;height:10px;background-color:rgb(199, 133, 182);float:left;margin-left:5px;margin-top:10px;padding:20px;"><?= $value['name'];?></div>
     <div style="width:10%;height:10px;background-color:rgb(146, 101, 134);float:left;margin-left:5px;margin-top:10px;padding:20px;"><?=$value['password'];?></div>
     <a href="http://localhost/MVC4/deleteUser/<?php echo $value['id'];?>">
      <div style = "width:10%;height:10px;background-color:rgb(199, 133, 182);float:left;margin-left:5px;margin-top:10px;padding:20px;color : black;">delete</div>
         </a>
         <a href="http://localhost/MVC4/editUserForm/<?php echo $value['id'];?>">
      <div style = "width:10%;height:10px;background-color:rgb(199, 133, 182);float:left;margin-left:5px;margin-top:10px;padding:20px;color : black;">edit</div>
         </a>
         <a href="http://localhost/MVC4/logForm/<?php echo $value['id'];?>">
      <div style = "width:10%;height:10px;background-color:rgb(199, 133, 182);float:left;margin-left:5px;margin-top:10px;padding:20px;color : black;">profile</div>
         </a>
</div>
    <?php
}
?>
</body>
</html>