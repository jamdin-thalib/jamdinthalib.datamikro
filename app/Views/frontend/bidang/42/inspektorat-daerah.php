<div id="pathway">
	<ul class="breadcrumb">
		<li class="active"><a href="<?= base_url('home') ?>">Beranda</a></li>
		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
		<li>Inspektorat daerah</li>
	</ul>
</div>

<div class="section-grey">
	<!--begin container-->
	<div class="container">

		<!--begin row-->
		<div class="row margin-bottom-50">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h5 class="section-title">Bidang Urusan</h5>
				<h2 class="section-title">Inspektorat daerah</h2>
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
								$('#47').highcharts({
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
						<div id="47" style="margin: 0 auto; width: auto"></div>
					</div>

					<div class="col-md-7">
						<h4 class="section-title">Rasio Temuan BPK RI yang ditindaklanjuti</h4>
						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Inspektorat</h6>
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
									<td><strong>Rasio Temuan BPK RI yang ditindaklanjuti</strong></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td style="text-align:center">%</td>
								</tr>
								<tr>
									<td>Temuan BPK RI yang ditindaklanjuti</td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
									<td align="center"></td>
								</tr>
								<tr>
									<td>Temuan BPK RI sampai dengan akhir tahun</td>
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

<!-- Mirrored from edata.gorontalokota.go.id/bidang/42/inspektorat-daerah by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:28 GMT -->

</html>