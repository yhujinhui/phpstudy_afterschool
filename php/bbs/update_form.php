<?php
include('db_conn.php');
$idx=$_GET['idx'];
$query="select * from bbs where id='$idx'";
$result=mysqli_query($conn,$query);
$re=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
  </head>
  <body>

      <form method="POST" action="update.php">
          <div>
              <table width="600">
                  <tr>
                      <td>ID: </td>
                      <td><input type="text" name="user_ID" value=<?=$re[1] ?>></td>
                  </tr>
    
                  <tr>
                      <td>title:</td>
                      <td><input type="text" name="user_title" value=<?=$re[3] ?>></td>
                  </tr>
                  
                  <tr>
                      <td>Content:</td>
                      <td><textarea name="user_content" cols="21" rows="5" ><?=$re[4]?></textarea>
                  </tr>
                  <tr>
                      <td>Password: </td>
                      <td><input type="text" name="user_pw"></td>
                  </tr>
                  <tr>
                  <td colspan="2">
                    <input type="submit" value="수정하기" />
                    <input type=hidden name="idx" value=<?=$re[0]?>/>
                </tr>
              </table>
      </form>
  </body>
</html>
