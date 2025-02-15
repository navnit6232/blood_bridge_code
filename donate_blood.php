<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
      margin: 0; /* Remove default body margin */
    }

    .navbar {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .sticky-header {
      position: sticky;
      top: 0;
      z-index: 1020; /* Ensure the header stays above other content */
      background-color: white; /* Add background color to header */
    }

    #page-container {
      position: relative;
      min-height: 100vh; /* Use 100vh to cover the full viewport height */
      padding-bottom: 100px; /* Add padding to accommodate the footer */
    }

    #content-wrap {
      padding-top: 20px; /* Add small padding to prevent content from touching the header */
    }

    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
      color: #dc3545;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .form-container .form-control {
      border-radius: 5px;
      border: 1px solid #ddd;
      padding: 10px;
    }

    .form-container .form-control:focus {
      border-color: #2E8B57;
      box-shadow: 0 0 5px rgba(46, 139, 87, 0.5);
    }

    .form-container .btn-primary {
      background-color: #2E8B57;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .form-container .btn-primary:hover {
      background-color: #26734d;
    }

    .form-container .font-italic {
      font-weight: 500;
      color: #555;
    }

    .form-container textarea {
      resize: none;
    }

    .footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 80px; /* Set a fixed height for the footer */
    }

    .required-asterisk {
      color: #2E8B57;
    }
  </style>
</head>

<body>
  <!-- Sticky Header -->
  <header class="sticky-header">
    <?php
    $active = 'donate';
    include('head.php');
    ?>
  </header>

  <div id="page-container">
    <div class="container">
      <div id="content-wrap">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="form-container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="text-center">Donate Blood</h1>
                </div>
              </div>
              <form name="donor" action="savedata.php" method="post">
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Full Name<span class="required-asterisk">*</span></div>
                    <div><input type="text" name="fullname" class="form-control" required></div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Mobile Number<span class="required-asterisk">*</span></div>
                    <div><input type="text" name="mobileno" class="form-control" required></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Email Id</div>
                    <div><input type="email" name="emailid" class="form-control"></div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Age<span class="required-asterisk">*</span></div>
                    <div><input type="text" name="age" class="form-control" required></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Gender<span class="required-asterisk">*</span></div>
                    <div>
                      <select name="gender" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="font-italic">Blood Group<span class="required-asterisk">*</span></div>
                    <div>
                      <select name="blood" class="form-control" required>
                        <option value="" selected disabled>Select</option>
                        <?php
                        include 'conn.php';
                        $sql = "select * from blood";
                        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <option value="<?php echo $row['blood_id']; ?>"><?php echo $row['blood_group']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mb-4">
                    <div class="font-italic">Address<span class="required-asterisk">*</span></div>
                    <div><textarea class="form-control" name="address" required></textarea></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
  </div>
</body>

</html>