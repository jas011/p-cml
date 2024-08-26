<?php
echo " <nav class='navbar pc'>
            <div class='logo'>
              <a class='logo' href='#'><img class='logo' src='https://cml.gndec.ac.in/assets/images/cml_logo.png' alt='CML'></a>
            </div>
            <div class='links'>
              <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='Events.php'>Events</a></li>
                <li><a href='About.php'>About</a></li>
                
              </ul>
            </div>
            <div class='demo'>
              <a href='#' class='button'>Contact Us</a>
            </div>
          </nav>
          <nav class='navbar mobile'>
            <div class='logo'>
              <a class='logol' href='#'>
                <img class='logoimg' src='https://cml.gndec.ac.in/assets/images/cml_logo.png' alt='CML'></a>
              <input type='checkbox' role='button' aria-label='Display the menu' class='menu'>
          
            </div>
          
            <div class='links'>
              <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='Events.php'>Events</a></li>
                <li><a href='About.php'>About</a></li>
                <li><a href='#'>Contact</a></li>
              </ul>
            </div>
            <div class='overlay hidden'></div>
          </nav>
          
              <script>
      let nav = document.querySelector('.mobile')
      let btn = document.querySelector('.menu'),
l = nav.querySelector('.links'),
overlay = nav.querySelector('.overlay');

btn.onclick = () => {
if (l.classList.contains('visible')) {
  l.classList.remove('visible');
  l.classList.add('hidden');
  overlay.classList.remove('visible');
  overlay.classList.add('hidden');
  document.body.style.overflow = 'scroll';
  setTimeout(()=>{l.querySelectorAll('a').forEach(i=>{i.style.opacity = 0})},500)
  
} else {
  l.classList.remove('hidden');
  l.classList.add('visible');
  overlay.classList.remove('hidden');
  overlay.classList.add('visible');
  document.body.style.overflow = 'hidden';
  setTimeout(()=>{l.querySelectorAll('a').forEach(i=>{i.style.opacity = 1})},500)
  
}
};
    </script>
          
          
          
          ";
?>