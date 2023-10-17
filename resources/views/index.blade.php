@include('include.header')
    <div class="container">
  <header>
    <!-- navbar start -->
    
    <!-- navbar end -->
    <section class="hero">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6" id="">
                  <h2>Welcome to My Portfolio</h2>
                  <p>I'm Md. Mahabubur Rahman, a passionate web developer 
                    <br>To make the most out of the opportunities I receive and to utilize my full potential as a creative
                    thinker and developer. Always eager to learn new things and face new challenges . A team player
                    and motivator
                    <br> I'm a entry level html,css,bootstrap and javascript programmer.
                    <br>I do have plan to become a full stack web developer.
                    
                  </p>
              </div>
              <div class="col-md-6">
                  <img src="{{asset('Frontend')}}/image/myimage2.jpeg" alt="Your Image" class="img-fluid hero-img">
              </div>
          </div>
      </div>
  </section>

  <section class="projects">
    <h1>Notable Projects and Achievements</h1>
  <div class="project-container">
    <div class="project">
      <img src="{{asset('Frontend')}}/image/todo.png" alt="Project 1">
      <h3>Todo app</h3>
      <p>These apps have become popular tools for individuals, students, professionals, and teams to boost productivity, improve time management, and ensure tasks are completed efficiently. With a todo app, users can better stay on top of their responsibilities, set goals, and achieve their objectives more effectively.</p>
    </div>
    <div class="project">
      <img src="{{asset('Frontend')}}/image/slide-show.png" alt="Project 2">
      <h3>Slide-show</h3>
      <p>Slideshow presentations are widely used in a range of settings, from business meetings and academic presentations to personal events like weddings or family gatherings. They are an effective way to showcase content, deliver information, and engage the audience visually.</p>
    </div>
    <div class="project">
      <img src="{{asset('Frontend')}}/image/guessing-game.png" alt="Project 3">
      <h3>Guessing-game</h3>
      <p>Guessing games can vary in complexity and can be adapted for different age groups and occasions. They are commonly used as icebreaker activities, entertainment at parties, or as educational tools to reinforce learning in a fun and interactive way.</p>
    </div>
    
  </div>
  </section>
  </header>
</div>


    
@include('include.footer')