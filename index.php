<?php
/*
include 'connect.php';
if(isset($_POST['submit']))
{
    $error = 0;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactform(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
		if($conn->query($sql)===TRUE)
		{
			echo "";
        }
        else
        {
            echo "";
        }
}*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script>
$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 500);
            return false;
        }
    });
});
</script>
  </head>
  <body>


    <div class="container-fluid" id="main-div">
        <div class="container-fluid" id="opaque-div">
        <div class="fixed">
            <ul class="nav justify-content-center" id="nav-id home-sec">
                <li class="nav-item mt-2">
                    <a class="nav-link active color-dec" href="#opaque-div" id="home-id">Home</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link color-dec" href="#about-div">About Me</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link color-dec" href="#my-resume">Resume</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link color-dec" href="#contact-sec">Contact Me</a>
                </li>
            </ul>
           </div> 
            <div class="row col-lg-12" id="space-div1"></div>
            <div class="container">
                <div class="row pt-5">
                
                    <div class="col-md-12 m-auto text-center mt-5">
                        <h1 id="name-id">Geetanjali Korde</h1>
                        <p id="para-id">I am a Software Developer</p>
                    </div>
       
                </div>
            </div>
            <div class="row col-lg-12" id="space-div2"></div>    
        </div>
        <div class="container-fluid" id="about-div">
            <div class="row col-lg-12" id="space-div3"></div>
            <div class="container" id="about-sec">
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <h1 id="aboutme-id">ABOUT ME</h1>
                        <p id="onelineintro">Hello, I am an agile software developer</p>
                    </div>
                    <div class="col-sm"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/geet.jpg" class="card-img-top" alt="imageofme">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><h5>Name: Geetanjali Korde</h5></li>
                                <li><h5>Website: Coming Soon </h5></li>
                                
                                <li><h5>City: Indore</h5></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><h5>Age: 21</h5></li>
                                <li><h5>Degree: Bachelor</h5></li>
                                <li><h5>Email: geetkorde@gmail.com</h5></li>
                                <li><h5>Freelance: Available</h5></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress my-4">
                                <div class="progress-bar progress-bar" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">C/C++</div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Java</div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar progress-bar bg-info" role="progressbar" style="width: 89%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Python</div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">JavaScript</div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">SQL</div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card mt-4" style="width: 12rem;">
                        <img src="images/happy.png" class="card-img-top" alt="happy">
                        <div class="card-body card1-body rounded-circle">
                          <p class="card-text card1-text">My Clients: 4</p>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card mt-4" style="width: 12rem;">
                        <img src="images/website.png" class="card-img-top" alt="projects">
                        <div class="card-body card1-body rounded-circle">
                          <p class="card-text card1-text">My Projects: 4</p>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card mt-4" style="width: 12rem;">
                        <img src="images/years.png" class="card-img-top" alt="years">
                        <div class="card-body card1-body rounded-circle">
                          <p class="card-text card1-text">My Experience: 3yr</p>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card mt-4" style="width: 12rem;">
                        <img src="images/award.png" class="card-img-top" alt="awards">
                        <div class="card-body card1-body rounded-circle">
                          <p class="card-text card1-text">My Awards: 5</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>   
            <div class="container-fluid" id="my-resume">
                <div class="row col-lg-12" id="space-div3"></div>
                <div class="container" id="resume-sec">
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h1 id="aboutme-id">MY RESUME</h1>
                        </div>
                        <div class="col-sm"></div>
                    </div>
                    <div class="row col-md-12">
                        <div class="container">
                            <p id="onelineintro">To obtain challenging and rewarding organisation where I can enact my skills and enhance my knowlegde</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <div class="card main-card" style="width: 18rem;">
                                    <div class="card-body card2-body">
                                      <h5 class="card-title summary-title">Summary</h5>
                                      <h6 class="summ-name">Geetanjali Korde</h6>
                                      <p class="card-text summary">Creative and innovtive full stack developer.Recently working on Django prject.</p>
                                      <ul class="list-cont">
                                          <li class="list mt-2">geetkorde@gmail.com</li>
                                         
                                      </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <div class="card main-card" style="width: 18rem;">
                                    <div class="card-body card2-body">
                                      <h5 class="card-title summary-title">Education</h5>
                                      <h6 class="summ-name">B.Tech. in Computer Science Engineering</h6>
                                      <h6 class="yeartill">2017-present</h6>
                                      <p class="card-text summary">Currently Pursuing this degree from Sushila Devi Bansal College,Indore(M.P.)</p>
                                      <ul class="list-cont">
                                          <li class="list mt-2">Aggregate SGPA : 8.5</li>
                                          <li class="list mt-2">Aggregate CGPA : 8.2</li>
                                      </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <div class="card main-card" style="width: 18rem;">
                                    <div class="card-body card2-body">
                                      <h6 class="summ-name">Higher Education</h6>
                                      <h6 class="yeartill">2015-2017</h6>
                                      <p class="card-text summary">Completed from St. Mary's Convent,Mhow,Indore(M.P.)</p>
                                      <ul class="list-cont">
                                          <li class="list mt-2">With 81%</li>
                                      </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <div class="card main-card" style="width: 18rem;">
                                    <div class="card-body card2-body">
                                      <h6 class="summ-name">Secondary Education</h6>
                                      <h6 class="yeartill">2013-2015</h6>
                                      <p class="card-text summary">Completed from St. Mary's Convent,Mhow,Indore(M.P.)</p>
                                      <ul class="list-cont">
                                          <li class="list mt-2">With 8.8 CGPA</li>
                                      </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <div class="card main-card" style="width: 18rem;">
                                    <div class="card-body card2-body">
                                        <h5 class="card-title summary-title">Certifications In</h5>
                                        <h6 class="summ-name">C/C++</h6>
                                        <h6 class="yeartill">2018-present</h6>
                                        <h6 class="from">Elite Classes,Mhow,Indore</h6>
                                        <ul class="list-cont">
                                            <li class="list mt-2">Successfully completed this course.</li>
                                            <li class="list mt-2">In duration of 4 Months</li>
                                        </ul>
                                        <h6 class="summ-name">Java Core</h6>
                                        <h6 class="yeartill">2019-present</h6>
                                        <h6 class="from">Elite Classes,Mhow,Indore</h6>
                                        <ul class="list-cont">
                                            <li class="list mt-2">Successfully completed this course.</li>
                                            <li class="list mt-2">In duration of 3 Months</li>
                                        </ul>
                                        <h6 class="summ-name">Python</h6>
                                        <h6 class="yeartill">2019-present</h6>
                                        <h6 class="from">Online Classes - Udemy</h6>
                                        <ul class="list-cont">
                                            <li class="list mt-2">Successfully completed this course.</li>
                                            <li class="list mt-2">In duration of 2 Months</li>
                                        </ul>
                                        <h6 class="summ-name">JavaScript</h6>
                                        <h6 class="yeartill">2019-present</h6>
                                        <h6 class="from">Online Classes - Udemy</h6>
                                        <ul class="list-cont">
                                            <li class="list mt-2">Successfully completed this course.</li>
                                            <li class="list mt-2">In duration of 2 Months</li>
                                        </ul>  
                                        <h6 class="summ-name">SQL</h6>
                                        <h6 class="yeartill">2017-present</h6>
                                        <h6 class="from">Online and Offline Classes both</h6>
                                        <ul class="list-cont">
                                            <li class="list mt-2">Successfully completed this course.</li>
                                            <li class="list mt-2">In duration of 3 Months</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="about-div">
                <div class="row col-lg-12" id="space-div3"></div>
                <div class="container" id="contact-sec">
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h1 id="aboutme-id">CONTACT ME</h1>
                        </div>
                        <div class="col-sm"></div>
                        <div class="row col-md-12">
                            <div class="container">
                                <p id="onelineintro">Feel free to contact me for any kind of service or product</p>
                            </div>
                        </div>
                        <div class="container">
                            <form class = "contact-form"  method="post">
                                <div class="row">
                                    <div class="col mt-4">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                                    </div>
                                    <div class="col mt-4">
                                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                                    </div>
                               </div>
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject" name="subject">
                                </div>
                                <div class="form-group my-4">
                                    <input type="text" row="3" class="form-control" id="inputAddress" placeholder="Message" name="message">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm"></div>
                                        <div class="col-sm">
                                            <div class="container">
                                                    <div class="col-md-5 m-auto pt-3 pb-3">
                                            <input value="Send Message" type="submit" name="submit" class="btn btn-primary">

                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-sm"></div>
                                    </div>
                                </div>
                            </form>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="container mt-3 mb-1">
                <div class="row">
                    
                    <div class="col-md-12 text-center">
                        &copy;Copyright <strong>Geetanjali.</strong> All Rights Reserved.Designed By Geetanjali
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>