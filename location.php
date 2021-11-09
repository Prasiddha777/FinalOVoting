<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
      rel="stylesheet"
    /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="welcome.css">
    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet" href="location.css">
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
     </head>
  <body>
  <div>
    <input type="checkbox" id="sidebar-toggle">
    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
                <span>E-Voting System</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="candidates.php">
                        <span class="ti-face-smile"></span>
                        <span>Candidates</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="vote.php">
                        <span class="ti-agenda"></span>
                        <span>Vote Now</span>
                    </a>
                </li> -->
                <li>
                    <a href="location.php">
                        <span class="ti-folder"></span>
                        <span>Location</span>
                    </a>
                </li>
                <li>
                    <a href="Timesheet.php">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-book"></span>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-settings"></span>
                        <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <a href="logout.php" title="Logout" class="text-danger"><span class="ti-power-off"></span></a>
                <div></div>
            </div>
        </header>

    <div class="main-container">
      <h2>Choose your location where you want to vote?</h2>
      <div class="radio-buttons">
        <label class="custom-radio">
          <input type="radio" name="radio" onClick="window.location = 'Lekhnath.php';" />
          <span class="radio-btn"
            ><i class="las la-check"></i>
            <div class="hobbies-icon">
              <i class="las la-city"></i>
              <h3>Lekhnath</h3>
            </div>
          </span>
        </label>
        <label class="custom-radio">
          <input type="radio" name="radio" onClick="window.location = 'Pokhara.php';"  />
          <span class="radio-btn"
            ><i class="las la-check"></i>
            <div class="hobbies-icon">
              <i class="las la-city"></i>
              <h3>Pokhara</h3>
            </div>
          </span>
        </label>
        <label class="custom-radio">
          <input type="radio" name="radio" />
          <span class="radio-btn"
            ><i class="las la-check"></i>
            <div class="hobbies-icon">
              <i class="las la-city"></i>
              <h3>Kathmandu</h3>
            </div>
          </span>
        </label>
        <label class="custom-radio">
          <input type="radio" name="radio" />
          <span class="radio-btn"
            ><i class="las la-check"></i>
            <div class="hobbies-icon">
              <i class="las la-ellipsis-h"></i>
              <h3>Other</h3>
            </div>
          </span>
        </label>
      </div>
    </div>
</div>
  </body>
</html>
