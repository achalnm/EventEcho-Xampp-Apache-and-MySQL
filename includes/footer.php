
<style>

/* Button used to open the chat form - fixed at the bottom of the page
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
  font-size:25px;
	background-color:cyan;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
} */

.my-float{
	margin-top:22px;
}

/* The popup chat - hidden by default
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
} */

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button
.form-container .btnn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
} */

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btnn:hover, .open-button:hover {
  opacity: 1;
}

</style>


<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">EventEcho </h2>
              <p>Event Echo has enhanced users' booking experiences with its user-friendly platform and valuable deals. Real-time updates and excellent customer service make it a top choice. Event Echo is highly recommended for a smooth booking experience</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCh5dB5xWCqCCLGRD8AN6NsA"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/jyothyitofficial/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/jyothyitofficial/?hl=en"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Events</h2>
              <ul class="list-unstyled">
                <li><a href="#technical" class="py-2 d-block">Regional</a></li>
                <li><a href="#gaming" class="py-2 d-block">National</a></li>
                <li><a href="#onstage" class="py-2 d-block">International</a></li>
                <li><a href="#offstage" class="py-2 d-block">Others</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="register.php" class="py-2 d-block">Registration</a></li>
                <li><a href="#events" class="py-2 d-block">events</a></li>
                
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> Jyothy Institute of Technology
                        Pipeline Rd, Near Ravi Shankar Guruji Ashram
                        Thataguni, Bengaluru - 560 082,
                        Karnataka, India. </span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9035283996</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">eventecho@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
  <p> This website is made by Achal N (1JT21CS003), Aruna A Shenoy (1JT21CS019), Bhushan M V (1JT21CS030), Pujitha D R (1JT21CS128) </p>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
    <button href="#" class="float ftco-animate" onclick="openForm()">
    <span class="icon-chat"></span>
  </button>
    
    <!-- <div class="chat-popup" id="myForm" style="border-radius:30px;">
  <form action="/action_page.php" class="form-container" style="border-radius:30px;">
    <h1>Chat</h1> -->

    <!-- <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    <div class="row justify-content-center">
      <div class="btn-group">
        <button type="submit" class="btn btn-success btn-lg">Send</button>
        <button type="button" class="btn btn-danger btn-lg" onclick="closeForm()">Close</button> -->
    </div>
  </div>
</form>
</div>

    