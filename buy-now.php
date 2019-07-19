<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  margin-left:10px;
  margin-top:20px;
  bottom: 23px;
  right: 28px;
  width: 490px;
  border-radius: 1px;
  font-size:24px;
  
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  width:280px;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
#txtarea{
    background-color:#f1f1f1;
    border:none;
    height:40px;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Buy Now</button>

<div class="form-popup" id="myForm">
  <form action="money.php" class="form-container">
    <h1>Address</h1>

    <label for="cname"><b>Customer Name</b></label>
    <input type="text" placeholder="Customer name" name="cname" required>

    <label for="cname"><b>Address & Pin code</b></label><br>
    <textarea id="txtarea"  name="comment"row="4" cols="34" form="myForm" placeholder="Enter your address with pin code..." required></textarea>

 <br><br>
    <label for="state"><b>State Name</b></label>
    <input type="text" placeholder="Enter state name" name="sname" required>

    <label for="num"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter your mobile number" name="mobile" required>

    <button type="submit" class="btn">Continue</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
