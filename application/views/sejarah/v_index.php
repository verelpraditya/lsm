<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Sejarah Desa</th>
            <th scope="col">Waktu</th>
            <th scope="col">Foto Banner</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sejarah as $s) ?>
        <tr>
            <td><?= $s['isi_sejarah']; ?></td>
            <td><?= $s['waktu']; ?></td>
            <td><?= $s['foto_banner']; ?></td>
            <td>Aksi</td>
        </tr>
    </tbody>
</table>