<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
        <h1 style="font-size: 25px;">Data Mahasiswa</h1>
        <a href="Crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr style="font-size: 20px;">
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No.Hp</th>
                <th>Aksi</th>
            </tr>

            <?php
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td collspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['nim']; ?></td>
                        <td><?= $a['prodi']; ?></td>
                        <td><?= $a['universitas']; ?></td>
                        <td><?= $a['nomor_handphone']; ?></td>
                        <td class="action">
                            <a href="crud/hapus/<?= $a['nim']; ?>"><button class="btn-delete" onclick="return confirm('Are You Sure to Delete Nim <?= $a['nim'] ?>')">Delete</button></a>
                            <a href="crud/edit/<?= $a['nim']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php    }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>