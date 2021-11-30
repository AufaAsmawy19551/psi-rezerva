<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img/uq.png" width="50" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- local css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Rezerva | Customer | <?=$data['title'];?></title>

  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light ">
      <!-- Container wrapper -->
      <div class="container">
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
          <img
            src="img/ucourse.png"
            width="90%"
            alt=""
            loading="lazy"
            style="margin-top: -1px;"
          />
        </a>
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarLeftAlignExample"
          aria-controls="navbarLeftAlignExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
            <li class="nav-item px-2">
              <a class="nav-link active"  href="#">Home</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#">About</a>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown p2-5">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Courses
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Python</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Java</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Vuejs</a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Left links -->
          <div class="d-flex align-items-center">
            <button type="button" class="btn btn-link px-3 me-2">
              Login
            </button>
            <button type="button" class="btn btn-primary me-3">
              Sign up for free
            </button>
            <a
              class="btn btn-dark px-3"
              href="https://github.com/ihsan606/tugas-besar-pabw"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>