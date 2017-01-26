
jQuery( document ).ready( function( $ ) {

  // Hide menu when page is clicked
  $(document).on('click', function(evt){
    if (!$(evt.target).closest('nav').length) {
      var eleClassMain = $('.menu-on');
      var eleClassSub = $('.sub-menu-on');

      if (eleClassMain.length > 0) {
        eleClassMain.removeClass('menu-on');
      }

      if (eleClassSub.length > 0) {
        eleClassSub.removeClass('sub-menu-on');
      }
    }
  });

  // Toggle main menu
  $('#js-main-menu-btn').on('click', function(evt){
    if (!$(evt.target).closest('#js-sub-menu').length) {
      evt.preventDefault();
    }

    $('#js-sub-menu').toggleClass('menu-on');
  });

  // Toggle sub menu
  $('.menu-item-has-children').on('click', function(evt) {
    if (!$(evt.target).closest('.sub-menu').length) {
      evt.preventDefault();
    }

    $('.sub-menu').toggleClass('sub-menu-on');
  });
  
});

