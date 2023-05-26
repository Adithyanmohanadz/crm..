<footer class="footer p-3  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
          </script>,

          <a href="https://grandlady.in" class="font-weight-bold" target="_blank">grandlady</a>
          <img class="mb-2 w-3" src="<?= base_url() ?>assets/img/GL-img/gl-logo1.webp" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="https://grandlady.in" class="nav-link text-muted text-uppercase" target="_blank">grandlady</a>
          </li>
          <li class="nav-item">
            <a href="https://grandlady.in/about.html" class="nav-link text-muted" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="https://grandlady.in/product.html" class="nav-link text-muted" target="_blank">Product</a>
          </li>
          <li class="nav-item">
            <a href="https://grandlady.in/contact.html" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>


</main>



<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>


<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<!-- <script src="<?= base_url() ?>assets/js/argon-dashboard.min.js?v=2.0.4"></script> -->
<script src="<?= base_url() ?>assets/js/pro.js"></script>


</body>

</html>