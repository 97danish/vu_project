(function($) {

  $('#meal_preference').parent().append('<select class="list-item" id="newmeal_preference" name="clinic"></select>');
  $('#meal_preference option').each(function(){
      $('#newmeal_preference').append('<option value="' + $(this).val() + '">'+$(this).text()+'</option>');
  });
  $('#meal_preference').remove();
  $('#newmeal_preference').attr('id', 'meal_preference');
  $('#meal_preference option').first().addClass('init');
  $("#meal_preference").on("click", ".init", function() {
      $(this).closest("#meal_preference").children('option:not(.init)').toggle();
  });
  
  var allOptions = $("#meal_preference").children('option:not(.init)');
  $("#meal_preference").on("click", "option:not(.init)", function() {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $("#meal_preference").children('.init').html($(this).html());
      allOptions.toggle();
  });

  var marginSlider = document.getElementById('slider-margin');
  if (marginSlider != undefined) {
      noUiSlider.create(marginSlider, {
            start: [500],
            step: 10,
            connect: [true, false],
            tooltips: [true],
            range: {
                'min': 0,
                'max': 1000
            },
            format: wNumb({
                decimals: 0,
                thousand: ',',
                prefix: '$ ',
            })
    });
  }
  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

  $('#register-form').validate({
    rules : {
        first_name : {
            required: true,
        },
        last_name : {
            required: true,
        },
        company : {
            required: true
        },
        email : {
            required: true,
            email : true
        },
        phone_number : {
            required: true,
        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
});

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);