<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />

    <!-- Optional theme -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous"
    />

    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header">
      <a href="">Admin Dashboard</a>
      <div class="logout">
        <a href="logout.php" class="btn btn-primary">logout</a>
      </div>
    </header>
    <aside>
      <ul>
        <li>
          <a href="open tickets.php"  class="btn btn-primary">open tickets</a>
        </li>
        <li>
          <a href="users.php">users</a>
        </li>
        <li>
          <a href="pending tickets.php">pending tickets</a>
        </li>
        <li>
          <a href="solved tickets.php">solved tickets</a>
        </li>
        <li>
          <a href="assign tickets.php">assign tickets</a>
        </li>
        <li>
          <a href="closed tickets.php">closed tickets</a>
        </li>
        <li>
          <a href=" ticket details.php">ticket details</a>
        </li
      </ul>
    </aside>
    <div class="content">
      <h1>WELCOME TO THE ADMIN PANEL</h1>
      <P>
        We are honoured to have you as our agents. Our work as agents is to
        ensure that our customers are satisfied and in time. Our main role is helping our clients with their technical issues and ensuring that they are satisfied. 
        Tasks assigned to us that are above our knowledge we are advised to channel to our collegues to ensure time discipline and promote customer positive feedback.</P
        <section class="team">
          <div class="container">
              <h2>Our team</h2>
              <div class="row">
   <div class="col-md-3 profile text-center">
      <div class="img-box">
        <img src="images/img 2.jpg" class="img-responsive">
        <ul>
      <a href="#"><li><i class="fa fa-facebook"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-twitter"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-linked in"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-instagram"></i></li></ul></a>
        </ul>
</div>
<h3>Kiikii Kamundu</h3>
<h4>SOftware engineer</h4>
<P>Channel your software queries for easy solving</P>
    </div>
    <div class="col-md-3 profile text-center">
      <div class="img-box">
        <img src="images/img 3.jpg" class="img-responsive">
        <ul>
      <a href="#"><li><i class="fa fa-facebook"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-twitter"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-linked in"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-instagram"></i></li></ul></a>
        </ul>
</div>
<h3>Antony Ogutu</h3>
<h4>Web administrator</h4>
<P>Channel your software queries for easy solving</P>
    </div>
    <div class="col-md-3 profile text-center">
      <div class="img-box">
        <img src="images/img 4.jpg" class="img-responsive">
        <ul>
      <a href="#"><li><i class="fa fa-facebook"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-twitter"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-linked in"></i></li></ul></a>
      <a href="#"><li><i class="fa fa-instagram"></i></li></ul></a>
        </ul>
</div>
<h3>Elizabeth Otieno</h3>
<h4>Database administrator</h4>
<P>Channel your software queries for easy solving</P>
    </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
          <style>
              body {
                  display: flex;
                  flex-direction: column;
                  min-height: 100vh;
              }
      
              .content {
                  flex: 1;
                  text-align: center;
              }
      
              .footer {
                  background-color: #125f1f;
                  padding: 10px 0;
                  text-align: center;
              }
          </style>
      
        <p>&copy; 2024 admin dashboard. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
