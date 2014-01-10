
/*-------------------------------------------------------------------------------------------------
Customize
-------------------------------------------------------------------------------------------------*/

var about    = $('#customize_about');
var portfolio = $('#customize_portfolio');
var resume = $('#customize_resume');

// Put in about
$('#type_container').html(about);

// Listener for type change
$('input[name=type').change(function() {

  var type = $(this).val();

  if(type == 'about') {
    $('#type_container').html(about);
  }
  else if (type == 'portfolio') {
    $('#type_container').html(portfolio);
  }
  else {
    $('#type_container').html(resume);
    $('#customize_resume').show();
  }

});

