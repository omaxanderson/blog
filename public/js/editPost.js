$(document).ready(function() {
  $('#deletePostButton').click(validate);
});

function validate(event) {
  if (!confirm('Are you sure you want to delete this post?')) {
    event.preventDefault();
  }
}
