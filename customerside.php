<?php
include 'connection.php';

if(isset($_POST['booknow'])){   
  
  $fname = $_POST['fname']; 
  $mi = $_POST['mi'];
  $lname = $_POST['lname'];
  $mnum = $_POST['mnum']; 
  $email = $_POST['email'];
  $oc = $_POST['othercontact'];
  $date = $_POST['date'];
  $time = $_POST['time']; 
  $pic = $_POST['pic'];
 

  $sqladdfood = "INSERT INTO suppbook (fname,mi,lname,mnum,othercontact,email,dt,tm,pic) VALUES('$fname','$mi','$lname', '$mnum','$oc','$email','$date','$time','$pic')";
      $result3 = mysqli_query($con,$sqladdfood);
    
      echo '
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>Succesful added to order list!</div>
        </div>';
}

?>

<!-- ito ay para makapag book na, para kay EVENT SUPPLIER -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pe-2 ps-2">
      <span class=" w-100 d-flex justify-content-center pe-2 ps-2">
            <form method="post" class="form w-100 bg-light d-flex flex-column justify-content-center pe-2 ps-2">
                <span class="d-flex jusitfy-content-between">
                    <span class="d-flex flex-column">
                        <label>First Name</label>
                        <input type="text" class="" style="width: 200px;" name="fname">
                    </span>
                    <span>
                        <label>M. I.</label>
                        <input type="text" style="width: 100px;" name="mi">
                    </span>
                    <span>
                        <label>Last Name</label>
                        <input type="text" style="width: 150px;" name="lname">
                    </span>
                </span>
                <span class="d-flex flex-column">
                    <span>
                        <label>Mobile No.</label>
                        <input type="text" style="width: 100%;" name="mnum">
                    </span>
                    <span>
                        <label>Email</label>
                        <input type="text" style="width: 100%;" name="email">
                    </span>
                    <span>
                        <label>Other person to contact</label>
                        <input type="text" style="width: 100%;" name="othercontact">
                    </span>
                </span>
                <span>
                    <span class="mt-1">
                        <label>Date</label>
                        <input type="date" style="width: 100%;" name="date">
                    </span>
                    <span>
                        <label>Time</label>
                        <input type="time" style="width: 100%;" name="time">
                    </span>
                    <span class="mt-1">
                        <label>Payment</label>
                        <input type="file" style="width: 100%;" name="pic">
                    </span>
                    
                </span>
                
            
        </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="booknow" class="btn btn-primary">Book Now</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Service cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pe-2 ps-2">
        <span class=" w-100 pe-2 ps-2 d-flex justify-content-between">
            <span><strong><p>Photography</p></strong></span>
            <span class="d-flex ">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </span>
                <span class="ms-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
                        </svg>
</a>
                </span>
            </span>
            
        </span>
        <span class=" w-100 pe-2 ps-2 d-flex justify-content-between">
            <span><strong><p>Photography</p></strong></span>
            <span class="d-flex ">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </span>
                <span class="ms-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
                        </svg>
</a>
                </span>
            </span>
            
        </span>
        <span class=" w-100 pe-2 ps-2 d-flex justify-content-between">
            <span><strong><p>Package 1</p></strong></span>
            <span class="d-flex ">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </span>
                <span class="ms-3">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
                        </svg>
                    </a>
                </span>

            </span>
            
        </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Package Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pe-2 ps-2">
        <span class=" w-100 d-flex justify-content-start flex-column pe-2 ps-2">
            <span><strong><p>Package Name</p></strong></span>
            <span><label>Inclusion:</label></span>
        </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<span class="w-100 bg-dark pt-2 d-flex flex-column" style="width:100%">
<span><strong><p class="text-light ms-5">EVENT SUPPLIER</p></strong></span>
<form method="post" class="w-100 bg-light">
    <div class="container scrollable-div d-flex justify-content-between w-100 p-2">
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 300px;">Photographer/Videographer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Caterer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Florist/Decor</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Graphic Designer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Venue Manager</button>   
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Band/DJ/Host</button>        
        
    </div>
</form>
</span>
<span class="w-100 bg-ligh d-flex flex-column" style="width:100%">

    <span class="d-flex bg-dark text-light pt-2 pb-2 justify-content-between pe-5">
        <span><strong><p class="ms-5">PROFILE</p></strong></span>
        <button type="button" class="ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            </svg>
        </button>
    </span>
</span>
<span class="d-flex">
    <div class="cookie-card d-flex flex-column bg-light w-25">
        <span>
            <div style="border-radius: 50%; width: 200px; height: 200px" class="bg-dark" ><img src="" alt=""></div>
        </span>
        <span class="pt-5">
            <span class="title"><p>NAME</p></span>
            <p class="description">We use cookies to ensure that we give you the best experience on our website.</p>
            <div class="actions d-flex flex-column">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </span>
                <p class="description">Ratings</p>

            </div>
        </span>
        
    </div>
    <div class="cookie-card d-flex flex-column">
        <p>Services</p>
        <span class="d-flex justify-content-center row row-cols-5">
            <div class="card col me-2 ms-2">
                <div class="card-img"></div>
                <div class="card-info">
                    <p class="text-title">Service Name</p>
                    <p class="text-body">Service details</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">Price</span>
                    <div class="card-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                        </svg>
                    </div>
                </div>
                <button type="button" class="buttons d-flex justify-content-center text-center mt-2">
                        <span class="text-center"><span class="button__text ">Add</span></span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                </button>
            </div>
            <div class="card col me-2 ms-2">
            <div class="card-img"></div>
                <div class="card-info">
                    <p class="text-title">Service Name</p>
                    <p class="text-body">Service details</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">Price</span>
                    <div class="card-button " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                        </svg>
                    </div>
                </div>
                <button type="button" class="buttons d-flex justify-content-center text-center mt-2">
                        <span class="text-center"><span class="button__text ">Add</span></span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                </button>
            </div>
            <div class="card col me-2 ms-2">
            <div class="card-img"></div>
                <div class="card-info">
                    <p class="text-title">Service Name</p>
                    <p class="text-body">Service details</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">Price</span>
                    <div class="card-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                        </svg>
                    </div>
                </div>
                <button type="button" class="buttons d-flex justify-content-center text-center mt-2">
                        <span class="text-center"><span class="button__text ">Add</span></span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                </button>
            </div>
        
        </span>
        <span class="d-flex flex-column">
            <span class="d-flex justify-content-between flex-column">
                <span class="d-flex  justify-content-end w-100">
                    <button class="button me-5">
                        <p>Next</p>
                        <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                </span>
                <span class="d-flex">
                    <span class="">
                        <p>Package 1</p>
                        <div style="border-radius: 25px; width: 200px; height: 200px" class="bg-dark" ><img src="" alt=""></div>
                    </span>
                    <span class="mt-5 ms-5 ">
                        <p>Details</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam voluptate dicta temporibus odio ab ratione vero nostrum odit non, reprehenderit aliquid aperiam recusandae nihil blanditiis obcaecati voluptatum natus suscipit? Dolores!</p>
                        <button class="buttonview me-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <p>View More</p>
                            <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    </span>
                </span>
                
                
            </span>
            <span>

            </span>
            <span class="w-100 d-flex justify-content-end">
                <span>
                    <button type="button" class="buttons d-flex justify-content-center text-center">
                        <span class="text-center"><span class="button__text ">Add</span></span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                    </button>
                </span>
                <button type="button" class="ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="transition"></span>
                    <span class="gradient"></span>
                    <span class="label">Send Book Request</span>
                </button>
            </span>
            <span class="">
                <span class="title"><p>Comment</p></span>
                <textarea name="" id="" cols="30" rows="5" class="w-100"></textarea>
            </span>
        </span>
    </div>
</span>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,900;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>

.card {
 width: 190px;
 height: 400px;
 padding: .8em;
 background: #f5f5f5;
 position: relative;
 overflow: visible;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.card-img {
 background-color: #ffcaa6;
 height: 40%;
 width: 100%;
 border-radius: .5rem;
 transition: .3s ease;
}

.card-info {
 padding-top: 10%;
}

svg {
 width: 20px;
 height: 20px;
}

.card-footer {
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding-top: 10px;
 border-top: 1px solid #ddd;
}

/*Text*/
.text-title {
 font-weight: 900;
 font-size: 1.2em;
 line-height: 1.5;
}

.text-body {
 font-size: .9em;
 padding-bottom: 10px;
}

/*Button*/
.card-button {
 border: 1px solid #252525;
 display: flex;
 padding: .3em;
 cursor: pointer;
 border-radius: 50px;
 transition: .3s ease-in-out;
}

/*Hover*/
.card-img:hover {
 transform: translateY(-25%);
 box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
}

.card-button:hover {
 border: 1px solid #ffcaa6;
 background-color: #ffcaa6;
}

.buttons {
    display: block;
  position: relative;
  width: auto;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  border: 1px solid #34974d;
  background-color: #3aa856;
}

.buttons, .button__icon, .button__text {
  transition: all 0.3s;
}

.buttons .button__text {
  transform: translateX(30px);
  color: #fff;
  font-weight: 600;
}

.buttons .button__icon {
  position: absolute;
  transform: translateX(109px);
  height: 100%;
  width: 39px;
  background-color: #34974d;
  display: flex;
  align-items: center;
  justify-content: center;
}

.buttons .svg {
  width: 30px;
  stroke: #fff;
}

.buttons:hover {
  background: #34974d;
}

.buttons:hover .button__text {
  color: transparent;
}

.buttons:hover .button__icon {
  width: 148px;
  transform: translateX(0);
}

.buttons:active .button__icon {
  background-color: #2e8644;
}

.buttons:active {
  border: 1px solid #2e8644;
}


.buttonview {
  padding: 0;
  margin: 0;
  border: none;
  background: none;
}

.buttonview {
  --primary-color: #111;
  --hovered-color: #c84747;
  position: relative;
  display: flex;
  font-weight: 600;
  font-size: 20px;
  gap: 0.5rem;
  align-items: center;
}

.buttonview p {
  margin: 0;
  position: relative;
  font-size: 20px;
  color: var(--primary-color)
}

.buttonview::after {
  position: absolute;
  content: "";
  width: 0;
  left: 0;
  bottom: -7px;
  background: var(--hovered-color);
  height: 2px;
  transition: 0.3s ease-out;
}

.buttonview p::before {
  position: absolute;
/*   box-sizing: border-box; */
  content: "View More";
  width: 0%;
  inset: 0;
  color: var(--hovered-color);
  overflow: hidden;
  transition: 0.3s ease-out;
}

.buttonview:hover::after {
  width: 100%;
}

.buttonview:hover p::before {
  width: 100%;
}

.buttonview:hover svg {
  transform: translateX(4px);
  color: var(--hovered-color)
}

.buttonview svg {
  color: var(--primary-color);
  transition: 0.2s;
  position: relative;
  width: 15px;
  transition-delay: 0.2s;
}



.button {
  padding: 0;
  margin: 0;
  border: none;
  background: none;
}

.button {
  --primary-color: #111;
  --hovered-color: #c84747;
  position: relative;
  display: flex;
  font-weight: 600;
  font-size: 20px;
  gap: 0.5rem;
  align-items: center;
}

.button p {
  margin: 0;
  position: relative;
  font-size: 20px;
  color: var(--primary-color)
}

.button::after {
  position: absolute;
  content: "";
  width: 0;
  left: 0;
  bottom: -7px;
  background: var(--hovered-color);
  height: 2px;
  transition: 0.3s ease-out;
}

.button p::before {
  position: absolute;
/*   box-sizing: border-box; */
  content: "Next";
  width: 0%;
  inset: 0;
  color: var(--hovered-color);
  overflow: hidden;
  transition: 0.3s ease-out;
}

.button:hover::after {
  width: 100%;
}

.button:hover p::before {
  width: 100%;
}

.button:hover svg {
  transform: translateX(4px);
  color: var(--hovered-color)
}

.button svg {
  color: var(--primary-color);
  transition: 0.2s;
  position: relative;
  width: 15px;
  transition-delay: 0.2s;
}


    button {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 17px;
  padding: 1em 2.7em;
  font-weight: 500;
  background: #1F2937;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
}

.gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
}

.label {
  position: relative;
  top: -1px;
}

.transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(16, 185, 129, 0.6);
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

button:hover .transition {
  width: 100%;
  height: 14em;
}

button:active {
  transform: scale(0.97);
}
    .cookie-card {
  width: 100%;
  padding: 1rem;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
}

.title {
  font-weight: 600;
  color: rgb(31 41 55);
}

.description {
  margin-top: 1rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgb(75 85 99);
}

.description a {
  --tw-text-opacity: 1;
  color: rgb(59 130 246);
}

.description a:hover {
  -webkit-text-decoration-line: underline;
  text-decoration-line: underline;
}

.actions {
  display: flex;
  

  margin-top: 1rem;
  -moz-column-gap: 1rem;
  column-gap: 1rem;
  flex-shrink: 0;
}

.pref {
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgb(31 41 55 );
  -webkit-text-decoration-line: underline;
  text-decoration-line: underline;
  transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
  border: none;
  background-color: transparent;
}

.pref:hover {
  color: rgb(156 163 175);
}

.pref:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.accept {
  font-size: 0.75rem;
  line-height: 1rem;
  background-color: rgb(17 24 39);
  font-weight: 500;
  border-radius: 0.5rem;
  color: #fff;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  border: none;
  transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
  width: 150px;
}

.accept:hover {
  background-color: rgb(55 65 81);
}

.accept:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}
.input {
  max-width: 190px;
  background-color: #f5f5f5;
  color: #242424;
  padding: .15rem .5rem;
  min-height: 40px;
  border-radius: 4px;
  outline: none;
  border: none;
  line-height: 1.15;
  box-shadow: 0px 10px 20px -18px;
}

input:focus {
  border-bottom: 2px solid #5b5fc7;
  border-radius: 4px 4px 2px 2px;
}

input:hover {
  outline: 1px solid lightgrey;
}
</style>