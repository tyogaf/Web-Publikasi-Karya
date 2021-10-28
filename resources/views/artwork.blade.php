<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/stylePages.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Web Publikasi Karya</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand judul fs-4" href="index.html">Web Publikasi Karya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search_bar">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artwork">Artwork</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="literatur">Literatur</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success" href="login.html" role="button"><i class="bi bi-person-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Filter -->
    <div class="wrapper">
      <nav>
        <div class="items">
          <span class="item bg-warning active" data-name="all">All</span>
          <span class="item bg-warning" data-name="nature">Nature</span>
          <span class="item bg-warning" data-name="building">Building</span>
          <span class="item bg-warning" data-name="people">People</span>
          <span class="item bg-warning" data-name="drawing">Drawing</span>
          <span class="item bg-warning" data-name="miniature">Miniature</span>
          <span class="item bg-warning" data-name="abstrak">Abstrak</span>
          <span class="item bg-warning" data-name="pixel">Pixel</span>
        </div>
      </nav>
    </div>
    <!-- Akhir Filter -->
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="popart my-3 p-3 border border-3 border-success rounded-3">
          <div class="image" data-name="drawing">
            <span><img src="../assets/artwork/a1.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 1</a></span>
          </div>
          <div class="image" data-name="drawing">
            <span><img src="../assets/artwork/a2.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 2</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a3.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 3</a></span>
          </div>
          <div class="image" data-name="abstrak">
            <span><img src="../assets/artwork/a4.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 4</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a5.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 5</a></span>
          </div>
          <div class="image" data-name="people">
            <span><img src="../assets/artwork/a6.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 6</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a7.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 7</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a8.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 8</a></span>
          </div>
          <div class="image" data-name="building">
            <span><img src="../assets/artwork/a9.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 9</a></span>
          </div>
          <div class="image" data-name="pixel">
            <span><img src="../assets/artwork/a10.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 10</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a11.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 11</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a12.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 12</a></span>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->

    <!-- Footer -->
    <footer class="text-white bg-success text-center p-3">
      <p>© by Web Publikasi Karya 2021</p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>