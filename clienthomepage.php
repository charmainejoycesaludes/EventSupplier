<?php

?>

<!-- ito daw sabi ni hersha ay pag open ng link ay ito ang lalabas--> yung mismo kunwari pag open ng website yan agad lalabas daw 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span><p>We love hearing from our researchers! Fill out this contact form to send us an email. We'll try our best to respond to you as soon as we can!</p></span>
        <span><p>We don't do guest posts but if you're a brand who is interested on collaborating with us, you can click on this <a href="">link</a> for options.</p></span>
        <span><strong>Thanks!!</strong></span>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Number</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<span class="d-flex flex-column">
    <span class="w-100 bg-dark" style="height:100px"></span>
    <span class="d-flex justify-content-end pe-5 pt-3">
        <span class="ms-4"><a href="clienthomepage.php"><button class="btn btn-primary" style="width: 150px;">Home</button></a></span>
        <span class="ms-4"><a href="customerside.php"><button class="btn btn-primary" style="width: 150px;">Event Supplier</button></a></span>
        <span class="ms-4"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><button class="btn btn-primary" style="width: 150px;" >Contact</button></a></span>
    </span>
    <hr>
    <span>
        <span class="d-flex justify-content-between">
            <span class="ms-5">
                <label>Upcoming</label>
                <input type="date">
            </span>
            <span >
                <input class="input" placeholder="Type your text" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </span>
        </span>
        <hr>
        <span class="d-flex">
            <span class="ms-5"><p>DATE</p></span>
        </span>
        <span style="height: 100%;" class="p-5">
            <div class="w-100 bg-secondary d-flex flex-column pt-5 pe-2 ps-2" style="height: auto;">
                <span class="mt-5"><p>Date:</p></span>
                <span><p>Name of event:</p></span>
                <span><p>Place:</p></span>
            </div>
        </span>
    </span>



</span>



<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,900;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .form button {
  border: none;
  background: none;
  color: #8b8ba7;
}
/* styling of whole input container */
.form {
  --timing: 0.3s;
  --width-of-input: 200px;
  --height-of-input: 40px;
  --border-height: 2px;
  --input-bg: #fff;
  --border-color: #2f2ee9;
  --border-radius: 30px;
  --after-border-radius: 1px;
  position: relative;
  width: var(--width-of-input);
  height: var(--height-of-input);
  display: flex;
  align-items: center;
  padding-inline: 0.8em;
  border-radius: var(--border-radius);
  transition: border-radius 0.5s ease;
  background: var(--input-bg,#fff);
}
/* styling of Input */
.input {
  font-size: 0.9rem;
  background-color: transparent;
  width: 100%;
  height: 100%;
  padding-inline: 0.5em;
  padding-block: 0.7em;
  border: none;
}
/* styling of animated border */
.form:before {
  content: "";
  position: absolute;
  background: var(--border-color);
  transform: scaleX(0);
  transform-origin: center;
  width: 100%;
  height