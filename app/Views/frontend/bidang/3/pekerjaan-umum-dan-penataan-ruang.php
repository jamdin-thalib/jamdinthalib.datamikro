<div id="pathway">
	<ul class="breadcrumb">
		<li><a href="<?= base_url('home') ?>">Beranda</a></li>
		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
		<li>Pekerjaan umum dan penataan ruang</li>
	</ul>
</div>

<div class="section-grey">
	<!--begin container-->
	<div class="container">

		<!--begin row-->
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h5 class="section-title">Bidang Urusan</h5>
				<h2 class="section-title">Pekerjaan umum dan penataan ruang</h2>
				<div class="separator_wrapper">
					<i class="icon icon-star-two red"></i>
				</div>
			</div>
		</div>
		<!--end row-->

		<div class="row margin-bottom-30">

			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#48').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											93,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="48" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Panjang jalan Kota Dalam Kondisi Baik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Panjang jalan Kota Dalam Kondisi Baik</strong></td>
									<td align="center">93</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Panjang Jalan Kota dalam Kondisi mantap (baik dan sedang)</td>
									<td align="center">220724</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Km</td>
								</tr>
								<tr>
									<td>Panjang seluruh jalan kota di daerah tersebut</td>
									<td align="center">237289</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#49').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="49" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Pengurangan Luas Genangan Banjir Dikawasan-Kawasan Pusat Layanan/Pusat Kota</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Pengurangan Luas Genangan Banjir Dikawasan-Kawasan Pusat Layanan/Pusat Kota</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Panjang Saluran yang terhubung dengan sungai lintas daerah</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Km</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#50').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="50" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Rumah Tangga Yang Memiliki Akses Terhadap Layanan Sumber Air Minum Layak</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Rumah Tangga Yang Memiliki Akses Terhadap Layanan Sumber Air Minum Layak</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Akumulasi Rumah Tangga yang memiliki akses terhadap layanan sumber air minum layak</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Unit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#51').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="51" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Rumah Tangga Yang Memiliki Akses Terhadap Layanan Sanitasi Layak</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Rumah Tangga Yang Memiliki Akses Terhadap Layanan Sanitasi Layak</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Akumulasi Rumah Tangga Yang memiliki akses terhadap layanan sanitasi layak</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Unit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#52').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="52" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Bangunan Gedung Pemerintah Dalam Kondisi Baik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Bangunan Gedung Pemerintah Dalam Kondisi Baik</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Akumulasi Bangunan Gedung Yang Dibangun dan dipelihara</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Bangunan</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#53').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="53" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Pemanfaatan Ruang Di Wilayah Kota Gorontalo Sesuai PERDA RTRW Nomor 9 Tahun 2019</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Pemanfaatan Ruang Di Wilayah Kota Gorontalo Sesuai PERDA RTRW Nomor 9 Tahun 2019</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Dokumen Rencana Tata Ruang Yang Dihasilkan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Dokumen</td>
								</tr>
								<tr>
									<td>Jumlah Persetujuan dan rekomendasi Rencana RDTR</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Dokumen</td>
								</tr>
								<tr>
									<td>Akumulasi pelaksanaan kegiatan Koordinasi dan Sinkronisasi Pemanfaatan Ruang</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Kegiatan</td>
								</tr>
								<tr>
									<td>Jumlah Bangunan Yang Ditertibkan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Bangunan</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#144').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="144" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">IKM ( Indeks Kepuasan Masyrakat</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>IKM ( Indeks Kepuasan Masyrakat</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Dokumen Perencanaan Dan Evaluasi Kinerja Perangkat Daerah</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Dokumen</td>
								</tr>
								<tr>
									<td>Jumlah Dokumen Administrasi Keuangan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Dokumen</td>
								</tr>
								<tr>
									<td>Cakupan Administrasi Umum</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Bulan</td>
								</tr>
								<tr>
									<td>Cakupan Peningkatan Disiplin dan Kapasitas Sumber Daya Aparatur</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#270').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											41,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="270" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Panjang jalan Kota yang direhabilitasi/direkonstruksi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Panjang jalan Kota yang direhabilitasi/direkonstruksi</strong></td>
									<td align="center">41</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Panjang Jalan Kota yang direhabilitasi/direkonstruksi</td>
									<td align="center">1171.73</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Panjang jalan kota yang seharusnya direhabilitasi /direkonstruksi</td>
									<td align="center">2840</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#271').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="271" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio Luas Kawasan pemukiman rawan banjir yang terlindungi oleh infrastruktur pengendalian banjir di WS kewenangan kota</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Rasio Luas Kawasan pemukiman rawan banjir yang terlindungi oleh infrastruktur pengendalian banjir di WS kewenangan kota</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Luas Kawasan Permukiman rawan banjir yang terlindungi oleh infrastruktur pengendalian banjir di WS Kewenagan Kota</td>
									<td align="center">61</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Luas Kawasan permukiman rawan banjir di WS kewenangan Kota (ha)</td>
									<td align="center">83</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#272').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="272" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio luas kawasan pemukiman sepanjang pantai rawan abrasi, erosi dan akresi yang terlindungi oleh infrastruktur pengaman pantai di WS kewenangan kota</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Rasio luas kawasan pemukiman sepanjang pantai rawan abrasi, erosi dan akresi yang terlindungi oleh infrastruktur pengaman pantai di WS kewenangan kota</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Luas Kawasan permukiman sepanjang pantai rawan abrasi di WS kewenangan kota (m) infrastruktur pengaman</td>
									<td align="center">29800</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Luas kawasan permukiman sepanjang pantai rawan abrasi di WS kewenagan kota (m)</td>
									<td align="center">150900</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#273').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											100,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="273" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Jumlah rumah tangga yang mendapatkan akses terhadap air minum melalui SPAM jaringan perpipaan dan bukan jaringan perpipaan terlindungi terhadap rumah tangga diseluruh kota</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase Jumlah rumah tangga yang mendapatkan akses terhadap air minum melalui SPAM jaringan perpipaan dan bukan jaringan perpipaan terlindungi terhadap rumah tangga diseluruh kota</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Kumulatif masyarakat yang rumah tangga yang mendapatkan akses terhadap air minum mmelalui SPAM jaringan perpipaan dan bukan jaringan perpipaan terlindungi di dalam sebuah kota</td>
									<td align="center">41665</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah total rumah tangga di seluruh kota tersebut</td>
									<td align="center">41665</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#274').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											86,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="274" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase jumlah rumah yang memperoleh layanan pengolahan air limbah domestik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase jumlah rumah yang memperoleh layanan pengolahan air limbah domestik</strong></td>
									<td align="center">86</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Rumah yang memiliki akses pengolahan berupa cubluk + jumlah rumah yang lumpur tinjanya telah diolah di PLT + jumlah rumah yang memiliki sambungan rumah dan air limbahnya diolah di IPALD</td>
									<td align="center">36223</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah rumah di kota</td>
									<td align="center">41665</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#275').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											50,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="275" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase tenaga operator/teknisi/analisi yang memiliki sertifikat kompetensi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Persentase tenaga operator/teknisi/analisi yang memiliki sertifikat kompetensi</strong></td>
									<td align="center">50</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah tenaga kkerja konstruksi yang terlatih di wilayah kota yang dibuktikan dengan sertifikat pelatihan operator dan teknis/analisi</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah kebutuhan tenaga operator dan teknis/analis diwilayah kota</td>
									<td align="center">200</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#276').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="276" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio proyek yang menjadi kewenangan pengawasannya tanpa kecelakaan konstruksi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Rasio proyek yang menjadi kewenangan pengawasannya tanpa kecelakaan konstruksi</strong></td>
									<td align="center">0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>jumlah proyek yang menjadi kewenangan pengawasannya yang terjadi kecelakaankonstruksi</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah total proyek yang menjadi kewenangan pengawannya</td>
									<td align="center">27</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#277').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											95,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="277" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rumah Tangga Bersanitasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Rumah Tangga Bersanitasi</strong></td>
									<td align="center">95</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Rumah Tangga bersanitasi</td>
									<td align="center">48917</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh rumah tangga</td>
									<td align="center">51316</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#278').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											100,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="278" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rumah Tangga Pengguna air bersih</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Rumah Tangga Pengguna air bersih</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>jumlah rumah tangga pengguna air bersih</td>
									<td align="center">48980</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh rumah tangga</td>
									<td align="center">48980</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#279').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											0,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="279" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">kawasan kumuh</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>kawasan kumuh</strong></td>
									<td align="center">0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Luas Kawasan kumuh (ha)</td>
									<td align="center">41</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Luas Wilayah (ha)</td>
									<td align="center">79</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#280').highcharts({
									chart: {
										type: 'column'
									},
									title: {
										text: 'Grafik Tahun 2019 s/d 2022',
										style: {
											fontSize: "14px"
										}
									},
									subtitle: {},
									xAxis: {
										categories: [
											'2019', '2020', '2021', '2022',
										],
										title: {
											text: 'Tahun'
										}
									},
									yAxis: {
										min: 0,
										title: {
											text: 'Jumlah'
										}
									},
									legend: {
										enabled: false
									},
									tooltip: {
										pointFormat: 'Jumlah <b>{point.y:,f}</b>',
									},
									series: [{
										name: 'Tahun',
										color: '#9393c8',
										data: [
											43,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="280" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Ruang terbuka hijau per satuan luas wilayah</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pekerjaan Umum dan Penataan Ruang</h6>
						<table class="data" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th style="text-align:center">2019</th>
									<th style="text-align:center">2020</th>
									<th style="text-align:center">2021</th>
									<th style="text-align:center">2022</th>
									<th style="text-align:center">Satuan</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td><strong>Ruang terbuka hijau per satuan luas wilayah</strong></td>
									<td align="center">43</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Luas Ruang terbuka hijau</td>
									<td align="center">3448.22</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Luas Wilayah (ha)</td>
									<td align="center">7</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Luas Wilayah (ha)</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>


<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="padding: 15px;border-bottom: 1px solid #e5e5e5;">
				<h4><i class="fa fa-user"></i> Login e-Database</h4>
			</div>
			<div class="modal-body">
				<form autocomplete="off" action="#" method="post" id="admin_form" name="admin_form">
					<div class="form-group">
						<label class="control-label">Username:</label>
						<input name="username" type="text" class="form-control" placeholder="Pengguna" required />
					</div>
					<div class="form-group">
						<label class="control-label">Password:</label>
						<input name="password" type="password" class="form-control" placeholder="Kata Sandi" required />
					</div>
					<div class="form-group">
						<button name="submit" type="submit" class="btn btn-danger">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>

<!-- Mirrored from edata.gorontalokota.go.id/bidang/3/pekerjaan-umum-dan-penataan-ruang by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:27 GMT -->

</html>