<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Visi Dan Misi Desa</th>
            <th scope="col">Waktu</th>
            <th scope="col">Foto Banner</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($visimisi as $v) : ?>
            <tr>
                <td scope="row"><?= $v['isi_visi_misi']; ?></td>
                <td><?= $v['waktu']; ?></td>
                <td><?= $v['foto_banner']; ?></td>
                <td>@Edit</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>