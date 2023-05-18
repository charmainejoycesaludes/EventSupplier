<?php
include 'connection.php';
if(isset($_POST['addaccount'])){   
  
  $fname = $_POST['fname']; 
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $bday = $_POST['bday']; 
  $province = $_POST['province'];
  $muni = $_POST['muni'];
  $email = $_POST['email'];
  $address = $_POST['address']; 
  $pword = $_POST['pword'];
  $cpass = $_POST['cpass']; 

  $sqladdfood = "INSERT INTO mainacc (fname,lname,gender,bday,province,muni,adds,email,pass) VALUES('$fname','$lname','$gender', '$bday','$province','$muni','$address','$email','$pword')";
      $result3 = mysqli_query($con,$sqladdfood);
     
    
      echo '
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>Succesful added to order list!</div>
        </div>';
}

?>

<!-- add the admin, para kay ADMIN --> 
<span class="d-flex justify-content-center w-100 p-5">
    <span class="d-flex w-100 bg-light" >
        <span>
            <form method= "post" class="form" style="width:500px">
                <span><strong><p>ADD NEW ACCOUNT</p></strong></span>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input" name="fname">
                        <span>first name</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input" name="lname">
                        <span>last name</span>
                    </label>
                </div>  
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input" name="gender">
                        <span>Gender</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input" name="bday">
                        <span>Birthdate</span>
                    </label>
                </div>  
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input" name="province">
                        <span>Province</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input" name="muni">
                        <span>Municipality</span>
                    </label>
                </div>  
                <label>
                    <input required="" placeholder="" type="email" class="input" name="email">
                    <span>email</span>
                </label>  
                <label>
                    <input required="" type="text" placeholder="" class="input" name="address">
                    <span>Address</span>
                </label>
                <label>
                    <input required="" type="password" placeholder="" class="input" name="pword">
                    <span>Password</span>
                </label>
                <label>
                    <input required="" type="password" placeholder="" class="input" name="cpass">
                    <span>Confirm Password</span>
                </label>
                <button type="submit" name="addaccount">
                    <span class="transition"></span>
                    <span class="gradient"></span>
                    <span class="label">Button</span>
                </button>
            </form>
        </span>
        <span class="d-flex flex-column bg-light w-100 p-5">
            <span class="d-flex justify-content-start bg-light" style="width:700px">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg>
                <span class="ms-3 mt-3"><strong><p>Account List</p></strong></span>
            </span>
            <span>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-start">First Name</th>
                        <th scope="col" class="text-start">Last Name</th>
                        <th scope="col" class="text-start">Gender</th>

                        <th scope="col" class="text-start">Birthday</th>
                        <th scope="col" class="text-start">Province</th>
                        <th scope="col" class="text-start">Municipality</th>
                        <th scope="col" class="text-start">Email</th>
                        <th scope="col" class="text-start">Password</th>
                        <th scope="col" class="text-start">Address</th>

                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                  <?php
                  include 'connection.php';
                   $sql="SELECT * FROM mainacc";
                   $result=mysqli_query($con,$sql);

                   if($result){
                    while ($row=mysqli_fetch_assoc($result)){
                    $fname = $row['fname']; 
                    $lname = $row['lname'];
                    $gender = $row['gender'];
                    $bday = $row['bday']; 
                    $province = $row['province'];
                    $muni = $row['muni'];
                    $email = $row['email'];
                    $address = $row['adds']; 
                    $pword = $row['pass'];

                   }
                echo'
                    <tr>
                        <td class="text-start">'.$fname.'</td>
                        <td class="text-start">'.$lname.'</td>
                        <td class="text-start">'.$gender.'</td>
                        <td class="text-start">'.$bday.'</td>
                        <td class="text-start">'.$province.'</td>
                        <td class="text-start">'.$muni.'</td>
                        <td class="text-start">'.$email.'</td>
                        <td class="text-start">'.$address.'</td>
                        <td class="text-start">'.$pword.'</td>
                        <td class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </td>
                    </tr>';
                echo'</tbody>';
                  }
                ?>
                </table>
            </span>
        </span>
    </span>
</span>












<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,900;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>

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
    .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  position: relative;
  height: 100%;
}

.message {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
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
  border-radius: 5px;
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

.input01 {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 5px;
}

.form label .input01 + span {
  position: absolute;
  left: 10px;
  top: 50px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input01:placeholder-shown + span {
  top: 40px;
  font-size: 0.9em;
}

.form label .input01:focus + span,.form label .input01:valid + span {
  top: 50px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input01:valid + span {
  color: green;
}




</style>