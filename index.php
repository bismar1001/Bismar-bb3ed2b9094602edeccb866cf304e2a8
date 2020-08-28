<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <title> Form Login System </title>
</head>

<body>
    
    <div class="container">
    	<br>  
       
        <hr>
        <br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<span id="hasil"></span>
		<h2 class="page-header">Form Login Member</h2>
			<form id="frmlogin" class="form-horizontal" method="post" action="auth.php">
				<div class="form-group">
					<label>Nama</label><br>
					<input type="text" class="form-control" id="username"  placeholder="Username">
					<label>Password</label><br>
					<input type="text" class="form-control" id="password" placeholder="Password">
					<br>
					<button class="btn btn-warning" id="tombollogin"><i class="fa fa-sign-in"></i> Login</button>
					<a href="tambah.php" class="btn btn-success"><i class="fa fa-plus"></i> Register</a>
				</div>	
			</form>
		</div>
		<div class="col-sm-4">
			

		</div>		
	</div>	
</div>

    <?php 
        include 'footer.php';
    ?>


<script>
$(document).ready(function() {
	$("#tombollogin").click(function() {

		var aksilogin = $("#frmlogin").attr('action');

		var datalogin = {
			username: $('#username').val(),
		 	password: $('#password').val()
		};
		
		$.ajax({
			type: "POST",
			url: aksilogin,
			data: datalogin,
			success: function(aksi)
			{
				console.log(aksi);

				//window.location = dashboard;
				if(aksi==1 || aksi=='1') {
					$("#hasil").html("<p class='berhasil' align='center'>Anda Berhasil Login<br>Halaman akan dialihkan dalam 10 detik..");

					setTimeout(function () {
                            window.location.href = "dashboard.php";
                    },5000);
					
				} 
				else {
					$("#hasil").html("<p class='gagal' align='center'>Username atau Password salah...!!! <br> <a onClick=buka(); style='cursor:pointer;'> Ulangi Lagi<a></p>");
				}
				
			}
		});
		return false;
	});

});
function buka()
{
	$('#frmlogin').slideDown();
}
</script>

</body>
</html>





