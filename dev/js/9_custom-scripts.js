/*!
 * theme custom scripts
*/

jQuery(function($){

});

document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 100) {
      document.getElementById('header').classList.add('header-scrolled');
    } else {
      document.getElementById('header').classList.remove('header-scrolled');
    }
  });
});