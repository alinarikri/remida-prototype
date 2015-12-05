
<!--  Page header -->
   <?php require 'includes/header.php'; ?>

<!-- Page main content -->
   <div class="featured-image">
          <div class="row">
          <div class="small-11 small-centered columns">
              <div class="vertical-centering">
                  <h1>Partnership</h1>
                  <p>Sponsor creativity, innovation and environment</p>
              </div>
          </div>
        </div>
    </div>
    
    <div class="row">
       <div class="small-11 columns">
           <nav aria-label="You are here:" role="navigation">
          <ul class="breadcrumbs">
            <li><a href="/remida-prototype/index.php">Home</a></li>
            <li>
              <span class="show-for-sr">Current: </span> For companies
            </li>
          </ul>
        </nav>
       </div>
    </div>
    
    <div class="row">
       <div class="small-11 columns">
           <h2>For companies </h2> 
        <h3>Your benefits:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel corporis, quidem consectetur nihil corrupti sunt maiores, repudiandae eius dolorum saepe qui eaque nesciunt sed tenetur laboriosam esse vitae sapiente reiciendis!</p>
       </div>  
    </div>
    
    <div class="row">
       <div class="small-11 medium-6 large-3 columns">
            <div class="callout">
            <h4>Diamond</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio itaque at, sint quasi non aliquid beatae cum possimus eveniet blanditiis ullam placeat aliquam suscipit optio explicabo repudiandae fugiat deleniti.</p>
            <p><a data-open="sponsorForm">Become member</a></p>
        </div>
       </div>
        <div class="small-11 medium-6 large-3 columns">
            <div class="callout">
            <h4>Gold</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum quam delectus quisquam dolores quae? Obcaecati incidunt laborum tempore non quis delectus quos officiis, inventore nihil hic atque, illo tempora.</p>
            <p><a data-open="sponsorForm">Click me for a modal</a></p>
        </div>
        </div>
        <div class="small-11 medium-6 large-3 columns">
            <div class="callout">
                <h4>Silver</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
                <p><a data-toggle="sponsorForm">Click me for a modal</a></p>
            </div>
        </div>
          <div class="small-11 medium-6 large-3 columns end">
            <div class="callout">
                <h4>Bronze</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
                <p><a data-toggle="membershipForm">Click me for a modal</a></p>
            </div>
        </div>
</div>
        <div class="row">
              <div class="small-11 large-8 large-centered columns">
                    <div class="callout">
                        <h4>Sponsor with materials</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
                        <p><a data-toggle="sponsorForm">Click me for a modal</a></p>
                    </div>
                </div>
        </div>
     
    </div>
</div>


    
<!-- modal in modal-->
    

<div class="reveal" id="sponsorForm" data-reveal>
  
  <h3>Become a sponsor</h3>
  <p class="lead">Just fill in your details and we'll get back to you</p>
  <form>
      <div class="row">
            <div class="large-8 medium-4 columns">
              <label>Name:</label>
              <input type="text" placeholder="Your name" />
            </div>
      </div>
       <div class="row">
            <div class="large-8 medium-4 columns">
              <label>Email:</label>
              <input type="email" placeholder="Your email" />
            </div>
      </div>
       <div class="row">
            <div class="large-8 medium-4 columns">
              <label>Select membership</label>
              <select>
                <option value="school">Diamond</option>
                <option value="kinder">Gold</option>
                <option value="family">Silver</option>
                <option value="family">Materials</option>
              </select>
            </div>
      </div>
      <input type="submit" value="Be sponsor">
    </form>
  
<!--  <a class='button' data-toggle='membershipFormThanks'>Become member</a>-->
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class='reveal' id='membershipFormThanks' data-reveal>
  <h2>Thank you!</h2>
  <p class="lead">We've got your sign-up</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
     
<!----------------------------FOOOTER--------------------------------------->
     
<?php include 'includes/footer.php' ;?>
