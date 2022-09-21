<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>List Data Penjualan</h1>

        <p> <button type="button" name="button" onclick="javascript: window.location.href = '<?= site_url('penjualan/create') ?>'">Tambah Data</button> </p>
        <table border="1">
            <tr>
                <td>No.</td>
                <td>No. Nota</td>
                <td>Tanggal</td>
                <td>Total</td>
                <td>Proses</td>
            </tr>
            <?php $no = 0 ?>
            <?php foreach($data_brg as $row) { ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->no_nota ?></td>
                    <td><?= $row->tgl ?></td>
                    <td><?= $row->total ?></td>
                    <td><button type="button" name="button" onclick="javascript: window.location.href = '<?= site_url('penjualan/edit/'.$row->id) ?>'">Edit</button></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
