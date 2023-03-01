<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Waktu Berita</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($berita as $b) : ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $b['judul_berita']; ?></td>
                <td><?= $b['waktu']; ?></td>
                <td>Edit</td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>