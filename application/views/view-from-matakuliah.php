<html>
    <head>
        <title>Form input matakuliah</title>
    </head>
    <body>
        <center>
            <?php echo validation_errors(); ?>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3"> form input data matakuliah </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th> : </th>
                    <td>
                        <input type ="text" name="kode" id="kode">
                    </td> 
                </tr>
                <tr>
                    <th> Nama MTK</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td> : </td>
                    <td>
                        <select name="ska" id="ska">
                            <option value="">pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html>