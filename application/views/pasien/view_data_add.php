<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('pasien/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" id="umur" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>

</section>