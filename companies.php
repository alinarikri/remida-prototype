
<!--  Page header -->
   <?php require 'includes/header.php'; ?>

<!-- Page main content -->
   <div class="featured-image">
          <div class="row vertical-centering">
          <div class="small-11 small-centered columns">
              
                  <h1>Partnership</h1>
                  <p>Sponsor creativity, innovation and environment</p>
            
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
<!--    ROW FOR MAIN CONTENT -->
    <div class="row">
        <div class="small-11 large-8 columns">
            <div class="row">
               <div class="small-11 columns">
                   <h2>For companies </h2> 
                <h3>Your benefits:</h3>
                <p>Features tell, benefits sell! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel corporis, quidem consectetur nihil corrupti sunt maiores, repudiandae eius dolorum saepe qui eaque nesciunt sed tenetur laboriosam esse vitae sapiente reiciendis!</p>
               </div>  
            </div>
    
    <!--        SPONSORSHIP PLANS SECTION -->
           
       <div class="row">
           
            <div class="small-12 large-6 columns">
                <div class="callout">
                <h4>Diamond</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio itaque at, sint quasi non aliquid beatae cum possimus eveniet blanditiis ullam placeat aliquam suscipit optio explicabo repudiandae fugiat deleniti.</p>
                <p><a data-open="sponsorForm">Become member</a></p>
                </div>
            </div>

           <div class="small-12 large-6 columns">
                <div class="callout">
                <h4>Gold</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum quam delectus quisquam dolores quae? Obcaecati incidunt laborum tempore non quis delectus quos officiis, inventore nihil hic atque, illo tempora.</p>
                <p><a data-open="sponsorForm">Click me for a modal</a></p>
                </div>
           </div>
        
       </div>
       
       <div class="row">
           
           <div class="small-12 large-6 columns">
                <div class="callout">
                <h4>Silver</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
                <p><a data-toggle="sponsorForm">Click me for a modal</a></p>
            </div>
           </div>
            
        <div class="small-12 large-6 columns end">
            <div class="callout">
                <h4>Bronze</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sunt explicabo fugit expedita unde modi dignissimos omnis quae! Blanditiis eius velit perspiciatis incidunt eaque non in dicta adipisci repellendus quis.</p>
                <p><a data-toggle="membershipForm">Click me for a modal</a></p>
            </div>
        </div>
       </div>   
            
            
         <div class="row">
              <div class="small-11 large-12 columns">
                <div class="callout">
                        <h4>Are you looking for a way to get rid of your overproduction?</h4>
                        <p>Your overproduction will get new life in our center. We are happy to take all sorts of different materials: big and small, few and many, new or used. Contact us if you have questions.</p>
                        <p><a data-toggle="sponsorForm">Leave us a message</a></p>
            </div>
          </div>
             
         </div>
        </div>
        

   
        
<!--        TESTIMONIAL SECTION -->
        
        <div class="small-11 large-4 columns end">
            <div class="callout">
                <h3>Testimonial first</h3>
                <p class="testimonial">ReMida is a good project because they focus on buy and throw&ndash;away&ndash;culture. Remida shows their members the value of materials and so affects our consumption behaviour. HOWE is very proud to support such work!</p>
                <p>Hele Rex</p>
                <p>HOWE A/S, CSR Manager</p>
            </div>
        </div>
          <div class="small-11 large-4 columns end">
            <div class="callout">
                <h3>Testimonial second</h3>
                <p class="testimonial">We as a production company are focusing on how we can reuse our materials. At ReMida it is done with creativity and fantasy, which is absolutely unique.</p>
                <p>Name</p>
                <p>Company</p>
            </div>
        </div>
        
           <div class="small-11 large-4 columns end">
            <div class="callout">
                <h3>Contact details </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat provident atque pariatur, veniam maiores expedita dolorum nostrum reiciendis, quo eos perferendis, unde sint praesentium, explicabo laboriosam aliquam a nemo assumenda.</p>
            </div>
        </div>
    </div>
    
    
    

       
        <div class="row">
              <div class="small-11 large-8 large-centered columns">
                    
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
