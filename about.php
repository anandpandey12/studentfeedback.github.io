
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 20px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 30%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 30%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We are the student of TCET and Working on project </p>
  <p>This Project comes under Project Base larning i.e PBL</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/anand1.jpeg" alt="Anand Pandey" style="width:100%">
      <div class="container">
        <h2>Anand Pandey</h2>
        <p class="title">Team Leader</p>
        <p>09_SE_IT_B</p>
        <p>anandpandey2525@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/darshan2.jpeg" alt="Darshan" style="width:100%">
      <div class="container">
        <h2>Darshan Shelar</h2>
        <p class="title">Member</p>
        <p>39_SE_IT_B</p>
        <p>darshanshelar@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/kanak1.jpeg" alt="Kanak" style="width:100%">
      <div class="container">
        <h2>Kanak Gupta</h2>
        <p class="title">Member</p>
        <p>06_SE_IT_B</p>
        <p>kanak@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<div class="column">
    <div class="card">
      <img src="images/feedback1.jpg" alt="Bhavesh" style="width:100%">
      <div class="container">
        <h2>Bhavesh Mulewa</h2>
        <p class="title">Member</p>
        <p>02_SE_IT_B</p>
        <p>bhavesh@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</body>
</html>


            
        
        <!-- /.row -->

        <!-- Footer -->
     