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

$(document).ready(function() {
    $('#customerTable').DataTable();
} );


 function IsValid()
 {
    var agree = $.trim($('#step3-agree').val());
    if( $('#step3-agree').is(':checked') )
    {
        return 1;
    }
    else
    {
        return 0;
    }

 }


 function purchase_product(produnct_id)
 {
    if(IsValid() == 0)
    {
        return;
    }

    var firstname = $.trim($('#step1-firstname').val());
    var lastname = $.trim($('#step1-lastname').val());
    var suffix = $.trim($('#step1-suffix option:selected').text());
    var customerrole = $.trim($('#step1-role option:selected').val());
    var customeremail = $.trim($('#step1-email').val());
    var customerphone = $.trim($('#step1-phone').val());

    var companyName = $.trim($('#step1-companyName').val());
    var companywebsiteName = $.trim($('#step1-websiteName').val());
    var country = $.trim($('#step1-countries option:selected').val());
    var companyemail = $.trim($('#step1-companyemail').val());
    var companyphone = $.trim($('#step1-companyphone').val());

    var cardNumber = $.trim($('#step2-cardNumber').val());
    var cardExpiryMM = $.trim($('#step2-cardExpiryMM').val());
    var cardExpiryYY = $.trim($('#step2-cardExpiryYY').val());
    var cardCVC = $.trim($('#step2-cardCVC').val());
    var cardType = $.trim($('#step2-cardType option:selected').val());
    var cardHolderName = $.trim($('#step2-cardHolderName').val());


    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "/moad/project/SignUp/purchase");


    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "firstname");
    hiddenField.setAttribute("value", firstname);
    form.appendChild(hiddenField);


    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "lastname");
    hiddenField.setAttribute("value", lastname);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "suffix");
    hiddenField.setAttribute("value", suffix);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "customerrole");
    hiddenField.setAttribute("value", customerrole);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "customeremail");
    hiddenField.setAttribute("value", customeremail);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "customerphone");
    hiddenField.setAttribute("value", customerphone);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "companyName");
    hiddenField.setAttribute("value", companyName);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "companywebsiteName");
    hiddenField.setAttribute("value", companywebsiteName);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "country");
    hiddenField.setAttribute("value", country);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "companyemail");
    hiddenField.setAttribute("value", companyemail);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "companyphone");
    hiddenField.setAttribute("value", companyphone);
    form.appendChild(hiddenField);

        var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardNumber");
    hiddenField.setAttribute("value", cardNumber);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardExpiryMM");
    hiddenField.setAttribute("value", cardExpiryMM);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardExpiryYY");
    hiddenField.setAttribute("value", cardExpiryYY);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardCVC");
    hiddenField.setAttribute("value", cardCVC);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardType");
    hiddenField.setAttribute("value", cardType);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "cardHolderName");
    hiddenField.setAttribute("value", cardHolderName);
    form.appendChild(hiddenField);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "produnct_id");
    hiddenField.setAttribute("value", produnct_id);
    form.appendChild(hiddenField);

    document.body.appendChild(form);
    form.submit();

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
    form.setAttribute("action", "/moad/project/AdminDashboard/sendMessage");


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