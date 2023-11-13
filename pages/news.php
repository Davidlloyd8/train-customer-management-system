<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="../images/TCMS 2.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>TCMS (NEWS)</title>
  <link rel="stylesheet" href="../css/news.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css" type="text/css">
  <link rel="stylesheet" href="../css/footer.css" type="text/css" />
</head>

<body>
  <?php require_once('../component/navbar.php'); ?>

  <main>
    <div class="top-wrapper">
      <h3 class="heading3">News</h3>
    </div>
    <div class="container" id="news-box">
      <div class="row" id="first_wrapper">
        <div class="col-md-4" id="first-box">
          <?php
          require_once('../php/connection.php');
          $str = "select * from newstb order by id desc";
          $cmd = mysqli_query($mycon, $str);
          $nr = mysqli_num_rows($cmd);
          if ($nr > 0) {
            while ($rd = mysqli_fetch_array($cmd)) {
              $title = $rd['title'];
              $news = $rd['news'];
              $image = $rd['image'];
              echo '<div class="img-container">
              <img src="' . $image . '" class="image" alt="An image" />
              </div>
          <div class="content">
            <h6 class="heading-p">
              ' . $title . '
            </h6>
            <p class="content-p">
              ' . $news . '
            </p>
            <p class="read">
              <i class="fa fa-arrow-right" id="right">
                <a class="read-more" href="more news.html">
                  <span class="more">Read More</span>
                </a></i>
            </p>
            </div>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </main>

  <?php require_once('../component/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>