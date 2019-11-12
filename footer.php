

      <a href="#navbarNavAltMarkup"><button id="upArrowButton" type="button" name="button"> <img id="upArrowImg" src="images/uparrow.png" alt=""> </button></a>
    </div>




    <div class="footer">
      <h2>Footer - contact info</h2>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

     <script type="text/javascript">
      function scrollToTop(){
        console.log('i am fired');
       var ele = document.getElementById('navbarNavAltMarkup');
         ele.scrollIntoView();
       }

       $(window).scroll(function() {
         $(".slideanim").each(function(){
           var pos = $(this).offset().top;

           var winTop = $(window).scrollTop();
             if (pos < winTop + 600) {
               $(this).addClass("slide");
             }
         });
       });
     </script>

  </body>
</html>
