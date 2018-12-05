<?php include("header.php");?> 
<div id="contact" class="container bg-light">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our Clients</em></p>
  

  <div class="row">
    <div class="col-md-4">
      <p></p>
      <p><span class="fa fa-map-marker">&nbsp;</span>Bangalore</p>
      <p><span class="fa fa-phone">&nbsp;</span>Phone: +91</p>
      <p><span class="fa fa-envelope">&nbsp;</span>Email: mail@aroha.co.in</p>
      <p><span class="fa fa-address-card">&nbsp;</span>Address:  14, 5th Main, 
													  38th Cross, 5th Main Rd, 
													  5th Block, Jayanagar, 
													  Bengaluru, Karnataka 560041</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
		<p>UserName: <span class="fa fa-user"></span></p>  
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
      </div>
	  
	    <div class="row">
			  <div class="col-sm-6 form-group">
			  <p>Email: <span class="fa fa-envelope"></span></p>    
				  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
		</div>
		<div class="row">
				<div class="col-sm-6 form-group">
				<p>Phone: <span class="fa fa-phone"></span></p>    
				  <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
				</div>
		</div>
      
	  
	  <p>Comment: <span class="fa fa-comment"></span></p> 
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit"><span class="fa fa-send"></span> &nbsp;Send</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  
<?php include("footer.php");