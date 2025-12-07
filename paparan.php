<?php
if(isset($_POST['submit'])){
	$nama=$_POST['nama'];
	$no_kp=$_POST['no_kp'];
	$no_tel=$_POST['no_tel'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$umur=$_POST['umur'];
	$lokasi=$_POST['lokasi'];
	$perlindungan=$_POST['perlindungan'];

	if ($umur == "Bawah 13 tahun") {
        $harga = ($lokasi == "Dalam Negeri") ? 20 : 35;
    } elseif ($umur == "13-59 tahun") {
        $harga = ($lokasi == "Dalam Negeri") ? 35 : 55;
    } else {
        $harga = ($lokasi == "Dalam Negeri") ? 70 : 120;


         $tambahan = ($perlindungan == "Ya") ? 19 : 0;

    $jumlah = $harga + $tambahan;

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAPARAN</title>
</head>
<body>
	<center>
		<h1>TRAVEL SAFE INSURANS</h1>
		<p>Terima kasih <?php echo $nama;?> Kerana menggunakan perkhidmatan kami</p>
		<p>Butiran Pembayaran ini telah diemailkan ke akaun <?php echo $email;?>
		<p>Nama Pelanggan:<?php echo $nama;?></p>
		<p>No.Ic:<?php echo $no_kp;?></p>
		<p>No Phone:<?php echo $no_tel;?></p>

		<a href="travel.html">Kembali</a>
		
	</center>

</body>
</html>