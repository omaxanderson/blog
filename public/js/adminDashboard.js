$(document).ready(function() {
  $('#saveDraft').click(saveDraft);
});

function saveDraft(event) {
  event.preventDefault();
  var title = $('#title').val();
  var abstract = $('#abstract').val();
  var userId = $('#userId').val();
  var content = $('#content').val();
  var readTime = $('#readTime').val();
  var json = {"title":title, "abstract": abstract, "readTime":readTime, "userId":userId, "content":content};
  json = JSON.stringify(json);
  console.log(json);

  // make ajax call
  $.ajax({
    url: "/saveDraft",
    method: "post",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    contentType: "application/json", // AAAAAHHHHHHHHHH wow it's application/json not just json so many hours of debugging
    data: json,
    success: function(resp) {
      //var respData = JSON.parse(resp);
      //console.log(respData['status']);
      console.log(resp);
    }
  });

}
