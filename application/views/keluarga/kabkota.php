<?php
$id = 'id="id_kab_kota" class="form-control input-md" ';
echo form_dropdown('id_kab_kota', $nama_kab_kota, '', $id)
?>
<script>
    $("#id_kab_kota").change(function() {
        var cek = document.getElementById("id_kab_kota").value;
        if (cek === "") {
            document.getElementById("id_kecamatan_sementara").style.display = 'block';
            document.getElementById("id_kecamatan").style.display = 'none';
        } else {
            var id_kab_kota = {
                id_kab_kota: $("#id_kab_kota").val()
            };
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('datapenduduk/c_keluarga/getKec') ?>",
                data: id_kab_kota,
                success: function(tes) {
                    document.getElementById("id_kecamatan_sementara").style.display = 'none';
                    $('#lala_kab_kota').html(tes);

                }
            });
        }
    });

    $("#id_provinsi").change(function() {
        document.getElementById("id_kecamatan_sementara").style.display = 'block';
        document.getElementById("id_kecamatan").style.display = 'none';
    });
</script>