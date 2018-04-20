$(document).ready(function() {
  $('.blog_post').hover(blogIn, blogOut);
});

function blogIn(event) {
  $(this).find('.card-header').addClass('bg-dark text-light');
  $(this).addClass('add_box_shadow');
}

function blogOut(event) {
  $(this).find('.card-header').removeClass('bg-dark text-light');
  $(this).removeClass('add_box_shadow');
}
