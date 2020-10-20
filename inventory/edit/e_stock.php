	  <?php
include '../../koneksi.php';
	$id			= htmlspecialchars($_POST['id']);
if(isset($_POST['save'])){
	$part_no	= htmlspecialchars($_POST['part_no']);
	$material	= htmlspecialchars($_POST['material']);
	$qty		= htmlspecialchars($_POST['qty']);
	$satuan		= htmlspecialchars($_POST['satuan']);
	$harga		= htmlspecialchars($_POST['harga']);
	$lokasi		= htmlspecialchars($_POST['lokasi']);
	
$update = mysqli_query($koneksi, "UPDATE stock SET 

	part_no		=	'$part_no', 
	material	=	'$material', 
	qty			=	'$qty', 
	satuan		=	'$satuan', 
	harga		=	'$harga', 
	lokasi		=	'$lokasi' WHERE id='$id'") or die(mysqli_error());
echo "<script>alert ('Ubah Material Berhasil'); document.location='../admin/stock.php' </script>";}
?>

