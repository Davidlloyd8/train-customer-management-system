<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../images/TCMS 2.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>TCMS (NEWS)</title>
    <link rel="stylesheet" href="../css/news.css" type="text/css" />
    <link rel="stylesheet" href="../component/footer.css" type="text/css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../images/TCMS 2.png">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent"
          aria-controls="navbarContent"
          aria-expanded="false"
          aria-label="Toggle Navigation"
        >
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="ul">
            <li class="nav-item">
              <a
                class="nav-link"
                id="active"
                aria-controls="page"
                href="../pages/index.html"
                >HOME</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/about.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/list of train.html"
                >LIST OF TRAIN</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/news.html">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/contact.html">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">LOG IN</a>
            </li>

            <button
              type="button"
              class="btn"
              id="signup"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              SIGN UP
            </button>
          </ul>
        </div>
      </div>
    </nav>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="close"
            ></button>
          </div>
          <div class="modal-body">
            <input type="text" placeholder="Full Name" />
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-seconodary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </div>
    </div>

    <main>
      <div class="top-wrapper">
        <h3 class="heading3">News</h3>
      </div>
      <div class="container" id="news-box">
        <div class="row" id="first_wrapper">
          <div class="col-md-4" id="first-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">
                    <span class="more">Read More</span>
                  </a></i
                >
              </p>
            </div>
          </div>
          <div class="col-md-4" id="second-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">Read More</a>
                </i>
              </p>
            </div>
          </div>
          <div class="col-md-4" id="third-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">Read More</a>
                </i>
              </p>
            </div>
          </div>
        </div>

        <div class="row" id="second_wrapper">
          <div class="col-md-4" id="third-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">Read More</a></i
                >
              </p>
            </div>
          </div>
          <div class="col-md-4" id="fourth-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">Read More</a>
                </i>
              </p>
            </div>
          </div>
          <div class="col-md-4" id="fifth-box">
            <div class="img-container">
              <img src="../images/tech sis.webp" class="image" alt="An image" />
            </div>
            <div class="content">
              <h6 class="heading-p">
                Over ride the digital divide with additional
              </h6>
              <p class="content-p">
                Our Customers have been complaining about the customer service
                representatives saying some of them are so rude to ....
              </p>
              <p class="read">
                <i class="fa fa-arrow-right" id="right">
                  <a class="read-more" href="more news.html">Read More</a>
                </i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="footer">
      <div class="container p-3">
        <div class="row">
          <div class="col-lg-6">
            <h1>TCMS</h1>
          </div>
          <div class="col-lg-3">
            <ul class="footer-list">
              <li><a href="#">Information</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">List of Trains</a></li>
              <li><a href="#">News</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="footer-list">
              <li><a href="#">Contact</a></li>
              <li><a href="#">+234 816 2248 092</a></li>
              <li><a href="#">tcms@gmail.com</a></li>
            </ul>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-solid fa-envelope"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-x-twitter"></i>
          </div>
          <div class="col-lg-12">
            <p class="text-center mt-3">
              2023 &copy; TCMS <span class="vr"></span> All Right Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>