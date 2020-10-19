  <footer class="main-footer">
    <strong>Copyright &copy; 2019 - <?php echo date ('Y'); ?> <a href="http://globalnine-indonesia.com">PT. Globalnine Indonesia</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.2
    </div>
  </footer>

</div>

<script src="../template/plugins/jquery/jquery.min.js"></script>
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../template/dist/js/adminlte.min.js"></script>
<script src="../template/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="../template/plugin/jquery/jquery.min.js"></script>
    <script src="../template/pluin/jquery/savy.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.auto-save').savy('load');
			$( "#clear" ).click(function() {
				$('.auto-save').savy('destroy');
			});
		});
</script>
<script type="text/javascript">
         function change()
         {
            var x = document.getElementById('password').type;
 
            if (x == 'password')
            {
               document.getElementById('password').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="far fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('password').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="far fa-eye"></i>';
            }
         }
</script>
<script type="text/javascript">
         function change1()
         {
            var x = document.getElementById('password1').type;
 
            if (x == 'password')
            {
               document.getElementById('password1').type = 'text';
               document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('password1').type = 'password';
               document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye"></i>';
            }
         }
</script>
<script type="text/javascript">
        $(function () {
            $("#new-pass").click(function () {
                var password = $("#password").val();
                var confirmPassword = $("#password1").val();
                if (password != confirmPassword) {
                    alert("Password Tidak Sesuai");
                    return false;
                }
                return true;
            });
        });
</script>

</body>
</html>