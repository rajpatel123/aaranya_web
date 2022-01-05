<!-- ======= Footer ======= -->
<footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: justify; margin: 0px; font-size: 25px; font-style: normal;">Quicklinks</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <h4>Business</h4>
                <li><a href="#">Aaranya for Corporates</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Pricing</a></li>
              </div>
              <div class="col-md-6">
                <h4>Company</h4>
                <li><a href="#">Get a Demo</a></li>
                <li><a href="#">Contact </a></li>
                <li><a href="#">About</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="socal-media"> <i class="fa fa-facebook-f"></i> <i class="fa fa-instagram"></i> <i style="font-size: 23px;" class="fa fa-youtube-play"></i> </div>
            <br />
            <div class="link-address">
              <img src="assets/img/light-assets/g11983-8.png" width="160px">
              <p class="add-f">F -1/405, DESIGN ARC E-HOME, <br> HRA - 8 INDUSTRIAL AREA SURAJPUR SITE C,<br>GREATER NOIDA <br>Gautam Buddha Nagar - 201306<br> Uttar Pradesh - India</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      $(document).ready(function() {
        $("button.light-nave").click(function() {
          $("body").removeClass("dark-solution");
          $.ajax({
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('darkmode.unset') }}",
            success: function() {}
          });
        });
        $("button.dark-nave").click(function() {
          $("body").addClass("dark-solution");
          $.ajax({
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('darkmode.set') }}",
            success: function() {}
          });
        });
        $(".drop-down img").click(function() {
          $(this).parent().toggleClass("active");
        });
      });
    </script>

</body>

</html>