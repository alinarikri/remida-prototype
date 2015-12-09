
  
   <?php require 'includes/header.php'; ?>
   <?php $page_name = 'Become a member';?>   <?php $page_name = 'Become a member';?>


   <div class="featured-image">
          <div class="row vertical-centering">
          <div class="small-12 large-12 columns">
              <h1><span class="special-font">Get involved</span></h1>
          <p>Become a member and unlock your creativity</p>
          </div>
        </div>

    </div>
    <div class="row">
       <div class="small-11 columns">
           <nav aria-label="You are here:" role="navigation">
          <ul class="breadcrumbs">
            <li><a href="/remida-prototype/index.php">Home</a></li>
            <li>
              <span class="show-for-sr">Current: </span> Become a member
            </li>
          </ul>
        </nav>
       </div>
    </div>
    
    <div class="row">
        <div class="small-11 large-8 columns">
            <h2>Become a member</h2> 
            <p class="lead">By being a member you support our daily acctivities like center administration, electricity and rent. We could not continue to exist without your support through memberships.</p>
            <h3>Membership benefits:</h3>
            <ul>
                <li>Collect as much as you need.</li>
                <li>No materials fee when you book workshops or festivals.</li>
                <li>Quarterly newsletters full of ideas, events and inspiration.</li>
                <li>Ideas and support for your projects whether they are at school or at home.</li>
            </ul>
        </div>
    </div>
    <div class="row">
       <div class="medium-4 columns">
            <div class="callout">
            <h4>Schools</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio itaque at, sint quasi non aliquid beatae cum possimus eveniet blanditiis ullam placeat aliquam suscipit optio explicabo repudiandae fugiat deleniti.</p>
            <p>1000kr. per year</p>
            <p><a data-open="membershipForm">Become a member</a></p>
        </div>
       </div>
        <div class="medium-4 columns">
            <div class="callout">
            <h4>Kindergartens</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum quam delectus quisquam dolores quae? Obcaecati incidunt laborum tempore non quis delectus quos officiis, inventore nihil hic atque, illo tempora.</p>
            <p>500kr. per year</p>
            <p><a data-open="membershipForm">Become a member</a></p>
        </div>
        </div>
        <div class="medium-4 columns">
               <div class="callout">
            <h4>Family</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
            <p>180kr. per year</p>
            <p><a data-toggle="membershipForm">Become a member</a></p>
        </div>
        </div>
     
    </div>
</div>

<!--  MODAL WINDOW  -->
   
<!--
<div class="reveal" id="membershipForm" data-reveal>
  <h3>Become a member</h3>
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
                <option value="school">School</option>
                <option value="kinder">Kindergarten</option>
                <option value="family">Family</option>
              </select>
            </div>
      </div>
      <div class="row">
          <div class="large-8 medium-4 columns">
              <input type="submit" value="Become member">
          </div>
      </div>
      
    </form>
    
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
-->
    
<!-- modal in modal-->
    

<div class="reveal" id="membershipForm" data-reveal>
  
  <h3>Become a member</h3>
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
                <option value="school">School</option>
                <option value="kinder">Kindergarten</option>
                <option value="family">Family</option>
              </select>
            </div>
      </div>
      <input type="submit" value="become member">
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
