<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Mobil</th>
        <th>Nama Mobil</th>
        <th>Stok</th>
        <th>Harga</th>
        <th class="span2">
            <a href="#modalAddBarang" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data Mobil
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_barang)){
    foreach($data_barang as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->kd_mobil; ?></td>
        <td><?php echo $row->nm_mobil; ?></td>
        <td><?php echo $row->stok; ?></td>
        <td><?php echo currency_format($row->harga);?></td>
        <td>
            <a class="btn btn-mini" href="#modalEditBarang<?php echo $row->kd_mobil?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
            <a class="btn btn-mini" href="<?php echo site_url('master/hapus_barang/'.$row->kd_mobil);?>"
               onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
               <a class="btn btn-mini btnPrint" href="<?php echo site_url('cetak/print_barang/'.$row->kd_mobil)?>">
                        <i class="icon-print"></i> Print</a>
        </td>
    </tr>

    <?php }
    }
    ?>

    </tbody>
</table>


<!-- ============ MODAL ADD BARANG =============== -->
<div id="modalAddBarang" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Data Mobil</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('Pembelian/tambah_barang')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Kode Mobil</label>
                <div class="controls">
                    <input name="kd_mobil" type="text" value="<?php echo $kd_mobil; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Merk Mobil</label>
                <div class="controls">
                    <input name="nm_mobil" type="text" placeholder="Input Merk Mobil...">
                </div>
            </div>

             <!-- <div class="control-group">
                <label class="control-label">Transmisi</label>
                <div class="controls">
                    <select name="Transmisi" id="Transmisi">
                        <option value=""> = Pilih Transmisi = </option>
                        <option value="Matic">Matic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>
            </div>

             <div class="control-group">
                <label class="control-label" >Tahun</label>
                <div class="controls">
                    <input name="Tahun" type="text" placeholder="Input tahun...">
                </div>
            </div>

             <div class="control-group">
                <label class="control-label" >Warna</label>
                <div class="controls">
                    <input name="Warna" type="text" placeholder="Input Jenis Warna...">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Km yang tertera</label>
                <div class="controls">
                    <input name="Km" type="text" placeholder="Input Km yang tertera...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Stok</label>
                <div class="controls">
                    <input name="stok" type="text" placeholder="Input Stok...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Harga Beli</label>
                <div class="controls">
                    <input name="hargabeli" type="text" placeholder="Input Harga...">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Harga Jual</label>
                <div class="controls">
                    <input name="harga" type="text" placeholder="Input Harga...">
                </div>
            </div>
            
          </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<!-- ============ MODAL EDIT BARANG =============== -->
<?php
if (isset($data_barang)){
    foreach($data_barang as $row){
        ?>
        <div id="modalEditBarang<?php echo $row->kd_mobil?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Barang</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Pembelian/edit_barang')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">Kode Barang</label>
                        <div class="controls">
                            <input name="kd_mobil" type="text" value="<?php echo $row->kd_mobil;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Nama Barang</label>
                        <div class="controls">
                            <input name="nm_mobil" type="text" value="<?php echo $row->nm_mobil;?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Stok</label>
                        <div class="controls">
                            <input name="stok" type="text" value="<?php echo $row->stok;?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Harga Jual</label>
                        <div class="controls">
                            <input name="harga" type="text" value="<?php echo $row->harga;?>">
                        </div>
                    </div>
                <div class="control-group">
                        <label class="control-label">Harga Beli</label>
                        <div class="controls">
                            <input name="hargabeli" type="text" value="<?php echo $row->hargabeli;?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    <?php }
}
?>