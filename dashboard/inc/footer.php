
    <script src="../assets/lib/jquery/jquery.js"></script>
    <script src="../assets/lib/popper.js/popper.js"></script>
    <script src="../assets/lib/bootstrap/bootstrap.js"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/starlight.js"></script>
	<script type="text/javascript">
	    $(document).ready( function () {
	        $('#myTable').DataTable();
	    });
        $('.UserDelete').click(function(){
            var id = $(this).attr("data-id");
            swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                });
                window.setTimeout(function(){
                    window.location.href = 'user-delete.php?id='+id;},3000);
              } else {
                swal("Your imaginary file is safe!");
              }
            });
        })
        $('.socialDelete').click(function(){
            var id = $(this).attr("data-id");
            swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                });
                window.setTimeout(function(){
                    window.location.href = 'delete_socials.php?id='+id;},3000);
              } else {
                swal("Your imaginary file is safe!");
              }
            });
        })
	  </script>
  </body>
</html>
