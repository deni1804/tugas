<table border="1">
    <?php
    foreach ($useraktif as $u) {
    ?>
        <tr>
            <th>Nama Anggota : <?= $u->nama; ?></th>
        </tr>
        <tr>
            <th>Buku yang dibooking :</th>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td class="table-responsive">
            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                </tr>
                <?php
                $no = 1;
                foreach ($items as $i) {
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $i['judul_buku']; ?></td>
                        <td><?= $i['pengarang']; ?></td>
                        <td><?= $i['penerbit']; ?></td>
                        <td><?= $i['tahun_terbit']; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td><?= md5(date('d M Y H:i:s')); ?></td>
    </tr>
</table>