<section class="section">
	<div class="section-header">
		<h1><?=$judul;?></h1>
	</div>
	<div class="section-body">
		<?php if ($this->session->flashdata('pesan') != null): ?>
			<div class="alert alert-warning"><?= $this->session->flashdata('pesan');?></div>
		<?php endif ?>
		<div class="card">
		    <div class="card-header">
				<a href="<?=base_url('Transaksi/cetak_laporan')?>">
					<button type="submit" name="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Cetak Laporan"> <i class="fas fa-print"></i> </button>
				</a>
		    </div>
		    <div class="card-body">
		        <table class="table table-striped">
		            <thead>
		                <tr>
		                    <th scope="col">ID</th>
		                    <th scope="col">Nama Pelanggan</th>
		                    <th scope="col">Tanggal Bayar</th>
		                    <th scope="col">Bulan Bayar</th>
		                    <th scope="col">Total Bayar</th>
		                    <th scope="col">Status</th>
		                    <th scope="col">Bukti</th>
		                    <th scope="col">Verifikasi Admin</th>
		                </tr>
		            </thead>
		            <tbody>
		            <?php
		            if ($count > 0) {
		                foreach ($histori as $h):
		            ?>
		                <tr>
		                    <td><?=$h->id_pembayaran;?></td>
		                    <td><?=$h->nama_pelanggan;?></td>
		                    <td><?=$h->tanggal_pembayaran;?></td>
		                    <td><?=$h->bulan_bayar;?></td>
		                    <td>Rp <?=number_format($h->total_bayar)?></td>
						<?php if ($h->status == 0) { ?>
							<td><div class="badge badge-primary">Belum Bayar</div></td>
						<?php } else if ($h->status == 1) { ?>
							<td><div class="badge badge-warning">Pending</div></td>
						<?php } else if ($h->status == 2) { ?>
							<td><div class="badge badge-danger">Ditolak</div></td>
						<?php } else { ?>
							<td><div class="badge badge-success">Lunas</div></td>
						<?php } ?>
		                    <td><img src="<?=base_url()?>asset/bukti/<?=$h->bukti;?>" style="max-width:30px;max-height:30px;"></td>
		                    <td><?=$h->nama_admin;?></td>
		                </tr>
		            <?php
		                endforeach;
		            }
		            else {
		            ?>
		                    <td colspan="9"><center>Data tidak ditemukan.</center></td>
		            <?php
		            }
		            ?>
		            </tbody>
		        </table>
		    </div>
		</div>
	</div>
</section>
