<div id="pathway">
	<ul class="breadcrumb">
		<li class="active"><a href="<?= base_url('home') ?>">Beranda</a></li>
		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
		<li>Keuangan</li>
	</ul>
</div>

<div class="section-grey">
	<!--begin container-->
	<div class="container">

		<!--begin row-->
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h5 class="section-title">Bidang Urusan</h5>
				<h2 class="section-title">Keuangan</h2>
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
								$('#4').highcharts({
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
						<div id="4" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Pertumbuhan PDRB</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Pertumbuhan PDRB</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Rp Juta</td>
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
								$('#5').highcharts({
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
						<div id="5" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Pertumbuhan Ekonomi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Pertumbuhan Ekonomi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
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
								$('#29').highcharts({
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
						<div id="29" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Peningkatan Pendapatan Asli Daerah (PAD)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Persentase Peningkatan Pendapatan Asli Daerah (PAD)</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Realisasi Pajak Daerah Tahun Berjalan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Realisasi Pajak Tahun Sebelum</td>
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
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#30').highcharts({
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
						<div id="30" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Kesesuain Antar Aset dan Kondisi Ril</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Persentase Kesesuain Antar Aset dan Kondisi Ril</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>jumlah aset yang tercatat</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah aset hasil terinventarisasi</td>
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
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#31').highcharts({
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
						<div id="31" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Dana perimbangan yang terserap dibanding yang direncanakan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Dana perimbangan yang terserap dibanding yang direncanakan</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>jumlah dana perimbangan yang terserap</td>
									<td align="center">10000</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah dana perimbangan yang direncanakan sesuai dengan APBD</td>
									<td align="center">10000</td>
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
								$('#32').highcharts({
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
						<div id="32" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Belanja publik terhadap DAU</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Belanja publik terhadap DAU</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>jumlah belanja publik</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>DAU</td>
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
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#33').highcharts({
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
						<div id="33" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Belanja langsung terhadap total APBD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Belanja langsung terhadap total APBD</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>total realiasi belanja langsung</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>total realisasi belanja APBD</td>
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
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#34').highcharts({
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
						<div id="34" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Besaran PAD terhadap seluruh pendapatan dalam APBD (realisasi)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Besaran PAD terhadap seluruh pendapatan dalam APBD (realisasi)</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>jumlah PAD (realisasi) tahun 2019</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>total pendapatan dalam APBD (realisasi) tahun 2019</td>
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
			<div class="row margin-bottom-30">
				<div class="col-md-12 section-white" style="padding: 30px 0;">
					<div class="col-md-5">
						<script type="text/javascript">
							$(function() {
								$('#36').highcharts({
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
						<div id="36" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Opini BPK terhadap LapKeu Daerah</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Opini BPK terhadap LapKeu Daerah</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
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
								$('#37').highcharts({
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
						<div id="37" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio SILPA terhadap total pendapatan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Rasio SILPA terhadap total pendapatan</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
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
								$('#38').highcharts({
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
						<div id="38" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio realisasi belanja terhadap anggaran belanja</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Rasio realisasi belanja terhadap anggaran belanja</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
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
								$('#39').highcharts({
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
						<div id="39" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio temuan BPK RI yang ditindaklanjuti</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Badan Keuangan</h6>
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
									<td><strong>Rasio temuan BPK RI yang ditindaklanjuti</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
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

<!-- Mirrored from edata.gorontalokota.go.id/bidang/36/keuangan by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:28 GMT -->

</html>