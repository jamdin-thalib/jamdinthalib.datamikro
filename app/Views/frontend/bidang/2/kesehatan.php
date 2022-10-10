<div id="pathway">
	<ul class="breadcrumb">
		<li><a href="<?= base_url('home') ?>">Beranda</a></li>
		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
		<li>Kesehatan</li>
	</ul>
</div>

<div class="section-grey">
	<!--begin container-->
	<div class="container">

		<!--begin row-->
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h5 class="section-title">Bidang Urusan</h5>
				<h2 class="section-title">Kesehatan</h2>
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
								$('#147').highcharts({
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
						<div id="147" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio daya Tampung RS terhadap Jumlah Penduduk</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Rasio daya Tampung RS terhadap Jumlah Penduduk</strong></td>
									<td align="center">0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah daya tampung rumah sakit rujukan</td>
									<td align="center">851</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Unit</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk di Kota</td>
									<td align="center">200</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Jiwa</td>
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
								$('#148').highcharts({
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
						<div id="148" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase RS Rujukan Tingkat Kota yang terakreditasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase RS Rujukan Tingkat Kota yang terakreditasi</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah RS Rujukan yang terakreditasi</td>
									<td align="center">6</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah RS Di Kota</td>
									<td align="center">6</td>
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
								$('#149').highcharts({
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
											0.71,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="149" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio Tenaga Kesehatan terhadap jumlah penduduk kota</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Rasio Tenaga Kesehatan terhadap jumlah penduduk kota</strong></td>
									<td align="center">0.71</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk Kota</td>
									<td align="center">200558</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Jiwa</td>
								</tr>
								<tr>
									<td>Jumlah Tenaga kesehatan</td>
									<td align="center">1427</td>
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
								$('#150').highcharts({
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
											98,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="150" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase ibu hamil mendapatkan pelayanan kesehatan ibu hamil</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase ibu hamil mendapatkan pelayanan kesehatan ibu hamil</strong></td>
									<td align="center">98</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah ibu hamil yang mendapatkan pelayanan kesehatan</td>
									<td align="center">4075</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah ibu hamil di kota</td>
									<td align="center">4122</td>
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
								$('#151').highcharts({
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
											99.81,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="151" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase ibu bersain mendapatkan pelayanan kesehatan ibu hamil</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase ibu bersain mendapatkan pelayanan kesehatan ibu hamil</strong></td>
									<td align="center">99.81</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah ibu bersalin yang mendapatkan pelayanan persalinan</td>
									<td align="center">4114</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah ibu bersalin di kota</td>
									<td align="center">4122</td>
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
								$('#152').highcharts({
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
											97,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="152" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase bayi baru lahir mendapatkan pelayanan kesehatan bayi baru lahir</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase bayi baru lahir mendapatkan pelayanan kesehatan bayi baru lahir</strong></td>
									<td align="center">97</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah bayi baru lahir yang mendapatkan pelayanan kesehatan sesuai standar</td>
									<td align="center">3900</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah bayi baru lahir di kota</td>
									<td align="center">3992</td>
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
								$('#153').highcharts({
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
						<div id="153" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Pelayanan kesehatan balita sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Pelayanan kesehatan balita sesuai standar</strong></td>
									<td align="center">95</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah balita yang mendapatakan layanan kesehatan sesuai standar</td>
									<td align="center">12943</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah balita di kota</td>
									<td align="center">13583</td>
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
								$('#154').highcharts({
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
											97,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="154" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase anak usia pendidikan dasar yang mendapatkan pelayanan kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase anak usia pendidikan dasar yang mendapatkan pelayanan kesehatan sesuai standar</strong></td>
									<td align="center">97</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah anak usia pendidikan dasar yang mendapatkan layanan kesehatan sesuai standar</td>
									<td align="center">5427</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia pendidikan dasar di kota</td>
									<td align="center">5541</td>
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
								$('#155').highcharts({
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
											94,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="155" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase orang usia 15-29 tahun mendapatkan skrining kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase orang usia 15-29 tahun mendapatkan skrining kesehatan sesuai standar</strong></td>
									<td align="center">94</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah orang usia 15-29 tahun yang mendapatkan skrining kesehatan sesuai standar</td>
									<td align="center">43860</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Orang usia 15-59 tahun di kota</td>
									<td align="center">46554</td>
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
								$('#156').highcharts({
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
											91,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="156" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase warga negara usia 60 tahun ke atas mendapatkan skrining kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase warga negara usia 60 tahun ke atas mendapatkan skrining kesehatan sesuai standar</strong></td>
									<td align="center">91</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah warga negara usia 60 tahun yang mendapatkan skrining kesehatan sesuai standar</td>
									<td align="center">8736</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Orang warga negara usia 60 tahun di kota</td>
									<td align="center">9550</td>
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
								$('#157').highcharts({
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
						<div id="157" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase penderita hipertensi yang mendapatkan pelayanan kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase penderita hipertensi yang mendapatkan pelayanan kesehatan sesuai standar</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Penderita hipertensi yang mendapatkan pelayanan kesehatan sesuai standar</td>
									<td align="center">6543</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penderita hipertensi di kota</td>
									<td align="center">6543</td>
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
								$('#158').highcharts({
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
						<div id="158" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Penderita DM yang mendapatkan pelayanan kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Penderita DM yang mendapatkan pelayanan kesehatan sesuai standar</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Penderita DM yang mendapatkan pelayanan kesehatan sesuai standar</td>
									<td align="center">3825</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penderita DM di Kota</td>
									<td align="center">3825</td>
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
								$('#159').highcharts({
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
						<div id="159" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Penderita DM yang mendapatkan pelayanan kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Penderita DM yang mendapatkan pelayanan kesehatan sesuai standar</strong></td>
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
								$('#160').highcharts({
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
						<div id="160" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase ODGJ berat yang mendapatkan pelayanan kesehatan sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase ODGJ berat yang mendapatkan pelayanan kesehatan sesuai standar</strong></td>
									<td align="center">95</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah penderita ODGJ yang mendapatkan pelayanan kesehatan sesuai standar</td>
									<td align="center">225</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penderita ODGJ di Kota</td>
									<td align="center">226</td>
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
								$('#161').highcharts({
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
						<div id="161" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase orang terduga TBC mendapatkan pelayanan TBC sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase orang terduga TBC mendapatkan pelayanan TBC sesuai standar</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah penderita TBC yang mendapatkan pelayanan kesehatan sesuai standar</td>
									<td align="center">5414</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita TBC di Kota</td>
									<td align="center">5414</td>
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
								$('#162').highcharts({
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
											92,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="162" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase orang dengan resiko terinfeksi HIV mendapatkan pelayanan deteksi dini HIV sesuai standar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase orang dengan resiko terinfeksi HIV mendapatkan pelayanan deteksi dini HIV sesuai standar</strong></td>
									<td align="center">92</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah orang dengan resiko terinveksi HIV yang mendapatkan pelayanan deteksi dini HIV sesuai standar</td>
									<td align="center">8295</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah orang dengan resiko terinveksi HIV di kota</td>
									<td align="center">8974</td>
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
								$('#163').highcharts({
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
											90,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="163" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Desa. Kelaurahan Universal Child Immunization</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Desa. Kelaurahan Universal Child Immunization</strong></td>
									<td align="center">90</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Kelurahan UCI</td>
									<td align="center">45</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh kelurahan</td>
									<td align="center">50</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Seluruh kelurahan</td>
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
								$('#164').highcharts({
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
						<div id="164" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase balita Gizi Buruk /Stunting yang mendapatkan perawatan/pelayanan kesehatan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase balita Gizi Buruk /Stunting yang mendapatkan perawatan/pelayanan kesehatan</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah balita gizi buruk/stunting mendapat perawatan di sarana pelayanan kesehatan di satu wilayah kerja pada kurun waktu tertentu</td>
									<td align="center">15</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh balita gizi buruk/stunting yang ditemukan di satu wilayah kerja dalam waktu yang sama</td>
									<td align="center">15</td>
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
								$('#165').highcharts({
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
						<div id="165" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase penemuan dan penanganan penderita penyakit DBD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase penemuan dan penanganan penderita penyakit DBD</strong></td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Penderita DBD yang ditangani sesuai SOP di satu wilayah kerja selama 1 Tahun</td>
									<td align="center">108</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penderita DBD yang ditemukan di satu wilayah dalam kurun waktu yang sama</td>
									<td align="center">108</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita DBD yang ditemukan di satu wilayah dalam kurun waktu yang sama</td>
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
								$('#166').highcharts({
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
											73,
											0,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="166" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kematian Ibu per 100.000 kelahiran hidup</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Angka Kematian Ibu per 100.000 kelahiran hidup</strong></td>
									<td align="center">73</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah kematian ibu melahirkan</td>
									<td align="center">3</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah ibu melahirkan</td>
									<td align="center">4091</td>
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
								$('#189').highcharts({
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
						<div id="189" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase pelayanan kesehatan dasar masyarakat miskin</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase pelayanan kesehatan dasar masyarakat miskin</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah kunjungan pasien miskin di sarker strata 1</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Kali</td>
								</tr>
								<tr>
									<td>Jumlah seluruh maskin di Kota Gorontalo</td>
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
								$('#190').highcharts({
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
						<div id="190" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase pelayanan kesehatan rujukan pasien masayarakt miskin</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase pelayanan kesehatan rujukan pasien masayarakt miskin</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Pasien Maskin di Sarkas Starata 2 dan Starata 3</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Masyarakat Miskin</td>
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
								$('#232').highcharts({
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
						<div id="232" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Kelurahan Siaga Aktif</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Kelurahan Siaga Aktif</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Kelurahan siaga yang aktif</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh kelurahan di kota gorontalo</td>
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
								$('#233').highcharts({
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
						<div id="233" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Kelurahan Stop Biuang Air besar sembarangan (BABS)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase Kelurahan Stop Biuang Air besar sembarangan (BABS)</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Kelurahan Stop BABS</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Kelurahan Stop BABS</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Kelurahan yang diverifikasi Stop BABS</td>
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
								$('#234').highcharts({
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
						<div id="234" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Prevalensi kurang gizi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Prevalensi kurang gizi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya balita Kurang Gizi</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah balita yang diukur</td>
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
								$('#235').highcharts({
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
						<div id="235" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Prevalensi Gizi Buruk</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Prevalensi Gizi Buruk</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya balita gizi buruk</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah balita yang diukur</td>
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
								$('#236').highcharts({
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
						<div id="236" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Prevalensi Gizi Kurang</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Prevalensi Gizi Kurang</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya balita Gizi kurang</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Balita yang diukur</td>
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
								$('#237').highcharts({
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
						<div id="237" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Proporsi rumah tangga dengan akses berkelanjutan terhadap air minum layak</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Proporsi rumah tangga dengan akses berkelanjutan terhadap air minum layak</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya penduduk dengan akses terhadap fasilitas sanitasi yang layak</td>
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
								$('#238').highcharts({
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
						<div id="238" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Proporsi rumah tangga dengan akses berkelanjutan terhadap sanitasi layak</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Proporsi rumah tangga dengan akses berkelanjutan terhadap sanitasi layak</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Penduduk di kota gorontalo</td>
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
								$('#239').highcharts({
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
						<div id="239" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase kelurahan Universal Child Immunization (UCI)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase kelurahan Universal Child Immunization (UCI)</strong></td>
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
								$('#240').highcharts({
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
						<div id="240" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase penemuan dan penaganan penderita penyakit</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Persentase penemuan dan penaganan penderita penyakit</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita DBD yang ditangani sesuai SOP di satu wilayah kerja selama 1 Tahun</td>
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
								$('#241').highcharts({
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
						<div id="241" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Acute flacid paralysis (AFP) rate per 100.000 penduduk &lt;15 Tahun</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Acute flacid paralysis (AFP) rate per 100.000 penduduk &lt;15 Tahun</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Kasus AFP non polio yang dilaporkan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penduduk &lt;15 Tahun</td>
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
								$('#242').highcharts({
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
						<div id="242" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Penemuan Penderita Pneumonia</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Penemuan Penderita Pneumonia</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah perkiraan penderita pneunomia balita disatu wilayah kerja pada kurun waktu yang sama</td>
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
								$('#243').highcharts({
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
						<div id="243" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Penemuan pasien baru TBBTA positif</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Penemuan pasien baru TBBTA positif</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah pasien baru TB BTA positif yang ditemukan dan diobati dalam satu wilayah selama satu tahun</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah perkiraan pasien baru TBBTA positif dalam satu wilayah dalam waktu satu tahun</td>
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
								$('#244').highcharts({
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
						<div id="244" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Penderita DBD yang ditangani</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Penderita DBD yang ditangani</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita DBD yang ditangani sesuai SOP disatu wilayah dalam waktu satu tahun</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penderita DBD yang ditemukan disatu wilayah dalam waktu satu tahun yang sama</td>
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
								$('#245').highcharts({
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
						<div id="245" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Prevalensi HIV/AIDS dari total populasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Prevalensi HIV/AIDS dari total populasi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Penduduk laki-laki dan perempuan berusia 15-49 Tahun yang positif HIV</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Penduduk laki-laki dan perempuan berusia 15-49 tahun</td>
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
								$('#246').highcharts({
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
						<div id="246" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kematian Balita</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Angka Kematian Balita</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya penduduk yang meninggal pada usia kurang dari 5 tahun dalam tahun tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Banyaknya kelahiran hidup pada periode yang sama</td>
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
								$('#247').highcharts({
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
						<div id="247" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kematian Bayi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Angka Kematian Bayi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya kematian bayi (dibawah 1 Tahun) selama tahun tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Banyaknya kelahiran hidup pada tahun yang sama</td>
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
								$('#248').highcharts({
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
						<div id="248" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kematian neonatal</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Angka Kematian neonatal</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya kematian neonatal (umur 0-28 hari)</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Banyaknya kelahiran hidup pada tahun yang sama</td>
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
								$('#249').highcharts({
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
						<div id="249" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kematian Ibu</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Angka Kematian Ibu</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Banyaknya kematian ibu yang berkaitan dengan kehamilan, persalinan dan masa nifas pada tahun tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah kelahiran hidup pada periode yang sama</td>
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
								$('#250').highcharts({
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
						<div id="250" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan Komplikasi Kebidanan yang ditangani</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan Komplikasi Kebidanan yang ditangani</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah komplikasi kebidanan yang mendapat penanganan definitif di satu wilayah kerja pada kurun waktu tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah ibu dengan komplikasi kebidanan disatu wilayah kerja pada kurun waktu yang sama</td>
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
								$('#251').highcharts({
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
						<div id="251" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan Pertolongan Persalinan oleh tenaga kesehatan yang memiliki kompetensi kebidanan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan Pertolongan Persalinan oleh tenaga kesehatan yang memiliki kompetensi kebidanan</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>jumlah seluruh sasaran ibu bersalin di satu wilayah kerja dalam kurun waktu yang sama</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jlh ibu bersalin yang ditolong oleh tenaga kesehatan di satu wilayah kerja pada kurun waktu tertentu</td>
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
								$('#252').highcharts({
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
						<div id="252" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan Desa/kel Universal child Immunization (UCI)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan Desa/kel Universal child Immunization (UCI)</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>jumlah Desa / Kelurahan UCI</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh Desa / Kelurahan</td>
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
								$('#253').highcharts({
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
						<div id="253" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan balita Gizi Buruk mendapat perawatan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan balita Gizi Buruk mendapat perawatan</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah balita gizi buruk medapat perawatan disarana pelayanan kesehatan di satu wilayah kerja pada kurun waktu tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh balita gizi buruk yang ditemukan di satu wilayah kerja dalam waktu yang sama</td>
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
								$('#254').highcharts({
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
						<div id="254" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan penemuan dan penanganan penderita penyakit TBC</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan penemuan dan penanganan penderita penyakit TBC</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jlh penderita baru TBC BTA (+) yang ditemukan dan diobati di satu wilayah kerja selama 1 tahun</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah perkiraan penderita baru TBC BTA (+) dalam kurun kurun waktu yang sama</td>
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
								$('#255').highcharts({
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
						<div id="255" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan penemuan dan penanganan penderita penyakit DBD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan penemuan dan penanganan penderita penyakit DBD</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita DBD yang ditangani sesuai SOP di satu wilayah kerja selama 1 tahun</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah penderita DBD yang ditemukan di satu wilayah dalam kurun waktu yang sama</td>
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
								$('#256').highcharts({
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
						<div id="256" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan pelayanan kesehatan rujukan pasien masyarakat miskin</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan pelayanan kesehatan rujukan pasien masyarakat miskin</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah kunjungan pasien miskin di sarana kesehatan strata 1</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh masyarakat miskin di kabupaten / kota</td>
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
								$('#257').highcharts({
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
						<div id="257" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Cakupan kunjungan Bayi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Kesehatan</h6>
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
									<td><strong>Cakupan kunjungan Bayi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah kunjungan bayi memperoleh pelayanan kesehatan sesuai standar di satu wilayah kerja pada kurun waktu tertentu</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah seluruh bayi lahir hidup di satu wilayah kerja pada kurun waktu yang sama</td>
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

<!-- Mirrored from edata.gorontalokota.go.id/bidang/2/kesehatan by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:27 GMT -->

</html>