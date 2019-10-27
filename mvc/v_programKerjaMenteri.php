<html>
    <head></head>
    <body>
        <center>
        <h2> Daftar Program Kerja BEM </h2>
            <table border="1" cellpadding="5" cellspacing="0">
                <tbody align="center">
                    <tr><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td></tr>
                </tbody>
                <?php
                    foreach ($proker as $row) {
                        echo "<tr>
                              <td> $row[nomorProgram]</td>
                              <td> $row[namaProgram]</td>
                              <td> $row[suratKeterangan]</td>
                              </tr> ";
                    }
                ?>
            </table>
        </center>
    </body>
</html>
