<?php

?>
<!-- mga profile ng supplier, SUPPLIER -->
<span class="w-100 bg-dark pt-2 d-flex flex-column" style="width:100%">
<span><strong><p class="text-light ms-5">EVENT SUPPLIER</p></strong></span>
<form method="post" class="w-100 bg-light">
    <div class="container scrollable-div d-flex justify-content-between w-100 p-2">
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Photographer/Videographer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Caterer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Florist/Decor</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Graphic Designer</button>
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Venue Manager</button>   
        <button class="btn rounded item shadow-lg btn-primary btns" type="submit" style="width: 250px;">Band/DJ/Host</button>        
        
    </div>
</form>
</span>
<span class="w-100 bg-ligh d-flex flex-column" style="width:100%">
    <span class="d-flex flex-row-reverse mt-2 mb-2 me-3">
        <span><button class="btn btn-primary rounded item shadow-lg" type="submit" style="width: 150px;">Search</button></span>
        <span><input class="input me-2" name="text" placeholder="type here..." type="search"></span>    
    </span>
    <span class="d-flex bg-dark text-light pt-2">
        <span><strong><p class="ms-5">PROFILE</p></strong></span>
    </span>
</span>
<span>
    <div class="cookie-card d-flex">
        <span>
            <div style="border-radius: 50%; width: 200px; height: 200px" class="bg-dark" ><img src="" alt=""></div>
        </span>
        <span class="ms-5 w-100 pt-5">
            <span class="title"><p>NAME</p></span>
            <p class="description">We use cookies to ensure that we give you the best experience on our website.</p>
            <div class="actions">
                <p class="description">Ratings</p>
                <button class="accept">
                    View Profile
                </button>
            </div>
        </span>
        
    </div>
</span>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,900;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .scrollable-div{
    overflow-x: scroll;

  }
  .btns{
    gap: 5px;
  }
  .container{
    display: flex;
    overflow: auto;
    scroll-snap-type: x mandatory;
    padding: 10px;
    gap: 10px;
    scroll-padding: 10px;
    
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
  align-items: center;
  justify-content: space-between;
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