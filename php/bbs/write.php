<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
  </head>
  <body>

      <form method="POST" action="write_pro.php">
          <div align="center">
              <table width="600">
                  <tr>
                      <td>ID: </td>
                      <td><input type="text" name="user_ID"></td>
                  </tr>
                  <tr>
                      <td>Password: </td>
                      <td><input type="text" name="user_pw"></td>
                  </tr>
                  <tr>
                      <td>title:</td>
                      <td><input type="text" name="user_title"></td>
                  </tr>
                  <tr>
                      <td align="top">Content:</td>
                      <td><textarea name="user_content" cols="21" rows="5"></textarea>
                  </tr>
                  <tr>
                  <td colspan="2">
                    <input type="submit" value="등록하기" />
                </tr>
              </table>
      </form>
  </body>
</html>
