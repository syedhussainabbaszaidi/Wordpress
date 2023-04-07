function my_shortcode_function() {
  return '<div class="container-fluid bg">
      <div class="inner-row">
      <div class="column column1">
       <h3 class="head">Education</h3>
		  <span class="text">As a custom software development company, Golpik has core expertise in delivering educational technology projects. We build applications for educational and personnel training that accelerates learning efficiency and provides universal availability such through facilities such as Elearning software development.</span>
        </div>
      </div>';
}
add_shortcode('my_shortcode', 'my_shortcode_function');
    
ye elementor k block mein add krna hai

[my_shortcode]
