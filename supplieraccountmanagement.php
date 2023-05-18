<?php
include 'connection.php';
if(isset($_POST['Submit'])){   
  
  $des = $_POST['description']; 
  $details = $_POST['details']; 
  $of = $_POST['offer'];

  $sqladdfood = "INSERT INTO accounmanagement (descrip,details,offer) VALUES('$des','$details','$of')";
      $result3 = mysqli_query($con,$sqladdfood);
    
      echo '
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>Succesful added to order list!</div>
        </div>';
}
?>
<!-- dito sila mag upload ng mga oofer nila, para kay SUPPLIER -->
<span class="w-100 d-flex justify-content-center" style="height:100%">
    <span class="bg-light w-50 d-flex justify-content-center pt-5  mt-5" style="height: 500px;">
        <form class="form shadow-lg" method="post">    
            <label>
                <input required="" placeholder="" type="text" class="input" name="details">
                <span>Details</span>
            </label> 
            <textarea id="" cols="30" rows="10" placeholder="Description" name="description"></textarea>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" name="offer">
                    <span>Other</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span></span>
                </label>
            </div>  
            <button type="submit" name="Submit" class="submit">Submit</button>
        </form>
    </span>
    <span class="bg-dark w-100 d-flex flex-column p-5" style="height:100%">
        <span><p class="text-light mt-5">List</p></span>
        <span class="w-100 bg-light" style="height: 400px;width:500px">

        </span>
    </span>
</span>





<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,900;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}

</style>