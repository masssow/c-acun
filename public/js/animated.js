// liste traitemens
$(window).scroll(function() {
    if ($(this).scrollTop() > 900){  
        $('.list-one').addClass("liste-fixed");
    }
    else{
        $('.list-one').removeClass("liste-fixed");
    }
  });  