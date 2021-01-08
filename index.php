<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
		<meta charset="UTF-08">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<!--Boostrap 4 cdn link -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="progresscircle.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
		<style type="text/css">
			*{
				margin: 0;
				padding:0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}
			/*ul li:hover{
				background: #F1F1F1;
				color:black !important;
				transition: 0.3s ease;
			}*/
			header{
				background: #0B0C29;
			}
			nav h1{
				font-size: 2rem !important;
				text-shadow: 2px 2px #0B0C29;
				
			}
			 .customimg{
			 	height: 60vh;
			 }
			 .social:hover{
			 	transform:translate(2px,2px);
			 }
			
			 .customrow a{
			 	border-radius: 15px !important;
			 }
			 .customrow{
			 	background: #0B0C29;
			 }
			.aboutme{
				border-radius:81% 19% 55% 45% / 37% 55% 45% 63% ;
				background:#0B0C29; 
				height: 50vh;
				width: 35vw;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			#navtab a:focus{
				background: #0B0C29 !important;
				color:white !important;
				opacity: 0.8;

			}
			.customodal{
				background: #0B0C29 !important;
			}
			#navtab ul li a{
				font-size: 20px;
			}
			@media screen and (max-width: 500px){
				.customrow h3{
					font-size:2.5rem;

				}
				.aboutme{
					width:40vw;
					height: 40vh;
				}
				#contactbtn{
					margin-bottom:10px !important;
				}

			}
			@media screen and (max-width: 400px){
				#navtab h2{
					font-size:3.0rem;
				}
				#contact h2{
					font-size: 3.0rem;
				}
				#aboutme h2{
					font-size: 3.0rem;
				}
				#navtab ul li a{
					font-size:1.0rem;
				}
				/*.social{
					display: flex;
					justify-content: space-between;

				}*/


			}
			@media screen and (max-width:340px){
				#navtab ul li a{
					font-size: 0.8rem;
					font-weight: 900;
				}
            
			}
			@media screen and (min-width: 570px) and (max-width: 730px){
				#navtab ul li a{
					font-size: 1.8rem;
					font-weight: 900;
				}

			}
			@media screen and (max-width: 450px){
				.card{
					font-size: 1rem !important;
				}
				.card-title{
					font-size: 1.2rem !important;
				}
				.card button{
					font-size: 0.8rem;
				}


			}
			@media screen and (max-width: 340px){
				.card{
					font-size: 0.8rem !important;
				}
				.card-title{
					font-size: 1.0rem !important;
				}
				.card button{
					font-size: 0.8rem;
				}
			}


			
			

		</style>

</head>
<body>
	<header>
	<div class="container-fluid">
		<div class="row ">
		<nav class="navbar navbar-expand-sm  navbar-dark w-100">
			<h1 class="navbar-brand text-white font-weight-normal display-4" style="font-family: 'Redressed', cursive;">PortFolio</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colnavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="colnavbar">
				<ul class="navbar-nav ml-auto text-center">
					<li class="navbar-item mx-2 p-2">
						<a href="#aboutme" class="navbar-link text-white text-decoration-none">ABOUT</a>
					</li>
					<li class="navbar-item  mx-2 p-2">
						<a href="#navtab" class="navbar-link text-white text-decoration-none">WORK</a>
					</li>
					<li class="navbar-item  mx-2 p-2">
						<a href="#navtab" class="navbar-link text-white text-decoration-none">SKILLS</a>
					</li>
					<li class="navbar-item  mx-2 p-2">
						<a href="#contact" class="navbar-link text-white text-decoration-none">CONTACT</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>
	<div class="row customrow pb-2 ">
		<div class="col-6 align-self-center  pb-2 ">
			<div class="text-center">
			<h6 class="text-white display-5 font-weight-normal">Hello,I am</h6>
			<h3 class="display-4 text-white font-weight-bold">Himanshu Lulla</h3>
			<h6 class="display-5 text-white font-weight-normal mb-3">Originality simplified and a full stack Developer</h6>
			<h6 class="display-5 text-white font-weight-normal">Find me On :</h6>
			<div class="d-flex mb-3  justify-content-around justify-content-sm-center">
				<div class="social">
					<a href="#" class="text-decoration-none text-white  mx-1 mx-sm-2"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
				</div>
				<div class="social">
					<a href="#" class="text-decoration-none text-white  mx-1 mx-sm-2"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
				</div>
				<div class="social">
					<a href="#" class="text-decoration-none text-white  mx-1 mx-sm-2"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
				</div>
				<div class="social">
					<a href="#" class="text-decoration-none text-white  mx-1 mx-sm-2"><i class="fa fa-git fa-2x" aria-hidden="true"></i></a>
				</div>
			</div>
			<a href="#contact" class="btn btn-danger text-white   px-sm-1  px-md-3 mr-1" id="contactbtn">Contact Me</a>
			<a href="#navtab" class="btn btn-info text-white px-sm-1 px-md-3" id="projectsbtn">My Projects</a>

			</div>
			

		</div>
		<div class="col-6 col-md-5 align-self-start   d-flex justify-content-end ">
			<img src="https://joeschmoe.io/api/v1/himanshu" class="img-fluid   customimg" alt="This is my image">
		</div>
	</div>	
</div>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0B0C29" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,122.7C384,96,480,96,576,122.7C672,149,768,203,864,213.3C960,224,1056,192,1152,192C1248,192,1344,224,1392,240L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<div class="container-fluid mb-5" id="aboutme">
	
	<div class="row" >

		<div class="col-12 col-md-6 d-flex justify-content-center align-items-center justify-content-md-start align-items-md-start pt-md-4  " >
			<div class="aboutme shadow-lg">
                 <img src="img/avatar.png" class="img-fluid">
		    </div>
	</div>
	<div class="col-12 col-md-6 text-center ">
		<h2 class="display-3 text-dark font-weight-normal mb-2 mt-3 mt-md-0">Uniquely I....</h2>
		<p class="lead text-dark p-2">I'm Himanshu Lulla a Full Stack Developer from Ujjain(M.P). Working to make it different with a mint of creativity. A simple yet efficient code is its own best documentation. I'm passionate about coding as it is a usable art. I always strive to write elegant and effective code whether it be HTML,CSS,AJAX or Jquery. I enjoy taking complex problems and turning them into simple and  beautiful interface designs. When i'm not coding or debugging where my pixels position gone wrong you will find me in the gym lifting weights or on the field smashing the tennis ball.  </p>
</div>
</div>
</div>
<div class="container-fluid mt-5" id="navtab">
	<h2 class="display-3 font-weight-bold text-center mb-5 mt-md-3">MY SKILLS</h2>
	<div class="row">
		<div class="col-12">
<ul class="nav nav-tabs justify-content-between  shadow-md">
	<li class="nav-item">
		<a class="nav-link active text-capitalize text-dark text-center font-weight-bold" data-toggle="tab" href="#webd">Web-developement</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-capitalize text-dark text-center font-weight-bold" data-toggle="tab" href="#prog" >Programming</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-capitalize text-dark text-center font-weight-bold" id="mycertificatestab" data-toggle="tab" href="#certi">My Certifications</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-capitalize text-dark text-center font-weight-bold" data-toggle="tab" href="#acad">My Projects</a>
	</li>
</ul>
<!-- Tab panes -->
<div class="tab-content " id="dynamictabs">
	<div class="tab-pane container active" id="webd">
		<div class="row mt-3 " >
			<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="80" >HTML</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="70" >CSS</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="60" >JS</div>
				</div>
			</div>
				<div class="col-md-4 col-6 mb-5  ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="70">JQUERY</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="70" >AJAX</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="80" >BS-4</div>
				</div>
			</div>
				<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="70" >PHP</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="80" >MYSQL</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="40" >GIT</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane container fade" id="prog">
		
		<div class="row mt-3 " >
			<div class="col-md-4 col-6 mb-5  ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="80" >PYTHON</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="60" >JS</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="70" >PHP</div>
				</div>
			</div>
				<div class="col-md-4 col-6 mb-5  ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="50">C</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="30" >C++</div>
				</div>
			</div>
			<div class="col-md-4 col-6 mb-5">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart " data-percentage="60">DS</div>
				</div>
			</div>
				<div class="col-md-4 col-6 mb-5 ">
				<div class="single-skill justify-content-center d-flex">
					<div class="circlechart" data-percentage="80" >MYSQL</div>
				</div>
			</div>		
		</div>
	</div>
	<div class="tab-pane container fade" id="certi">
		<div class="row mt-3" id="mycertificates">
			<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/pythonlogo.png" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">Python Certificate</h4>
			<p class="card-text">I have acquired the Python skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal1">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal1">
				<div class="modal-dialog ">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold">Python Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/python.jpg" alt="this is Python Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg">
		<img class="card-img-top" src="img/html5logo.png" alt="Card image" class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">HTML 5 Certificate</h4>
			<p class="card-text">I have acquired the HTML5 skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal2">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal2">
				<div class="modal-dialog">
					<div class="modal-content  customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold">HTML 5 Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/html.jpg" alt="this is html 5 Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/css3logo.png" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">CSS 3 Certificate</h4>
			<p class="card-text">I have acquired the CSS3 skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal3">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal3">
				<div class="modal-dialog">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold ">CSS 3 Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/css.jpg" alt="this is css 3 Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/jslogo.png" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">JavaScript Certificate</h4>
			<p class="card-text">I have acquired the JavaScript skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal4">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal4">
				<div class="modal-dialog">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold  ">JavaScript Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/js.jpg" alt="this is js Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/bslogo.png" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">BootStrap 4 Certificate</h4>
			<p class="card-text">I have acquired the Bootstrap-4 skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal5">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal5">
				<div class="modal-dialog">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold">BootStrap 4 Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/bs.jpg" alt="this is BS-4 Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/phplogo.png" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">PHP Certificate</h4>
			<p class="card-text">I have acquired the PHP skills</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal5">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal5">
				<div class="modal-dialog">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold">PHP Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/html.jpg" alt="this is PHP Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-6 mb-5">
	<div class="card shadow-lg" >
		<img class="card-img-top" src="img/hacktober.jpg" alt="Card image"  class="img-fluid">
		<div class="card-body">
			<h4 class="card-title font-weight-bold">Hacktober Fest Certificate</h4>
			<p class="card-text">I have successfully completed hacktober fest challenge.</p>
			<button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal6">
			View-Certificate
			</button>
			<!-- The Modal -->
			<div class="modal" id="myModal6">
				<div class="modal-dialog">
					<div class="modal-content customodal">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title text-white text-center font-weight-bold">PHP Certificate</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<img src="img/hacktober.jpg" alt="this is PHP Certificate pic" class="img-fluid">
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		</div>

	</div>
<div class="tab-pane container fade" id="acad">
<div class="row mt-3">
<div class="col-md-4 col-6 mb-5">
<div class="card shadow-lg" >
	<img class="card-img-top" src="img/p2.jpg" alt="Card image"  class="img-fluid">
	<div class="card-body">
		<h4 class="card-title font-weight-bold">Student Feedback System</h4>
		<p class="card-text">I have developed Student Feedback System for my university</p>
		<a href="#" type="button" class="btn btn-primary stretched-link">
		See Project
		</a>
	</div>
</div>
 </div>
 <div class="col-md-4 col-6 mb-5">
<div class="card shadow-lg" >
	<img class="card-img-top" src="img/portfolio.jpg" alt="Card image"  class="img-fluid">
	<div class="card-body">
		<h4 class="card-title font-weight-bold">Personal Portfolio</h4>
		<p class="card-text">I have developed Student Feedback System for my university</p>
		<a href="#" type="button" class="btn btn-primary stretched-link">
		See Project
		</a>
	</div>
</div>
 </div>
 <div class="col-md-4 col-6 mb-5">
<div class="card shadow-lg" >
	<img class="card-img-top" src="img/ecommerce.png" alt="Card image"  class="img-fluid">
	<div class="card-body">
		<h4 class="card-title font-weight-bold">E-commerce Frontend</h4>
		<p class="card-text">I have developed Student Feedback System for my university</p>
		<a href="#" type="button" class="btn btn-primary stretched-link">
		See Project
		</a>
	</div>
</div>
 </div>



		
	    </div>

</div>
		</div>
	</div>
	</div>
</div>
<div class="container-fluid mt-5" id="contact">
	<h2 class="display-3 text-center font-weight-bold mb-2 mb-md-5">Let's Get In Touch...</h2>
	<div class="row">
		<div class="col-12 col-lg-5 d-flex align-items-center">
			<img src="img/meet1.png" class="img-fluid" alt="This is image of a hand">
		</div>
		<div class="col-lg-7 col-12  p-5  shadow-lg">
			<h4 class="display-5 font-weight-normal text-center mb-5">Let's discuss about our next project</h4>
			<form>
				<div class="input-group mb-4">
			<div class="input-group-prepend">
			<label for="name"><img src="https://img.icons8.com/officel/40/000000/change-user-male.png"/ class="img-fluid pr-3"></label>
		    </div>
			<input type="text" class="form-control p-2 w-75" placeholder="Your name here" name="name" id="name" required>
		    </div>
		    <div class="input-group mb-4">
		    	<div class="input-group-prepend">
			        <label for="email"><img src="https://img.icons8.com/fluent/40/000000/email.png" class="img-fluid pr-3"></label>
		         </div>
			<input type="email" class="form-control p-2 w-75" placeholder="Your Email Here" name="email" id="email"  required>
		    </div>
		    <div class="input-group mb-4">
		    	<div class="input-group-prepend">
			        <label for="phoneno"><img src="https://img.icons8.com/dusk/38/000000/phone.png" class="img-fluid pr-3"></label>
		        </div>
			<input type="text" class="form-control p-2 w-75" placeholder="Your phone-no here" name="phoneno" id="phoneno"  required>
		    </div>
		        <div class="input-group mb-4">
		    	<div class="input-group-prepend">
			        <label for="comments"><img src="https://img.icons8.com/fluent/40/000000/comments.png" class="img-fluid pr-3"></label>
		        </div>
			<textarea class="form-control p-2 w-75" placeholder="Your comments here" name="comments" id="comments" ></textarea>
		    </div>
		    <button class="btn btn-primary"  id="btnsubmit">Submit</button>
			</form>
		</div>
	</div>
</div>
<footer class="mt-5">
	<h5 class="display-6 text-center">&copy;Created by Herobaby007</h5>
</footer>


	


<script src="test.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$(function(){
			$('.circlechart').circlechart();
		});
	$("#mycertificatestab").click(function(){
			$('#mycertificates').fadeIn(1000);
	});
	$('#btnsubmit').click(function(){
		var name=$('#name').val();
		var email=$('#email').val();
		var phoneno=$('#phoneno').val();
		var comments=$('#comments').val();
		if(name!="" && email!="" && phoneno!=""){
			$.ajax({
				url:'portfolioback.php',
				type:'post',
				data:{
					name:name,
					email:email,
					phoneno:phoneno,
					comments:comments,
					
				}

			});
	}


		});

	});

			
	
</script>
	
</body>
</html>