
    $(document).ready(function()
    {
      $(window).scroll(function() // check if scroll event happened
      { 
        if ($(document).scrollTop() > 300) { // check if user scrolled more than 50 from top of the browser window
           // $("#nav").removeClass("bg-dark");
            $("#nav").addClass("bg-dark");
           
        } else {
          $("#nav").removeClass("bg-dark");
        //  $("#nav").addClass("bg-dark");
          
        }
      })
    });

    