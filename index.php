<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rashika Portfolio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>


    <!-- Navbar -->

    <nav>
      <div class="logo">Rashika Suresh</div>
      <div class="nav-items">
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
      </div>
    </nav>

    <!-- Home Page -->

    <div id="home">


        <!-- Scrolling Text -->
      <div class="wrapper-left">
        <div class="static-text">I'm a</div>
        <ul class="dynamic-text">
          <li><span>Designer</span></li>
          <li><span>Developer</span></li>
          <li><span>Freelancer</span></li>
        </ul>
      </div>

      <!-- Profile Image -->

      <div class="wrapper-right">
        <img src="dolly.png" alt="Rashika" srcset="" />
      </div>
    </div>

    <!-- About Section -->
    <div id="about">
      <h1>About me</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum
        voluptatem, omnis fugit architecto cupiditate quam quisquam voluptates
        eum provident exercitationem et autem est eligendi, maiores delectus
        dignissimos accusamus nam. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Nostrum eveniet corrupti molestiae sapiente, ut
        praesentium sint laborum excepturi impedit dicta enim accusantium nulla
        quam nesciunt consequatur quod. Quis, repudiandae quidem? Lorem ipsum
        dolor sit amet consectetur adipisicing elit. In numquam laudantium
        corporis maiores excepturi reprehenderit optio quia ullam velit
        deleniti! Ab inventore laudantium optio, quas rem vel unde? Maxime,
        nobis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
        ut nisi voluptates magni alias dicta provident atque temporibus ipsam
        blanditiis doloribus quidem, facilis quae, labore minima error officia,
        voluptate veniam?
      </p>
    </div>

    <!-- Skill Section -->

    <div id="skills">
      <h1>Skills</h1>
      <div class="skill-bars">
        <div class="bar">
          <div class="info">
            <span>HTML</span>
          </div>
          <div class="progress-line html">
            <span></span>
          </div>
        </div>
        <div class="bar">
            <div class="info">
              <span>React</span>
            </div>
            <div class="progress-line react">
              <span></span>
            </div>
          </div>
          <div class="bar">
            <div class="info">
              <span>NodeJS</span>
            </div>
            <div class="progress-line nodejs">
              <span></span>
            </div>
          </div>
          <div class="bar">
            <div class="info">
              <span>MongoDB</span>
            </div>
            <div class="progress-line mongodb">
              <span></span>
            </div>
          </div>
        <div class="bar">
          <div class="info">
            <span>CSS</span>
          </div>
          <div class="progress-line css">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <div class="info">
            <span>Javascript</span>
          </div>
          <div class="progress-line jquery">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <div class="info">
            <span>Python</span>
          </div>
          <div class="progress-line python">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <div class="info">
            <span>MySQL</span>
          </div>
          <div class="progress-line mysql">
            <span></span>
          </div>
        </div>
      </div>
    </div>

    <div id="testimonials">
      <h1>Testimonials</h1>

      <section>
        <div class="wrapper">
          <div class="card front-face">
            <img
              src="profile.png"
            />
          </div>
          <div class="card back-face">
            <img
              src="profile.png"
            />
            <div class="info">
              <div class="title">Rashika</div>
              <p>User interface designer and <br />front-end developer</p>
            </div>
            <ul>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </ul>
          </div>
        </div>

        <div class="wrapper">
          <div class="card front-face">
            <img
              src="profile.png"
            />
          </div>
          <div class="card back-face">
            <img
              src="profile.png"
            />
            <div class="info">
              <div class="title">Rashika</div>
              <p>User interface designer and <br />front-end developer</p>
            </div>
            <ul>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </ul>
          </div>
        </div>

        <div class="wrapper">
          <div class="card front-face">
            <img
              src="profile.png"
            />
          </div>
          <div class="card back-face">
            <img
              src="profile.png"
            />
            <div class="info">
              <div class="title">Rashika</div>
              <p>User interface designer and <br />front-end developer</p>
            </div>
            <ul>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </ul>
          </div>
        </div>
      </section>
    </div>

    <div id="contact">
      <h1>Let's Connect</h1>
      <div class="container">
        <form action="contactForm.php" method="post">
          <div class="form-row">
            <div class="input-data">
              <input type="text" name="firstName" required />

              <label for="">First Name</label>
            </div>
            <div class="input-data">
              <input type="text" name="lastName" required />

              <label for="">Last Name</label>
            </div>
          </div>
          <div class="form-row">
            <div class="input-data">
              <input type="email" name="email" required />

              <label for="">Email Address</label>
            </div>
          </div>
          <div class="form-row">
            <div class="input-data textarea">
              <textarea name="message" rows="8" cols="80" required></textarea>
              <br />
              <div class="underline"></div>
              <label for="">Write your message</label>
              <br />
              <div class="submit-btn">
                <div class="input-data">
                  <!-- <a href="mailto:rashika@gmail.com"> -->
                    <input type="submit" name="submit" value="Submit" />
                  <!-- </a> -->
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <footer>
      <div class="bottom">
        <center>
          <span class="credit">
            <a href="https://github.com/Rashika258">Rashika 💓 </a>
          </span>

          <a class="icon" href="https://twitter.com/Rashika16735509"
            ><span class="fab fa-twitter"></span
          ></a>
          <a class="icon" href="https://www.instagram.com/?hl=en/"
            ><span class="fab fa-instagram"></span
          ></a>
          <a class="icon" href="https://www.linkedin.com/in/rashika-suresh/"
            ><span class="fab fa-linkedin"></span
          ></a>
        </center>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
