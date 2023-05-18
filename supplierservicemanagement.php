<?php
include 'connection.php';
if(isset($_POST['submit'])){   
  
  $dets = $_POST['details']; 
  $des = $_POST['descrip']; 
  $pt = $_POST['pic']; 
  

  $sqladdfood = "INSERT INTO servicemanagement (details,description,pic) VALUES('$dets','$des','$pt')";
      $result3 = mysqli_query($con,$sqladdfood);
    
      echo '
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>Succesful added to order list!</div>
        </div>';
}
?>
<!-- dito naman mga services nilang maooffer, para kay SUPPLIER-->
<span class="w-100 d-flex justify-content-center" style="height:100%">
    <span class="bg-light w-50 d-flex justify-content-center pt-5  mt-5" style="height: 500px;">
        <form method="post" class="form shadow-lg">    
            <label>
                <input required="" placeholder="" type="text" class="input" name="details">
                <span>Details</span>
            </label> 
            <textarea id="" cols="30" rows="10" placeholder="Description" name="descrip"></textarea>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="file" class="input" name="pic">
                    
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span></span>
                </label>
            </div>  
            <button type="submit" name="submit" class="submit">Submit</button>
        </form>
    </span>
    <span class="bg-dark w-100 d-flex flex-column p-5" style="height:100%">
        <span><p class="text-light mt-5">List</p></span>
        <span class="w-100 bg-light" style="height: 400px;width:500px">
        <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-start">Service</th>
                        <th scope="col" class="text-start">Description</th>
                        <th scope="col" class="text-start">File</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr>
                        <td class="text-start">Photography</td>
                        <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates alias voluptatum, numquam deleniti esse suscipit inventore quisquam maxime accusamus itaque sunt consectetur quibusdam nisi officia autem eaque, nihil dignissimos cum?</td>
                        <td class="text-start">File</td>
                        <td class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </td>
                    </tr>
                </tbody>
                </table>
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