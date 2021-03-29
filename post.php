<html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="post" action="postAct.php">
      <!-- membuat tabel -->
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Nama</td> 
          <td><input type="text" name="nama"></td>
          <!-- membuat label dan textbox Nama -->
        </tr>
        <tr>
          <td width="130">Email</td>
          <td><input type="text" name="email"></td>
          <!-- membuat label dan textbox Email -->
        </tr>
        <tr>
          <td>
          <!-- membuat button submit dan reset -->
            <input type="submit" name="btnLogin" value="Login">
            <input type="reset" name="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>