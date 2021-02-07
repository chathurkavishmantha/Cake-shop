<!-- <?php

        if(isset($_SESSION['status']) && $_SESSION['status'] != '')
        {
            ?>

            <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                // text: "",
				icon: "<?php echo $_SESSION['status_code']; ?>",
				button:"ok. Done!",
            });
            </script>
        <?php
        unset($_SESSION['status']);
        }

    ?> -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    

    
</body>

</html>
