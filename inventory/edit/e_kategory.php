	  <?php
include '../../koneksi.php';
	$id			= htmlspecialchars($_POST['id']);
if(isset($_POST['save'])){
	$no			= htmlspecialchars($_POST['no']);
	$kategory	= htmlspecialchars($_POST['kategory']);
	
$update = mysqli_query($koneksi, "UPDATE kategory SET 

	no			=	'$no', 
	kategory	=	'$kategory' WHERE id='$id'") or die(mysqli_error());
echo "<script>alert ('Ubah kategory Berhasil'); document.location='../admin/kategory' </script>";}
?>

