    </div>
      <footer class="d-flex flex-wrap justify-content-between py-3 border-top bg-success" style="min-height: 10vh!important;">
        <div class="container" style = "padding: 5px 20px 0px 20px;">
          <div class="row">
            <div class="col-md-auto " style = "padding : 0px 0px 0px 0px; margin : 2px 0px 0px 0px;">
              <ul class="nav list-unstyled" style = "padding : 0px 0px 0px 0px;">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" style = "padding : 0px 5px 0px 0px; font-weight : 550;color : white;">
                    © 2022 KELOMPOK FUNTASTIC FIVE |
                  </a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" style = "padding : 0px 0px 0px 0px; font-weight : 550;color : white;">
                  ALL RIGHT RESERVED |
                  </a>
                </li>
              </ul>              
            </div>
            <div class="col" style = "padding : 3px 1px 0px 0px;">
              <ul class="nav list-unstyled" style = "padding : 0px 0px 0px 0px;">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link" style = "padding : 0px 0px 0px 0px; font-weight : 550; color : white;">
                    <marquee width="100%" direction="left">
                      MUHAMMAD AUFA ASMAWY - 20523235@STUDENTS.UII.AC.ID |
                      RAMADHAN PERWIRA JATI - 20523242@STUDENTS.UII.AC.ID |
                      RISQI MEDYANSAH ICHWAN - 20523169@STUDENTS.UII.AC.ID |
                      FAUZAN DZAKY - 20523219@STUDENTS.UII.AC.ID |
                      MUHAMMAD KHAIRULLAH - 20523009@STUDENTS.UII.AC.ID
                    </marquee>
                  </a>
                </li>
              </ul>      
            </div>
            <div class="col-md-auto d-flex-end" style = "padding: 0px 0px 0px;">
              <ul class="nav justify-content-end list-unstyled">
                <li class="ms-3"><a class="text-light" href="#" style = "font-size : 20px;"><i class="bi-twitter" role="img" aria-label="Twitter"></i></a></li>
                <li class="ms-3"><a class="text-light" href="#" style = "font-size : 20px;"><i class="bi-instagram" role="img" aria-label="Instagram"></i></a></li>
                <li class="ms-3"><a class="text-light" href="#" style = "font-size : 20px;"><i class="bi-facebook" role="img" aria-label="Facebook"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Sweet Alert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <?php 
  
    if(isset($_SESSION['alert'])){
      success_and_error($_SESSION['alert']['message'], $_SESSION['alert']['type']);
      unset($_SESSION['alert']);
    }
    ?>

    <script>
      function alert_warning(message, title, action, location){
        Swal.fire({
          type: 'warning',
          title: title,
          text: message,
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'YA, ' + action,
          cancelButtonText: 'TIDAK',
        }).then((result) => {
          if (result.value) {
            window.location.replace(location);
          }
        })
      }
    </script>
  </body>
</html>

