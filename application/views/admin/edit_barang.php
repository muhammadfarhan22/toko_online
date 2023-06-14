<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>

        <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="POST">

            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label for="">Kategori</label>
                <select class="form-control" name="kategori" id="">
                    <option value="Elektronik">Elektronik</option>
                    <option value="Pakaian Pria">Pakaian Pria</option>
                    <option value="Pakaian Wanita">Pakaian Wanita</option>
                    <option value="Pakaian Anak-Anak">Pakaian Anak-Anak</option>
                    <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="form-group">
                <label for="">stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-sm btn-primary mt-2">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>