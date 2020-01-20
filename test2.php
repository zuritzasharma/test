<?php

function hitung($node) {	// Lengkapi sendiri parameternya
	
	global $arr;
	$retArr = $node;
	
	$parent1 = getChildNodes($node['200']);
	for ($i=0; $i < count($parent1); $i++) { 
		$child = $node[$parent1[$i]];
		$child['jumlah']++;
	}
	echo $child['jumlah']."<br>";
}

function getChildNodes($node) {
	
	global $arr;
	$retArr = array();

	foreach ($arr as $a) {
		if ($a["_parent"] == $node["_id"]) {
			$retArr[] = $a["_id"];
		}
	}
	return $retArr;

}

function displayTable($arr) {

	echo "<table>";

	foreach ($arr as $a) {
		
		echo "<tr>";
		echo "<td>".$a["deskripsi"]."</td>";
		echo "<td align=\"right\">".number_format($a["jumlah"], 0, ",", ".")."</td>";
		echo "</tr>";
	}

	echo "</table>";

}

$arr = array(

		'166' => array (
			"deskripsi" => "521213 - Honor Output Kegiatan",
			"jumlah" => "17350000",
			"_id" => 166,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'200' => array (
			"deskripsi" => "051 - PENYUSUNAN PEDOMAN, JUKNIS DAN JUKLAK PELAKSANAAN",
			 "jumlah" => "0",
			"_id" => 200,
			"_parent" => 163,
			"_level" => 2,
			"_is_leaf" => false
		),

		'165' => array (
			"deskripsi" => "521211 - Belanja Bahan",
			"jumlah" => "116824000",
			"_id" => 165,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),


		'167' => array (
			"deskripsi" => "521219 - Belanja Barang Non Operasional Lainnya",
			"jumlah" => "215250000",
			"_id" => 167,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'163' => array (
			"deskripsi" => "2003.039.001 - Bantuan Rehabilitasi Ruang Kelas Sekolah Dasar",
			"jumlah" => "0",
			"_id" => 163,
			"_parent" => null,
			"_level" => 1,
			"_is_leaf" => false
		),

		'168' => array (
			"deskripsi" => "522151 - Belanja Jasa Profesi",
			"jumlah" => "470400000",
			"_id" => 168,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'169' => array (
			"deskripsi" => "522191 - Belanja Jasa Lainnya",
			"jumlah" => "200000000",
			"_id" => 169,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'170' => array (
			"deskripsi" => "524119 - Belanja Perjalanan Dinas Paket Meeting Luar Kota",
			"jumlah" => "683950000",
			"_id" => 170,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'171' => array (
			"deskripsi" => "532111 - Belanja Modal Peralatan dan Mesin",
			"jumlah" => "61150000",
			"_id" => 171,
			"_parent" => 200,
			"_level" => 3,
			"_is_leaf" => true
		),

		'172' => array (
			"deskripsi" => "053 - WORKSHOP\/BIMTEK SOSIALISASI BANTUAN",
			"jumlah" => "0",
			"_id" => 172,
			"_parent" => 163,
			"_level" => 2,
			"_is_leaf" => false
		),

		'173' => array (
			"deskripsi" => "521114 - Belanja pengiriman surat dinas pos pusat",
			"jumlah" => "1000000",
			"_id" => 173,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'174' => array (
			"deskripsi" => "521211 - Belanja Bahan",
			"jumlah" => "627375000",
			"_id" => 174,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'175' => array (
			"deskripsi" => "521213 - Honor Output Kegiatan",
			"jumlah" => "158300000",
			"_id" => 175,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'176' => array (
			"deskripsi" => "522131 - Belanja Jasa Konsultan",
			"jumlah" => "600000000",
			"_id" => 176,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'177' => array (
			"deskripsi" => "522141 - Belanja Sewa",
			"jumlah" => "43200000",
			"_id" => 177,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'178' => array (
			"deskripsi" => "522151 - Belanja Jasa Profesi",
			"jumlah" => "704000000",
			"_id" => 178,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'179' => array (
			"deskripsi" => "522191 - Belanja Jasa Lainnya",
			"jumlah" => "50000000",
			"_id" => 179,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'182' => array (
			"deskripsi" => "054 - PENYALURAN BANTUAN",
			"jumlah" => "0",
			"_id" => 182,
			"_parent" => 163,
			"_level" => 2,
			"_is_leaf" => false
		),

		'180' => array (
			"deskripsi" => "524114 - Belanja Perjalanan Dinas Paket Meeting Dalam Kota",
			"jumlah" => "45000000",
			"_id" => 180,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'181' => array (
			"deskripsi" => "524119 - Belanja Perjalanan Dinas Paket Meeting Luar Kota",
			"jumlah" => "20481600000",
			"_id" => 181,
			"_parent" => 172,
			"_level" => 3,
			"_is_leaf" => true
		),

		'183' => array (
			"deskripsi" => "526113 - Belanja Gedung dan Bangunan untuk diserahkan kepada masyarakat\/Pemda",
			"jumlah" => "668195800000",
			"_id" => 183,
			"_parent" => 182,
			"_level" => 3,
			"_is_leaf" => true
		)


	);

// Tampilan tabel sebelum proses perhitungan
echo "<b>Before:</b><br><table>";

displayTable($arr);

// Proses Perhitungan
hitung( $arr );  // Lengkapi sendiri parameternya

// Tampilan tabel sesudah proses perhitungan
echo "<b>After: </b><br><table>";

displayTable($arr);