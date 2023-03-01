<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">No. KK</th>
            <th scope="col">Nama Anggota</th>
            <th scope="col">Alamat</th>
            <th scope="col">Desa</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kabupaten/Kota</th>
            <th scope="col">Provinsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($keluarga as $q) : ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $q['no_kk']; ?></td>
                <td><?= $q['nama']; ?></td>
                <td><?= $q['alamat_jalan']; ?></td>
                <td><?= $q['nama_desa']; ?></td>
                <td><?= $q['nama_kecamatan']; ?></td>
                <td><?= $q['nama_kab_kota']; ?></td>
                <td><?= $q['nama_provinsi']; ?></td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>