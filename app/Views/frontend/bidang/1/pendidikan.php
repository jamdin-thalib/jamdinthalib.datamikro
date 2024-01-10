<div id="pathway">
	<ul class="breadcrumb">
		<li><a href="<?= base_url('home') ?>">Beranda</a></li>
		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
		<li>Pendidikan</li>
	</ul>
</div>
<div class="section-grey">
	<!--begin container-->
	<div class="container">
		<!--begin row-->
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h5 class="section-title">Bidang Urusan</h5>
				<h2 class="section-title">Pendidikan</h2>
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
								$('#2').highcharts({
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
											207.65,
											20.77,
											210.1,
											21.5,
										]
									}]
								});
							});
						</script>
						<div id="2" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Partisipasi Kasar (APK)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Partisipasi Kasar (APK)</strong></td>
									<td align="center">207.65</td>
									<td align="center">20.767</td>
									<td align="center">21.0</td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>APK Jenjang SD/MI/Sederajat</td>
									<td align="center">103.16</td>
									<td align="center">103.17</td>
									<td align="center">21.2</td>
									<td align="center"></td>
									<td align="center">%</td>
								</tr>
								<tr>
									<td>APK Jenjang SMP/MTs/Sederajat</td>
									<td align="center">104.49</td>
									<td align="center">104.5</td>
									<td align="center">21.5</td>
									<td align="center"></td>
									<td align="center">%</td>
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
								$('#3').highcharts({
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
											186.48,
											18.65,
											21.2,
											21.5,
										]
									}]
								});
							});
						</script>
						<div id="3" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Partisipasi Murni (APM)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Partisipasi Murni (APM)</strong></td>
									<td align="center">186.48</td>
									<td align="center">18.65</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>APM Jenjang SD/MI/Paket A</td>
									<td align="center">95.27</td>
									<td align="center">95.28</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">%</td>
								</tr>
								<tr>
									<td>APM Jenjang SMP/MTs/Paket B</td>
									<td align="center">91.21</td>
									<td align="center">91.22</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">%</td>
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
								$('#8').highcharts({
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
						<div id="8" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Indeks Pembangunan Manusia</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Indeks Pembangunan Manusia</strong></td>
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
								$('#9').highcharts({
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
						<div id="9" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Usia Harapan Hidup</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Usia Harapan Hidup</strong></td>
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
								$('#54').highcharts({
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
						<div id="54" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Putus Sekolah (APS) SD/MI</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Putus Sekolah (APS) SD/MI</strong></td>
									<td align="center">-0</td>
									<td align="center">-0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Putus Sekolah pada tingkat dan jenjang SD/MI</td>
									<td align="center">-0</td>
									<td align="center">-0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa pada tingkat yang sama dan jenjang SD/MI pada tahun ajaran sebelumnya</td>
									<td align="center">-0</td>
									<td align="center">-0</td>
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
								$('#55').highcharts({
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
						<div id="55" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Putus Sekolah (APS) SMP/Mts</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Putus Sekolah (APS) SMP/Mts</strong></td>
									<td align="center">-0</td>
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
								$('#56').highcharts({
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
											93.15,
											93.21,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="56" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase pendidik pada jenjang sekolah dasar yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase pendidik pada jenjang sekolah dasar yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</strong></td>
									<td align="center">93.15</td>
									<td align="center">93.21</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Pendidik jenjang Sekolah Dasar</td>
									<td align="center">1.271</td>
									<td align="center">1428</td>
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
								$('#57').highcharts({
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
											92.21,
											96.38,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="57" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase pendidik pada jenjang sekolah menengah pertama yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase pendidik pada jenjang sekolah menengah pertama yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</strong></td>
									<td align="center">92.21</td>
									<td align="center">96.38</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah pendidik PAUD yang memiliki ijazah D IV atau sarjana (S1), dansertifikat profesi guru pendidikan PAUD</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Pendidik PAUD</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Pendidik jenjang Menengah pertama yang memiliki ijazah D IV atau Sarjana (S1) dan sertifikat profesi guru</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Pendidik jenjang Menegah Pertama</td>
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
								$('#58').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="58" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase SD dan SMP yang terakreditasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase SD dan SMP yang terakreditasi</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
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
								$('#59').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="59" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Anka Kelulusan (AL) SD/MI</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Anka Kelulusan (AL) SD/MI</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah lulusan pada jenjang SD/MI</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa tingkat tertinggi pada jenjang SD/MI pada tahun sebelumnya</td>
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
								$('#60').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="60" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kelulusan (AL) SMP/MTS</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Kelulusan (AL) SMP/MTS</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Lulusan pada jenjang SMP/Mts</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa tingkat tertinggi pada jenjang SMP/Mts pada tahun sebelumnya</td>
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
								$('#61').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="61" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Anka melanjutkan (AM) dari SD/MI ke SMP/MTS</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Anka melanjutkan (AM) dari SD/MI ke SMP/MTS</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah siswa baru tingkat 1 pada jenjang SMP/MTS</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah lulusan pada jenjang SD/MI tahun ajaran sebelumnya</td>
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
								$('#62').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="62" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Tingkat partisipasi warga negara usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang berpartisipasi dalam pendidikan kesetaraan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Tingkat partisipasi warga negara usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang berpartisipasi dalam pendidikan kesetaraan</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar disekolah dasar</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang sudah tamat atau sedang belajar di pendidikan kesetaraan</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah pada provinsi yangbersangkutan.</td>
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
								$('#111').highcharts({
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
											91.42,
											91.42,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="111" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Partisipasi Kasar (APK) PAUD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Partisipasi Kasar (APK) PAUD</strong></td>
									<td align="center">91.42</td>
									<td align="center">91.42</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Murid Keseluruhan Paud usia 3-6 Tahun</td>
									<td align="center">6328</td>
									<td align="center">6129</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk usia 3-6 Tahun</td>
									<td align="center">6922</td>
									<td align="center">6704</td>
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
								$('#112').highcharts({
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
											104.49,
											103.17,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="112" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">APK SD/MI/SDLB/Paket A</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>APK SD/MI/SDLB/Paket A</strong></td>
									<td align="center">104.49</td>
									<td align="center">103.17</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Siswa keseluruhan SD/MI/SDLB/Paket A</td>
									<td align="center">13.627</td>
									<td align="center">21.974</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk Usia 7-12 Tahun</td>
									<td align="center">13041</td>
									<td align="center">21.298</td>
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
								$('#113').highcharts({
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
											104.49,
											104.5,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="113" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">APK SMP/MTs/SMPLB/Paket B</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>APK SMP/MTs/SMPLB/Paket B</strong></td>
									<td align="center">104.49</td>
									<td align="center">104.5</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah siswa keseluruhan SMP/MTs/SMPLB/Paket B</td>
									<td align="center">13.627</td>
									<td align="center">11.8</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk usia 13-15 TAhun</td>
									<td align="center">13.041</td>
									<td align="center">11.292</td>
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
								$('#114').highcharts({
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
											95.27,
											95.28,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="114" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">APM SD/MI/SDLB/Paket A</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>APM SD/MI/SDLB/Paket A</strong></td>
									<td align="center">95.27</td>
									<td align="center">95.28</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah siswa 7-12 Tahun dijenjang SD/MI/SDLB/Paket A</td>
									<td align="center">21.991</td>
									<td align="center">20.292</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Penduduk Usia 7-12 Tahun</td>
									<td align="center">23.083</td>
									<td align="center">21.298</td>
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
								$('#115').highcharts({
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
											11.67,
											23.22,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="115" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio siswa per rombel untuk TK</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Rasio siswa per rombel untuk TK</strong></td>
									<td align="center">11.67</td>
									<td align="center">23.22</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah siswa TK</td>
									<td align="center">6.326</td>
									<td align="center">6.129</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Rombongan belajar pada jenjang TK</td>
									<td align="center">542</td>
									<td align="center">264</td>
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
								$('#116').highcharts({
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
											25.25,
											24.75,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="116" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio siswa per rombel SD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Rasio siswa per rombel SD</strong></td>
									<td align="center">25.25</td>
									<td align="center">24.75</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah siswa SD</td>
									<td align="center">23.182</td>
									<td align="center">21.974</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah rombongan belajar pada jenjang SD</td>
									<td align="center">943</td>
									<td align="center">888</td>
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
								$('#117').highcharts({
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
											30.97,
											24.75,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="117" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio siswa per rombel untuk SMP</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Rasio siswa per rombel untuk SMP</strong></td>
									<td align="center">30.97</td>
									<td align="center">24.75</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah siswa SMP</td>
									<td align="center">13.627</td>
									<td align="center">21.974</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Rombongan belajar pada jenjang SMP</td>
									<td align="center">440</td>
									<td align="center">888</td>
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
								$('#118').highcharts({
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
											2.21,
											2.46,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="118" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase Guru yang memenuhi kualifikasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase Guru yang memenuhi kualifikasi</strong></td>
									<td align="center">2.209</td>
									<td align="center">2.457</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah guru yang minimal berkualifikasi S1/D4 dan Kompeten</td>
									<td align="center">2.209</td>
									<td align="center">2.457</td>
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
								$('#119').highcharts({
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
						<div id="119" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase guru yang mengikuti diklat kompetensi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase guru yang mengikuti diklat kompetensi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah Guru</td>
									<td align="center">2440</td>
									<td align="center">2660</td>
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
								$('#120').highcharts({
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
											47,
											22,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="120" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Persentase guru yang tersertifikasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Persentase guru yang tersertifikasi</strong></td>
									<td align="center">47</td>
									<td align="center">22</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Jumlah guru yang bersertifikasi</td>
									<td align="center">1.155</td>
									<td align="center">1079</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Guru</td>
									<td align="center">2.44</td>
									<td align="center">2.66</td>
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
								$('#121').highcharts({
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
						<div id="121" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">rata-rata nilai UN SD/MI</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>rata-rata nilai UN SD/MI</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Total Nilai ujian jenjang SD/Mi</td>
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
								$('#122').highcharts({
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
						<div id="122" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rata-rata Nilai UN SMP/MTs</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Rata-rata Nilai UN SMP/MTs</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Total Nilai ujian jenjang SD/MI</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah peserta ujian jenjang SMP/Mts</td>
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
								$('#123').highcharts({
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
						<div id="123" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Jumlah siswa yang mendapat Medali dan Olimpiade bidang pendidikan dasar (SD/MI, SMP/MTs Tingkat Provinsi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Jumlah siswa yang mendapat Medali dan Olimpiade bidang pendidikan dasar (SD/MI, SMP/MTs Tingkat Provinsi</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa yang mendapat medali pada olimpiade bidang pendidikan dasar (SD/MI, SMP/Mts) ke tingkat Nasional</td>
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
								$('#124').highcharts({
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
						<div id="124" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Prosentase sekolah yang telah menerapkan manajemen berbasis sekolah</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Prosentase sekolah yang telah menerapkan manajemen berbasis sekolah</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah sekolah yang telah menerapkan manajemen manajemen berbasis sekolah sesuai dengan manual yang ditetapkan oleh Menteri</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah sekolah</td>
									<td align="center"></td>
									<td align="center">132</td>
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
								$('#127').highcharts({
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
											91.42,
											91.42,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="127" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Tingkat partisipasi warga negara usia 5-6 tahun yang berpatisipasi dalam PAUD</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Tingkat partisipasi warga negara usia 5-6 tahun yang berpatisipasi dalam PAUD</strong></td>
									<td align="center">91.42</td>
									<td align="center">91.42</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 5-6 tahun yang usudah tamat atau sedang belajar disatuan PAUD</td>
									<td align="center">3.328</td>
									<td align="center">6129</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 5 - 6 tahun pada provinsi yang bersangkutan</td>
									<td align="center">6.922</td>
									<td align="center">6704</td>
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
								$('#128').highcharts({
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
											8200,
											82.09,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="128" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Presentase pendidik PAUD yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) bidang pendidikan anak usia dini, kependidikan lain atau psikologi dan sertifikat profesi guru pendidikan anak usia dini</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Presentase pendidik PAUD yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) bidang pendidikan anak usia dini, kependidikan lain atau psikologi dan sertifikat profesi guru pendidikan anak usia dini</strong></td>
									<td align="center">8200</td>
									<td align="center">82.09</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>umlah pendidik PAUD yang memiliki ijazah D IV atau sarjana (S1), dansertifikat profesi guru pendidikan PAUD</td>
									<td align="center">442</td>
									<td align="center">353</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>Jumlah Pendidik PAUD</td>
									<td align="center">539</td>
									<td align="center">430</td>
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
								$('#129').highcharts({
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
											82.35,
											82.35,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="129" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Presentase Satuan Pendidikan Anak Usia Dini Terakreditasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Presentase Satuan Pendidikan Anak Usia Dini Terakreditasi</strong></td>
									<td align="center">82.35</td>
									<td align="center">82.35</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Satuan Pendidikan Anak Usia Dini yang Terakreditasi</td>
									<td align="center">126</td>
									<td align="center">126</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah Satuan Pendidikan Anak Usia Dini</td>
									<td align="center">153</td>
									<td align="center">153</td>
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
								$('#130').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="130" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Penduduk yang berusia &gt;15 tahun melek hruf (tidak buta aksara)</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Penduduk yang berusia &gt;15 tahun melek hruf (tidak buta aksara)</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Penduduk yang berusia &gt;15 tahun ke atas dapat baca tulis</td>
									<td align="center">99.018</td>
									<td align="center">99.157</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah penduduk usia 15 tahun keatas</td>
									<td align="center">99.018</td>
									<td align="center">99.157</td>
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
								$('#131').highcharts({
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
											95.27,
											95.28,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="131" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">tingkat partisipasi warga negara usia 7-12 tahun yang berpatisipasi dalam pendidikan dasar</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>tingkat partisipasi warga negara usia 7-12 tahun yang berpatisipasi dalam pendidikan dasar</strong></td>
									<td align="center">95.27</td>
									<td align="center">95.28</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar disekolah dasar</td>
									<td align="center">21.991</td>
									<td align="center">20.292</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>jumlah anak usia 7-12 tahun pada kota yang bersangkutan</td>
									<td align="center">23.083</td>
									<td align="center">21.298</td>
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
								$('#132').highcharts({
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
											91.21,
											91.22,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="132" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">tingkat partisipasi warga negara usia 13-15 tahun yang berpatisipasi dalam Pendidikan Menengah Pertama</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>tingkat partisipasi warga negara usia 13-15 tahun yang berpatisipasi dalam Pendidikan Menengah Pertama</strong></td>
									<td align="center">91.21</td>
									<td align="center">91.22</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 13-15 tahun yang sudah tamat atau sedang belajar di seklah menengah pertama</td>
									<td align="center">11.895</td>
									<td align="center">10.3</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah anak usia 13-15 tahun pada kota yang bersangkutan</td>
									<td align="center">13.041</td>
									<td align="center">11.292</td>
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
								$('#133').highcharts({
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
						<div id="133" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Putus Sekolah (APS ) SD/MI</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Putus Sekolah (APS ) SD/MI</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah putus sekolah pada tingkat dan jenjang SD/MI</td>
									<td align="center"></td>
									<td align="center">-0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa pada tingkat yang sama dan jenjang SD/MI pada tahun ajaran sebelumnya</td>
									<td align="center">20.685</td>
									<td align="center">18.363</td>
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
								$('#134').highcharts({
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
						<div id="134" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Putus Sekolah (APS ) SMP/MTS</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Putus Sekolah (APS ) SMP/MTS</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah putus sekolah pada tingkat dan jenjang SMP/MTS</td>
									<td align="center">-0</td>
									<td align="center">-0</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa pada tingkat yang sama dan jenjang SMP/MTS</td>
									<td align="center">9.989</td>
									<td align="center">9.927</td>
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
								$('#135').highcharts({
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
											1.08,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="135" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Presentase pendidik pada jenjang sekolah dasar yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Presentase pendidik pada jenjang sekolah dasar yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</strong></td>
									<td align="center"></td>
									<td align="center">1.079</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah Pendidik jenjang Sekolah Dasar yang memiliki ijazah D IV atau Sarjana (S1) dan sertifikat profesi guru</td>
									<td align="center"></td>
									<td align="center">1.079</td>
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
								$('#136').highcharts({
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
											94.54,
											1.33,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="136" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Presentase pendidik pada jenjang sekolah Menengah Pertama yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Presentase pendidik pada jenjang sekolah Menengah Pertama yang memiliki ijazah diploma empat (D-IV) atau sarjana (S1) dan sertifikat pendidik</strong></td>
									<td align="center">94.54</td>
									<td align="center">1.331</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
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
								$('#137').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="137" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Presentase SD dan SMP Terakreditasi</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Presentase SD dan SMP Terakreditasi</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah satuan pendidikan SD dan SMP yang terakreditasi</td>
									<td align="center">139</td>
									<td align="center">132</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah satuan pendidikan SD dan SMP</td>
									<td align="center">139</td>
									<td align="center">132</td>
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
								$('#138').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="138" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka Kelulusan (AL) SD /MI</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka Kelulusan (AL) SD /MI</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah lulusan pada jenjang SD/MI</td>
									<td align="center">3.746</td>
									<td align="center">3.668</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Jumlah siswa tingkat tertinggi pada jenjang SD/MI pada tahun ajaran sebelumnya</td>
									<td align="center">3.746</td>
									<td align="center">3668</td>
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
								$('#139').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="139" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka kelulusan (AL) SMP/MTS</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka kelulusan (AL) SMP/MTS</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>Jumlah putus sekolah pada tingkat dan jenjang SMP/MTS</td>
									<td align="center">3.188</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>2.Jumlah siswa pada tingkat yang sama dan jenjang SMP/MTS</td>
									<td align="center">3.188</td>
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
								$('#140').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="140" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Tingkat partisipasi warga negara usia7-8 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang berpartisipasi dalam pendidikan kesetaraan</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Tingkat partisipasi warga negara usia7-8 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang berpartisipasi dalam pendidikan kesetaraan</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>1.Jumlah anak usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah yang sudah tamat atau sedang belajar di pendidikan kesetaraan</td>
									<td align="center">560</td>
									<td align="center">560</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>2.Jumlah anak usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan menengah pada provinsi yangbersangkutan.</td>
									<td align="center">560</td>
									<td align="center">560</td>
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
								$('#142').highcharts({
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
											100,
											0,
											0,
										]
									}]
								});
							});
						</script>
						<div id="142" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Angka melanjutkan (AM) dari SD/MI ke SMP/MTS</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Pendidikan</h6>
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
									<td><strong>Angka melanjutkan (AM) dari SD/MI ke SMP/MTS</strong></td>
									<td align="center">100</td>
									<td align="center">100</td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center"></td>
								</tr>
								<tr>
									<td>1. Jumlah siswa baru tingkat 1 pada jenjang SMP/MTS</td>
									<td align="center">4.42</td>
									<td align="center">4.629</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
								</tr>
								<tr>
									<td>2. Jumlah lulusan pada jenjang SD/MI tahun ajaran sebelumnya</td>
									<td align="center">4.42</td>
									<td align="center">4.629</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center">Orang</td>
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

<!-- Mirrored from edata.gorontalokota.go.id/bidang/1/pendidikan by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:27 GMT -->

</html>