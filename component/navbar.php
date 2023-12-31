<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../images/TCMS 2.png" />
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
          <a class="nav-link" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LIST OF TRAIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/news.php">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/contact.php">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LOG IN</a>
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
