<html>
<title>Form Biodata</title>
    <body>
    <!-- Form input yang akan ditampilkan di file lain -->
        <form method="POST" action="tampilbiodatalatihan_no3.php">
            <center><h1>BIODATA</h1></center>
            <center><p>Silahkan isi biodata dengan sebenar - benarnya</p></center>
            <table width="400"  cellpadding="2" cellspacing="2" align="center">
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="inputnama"></td>
                </tr>
                <tr>
                    <td>NPM : </td>
                    <td><input type="text" name="inputnpm"></td>
                </tr>
                <tr>
                    <td>TTL : </td>
                    <td><input type="text" name="inputttl"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                    <td> <input type="radio" name="inputjk" value="Laki - Laki"> Laki - laki
                    <br>
                    <input type="radio" name="inputjk" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama : </td>
                    <td> <select name="inputagama">
                        <option value="islam">Islam</option>
                        <option value="protestan">Protestan</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="inputalamat"></td>
                </tr>
                <tr>
                    <td>Nomor HP : </td>
                    <td><input type="text" name="inputtelefon"></td>
                </tr></table>
                <!-- Button untuk submit dan reset input -->
                <center>
                <input type="submit" name="btnlogin" value="Submit" style="background-color: cyan;">
                <input type="reset" name="btnreset" value="Reset" style="background-color: red;">
                </center>
</form></body></html>