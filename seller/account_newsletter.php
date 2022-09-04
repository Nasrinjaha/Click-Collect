<?php include 'sellerauth.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .bg-secondary {
        background-color: #054b898a!important;
    }
    body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #a8addf33;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    }
    .update {
        padding-left:40%;
        
      }
</style>
</head>
<body>
<?php include 'navbar.php'?>
<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
                <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Account Newsletter</h2>
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>News Letters</h3>
                            <p>Do you want to get the latest product news and promotion offers then make it on otherwise off it.</p>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!--End Row-->

    </div>
</div> <!--End Account page div-->

</div> <!-- End content Area class -->


<?php include 'footer.php'?>
</body>
</html>