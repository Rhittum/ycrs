  <header class="header-section box">
    <div class="header-top">
      <div class="row m-0">
        <div class="col-md-6 d-none d-md-block p-0">
          <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
  foreach($results as $row)
  {               ?>
          <div class="header-info">
          <i class="bi bi-geo-alt"></i>
            <p><?php  echo htmlentities($row->PageDescription);?></p>
          </div>
          <div class="header-info">
            <i class="material-icons">phone</i>
            <p><?php  echo htmlentities($row->MobileNumber);?></p>
          </div>
        </div>
        <div class="col-md-6 text-left text-md-right p-0">
          <div class="header-info d-none d-md-inline-flex">
            <i class="material-icons">alarm_on</i>
            <p><?php  echo htmlentities($row->OpenningTime);?></p>
          </div><?php $cnt=$cnt+1;
  }
} ?>
          <div class="header-info">
            <i class="material-icons">envelope</i>
         <p><?php  echo htmlentities($row->Email);?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom box-effect">
      <a href="index.php" class="site-logo">
        <h4 style="color: white"><strong>Yoga Classes</strong></h4>
      </a>
    
      <div class="container ">
        <ul class="main-menu">
          <li><a href="index.php" class="active" style="text-decoration: none;">Home</a></li>
          <li><a href="about.php" class="active" style="text-decoration: none;">About</a></li>
          <li><a href="classes.php" style="text-decoration: none;">Classes</a>
                     </li>
       
          <li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
          <li><a href="admin/login.php" style="text-decoration: none;">Admin</a></li>
        </ul>
      </div>
    </div>
  </header>