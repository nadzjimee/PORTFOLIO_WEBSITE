<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="Resume.css">
</head>

<body> 
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="Index.php">Home</a>
            <a href="About.php">About</a>
            <a href="Resume.php" class="active">Resume</a>
            <a href="Service.php">Service</a>
            <a href="Project.php">Project</a>
            <a href="Review.php">Review</a>
        </nav>
    </header>

    <header class="profile-container">
        <div class="profile-picture">
            <img src="./images/profile-img.png" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="text-box">
                <p class="greeting">Hi there!</p>
                <p class="description">
                    I'm an <span class="highlight">Illustrator</span> and <span class="highlight">Graphic Designer</span>.
                    I love improving my skills by exploring new forms of expression and styles. Adventures and meeting new people keep me constantly inspired!
                </p>
            </div>
        </div>
    </header>
            
    <main class="container">
        <section class="skills">
            <h2>Abilities</h2>
            <article class="abilities-grid">
                <div>Character Design</div>
                <div>Logo & Branding</div>
                <div>Illustration</div>
                <div>Graphic Design</div>
                <div>User Interface</div>
                <div>Editorial Layout</div>
                <div>Comics</div>
                <div>Infographics</div>
            </article>

            <article class="software-skills">
                <h2>Software Skills</h2>
                <div class="skill">
                    <span class="skill-name">Ai</span>
                    <div class="bar">
                        <div class="progress" style="width: 90%; background-color: #f4a11e;"></div>
                    </div>
                </div>
                <div class="skill">
                    <span class="skill-name">Ps</span>
                    <div class="bar">
                        <div class="progress" style="width: 80%; background-color: #3fa9f5;"></div>
                    </div>
                </div>
                <div class="skill">
                    <span class="skill-name">Id</span>
                    <div class="bar">
                        <div class="progress" style="width: 70%; background-color: #ec6a92;"></div>
                    </div>
                </div>
                <div class="skill">
                    <span class="skill-name">Pr</span>
                    <div class="bar">
                        <div class="progress" style="width: 75%; background-color: #e44376;"></div>
                    </div>
                </div>
                <div class="skill">
                    <span class="skill-name">Ae</span>
                    <div class="bar">
                        <div class="progress" style="width: 65%; background-color: #a86cc1;"></div>
                    </div>
                </div>
                <div class="skill">
                    <span class="skill-name">Dw</span>
                    <div class="bar">
                        <div class="progress" style="width: 50%; background-color: #8cdd99;"></div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <aside class="timeline">
        <div class="timeline-event">
            <div class="event-circle">
                <img src="./images/icon4.jpg" alt="Graphic Designer Diploma">
            </div>
            <div class="event-content">
                <h3>Graphic Designer Diploma</h3>
                <p>Nov 2018 - Aug 2020<br>KPTM Batu Pahat</p>
            </div>
            <div class="event-year">2013</div>
        </div>
    
        <div class="timeline-event">
            <div class="event-circle">
                <img src="./images/icon5.jpg" alt="Internship">
            </div>
            <div class="event-content">
                <h3>Internship</h3>
                <p>Aug - Dec 2020<br>Illustrator</p>
            </div>
            <div class="event-year">2020</div>
        </div>
    
        <div class="timeline-event">
            <div class="event-circle">
                <img src="./images/icon4.jpg" alt="Bachelor in Digital Illustration">
            </div>
            <div class="event-content">
                <h3>Bachelor in Digital Illustration</h3>
                <p>Mar 2021 - Mar 2023<br>UiTM Shah Alam</p>
            </div>
            <div class="event-year">2021</div>
        </div>
    
        <div class="timeline-event">
            <div class="event-circle">
                <img src="./images/icon5.jpg" alt="Freelance Work">
            </div>
            <div class="event-content">
                <h3>Freelance Work</h3>
                <p>February 2023 - in progress</p>
            </div>
            <div class="event-year">2023</div>
        </div>
    </aside>

    <section class="languages">
        <h2>Languages</h2>

        <div class="language-skill">
            <span class="language-name">Malay</span>
            <div class="bar">
                <div class="level" style="width: 100%; background-color: #f4a11e;"></div>
            </div>
        </div>
        
        <div class="language-skill">
            <span class="language-name">English</span>
            <div class="bar">
                <div class="level" style="width: 80%; background-color: #3fa9f5;"></div>
            </div>
        </div>

        <div class="language-skill">
            <span class="language-name">Mandarin</span>
            <div class="bar">
                <div class="level" style="width: 50%; background-color: #ec6a92;"></div>
            </div>
        </div>
    </section>

    <footer class="contacts">
        <h2>Contacts & Webfolio</h2>
        <p>Email: <a href="mailto:mainno@live.it">Nadzirah@gmail.com</a></p>
        <p>Location: Cheras, Kuala Lumpur, Malaysia</p>
        <p>Behance: <a href="https://behance.net/matteoinnominate" target="_blank">behance.net/matteoinnominate</a></p>
    </footer>
</body>
</html>
