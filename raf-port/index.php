<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">

  <title>My Portfolio</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">PORT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron text-center py-5 mt-5 bg-secondary-subtle" id="home">
    <div class="container">
      <img src="img/profile1.png" class="rounded-circle img-thumbnail shadow-lg" alt="Profile">
      <h1 class="display-4">Muhammad Rafi Walidain</h1>
      <h3 class="lead">Lecturer | Programmer | Youtuber</h3>
    </div>
  </div>

  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row mt-4 mb-4">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga id illo nihil! Dolorem, obcaecati doloribus. Et nisi eius, molestias tempore adipisci qui totam minus beatae magni, quis error dolore officiis sequi amet odio. Earum natus, libero reiciendis omnis non aspernatur?
          </p>
        </div>
        <div class="col-md-5">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quam magnam odio aspernatur quo ipsa. Vero eveniet, eligendi corrupti ut illo inventore fugit nemo delectus magnam beatae, placeat quo vel aliquid, dolorum quidem laborum. Magnam natus optio saepe iure adipisci.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- sosial media -->
  <section class="sosial bg-secondary-subtle" id="sosial">
    <div class="container">
      <div class="row mt-4 mb-4">
        <div class="col text-center">
          <h2>Social Media</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="./img/profile1.png" alt="" width="200" class="rounded-circle img-thumbnail shadow-lg">
            </div>
            <div class="col-md-8">
              <h5>Rafi Walidain</h5>
              <p>10000 Subscribers</p>
            </div>
          </div>
          <div class="row mt-3 mb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-22by12">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-BmTKA1xCm8" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="./img/profile1.png" alt="" width="200" class="rounded-circle img-thumbnail shadow-lg">
            </div>
            <div class="col-md-8">
              <h5>Rafi Walidain</h5>
              <p>1000 Followers</p>
            </div>
          </div>
          <div class="row mt-3 mb-3">
            <div class="col">
              <div class="ig-thumbnail">
                <img src="./img/thumbs/1.png" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="./img/thumbs/2.png" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="./img/thumbs/3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio " id="portfolio">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Portfolio</h2>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card Items -->
        <div class="col">
          <div class="card">
            <img src="img/thumbs/1.png" class="card-img-top " alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/thumbs/2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/thumbs/3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/thumbs/4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/thumbs/5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/thumbs/6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact bg-secondary-subtle" id="contact">
    <div class="container">
      <div class="row mt-4 mb-4">
        <div class="col text-center">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card bg-primary text-white mb-4 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Me</h5>
              <p class="card-text">Some quick example text...</p>
            </div>
          </div>

          <ul class="list-group mb-4">
            <li class="list-group-item">
              <h3>Location</h3>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
            <li class="list-group-item">West Java, Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-6">
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white mt-5 py-3">
    <div class="container text-center">
      <p class="mb-0">Copyright &copy; 2018.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybB3a5c6+2Q5h4e5f5e5f5e5f5e5f5e5f5e5f5e5f5" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>