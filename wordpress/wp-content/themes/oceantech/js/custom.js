jQuery(document).ready(function($) {
    $('#search-form').css('display', 'none');
    // Bắt sự kiện click của phần tử HTML
    $('.sign-kinhlup').on('click', function(event) {
      event.preventDefault(); // Ngăn chặn không cho reload lại trang 
    
      $('#search-form').css('display', ' inline-block');
      $('.sign-kinhlup').css('display', 'none');
    });
  });