<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="<?php echo base_url() ?>/jquery.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
        var jml_baris = 0;
        var no;
        </script>
        <h1>Input Data Penjualan</h1>
        <form class="" action="<?= site_url('penjualan/tambah_action') ?>" method="post">
            <table>
                <tr>
                    <td>No. Nota</td>
                    <td>:</td>
                    <td><input type="text" name="no_nota" value="<?= $no_nota ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="text" name="tgl" value="<?= $tgl ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table border="1">
                            <thead>
                                <tr>
                                    <td>Nama Barang</td>
                                    <td>Qty.</td>
                                    <td>Harga</td>
                                    <td>Sub Total</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </thead>
                            <tbody id="tabel_detail">
                                <?php if ($this->uri->segment(2) == 'tambah') { ?>
                                    <tr id="tr_0">
                                        <td>
                                            <select class="" name="kode_brg[]">
                                                <?php foreach($data_barang as $row) { ?>
                                                <option value="<?= $row->kode_brg ?>"><?= $row->nama_brg ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td><input type="text" name="qty[]" value="0" onblur="calculate(0)" onkeyup="calculate(0)"></td>
                                        <td><input type="text" name="harga[]" value="0" onblur="calculate(0)" onkeyup="calculate(0)"></td>
                                        <td><input type="text" name="sub_total[]" value="0" readonly></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <script type="text/javascript">
                                        ++jml_baris;
                                    </script>
                                <?php } else { ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3"> <button type="button" name="button" onclick="tambah_detail()">Tambah Barang</button> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td><input type="text" name="tgl" value="<?= $total ?>" readonly></td>
                </tr>
            </table>
        </form>

        <p> <button type="button" name="button">Simpan</button> <button type="button" name="button" onclick="kembali()">Kembali</button> </p>

        <script type="text/javascript">

        function tambah_detail() {
            $('#tabel_detail').append(
                `
                <tr id="tr_`+jml_baris+`">
                    <td>
                        <select class="" name="kode_brg[]">
                            <?php foreach($data_barang as $row) { ?>
                            <option value="<?= $row->kode_brg ?>"><?= $row->nama_brg ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td> <input type="text" name="qty[]" value="0"> </td>
                    <td> <input type="text" name="harga[]" value="0"> </td>
                    <td> <input type="text" name="sub_total[]" value="0"> </td>
                    <td> <button type="button" name="button" onclick="hapus_detail(`+jml_baris+`)">Hapus</button> </td>
                </tr>
                `
            );
            ++jml_baris;
        }

        function kembali() {
            window.location.href = '<?= site_url() ?>';
        }

        function hapus_detail(baris)
        {
            $('#tr_' + baris).remove();
            --jml_baris;
        }

        </script>
    </body>
</html>
