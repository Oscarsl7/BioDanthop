$( document ).ready(function() {
  jQuery('<div class="col-2 quantity-button quantity-down"><p class="text-center"><strong>-</strong></p></div>').insertBefore('.quantity input');
  jQuery('<div class="col-2 quantity-button quantity-up"><p class="text-center"><strong>+</strong></p></div>').insertAfter('.quantity input');

      jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
          input = spinner.find('input[type="number"]'),
          btnUp = spinner.find('.quantity-up'),
          btnDown = spinner.find('.quantity-down'),
          min = input.attr('min'),
          max = input.attr('max');

        btnUp.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue >= max) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue + 1;
          }
          spinner.find("input").val(newVal);
          //SelectorSlide.val(newVal);.    /*aquí pone el selector del slide*/
          spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue <= min) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue - 1;
          }
          spinner.find("input").val(newVal);
         //SelectorSlide.val(newVal);        /*aquí pone el selector del slide*/
         spinner.find("input").trigger("change");
        });

      });

});
$(function() {

  $(".numbers-row").append('<div class="inc buttonFlecha">+</div><div class="dec buttonFlecha">-</div>');

  $(".buttonFlecha").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
  	  var newVal = parseFloat(oldValue) + 1;
  	} else {
	   // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
	    } else {
        newVal = 0;
      }
	  }

    $button.parent().find("input").val(newVal);

  });

});
