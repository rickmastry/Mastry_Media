<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset');?>">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
</head>
<header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
        <nav class="menu">
            <div class="menu-branding">
            <div class="portrait" ><img src="<?php echo get_template_directory_uri(); ?>/img/rickblack_sm.png"></div>
            </div>
            <ul class="menu-nav">
              <li class="nav-item">
                  <a href="Home" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="about" class="nav-link">About Me</a>
              </li>
              <li class="nav-item">
                  <a href="work" class="nav-link">My Work</a>
              </li>
              <li class="nav-item">
                  <a href="contact" class="nav-link">How To Reach Me</a>
              </li>
              <li class="nav-item">
                  <a href="welcome" class="nav-link">Welcome Page</a>
              </li>
            </ul>
        </nav>
       
    </header>
    
