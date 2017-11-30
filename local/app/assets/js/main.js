$(function () 
{
    setNavigation();
});

/** 
Setting an active menu item based on the current URL
*/
function setNavigation() 
{
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");    
    path = decodeURIComponent(path);

    $(".nav a").each(function () {
        var href = $(this).attr('href');
        if (path.substr(path.lastIndexOf('/')+1) === href.substr(href.lastIndexOf('/')+1)) {
            $(this).closest('li').addClass('active');
        }
    });
}

 function display_message(message, replay, id, subject, date)
 {
     title = subject + ' (' + date + ')';
     $('#customer-message').val(message);
     $("#compose-textarea").data("wysihtml5").editor.setValue(replay);
     $('#hidden-id').val(id);
     $('#message-title').text(title);
     
 }


  function send_replay()
  {
    var id = $('#hidden-id').val();

    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "../Admin/sendMessage");


    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "id");
    hiddenField.setAttribute("value", id);
    form.appendChild(hiddenField);


    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "replay");
    hiddenField.setAttribute("value", $("#compose-textarea").data("wysihtml5").editor.getValue());
    form.appendChild(hiddenField);

    document.body.appendChild(form);
    form.submit();
  }


  function send_message()
  {

    var subject = $('#message-subject').val();
 

    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "../Dashboard/sendMessage");

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "subject");
    hiddenField.setAttribute("value", subject);
    form.appendChild(hiddenField);



    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "message");
    hiddenField.setAttribute("value", $("#customer-isssue").val());
    form.appendChild(hiddenField);


    document.body.appendChild(form);
    form.submit();

    
  }

  $(document).ready(function() {
    $('#customerTable').DataTable();
} );