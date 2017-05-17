function checkform ( form )
{
  // ** START **
  if (form.name.value == "") {
    alert( "Please enter your name." );
    form.name.focus();
    return false ;
  }


  if (form.email.value == "") {
    alert( "Please enter your email address" );
    form.email.focus();
    return false ;
  }

  if (form.email.value.indexOf("@")<3) {
    alert( "Please ensure your email addresses have been input correctly e.g. mail@mail.com" );
    form.email.focus();
    return false ;
  }


  if (form.enquiry.value == "") {
    alert( "Please enter your enquiry" );
    form.enquiry.focus();
    return false ;
  }

  // ** END **
  return true ;
}


function checkform2 ( form )
{
  // ** START **
  if (form.name.value == "") {
    alert( "Please enter your name." );
    form.name.focus();
    return false ;
  }
   if (form.telephone.value == "") {
    alert( "Please enter your telephone number" );
    form.telephone.focus();
    return false ;
  }

  if (form.email.value == "") {
    alert( "Please enter your email address" );
    form.email.focus();
    return false ;
  }

  if (form.email.value.indexOf("@")<3) {
    alert( "Please ensure your email addresses have been input correctly e.g. mail@mail.com" );
    form.email.focus();
    return false ;
  }


  // ** END **
  return true ;
}


function checkform3 ( form )
{
  // ** START **
  if (form.name.value == "" || form.name.value == "Name") {
    alert( "Please enter your name." );
    form.name.focus();
    return false ;
  }
   if (form.telephone.value == "" || form.telephone.value == "Telephone") {
    alert( "Please enter your telephone number" );
    form.telephone.focus();
    return false ;
  }

  if (form.enquiry.value == "" || form.enquiry.value == "Your Message") {
    alert( "Please enter your enquiry" );
    form.enquiry.focus();
    return false ;
  }

  // ** END **
  return true ;
}


function checkform4 ( form )
{
  // ** START **
  if (form.first_name.value == "") {
    alert( "Please enter your first name." );
    form.first_name.focus();
    return false ;
  }
  if (form.last_name.value == "") {
    alert( "Please enter your last name." );
    form.last_name.focus();
    return false ;
  }
    if (form.email_address.value == "") {
    alert( "Please enter your first name." );
    form.first_name.focus();
    return false ;
  }
    if (form.first_name.value == "") {
    alert( "Please enter your first name." );
    form.first_name.focus();
    return false ;
  }
  if (form.email_address.value == "") {
    alert( "Please enter your email address" );
    form.email_address.focus();
    return false ;
  }

  if (form.email_address.value.indexOf("@")<3) {
    alert( "Please ensure your email addresses have been input correctly e.g. mail@mail.com" );
    form.email_address.focus();
    return false ;
  }
   if (form.password.value == "") {
    alert( "Please enter your password" );
    form.password.focus();
    return false ;
  }
  // ** END **
  return true ;
}


$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});

	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
});

$(document).ready(function(){
  $(".moreless").click(function(){
    $(".page_content").slideToggle();
  });
});


 $(document).ready(function() {
   $("#valform").validate();
   });
