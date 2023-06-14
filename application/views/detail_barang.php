<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <?php foreach ($barang as $brg) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img-top" src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" alt="">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan Produk</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori Produk</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga Produk</td>
                            <td><strong>
                                    <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?></div>
                                </strong></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary mb-3">Tambah Ke Keranjang</div>') ?>
                    <?php echo anchor('welcome', '<div class="btn btn-sm btn-danger mb-3">Kembali</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>