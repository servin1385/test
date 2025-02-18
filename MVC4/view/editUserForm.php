<?php
$request=new request;
$urlArray=$request->parsUrl();
$id=$urlArray[3];
$usermodel=new userModel();
$result=$usermodel->find($id);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <form action="/MVC4/updateUser" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <input type="text" name="age" value="<?php echo $row['age']; ?>">
    <button type="submit">eddit</button>
</form>
</body>
</html>