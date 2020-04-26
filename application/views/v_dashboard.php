<section class="section">
	<div class="section-header">
		<h1><?=$judul;?></h1>
	</div>
	<div class="section-body">
		<?php if ($this->session->flashdata('pesan') != null) { ?>
			<?php echo $this->session->flashdata('pesan');?>
		<?php } ?>
        <div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4 class="d-inline">Data Pelanggan</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Nama Pelanggan</th>
										<th scope="col">Nomor Meter</th>
										<th scope="col">Daya</th>
									</tr>
								</thead>
								<tbody>
								<?php if ($countpelanggan > 0) {
									foreach ($pelanggan as $p) {
								?>
									<tr>
										<td><?=$p->nama_pelanggan?></td>
										<td><?=$p->nomor_kwh?></td>
										<td><?=$p->daya?> Watt</td>
									</tr>
								<?php
									}
								} else {
								?>
								<tr>
									<td colspan="4" style="text-align:center">Data tidak ditemukan.</td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
						<a href="<?=base_url('Transaksi/penggunaan_pelanggan')?>"><button class="btn btn-success">More...</button></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card">
				    <div class="card-header">
				        <h4 class="d-inline">Data Tarif</h4>
				    </div>
				    <div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Daya</th>
										<th scope="col">Tarif/KWH</th>
									</tr>
								</thead>
								<tbody>
								<?php if ($counttarif > 0) {
									foreach ($tarif as $t) {
								?>
									<tr>
										<td><?=$t->daya?> Watt</td>
										<td>Rp <?=number_format($t->tarifperkwh)?></td>
									</tr>
								<?php
									}
								} else {
								?>
								<tr>
									<td colspan="3" style="text-align:center">Data tidak ditemukan.</td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
						<a href="<?=base_url('Tarif/data_tarif')?>"><button class="btn btn-success">More...</button></a>
				    </div>
				</div>
			</div>
		</div>
		<div class="card">
		    <div class="card-header">
		        <h4 class="d-inline">Verifikasi Pembayaran</h4>
		    </div>
		    <div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Nomor Meter</th>
								<th scope="col">Nama Pelanggan</th>
								<th scope="col">Tanggal Bayar</th>
								<th scope="col">Bulan Bayar</th>
								<th scope="col">Total Bayar</th>
								<th scope="col">Bukti</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if ($hitung > 0) {
							foreach ($verifikasi as $h):
						?>
							<tr>
								<td><?=$h->nomor_kwh;?></td>
								<td>
									<a href="<?=base_url()?>Transaksi/penggunaan_detail/<?=$h->id_pelanggan?>">
										<?=$h->nama_pelanggan;?>
									</a>
								</td>
								<td><?=$h->tanggal_pembayaran;?></td>
								<td><?=$h->bulan_bayar;?></td>
								<td>Rp <?=number_format($h->total_bayar)?></td>
								<td> <img src="<?=base_url()?>asset/bukti/<?=$h->bukti?>" style="max-width:40px;max-height:40px;"></td>
							</tr>
						<?php
							endforeach;
						}
						else {
						?>
								<td colspan="7"><center>Data tidak ditemukan.</center></td>
						<?php
						}
						?>
						</tbody>
					</table>
				</div>
				<a href="<?=base_url('Transaksi/verifikasi_pembayaran')?>"><button class="btn btn-success">More...</button></a>
		    </div>
		</div>
		<div class="card">
		    <div class="card-header">
				<h4 class="d-inline">Histori Transaksi</h4>
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
		            if ($counthistori > 0) {
		                foreach ($histori as $h):
		            ?>
		                <tr>
		                    <td><?=$h->id_pembayaran;?></td>
		                    <td>
								<a href="<?=base_url()?>Transaksi/penggunaan_detail/<?=$h->id_pelanggan?>">
									<?=$h->nama_pelanggan;?>
								</a>
							</td>
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
				<a href="<?=base_url('Transaksi/histori_transaksi')?>"><button class="btn btn-success">More...</button></a>
		    </div>
		</div>
    </div>
</section>