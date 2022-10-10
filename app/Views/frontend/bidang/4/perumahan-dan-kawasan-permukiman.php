    <div id="pathway">
    	<ul class="breadcrumb">
    		<li><a href="<?= base_url('home') ?>">Beranda</a></li>
    		<li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
    		<li>Perumahan dan kawasan permukiman</li>
    	</ul>
    </div>

    <div class="section-grey">
    	<!--begin container-->
    	<div class="container">

    		<!--begin row-->
    		<div class="row margin-bottom-50">
    			<div class="col-md-10 col-md-offset-1 text-center">
    				<h5 class="section-title">Bidang Urusan</h5>
    				<h2 class="section-title">Perumahan dan kawasan permukiman</h2>
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
    								$('#16').highcharts({
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
    						<div id="16" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Persentase pengurangan kawasan kumuh</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Persentase pengurangan kawasan kumuh</strong></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td style="text-align:center">%</td>
    								</tr>
    								<tr>
    									<td>Luasan Kawasan Kumuh Yang Tertangani</td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    								</tr>
    								<tr>
    									<td>Total Luasan Kawasan Kumuh</td>
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
    								$('#17').highcharts({
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
    						<div id="17" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Persentase Permukiman Rumah Layak Huni yang tertangani</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Persentase Permukiman Rumah Layak Huni yang tertangani</strong></td>
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
    								$('#18').highcharts({
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
    						<div id="18" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Persentase kawasan kota yang didukung dengan sarana penerangan jalan yang baik</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Persentase kawasan kota yang didukung dengan sarana penerangan jalan yang baik</strong></td>
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
    								$('#19').highcharts({
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
    						<div id="19" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Penyediaan dan rehabilitasi rumah layak huni bagi korban bencana kota</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Penyediaan dan rehabilitasi rumah layak huni bagi korban bencana kota</strong></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td style="text-align:center">%</td>
    								</tr>
    								<tr>
    									<td>Jumlah Unit rumah korban bencana yang ditangani pada tahun n</td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    								</tr>
    								<tr>
    									<td>Jumlah Total rencana unit rumah korban bencana yang akan ditangani pada tahun n</td>
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
    								$('#20').highcharts({
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
    						<div id="20" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Fasilitasi penyediaan rumah layak huni bagi masyarakat terdampak relokasi program pemerintah kota</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Fasilitasi penyediaan rumah layak huni bagi masyarakat terdampak relokasi program pemerintah kota</strong></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td style="text-align:center">%</td>
    								</tr>
    								<tr>
    									<td>Rumah Tangga Penerima fasilitasi penggantian Hak Atas Penguasaan Tanah dan/atau Bangunan +Rumah Tangga Penerima Subsidi Uang sewa + Rumah Tangga Penerima Penyediaan Rumah Layak Huni</td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    								</tr>
    								<tr>
    									<td>Jumlah Total Rumah Tangga terkena relokasi program Pemerintah daerah yang memenuhi kriteria penerima pelayanan</td>
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
    								$('#21').highcharts({
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
    						<div id="21" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Persentase kawasan permukiman kumuh dibawah 10 ha di kab/ kota yang ditangani</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Persentase kawasan permukiman kumuh dibawah 10 ha di kab/ kota yang ditangani</strong></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td style="text-align:center">%</td>
    								</tr>
    								<tr>
    									<td>Luas Kawasan permukiman kumuh dibawah 10 ha yang ditangani (ha)</td>
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
    								$('#22').highcharts({
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
    						<div id="22" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Berkurangnya jumlah unit RTLH (Rumah Tidak Layak Huni)</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Berkurangnya jumlah unit RTLH (Rumah Tidak Layak Huni)</strong></td>
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
    								$('#23').highcharts({
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
    						<div id="23" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Jumlah perumahan yang sudah dilengkapi PSU (Prasarana, Sarana dan Utilitas Umum)</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Jumlah perumahan yang sudah dilengkapi PSU (Prasarana, Sarana dan Utilitas Umum)</strong></td>
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
    								$('#24').highcharts({
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
    						<div id="24" style="margin: 0 auto; width: auto"></div>
    					</div>

    					<div class="col-md-7">
    						<h4 class="section-title">Rumah layak huni</h4>
    						<h6 class="margin-bottom-30" style="font-size: 17px;color: #f89406;">Sumber : Dinas Perumahan Rakyat dan Kawasan Permukiman</h6>
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
    									<td><strong>Rumah layak huni</strong></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td align="center"></td>
    									<td style="text-align:center">Unit</td>
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

    <!-- Mirrored from edata.gorontalokota.go.id/bidang/4/perumahan-dan-kawasan-permukiman by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:28 GMT -->

    </html>