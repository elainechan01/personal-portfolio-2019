<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"> </script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:wght@900&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1100px)" href="index-m.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1099px)" href="index-s.css">
	<script type="text/javascript" src="portfolio.js"></script>
	

	
</head>
<body>

	<div class="container">
		<div class="navbar">
			<div class="col-md-12" id="user">
				<a href="#" id="userLink">Elaine Chan Yun Ru</a>
			</div>
			
		</div>
		<div class="sideNav">
			<img src="images/add(24x24)@1x.png" id="navButton">
			<nav class="nav">
				<ul>
					<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#aboutMe">About Me</a></li>
					<li class="nav-item"><a class="nav-link" href="#projectList">Project List</a></li>
					<li class="nav-item"><a class="nav-link" href="#contactMe">Contact Me</a></li>
				</ul>
			</nav>
			<div id="closeMenu">
				<img src="images/multiply(24x24)@1x.png" id="closeNavButton">
			</div>
			
		</div>
		<div id="home">
		<div class="intro">
			<div class="introParagraph">
				<h1>Hi there!</h1>
				<h2>My name is <span id="firstName">Elaine.</span></h2>
			</div>
			<div class="introAnimation">
				<img src="images/Abstract(blue+pink).png" id="abs_bp">
				<img src="images/Abstract(blue+purple).png" id="abs_bpu">
				<div id="whiteboard">
					<h1>WELCOME</h1>
					<h1>WELCOME</h1>
					<h1>WELCOME</h1>
				</div>

			</div>
			
		</div>
		</div>
		<div id="aboutMe">

			<h1 id="aboutMeTitle">About Me</h1>
			<div id="aboutMeDiv"></div>
			<ul class="aboutMe_sections">
				<li id="Goals">Goals</li>
				<li id="Education">Education</li>
				<li id="Hobbies">Hobbies</li>
			</ul>
			<div class="about-container swiper-container">
				<div class="about-col swiper-wrapper">
					<div class="swiper-slide">
						<h1>Goals</h1>
						<p>My main passion is to create. This being said, this was the reason why I dove into the field of Computer Science in the first place - due to its vast and unlimited freedom to explore and create.<br><br>

						I wanted to be part of something that would not box my creative freedom, instead induces me to innovate and achieve revolutionary heights. Therefore, I am constantly in search of opportunities where I can put my Computer Science knowledge into good use, that will be beneficial to the community. I am excited and enthusiastic about where my passion can take me to, and I am looking forward to the things I can contribute to.</p>
					</div>
					<div class="swiper-slide">
						<h1>Education</h1>
						<p>I'm currently a Sophomore at Western Michigan University, pursuing a Bachelor's Degree in Computer Science. My expected year of graduation is August 2023.<br><br>
						List of courses that I have taken/am taking:
						</p>
						<ul id="education-li">
							<li>Direct Encounter with the Arts</li>
							<li>Intro to Graphic and Printing Sciences</li>
							<li>Algebra II</li>
							<li>Data Analysis Using R</li>
							<li>Business Enterprise</li>
							<li>Computer Science I</li>
							<li>Intro to Web Technologies</li>
							<li>Technical Communication</li>
							<li>Calculus I</li>
							<li>General Chemistry with Lab</li>
							<li>Public Speaking</li>
							<li>Computer Science II</li>
							<li>Foundations in Computer Science</li>
							<li>Calculus II</li>
							<li>Ethics in Engineering & Tech</li>
						</ul>
					</div>
					<div class="swiper-slide">
						<h1>Hobbies</h1>
						<p>As I've said before, my main passion is to create. Hence, this is the main reason why I connect to dance the most.
							<br><br>
							As much of a mere past time as it may seem, dance is a safe space for me to showcase my vulnerability. With dance, I am able to learn to be comfortable with the things I am most wary of. In other words, it has been the support in my life, to continue to strive for the better. 
							<br><br>
							With dance, I have truly grown as a person. From choreographing a piece individually, to performing in a group, I learned how to be a better leader, and how to continuously push my limits to greater heights. I am constantly looking to apply all the knowledge I have learned from dance to my daily life, and to spread such wisdom to those around me.
							<br><br>
							The community of dancers being the circle who constantly lifts each other up, I am also looking to create such an environment with the people around me. 
						</p>
					</div>
				</div>
			</div>
			<div class="about-container" id="about-container-m">
				<div class="about-col">
					<div id="goals-col">
						<h1>Goals</h1>
						<p>My main passion is to create. This being said, this was the reason why I dove into the field of Computer Science in the first place - due to its vast and unlimited freedom to explore and create.<br><br>

						I wanted to be part of something that would not box my creative freedom, instead induces me to innovate and achieve revolutionary heights. Therefore, I am constantly in search of opportunities where I can put my Computer Science knowledge into good use, that will be beneficial to the community. I am excited and enthusiastic about where my passion can take me to, and I am looking forward to the things I can contribute to.</p>
					</div>
					<div id="education-col">
						<h1>Education</h1>
						<p>I'm currently a Sophomore at Western Michigan University, pursuing a Bachelor's Degree in Computer Science. My expected year of graduation is August 2023.<br><br>
						List of courses that I have taken/am taking:
						</p>
						<ul id="education-li">
							<li>Direct Encounter with the Arts</li>
							<li>Intro to Graphic and Printing Sciences</li>
							<li>Algebra II</li>
							<li>Data Analysis Using R</li>
							<li>Business Enterprise</li>
							<li>Computer Science I</li>
							<li>Intro to Web Technologies</li>
							<li>Technical Communication</li>
							<li>Calculus I</li>
							<li>General Chemistry with Lab</li>
							<li>Public Speaking</li>
							<li>Computer Science II</li>
							<li>Foundations in Computer Science</li>
							<li>Calculus II</li>
							<li>Ethics in Engineering & Tech</li>
						</ul>
					</div>
					<div id="hobbies-col">
						<h1>Hobbies</h1>
						<p>As I've said before, my main passion is to create. Hence, this is the main reason why I connect to dance the most.
							<br><br>
							As much of a mere past time as it may seem, dance is a safe space for me to showcase my vulnerability. With dance, I am able to learn to be comfortable with the things I am most wary of. In other words, it has been the support in my life, to continue to strive for the better. 
							<br><br>
							With dance, I have truly grown as a person. From choreographing a piece individually, to performing in a group, I learned how to be a better leader, and how to continuously push my limits to greater heights. I am constantly looking to apply all the knowledge I have learned from dance to my daily life, and to spread such wisdom to those around me.
							<br><br>
							The community of dancers being the circle who constantly lifts each other up, I am also looking to create such an environment with the people around me. 
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="projectList">
			<h1 id="projectListTitle">Project List</h1>
			<div id="projectListDiv"></div>
			<div class="msg-container">
			<div id="slider">
				<div class="msg-col">
					<h1>Webpage Prototype for Eurimage Sdn Bhd</h1>
					<div class="msg-col-p">
					<p>I am currently in the works of designing and developing the actual website for Eurimage Sdn Bhd, an interior design company from Malaysia. To start off, together with my teammate, we designed and developed the prototype for the website in the class we took together, that is Intro to Web Technologies.
					</p>
					<br>
					<dl>
						<dt>Creative Thought Process</dt>
						<ul>
						<li>Main color theme: Company's colors (dark green and gold)</li>
						<li>More usage of transitions and animation effects</li>
						<li>Implement most of the techniques taught in class, such as the usage of html, css, javascript, jquery, boostrap, php and sql. Design should also abide to responsive resizing of the window, and layout of the pages should be cohesive and pleasing to the eye.</li>
						</ul>
					</dl>
					<dl>
						<dt>Problems Faced</dt>
						<ul>
							<li>Lack of knowledge towards web development</li>
							<li>First few designs did not take usability into consideration</li>
							<li>Code wasn't clean and neat</li>
						</ul>
					</dl>
					<dl>
						<dt>Solutions to the Problems</dt>
						<ul>
							<li>Studied various webpage designs, and looked more into other techniques that could enhance the website</li>
							<li>Researched on the core items to make a webpage more user-friendly</li>
							<li>Discussed with teammate and came up with a structured format for writing code, and more comments were added for easy-understanding</li>
						</ul>
					</dl>
					<br>
					<p>
						The link to the prototype of the webpage:
					</p>
					<p><a href="https://eurimage.000webhostapp.com/" target="_blank">Eurimage Sdn Bhd Prototype</a></p>			
					</div>
				</div>
				<div class="msg-col">
					<h1>Code With Friends: Fall 2020</h1>
					<div class="msg-col-p">
					<p>Code with Friends was a month-long event that takes place twice a year, for people all around the world to come together and create a project by the end of the event. It was an event where you will be able to receive help on various sectors, or provide help to others.</p>
					<br>
					<dl>
						<dt>The Challenge</dt>
						<p>Personally, I was interested in either ios development, android development, backend or game development. Ultimately, I chose game development, as it sparked my interest the most. However, being an absolute novice to the game development world, there were a lot of challenges that I had to face.</p>
					</dl>
					<dl>
						<dt>Problems Faced</dt>
						<ul>
							<li>No knowledge of C# whatsoever</li>
							<li>Major time difference with check-in-groups, that is a group of 5 to keep each other in check, to receive help, or to give help to others.</li>
							<li>Unfamiliarity of the game development world</li>
						</ul>
					</dl>
					<dl>
						<dt>Solutions to the Problems</dt>
						<ul>
							<li>Took extra workshops to build my knowledge on C#</li>
							<li>Worked out a more rigid schedule to be able to communicate with members of the check-in-group</li>
							<li>Did a lot of background research to choose the best path to take in developing my first game</li>
						</ul>
					</dl>
					<br>
					<p>The link to download the game:</p>
					<p><a href="https://lainechan.itch.io/dodge" target="_blank">Dodge, made with Unity</a></p>
					<p>More information can be found on my GitHub:</p>
					<p><a href="https://github.com/elainechan01/dodge" target="_blank">GitHub</a></p>
				</div>
				</div>
				<div class="msg-col">
					<h1>Python Arcade Game</h1>
					<div class="msg-col-p">
						<p>From Code With Friends: Fall 2020, I was able to connect with a few people from around the world. In fact, a few of us decided to continue to work together after the event had ended. Therefore, we have come to the conclusion to develop a game together, using the Arcade library from Python</p>
						<br>
						<p>More updates can be found on my GitHub:</p>
						<p><a href="https://github.com/elainechan01/the-untitled-project" target="_blank">GitHub</a></p>
					</div>
				</div>
				<!--
				<div class="msg-col">
					<h1>Heading 4</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			-->
			</div>
		</div>
		<div class="controller">
			<div id="line1"></div>
			<div id="line2"></div>
			<div id="line3"></div>
			<!--
			<div id="line4"></div>
		-->
			<div id="active"></div>
		</div>
		</div>
		<div id="contactMe">
			<h1 id="contactMeTitle">Contact Me</h1>
			<div id="contactMeDiv"></div>
			<div id="contactMeDiv2"></div>
			<form id="contact-form" method="POST" action="contact-form-handler.php">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" placeholder="e.g. John Doe" required>
				<br>
				<label>Email:</label>
				<input type="email" name="email" class="form-control" placeholder="e.g. JohnDoe123@gmail.com" required>
				<br>
				<label>Message:</label>
				<textarea name="message" class="form-control" placeholder="Type here..." row="4" required></textarea>
				<input type="submit" class="form-control submit" value="Submit">
			</form>
		</div>
		<div id="loadDiv"></div>
	</div>

</body>
</html>