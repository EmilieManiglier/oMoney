  </div>
<!-- End of page Content Holder -->
</main>
<!-- END of main -->

<footer class="footer text-center">
      Copyright &copy; Emilie Maniglier - 2020
</footer>

    <!-- JS -->
  <script src="<?= $assetsBaseUri; ?>js/jquery.min.js"></script>
  <script src="<?= $assetsBaseUri; ?>js/popper.min.js"></script>
  <script src="<?= $assetsBaseUri; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>