<?php
// Include the database connection file
@include 'tracking_db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $course_id = $_POST['course_id'];
    $date_of_week = $_POST['date_of_week'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $room = $_POST['room'];

    // SQL query to insert schedule data into the database
    $sql = "INSERT INTO schedule (course_id, `date of week`, `start time`, `end time`, room) 
            VALUES ('$course_id', '$date_of_week', '$start_time', '$end_time', '$room')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Schedule added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="addsched.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CSD Faculty</title>
  </head>
<body>
<nav>  

<div class="wrapper">
  <nav class="navbar">
    <div class="navbar_left">
      <div class="nav__logo">
        <a href="#"><img src="imahe/FAST.png" alt="logo" /></a>
      </div>
    </div>
    <div class="navbar_center_text">
      <a href="#">Home</a>
      <a href="addsched.php">Add Schedule</a>
      <a href="schedule.php">View schedule</a>
    </div>

    <div class="navbar_right">
      <div class="notifications">
        <div class="icon_wrap"><i class="far fa-bell"></i></div>
        
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="mcd success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="pizzahut failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="kfc success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li> 
                <li class="show_all">
                    <p class="link">Show All Activities</p>
                </li> 
            </ul>
        </div>
        
      </div>
      <div class="profile">
        <div class="icon_wrap">
          <img src="imahe/profile/1.jpeg" alt="profile_pic">
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn">My Account</div>
            </li>
            <li><a class="address" href="#"><span class="picon"><i class="fas fa-map-marker"></i></span>Address</a></li>
            <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    </nav>
    
    <header class="itloog__container header__container" id="homealone">
      <div class="header__content">
        <h1>Computer Studies<br><h1 class="dp">Department</h1></h1>
    
        <form action="" class="search-bar">
         <input type="text" placeholder="search name..">
         <button type="submit" i class="ri-search-line"></i></button>
        </form> 

      </div>
      <div class="header__image">
        <img src="imahe/torch.png" alt="header" />
      </div>
    </header>

    <div class="bg">
    <div class="form">
    <h2>Add Schedule</h2>
    <form action="add_schedule.php" method="post">
        <label for="course_id">Course ID:</label>
        <input type="text" id="course_id" name="course_id"><br><br>

        <label for="day_of_week">Day of Week:</label>
        <input type="text" id="date_of_week" name="day_of_week"><br><br>

        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time"><br><br>

        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time"><br><br>

        <label for="room">Room:</label>
        <input type="text" id="room" name="room"><br><br>

        <input type="submit" value="Submit">
    </form>
    <div>
</div>
</body>
</html>
