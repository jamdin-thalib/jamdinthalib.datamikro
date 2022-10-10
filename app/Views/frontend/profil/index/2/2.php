<div id="doc-content" data-spy="scroll">
	<div style="padding-top: 5px;">

		<div class="left">
			<div class="title">Penduduk</div>
			<div class="subitle">Penduduk Menurut Usia</div>
		</div>
		<div class="right">
			<div style="text-align: right;padding: 5px 0 5px;">
				<a href="<?= base_url('cetak/cetak3') ?>" target="_blank" class="btn_style">
					<img src="../../../themes/v2/images/print.gif" alt="" /> Print
				</a>
			</div>
			<span class="block" style="background: black;"></span><span>Tetap</span>
			<span class="divider">|</span>
			<span class="block" style="background: red;"></span><span>Sementara</span>
			<span class="divider">|</span>
			<span class="block" style="background: Jiwae;"></span><span>Sangat Sementara</span>
			<span class="divider">|</span>
			<strong>n/a</strong> <span>Tidak Tersedia</span>&nbsp;
			<div style="height:10px"></div>
		</div>

		<table id="example" class="display nowrap" style="width:100%">
			<thead>
				<tr>
					<th style="text-align:center" rowspan="2">#</th>
					<th style="text-align:center" rowspan="2">Jenis Data</th>
					<th style="text-align:center" colspan="5">Tahun</th>
					<th style="text-align:center" rowspan="2">Satuan</th>
					<th style="text-align:center" width="170" rowspan="2">Sumber</th>
				</tr>
				<tr>
					<th style="text-align:center">2018</th>
					<th style="text-align:center">2019</th>
					<th style="text-align:center">2020</th>
					<?php foreach ($totalPertahun as $row) : ?>
						<th style="text-align:center"><?= $row['nama'] ?></th>
					<?php endforeach ?>
					<th style="text-align:center">2022</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td align="center"><strong>I.</strong></td>
					<td><strong>Penduduk Menurut Usia</strong></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><strong>1. Jumlah Penduduk Usia <i>0-5 Tahun</i> </strong> </td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_0_5'] + $row['l_0_5'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>6-10 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_6_10'] + $row['l_6_10'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>11-15 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_11_15'] + $row['l_11_15'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>16-20 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_16_20'] + $row['l_16_20'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>21-25 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_21_25'] + $row['l_21_25'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>26-30 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_26_30'] + $row['l_26_30'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>31-35 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_31_35'] + $row['l_31_35'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>36-40 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_36_40'] + $row['l_36_40'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>41-45 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_41_45'] + $row['l_41_45'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>50-55 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_51_55'] + $row['l_51_55'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>56-60 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_56_60'] + $row['l_56_60'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>61-65 Tahun</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_61_65'] + $row['l_61_65'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td><strong>2.Jumlah Penduduk Usia<i>66 Tahun Keatas</i></strong></td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">1. Kecamatan Kaidipang</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($kaidipang as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">2. Kecamatan Pinogaluman</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($pinogaluman as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">3. Kecamatan Bolangitang Barat</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bolbar as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">4. Kecamatan Bolangitang Timur</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($boltim as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">5. Kecamatan Bintauna</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($bintauna as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left:22px">6. Kecamatan Sangkub</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<td align="center" style="color: black">n/a</td>
					<?php foreach ($sangkub as $row) : ?>
						<td align="center" style="color: black"><?= $row['p_66_plus'] + $row['l_66_plus'] ?></td>
					<?php endforeach ?>
					<td align="center" style="color: black">n/a</td>
					<td align="center">Jiwa</td>
					<td width="170" align="center">Desa Se Kab. Bolmut</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"responsive": true,
			"ordering": false,
			"lengthMenu": [
				[15, 30, -1],
				[15, 30, "All"]
			]
		});
	});
</script>

<script>
	function myFunction() {
		// Declare variables
		var input, filter, ul, li, a, i;
		input = document.getElementById("mySearch");
		filter = input.value.toUpperCase();
		ul = document.getElementById("myMenu");
		li = ul.getElementsByTagName("li");

		// Loop through all list items, and hide those who don't match the search query
		for (i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("a")[0];
			if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "";
			} else {
				li[i].style.display = "none";
			}
		}
	}
</script>


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

<!-- Mirrored from edata.gorontalokota.go.id/profil/index/2/1 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:51 GMT -->

</html>