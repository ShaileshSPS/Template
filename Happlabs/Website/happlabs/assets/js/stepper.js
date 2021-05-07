$(document).ready(function () {
    
  $( "#contact-form" ).submit(function(event) {
    event.preventDefault();

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "100",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "show",
        "hideMethod": "hide"
    };

    if($("#contact_date").val() == '') {
      toastr.info('Date is required.');
      $("#contact_date").focus();
      return false;
    }
    else if($("#contact_time").val() == '') {
      toastr.info('Time is required.');
      $("#contact_time").focus();
      return false;
    }
    else {
      $.ajax({
       type: "POST",
       url: "/contact-form-submit",
       data: {
          full_name : $("#full_name").val(),
          email : $("#cemail").val(),
          about : $("#about").val(),
          contact_date : $("#contact_date").val(),
          contact_time : $("#contact_time").val(),
          contact_submit : true
        },
       success: function (data) {
          $("#full_name").val("");
          $("#cemail").val("");
          $("#about").val("");
          $("#contact_date").val("");
          $("#contact_time").val("");
          //$('.contact-alert').show();
  	      toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "show",
            "hideMethod": "hide"
          };
          toastr.success('We will get back to you shortly.', 'Success!');
        },
        error: function(data) {
          console.log("error")
        }
      });
    }
  });

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    $('.setup-content2').hide();
  	$('.setup-content3').hide();
    $('.setup-content1').show();

    $('.steps-step1').find('p').css({'color':'#272726'});
    $('.steps-step1').append("<style>.steps-step1::before{ background-color:#DAC265 !important}</style>");

  	$('.step-1-next').click(function() {
      if($('#firstName').val() == '') {
        $('#firstName').focus();
        return false;
      }
      else if($('#lastName').val() == '') {
        $('#lastName').focus();
        return false;
      }
      else if($('#email').val() == '') {
        $('#email').focus();
        return false;
      }
      else if($('#email').val() != '' && !reg.test($('#email').val())){
        $('#email').focus();
        return false;
      }
      else if($('#company').val() == '') {
        $('#company').focus();
        return false;
      }
/*      else if($('#job-function').val() == null) {
        $('#job-function').focus();
        return false;
      }*/
      else if($('#country').val() == null) {
        $('#country').focus();
        return false;
      }
      else if($('#check').is(':checked') == false) {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "show",
            "hideMethod": "hide"
        };
        toastr.info('Please check the box if you want to proceed further.');

        $('#check').focus();
        return false;
      }
      else {
        $('.setup-content1').hide();
        $('.setup-content3').hide();
        $('.setup-content2').show();
        $('.steps-step1').find('a').removeClass('stepper-active');
        $('.steps-step1').find('p').css({'color':'#9F9F9F'});
        $('.steps-step1').append("<style>.steps-step1::before{ background-color:#DDDDDD !important}</style>");
        $('.steps-step2').find('a').addClass('stepper-active');
        $('.steps-step2').find('p').css({'color':'#272726'});
        $('.steps-step2').append("<style>.steps-step2::before{ background-color:#DAC265 !important}</style>");

      }
  	});

  	$('.step-2-next').click(function() {

      if($('#needs').val() == '') {
        $('#needs').focus();
        return false;
      }
      else {
        $('.steps-step1').find('a').removeClass('stepper-active');
        $('.steps-step1').find('p').css({'color':'#9F9F9F'});
        $('.steps-step1').append("<style>.steps-step1::before{ background-color:#DDDDDD !important}</style>");
        $('.steps-step2').find('a').removeClass('stepper-active');
        $('.steps-step2').find('p').css({'color':'#9F9F9F'});
        $('.steps-step2').append("<style>.steps-step2::before{ background-color:#DDDDDD !important}</style>");
        $('.steps-step3').find('a').addClass('stepper-active');
        $('.steps-step3').find('p').css({'color':'#272726'});
        $('.steps-step3').append("<style>.steps-step3::before{ background-color:#DAC265 !important}</style>");

/*
        $("#first-name-val").val($('#firstName').val());
        $("#last-name-val").val($('#lastName').val());
        $("#email-val").val($('#email').val());
        $("#needs-val").val($('#needs').val());
        $('#first-name-val-label').addClass("active");
        $('#last-name-val-label').addClass("active");
        $('#email-val-label').addClass("active");
        $('#needs-val-label').addClass("active");*/
        $('.setup-content1').hide();
        $('.setup-content2').hide();
        $('.setup-content3').show();
      }
  	});

  	$('.step-3-submit').click(function() {
		event.preventDefault();

       		$.ajax({
           		type: "POST",
           		url: "/demo-submit",
           	data: {
                  firstName : $("#firstName").val(),
                  lastName : $("#lastName").val(),
                  email : $("#email").val(),
                  company : $("#company").val(),
                  job_function : $("#job-function").val(),
                  country : $("#country").val(),
                  needs : $("#needs").val(),
                  demo_submit : true
                },
           	success: function (data) {
              		$('.modal').modal('hide');
              		toastr.options = {
                	"closeButton": true,
                	"debug": false,
                	"newestOnTop": false,
                	"progressBar": false,
                	"preventDuplicates": true,
                	"onclick": null,
                	"showDuration": "100",
                	"hideDuration": "1000",
                	"timeOut": "3000",
                	"extendedTimeOut": "1000",
                	"showEasing": "swing",
                	"hideEasing": "linear",
                	"showMethod": "show",
                	"hideMethod": "hide",
                 	onHidden: function () {
                  		window.location.reload();
                	}
              	};
              	toastr.success('We will get back to you shortly.', 'Success!')
           	},
           	error: function(data) {
              		console.log("error")
           	}
      	});  		

  	});

});
