<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>.assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
  <script src="https://use.fontawesome.com/115c9d5a69.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Latizep</title>
</head>

<body>
  <nav class="navigation navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Latizep.me</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="d-flex sec-nav">
          <form action="#my-blog" method="get">
            <div class="search">
              <input type="text" id="search" name="search" />
              <a href="#my-blog"><button type="submit"><i class="fa fa-search"></i></button></a>
            </div>
          </form>
          <a href="#about" class="title">about</a>
          <a href="#contact" class="title">contact</a>
          <a href="#my-blog" class="title">blog</a>
        </div>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="container h-100">
      <div class="row h-100">
        <div class="about-des col-lg-6 d-flex align-items-center">
          <div class="about" id="about">
            <h1 class='title text-light' id="name">Hi There!</h1>
            <p class="description text-light">
              I am a Student at <span>Muhammadiyah University of Yogyakarta</span> majoring in English Education
              <br><br>
              I have <span>interests on Language</span>, and my <span>hobbies are playing game</span> I play basically
              every kind of game but mostly I play FPS game
            </p>
            <button class="mt-2 py-2 px-3 btn-cream">my blog</button>
          </div>
        </div>
        <div class="about-img col-lg-6 d-flex align-items-center">
          <img id="profile-img" src="https://media.discordapp.net/attachments/445232632679235595/898197749160378398/unknown.png" class="image-profile">
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container" id="my-blog">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-between">
            <h1 class="title">My blog<?= $search ?></h1>
          </div>
          <p class="description">I wrote an experience that I've done so far into a blog, you can provide interaction in
            the form of comments or share this page</p>
        </div>
        <div class="col-12 pt-4" data-aos="fade-up" data-aos-duration="700">
          <div class="row list-blog">
            <?php
            foreach ($blog as $r) {
              $title = strtolower(join('-', explode(" ", $r['title'])));
            ?>
              <a href="<?= base_url('blog/' . $title) ?>">
                <div class="col-lg-3 items">
                  <div class="image" style="background-image: url(<?= $r['bg'] ?>)">
                  </div>
                  <div class="detail">
                    <p class="title pt-3"><?= $r['title'] ?></p>
                    <p class="sub-title pt-1"><?= $r['category'] ?></p>
                  </div>
                </div>
              </a>
            <?php
            }
            for ($i = 4; $i > $total_blog; $i--) {
            ?>
              <div class="col-lg-3 items">
                <div class="image" style="background-image: url(https://media.discordapp.net/attachments/445232632679235595/898226518432571442/neon-landscape-background_53876-91655.png)">
                </div>
                <div class="detail">
                  <p class="title pt-3">Coming</p>
                  <p class="sub-title pt-1">Soon</p>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="decoration">

    </div>
  </section>

  <footer id="contact">
    <div id="footer" class="container d-flex justify-content-between">
      <div class="contact">
        <h1 class="title">Contact</h1>
        <p class="description">Hello again, you can also follow my social media below. Let's get in touch</p>
      </div>
      <div class="contact">
        <div>
          <p class="description m-0"><span>Email</span></p>
          <p class="description">lrahmatullah044@gmail.com</p>
        </div>
        <div>
          <p class="description m-0"><span>Social media</span></p>
          <div class="social-media pt-2">
            <a href="https://www.facebook.com/latief.rahmatulah.3" target="_blank"><button><i class="fa fa-facebook"></i></button></a>
            <a href="https://www.instagram.com/latief_rpw/" target="_blank"><button><i class="fa fa-instagram"></i></button></a>
            <a href="https://twitter.com/latieflatizep" target="_blank"><button><i class="fa fa-twitter"></i></button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center d-flex justify-content-center">
      <p class="m-0">© 2021 Latizep. All rights reserved.</p>
    </div>
  </footer>
  <div class="d-flex align-items-center justify-content-center text-light position-fixed top-0 right-0 w-100 h-100" style="background-color: #000;z-index:1000" id="loading">
    <h3 id="loading-text">Loading</h3>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/TextPlugin.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>.assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    let url = document.URL;
    let dataUrl = url.split('?search=')
    if(dataUrl.length > 1){
      let dataUrl2 = dataUrl[1].split('#')
      window.history.pushState("", "", dataUrl[0] + "#" + dataUrl2[1]);
    }else{
      window.history.pushState("", "", dataUrl[0]);
    }    
  </script>
  <?php
  if (@$_SESSION['email'] != null) {
  ?>
    <!-- admin-menu -->
    <section class="position-fixed admin-menu">
      <div class="d-flex flex-column align-items-end">
        <?php
        $status = @$_GET['response'];
        $alert = "";
        if ($status == "success-update-data") {
          $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Update success</strong> success to update data!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
        } else if ($status == "failed-update-data") {
          $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Update failed</strong>, failed to update data!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        echo $alert;
        ?>
        <div class="dropdown">
          <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user pe-2"></i> Latizep
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add blog</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#setting"><i class="fa fa-cog"></i> Setting</a></li>
            <li><a class="dropdown-item text-danger" href="<?= base_url('dash/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </section>

    <div class="modal fade" id="setting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Setting user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="<?= base_url('dash/updateUser') ?>">
            <div class="modal-body">
              <div class="mb-3">
                <label for="title" class="col-form-label">Email</label>
                <input type="email" required class="form-control" id="title" name="email" value="<?= @$_SESSION['email'] ?>">
              </div>
              <div class="mb-3">
                <label for="title" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="title" name="password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="<?= base_url('dash/inputBlog') ?>">
            <div class="modal-body">
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="bg" class="col-form-label">Link background :</label>
                  <input type="text" required class="form-control" id="bg" name="bg">
                </div>
                <div class="mb-3 col-6">
                  <label for="secbg" class="col-form-label">Link another image :</label>
                  <input type="text" required class="form-control" id="secbg" name="secbg">
                </div>
              </div>
              <div class="mb-3">
                <label for="title" class="col-form-label">Title :</label>
                <input type="text" pattern="[A-Z a-z0-9]+" required class="form-control" id="title" name="title">
              </div>
              <div class="mb-3">
                <label for="description" class="col-form-label">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Categoty</label>
                <input class="form-control" required list="datalistOptions" id="category" name="category" placeholder="Type to search...">
                <datalist id="datalistOptions">
                  <?php
                  foreach ($category as $r) {
                    echo '<option value="' . $r['category'] . '">';
                  }
                  ?>
                </datalist>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
      var simplemde = new SimpleMDE({
        element: document.getElementById("description")
      });      
      let dataUrle = url.split('?response=')
      window.history.pushState("", "", dataUrle[0]);
    </script>
  <?php
  }else{}
  ?>
</body>

</html>