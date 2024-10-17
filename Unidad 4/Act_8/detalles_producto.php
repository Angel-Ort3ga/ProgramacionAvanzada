<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Sidebar -->
    <div class="d-flex vh-100">
      <nav
        class="sidebar bg-dark text-white p-3 d-flex flex-column justify-content-between d-none d-md-block"
        style="min-width: 200px"
      >
        <div>
          <h3 class="pb-3">Sidebar</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Customers</a>
            </li>
          </ul>
        </div>

        <!-- Dropdown -->
        <div class="dropdown">
          <a
            class="nav-link dropdown-toggle text-white d-flex align-items-center"
            href="#"
            id="dropdownMenuButton"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <!-- Icono -->
            <img
              src="icono2.png"
              alt="Icon"
              class="rounded-circle me-2"
              width="40"
              height="40"
            />
            <span class="text-white active">mdo</span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
      </nav>

      <!-- Main -->
      <div class="flex-grow-1">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar scroll</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 2</a>
                </li>
              </ul>
              <form class="d-flex">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-light" type="submit">
                  Search
                </button>
              </form>
              <div class="ms-3 d-flex align-items-center">
                <img
                  src="icono2.png"
                  alt="Icon"
                  class="rounded-circle"
                  width="40"
                  height="40"
                />
                <span class="text-white ms-2">mdo</span>
              </div>
            </div>
          </div>
        </nav>

    <div class="container container-bordered">
        <!-- Cards -->
      <div class="container">
        <div class="row">
            <h1 class="title">F-14</h1>
            <div class="col">
                <div class="card ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="f_14.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="f_35.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="caza_r.jpeg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">F-14</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <a href="#" class="btn btn-primary"
                    >Go somewhere</a
                  >
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </div>
            <!-- Tabla -->
             <h1> Tabla </h1>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
