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
    <title>TCMS (CONTACT US)</title>
    <link rel="stylesheet" href="../css/contact.css" type="text/css" />
    <link rel="stylesheet" href="../css/navbar.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css" />
  </head>
  <body>     
    <?php require_once('../component/navbar.php'); ?>

    <main>
      <div class="top-wrapper">
        <h1 class="heading1">CONTACT US</h1>
        <p class="contact-p">Let's have a discussion</p>
      </div>

      <section class="main-content">
        <div class="inner-content-box">
          <div class="contact-details-box">
            <div class="f-box">
              <i class="fa fa-phone"></i>
              <div class="details">
                <p class="tel">
                  Phone Number <br />
                  <span>08162248092</span>
                </p>
              </div>
            </div>

            <div class="s-box">
              <i class="fa fa-envelope"></i>
              <div class="details">
                Email Address <br />
                <a class="e-mail" href="mailto:davidlloyd@gmail.com">
                  davidlloyd@gmail.com
                </a>
              </div>
            </div>

            <div class="t-box">
              <i class="fa fa-location"></i>
              <div class="details">
                <p class="tel">
                  Location <br />
                  <span>San Francisco, California.</span>
                </p>
              </div>
            </div>
          </div>

          <div class="form-box">
            <h3 class="heading3">Send Message</h3>
            <div class="container" id="form-container">
              <form class="row g-3" method="post">
                <div class="col-md-6">
                  <label for="name" class="form-label"></label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Your Name"
                  />
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label"></label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email Address"
                  />
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label"></label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Phone Number"
                  />
                </div>
                <div class="col-md-6">
                  <label for="subject" class="form-label"></label>
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Subject"
                  />
                </div>
                <div class="col-md-12" id="col">
                  <label for="textarea" class="form-label"></label>
                  <textarea
                    rows="5"
                    class="form-control"
                    placeholder="Your Message ..."
                    id="textarea"
                    name="message"
                  ></textarea>
                </div>
                <input
                  type="submit"
                  class="submit-btn"
                  name="btns"
                  id="btns"
                  value="Send Message"
                />
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php require_once('../component/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
