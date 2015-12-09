<div id="page-footer">
    <div class="row" >
         <div class="small-11 medium-8 large-4 columns">
            <div class="row">
                <div class="small-8 small-centered columns">
                    <img src="/remida-prototype/img/remida-logo.png" alt="Remida Logo">
                </div>
            <p>Center for creativ recycling</p>
            </div>
            
             
         </div>
         <div class="small-11 medium-8 large-4 columns">
            <h4>Quick links</h4>
             <ul>
                 <li><a href="#">Pick up materials</a></li>
                 <li><a href="#">Visit center</a></li>
                 <li><a href="#">Become member</a></li>
                 <li><a href="#">Become volunteer</a></li>
             </ul>
         </div>
         <div id="facebook-page" class="small-11 medium-8 large-4 columns end">
            <h4>Like us on Facebook</h4>
             <div class="fb-page" 
                  data-href="https://www.facebook.com/ReMida-Center-Odense-center-for-kreativt-genbrug-243182275732814/?fref=ts" 
                  data-small-header="false" 
                  data-adapt-container-width="true" 
                  data-hide-cover="false"
                  data-show-facepile="true">          
            </div>
         </div>
     </div>
     
</div>
<div id="copyright">
   <div class="small-11 small-centered large-4 columns">
  <span>&copy; 2015 Remida Center Odense</span>
   </div>
</div>

     

    <script src="/remida-prototype/js/vendor/jquery.min.js"></script>
    <script src="/remida-prototype/js/vendor/what-input.min.js"></script>
    <script src="/remida-prototype/js/foundation.min.js"></script>
<!--    <script src="/remida-prototype/js/app.js"></script>-->
 <script>$(document).foundation();</script>
 <script>
$(document).ready(function () {
    
//    var currentSection = 0;
    
    $('#main-nav li a').click(function() {
        
        $('#main-nav li a').removeClass(active);
        $(this).addClass('active');
    });
});

</script>
  </body>
</html>