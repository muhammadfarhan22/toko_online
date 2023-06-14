<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div>
            <br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda" value="<?php echo set_value('nama'); ?>">
                </div>
                <div class="text-danger"><?= form_error('nama'); ?></div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda" value="<?php echo set_value('alamat'); ?>">
                </div>
                <div class="text-danger"><?= form_error('alamat'); ?></div>



                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input class="form-control" type="text" name="no_telp" placeholder="Nomor Telepon Anda" value="<?php echo set_value('no_telp'); ?>">
                </div>
                <div class="text-danger"><?= form_error('no_telp'); ?></div>


                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select class="form-control" name="jasa_pengiriman" id="">
                        <option value="">Jasa Pengiriman</option>
                        <option value="jne" <?php echo  set_select('jasa_pengiriman', 'jne'); ?>>JNE</option>
                        <option value="tiki" <?php echo  set_select('jasa_pengiriman', 'tiki'); ?>>TIKI</option>
                        <option value="pos_indonesia" <?php echo  set_select('jasa_pengiriman', 'pos_indonesia'); ?>>POS Indonesia</option>
                        <option value="gojek" <?php echo  set_select('jasa_pengiriman', 'gojek'); ?>>GOJEK</option>
                        <option value="grab" <?php echo  set_select('jasa_pengiriman', 'grab'); ?>>GRAB</option>
                    </select>
                </div>
                <div class="text-danger"><?= form_error('jasa_pengiriman'); ?></div>

                <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select class="form-control" name="bank" id="">
                        <option value="">Pilih Bank</option>
                        <option value="bca" <?php echo  set_select('bank', 'bca'); ?>>BCA - XXXXXXXX</option>
                        <option value="bni" <?php echo  set_select('bank', 'bni'); ?>>BNI - XXXXXXXX</option>
                        <option value="bri" <?php echo  set_select('bank', 'bri'); ?>>BRI - XXXXXXXX</option>
                        <option value="mandiri" <?php echo  set_select('bank', 'mandiri '); ?>>MANDIRI - XXXXXXXX</option>
                    </select>
                </div>
                <div class="text-danger"><?= form_error('bank'); ?></div>

                <button type="submit" class="btn btn-sm btn-primary mb-2">Pesan</button>

            </form>

        <?php
                } else {
                    echo "<h4>Keranjang belanja anda kosong!";
                }
        ?>

        </div>

        <div class="col-md-2"></div>
    </div>
</div>