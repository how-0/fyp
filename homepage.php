<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Brain Burst</title>
    <meta name="viewport" content="width=device-width," initial-scale="1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<!--Top nav-->

    <header>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="category.php">Categories</a>
            <a href="quiz_rec.php">Daily Suggestion</a>
            <a href="daily_goal.php">Daily Goal</a>
			<a href="quizpage.php?q=1">Quiz</a>
			<a href="quizpage.php?q=2">Record</a>
			<a href="quizpage.php?q=3">Ranking</a>
			<a href="feedback.php">Feedback</a>
            <a href="setting.php">Setting</a>
            <a href="about.php">About Us</a>

          </div>
          
          <span style="font-size:30px;cursor:pointer;padding:10px;" onclick="openNav()">&#9776;</span>
          
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
          
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }

            function hideSidebar() {
                document.getElementById('openSideMenu').checked = false;
            }
        </script>

        <a href="homepage.php" class="logo">BRAIN BURST</a>

        <div class="dropdown" style="float:right;">
            <img src="pictures/user.png" class="user-pic">
            <div class="dropdown-content">
				<a href="setting.php">User Info</a>
                <a href="logout.php?q=quizpage.php">Log Out</a>
            </div>
        </div>
        

    </header>
	

    <!--Categories-->

    <div class="container">
		<span class="left"><a href="category.php"><c>Categories<c></a></span>
        <span class="right"><a href="category.php"><g>ShowMore+<g></a></span>
    </div>

	
    <div class="scroll-container">
        <div class="image-container">
            <a href='showcategory.php?category=5'>
            <img src="pictures/technology.png" width="200" height="200">
            <p><b>Technology</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="showcategory.php?category=4">
            <img src="pictures/history.png" width="200" height="200">
            <p><b>History</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="showcategory.php?category=3">
            <img src="pictures/geography.png" width="200" height="200">
            <p><b>Geography</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="showcategory.php?category=6">
            <img src="pictures/science.png" width="200" height="200">
            <p><b>Science</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="showcategory.php?category=7">
            <img src="pictures/sports.png" width="200" height="200">
            <p><b>Sports</b></p>
            </a>
        </div>
		<div class="image-container">
            <a href="showcategory.php?category=10">
            <img src="pictures/languages.png" width="200" height="200">
            <p><b>Languages</b></p>
            </a>
        </div>
		<div class="image-container">
            <a href="showcategory.php?category=8">
            <img src="pictures/movies.png" width="200" height="200">
            <p><b>Movies</b></p>
            </a>
        </div>
    </div>
    

    <!--Recommendation-->
    
    <h1 class="title" style="color:white;">Recommendation</h1>

    <div class="scroll-container">
        <div class="image-container">
            <a href="quizpage.php?q=quiz&step=2&e_id=5589222f16b93&n=1&t=2">
            <img src="pictures/C++.png" width="200" height="200">
            <p><b>C++ Coding</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="quizpage.php?q=quiz&step=2&e_id=66342b119ddd1&n=1&t=5">
            <img src="pictures/mathematics.png" width="200" height="200">
            <p><b>Simple Mathamatics</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="quizpage.php?q=quiz&step=2&e_id=66342da58d5d8&n=1&t=5">
            <img src="pictures/geography-map.png" width="200" height="200">
            <p><b>Geography</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="quizpage.php?q=quiz&step=2&e_id=663436597ca7b&n=1&t=3">
            <img src="pictures/science-1.png" width="200" height="200">
            <p><b>Biology</b></p>
            </a>
        </div>
        <div class="image-container">
            <a href="quizpage.php?q=quiz&step=2&e_id=66344214baeca&n=1&t=4">
            <img src="pictures/football.png" width="200" height="200">
            <p><b>Football</b></p>
            </a>
        </div>
    </div>




</body>
</html>