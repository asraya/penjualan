<?php
if(isset($detail_barang)){
    foreach($detail_barang as $row){
        ?>

        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Kode Mobil</label>
                    <div class="controls">
                        <input name="kd_mobil" type="text" value="<?php echo $row->kd_mobil; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Merk Mobil</label>
                    <div class="controls">
                        <input name="nm_mobil" type="text" value="<?php echo $row->nm_mobil; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group ">
                    <label class="control-label">Harga</label>
                    <div class="controls ">
                        <input name="harga" type="text" value="<?php echo $row->harga; ?>" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Ready Stok</label>
                    <div class="controls">
                        <input id="stok" name="stok" type="text" value="<?php echo $row->stok; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Jumlah Pengadaan</label>
                    <div class="controls">
                        <input name="qty" type="text" class="" placeholder="Input Jumlah Pengadaan...">
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
}
?>
