<html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="post" action="hasilkirim.php">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
        <!-- membuat label dan textbox Nama -->
          <td width="130">Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          <!-- membuat button Kirim dan Reset -->
            <input type="submit" name="btnLogin" value="Kirim">
            <input type="reset" name="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>