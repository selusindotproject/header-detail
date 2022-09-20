<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>List Data Penjualan</h1>

        <p> <button type="button" name="button" onclick="javascript: window.location.href = '<?= site_url('penjualan/tambah') ?>'">Tambah Data</button> </p>
        <table border="1">
            <tr>
                <td>No.</td>
                <td>No. Nota</td>
                <td>Tanggal</td>
                <td>Total</td>
                <td>Proses</td>
            </tr>
        </table>
    </body>
</html>
