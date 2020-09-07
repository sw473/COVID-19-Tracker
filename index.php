<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19  TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Vaccine Updates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#get">Get Presciption</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
     
    </ul>
   
  </div>
</nav>

<div class="main-header">
      <div class="row w-100 h-100">
        <div class="col-lg-5  col-md-5 col-12 order-lg-1 order-lg-2">
           <div class="left-img w-100 h-100 d-flex justify-content-center align-items-center">
             <img src="images/un.png" width="300" height="300">
           </div>
        </div>

        <div class="col-lg-7  col-md-7 col-12 order-lg-2 order-lg-1">
             <div class="right-side  w-100 h-100 d-flex justify-content-center align-items-center">
               <h1>Let's stay safe & defeat Cor<span class="corona-rotate"><img src="images/corona.jpg" width="100" height="100"></span>na Virus together</h1>
             </div>
        </div>
      </div>
</div>

<section class="corona-update container-fluid">
  <div class="mb-3">
    <h1 class="text-uppercase text-center pb-5 mb-2"><b>Covid-19 Updates</b></h1>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Country</th>
        <th>Total Confirmed</th>
        <th>Total Recovered</th>
        <th>Total Deaths</th>
        <th>New Confirmed</th>
        <th>New Recovered</th>
        <th>New Deaths</th>
      </tr>
    </table>
  </div>

  </div>
</section>


<div class="container-fluid sub-section pt-5 pb-5" id="about">
  <div class="section-header text-center mb-5 mt-3">
     <h1>About COVID-19</h1>
  </div>

  <div class="row ml-5 mt-5 pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5 mt-5 about-res">
      <img src="images/about1.jpg" width="400" height="400" class="img-fluid">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
       <h2>What is COVID-19?</h2>
       <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases
          such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). 
          A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
       <p>Coronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed investigations found 
          that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans.
          Several known coronaviruses are circulating in animals that have not yet infected humans.
          Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. 
          In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.
          Standard recommendations to prevent infection spread include regular hand washing, covering mouth 
          and nose when coughing and sneezing, thoroughly cooking meat and eggs. Avoid close contact with 
          anyone showing symptoms of respiratory illness such as coughing and sneezing.</p>
    </div>
  </div>
</div>

<div class="container-fluid pt-5 pb-5" id="symptoms">
  <div class="section-header text-center mb-5 mt-3">
     <h1>Corona Symptoms</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cough.jpg" class =img-fluid width="120" height="120">
        <figcaption>Coughing</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/sneeze.jpg" class =img-fluid width="240" height="240">
        <figcaption>Sneezing</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/fever.jpg" class =img-fluid width="150" height="120">
        <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cold.jpg" class =img-fluid width="120" height="120">
        <figcaption>Cold</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/tired.jpg" class =img-fluid width="180" height="180">
        <figcaption>Tiredness</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/breathe.jpg" class =img-fluid width="120" height="120">
        <figcaption>Difficulty Breathing</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>  

<div class="container-fluid sub-section pt-5 pb-5" id="prevention">
  <div class="section-header text-center mb-5 mt-3">
     <h1>6 Steps For Prevention Against Corona Virus</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/handwash.png" class =img-fluid width="90" height="90">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>Wash you hands regularly for 20 seconds with soap and water or alcohol based sanitizer.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/mask.jpg" class =img-fluid width="120" height="150">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>Wear a mask whenever you go out of the home.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/distance.jpg" class =img-fluid width="120" height="150">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>Maintain a distance of atleast 3 feet from the people who are unwell.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/home.png" class =img-fluid width="90" height="90">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>Stay home and self-isolate yourself from others in the house if you feel unwell.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/news.jpg" class =img-fluid width="90" height="90">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>Stay updated by watching news & follow the guidelines issued by the government.</p>
          </div>  
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
          <img src="images/sick.jpg" class =img-fluid width="90" height="90">
          </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12">
          <p>If you have fever,cough ,cold or difficulty in breathing,seek for medical helpimmediately.</p>
          </div>  
        </div>
      </div>

    </div>
  </div>
</div>  


<div class="container-fluid pt-5 pb-5" id="get">
  <div class="section-header text-center mb-5 mt-3">
     <h1>Get Prescription From The Doctors</h1>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg- col-12">

      <form action="" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="username" placeholder="Full Name" autocomplete="off">
      </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"name="email" placeholder="Enter Email" required autocomplete="off">
  </div>
  
  <div class="form-group">
        <label>Mobile Number</label>
        <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile Number" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Select Symptoms</label> <br>

    <div class="custom-control custom-checkbox custom-control-inline test-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="Cold">
      <label class="custom-control-label" for="customcheckbox1">Cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline test-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
      <label class="custom-control-label" for="customcheckbox2">Fever</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline test-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Breathing Problem">
      <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline test-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Tiredness">
      <label class="custom-control-label" for="customcheckbox4">Weakness</label>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">State your problems here:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
    </div>

  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
      </div>
    </div>
  </div>
</div> 

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
  <div class="footer-style text-black text-center container-fluid"> 
    <p>Copyright 2020 Swastik Srivastava</p>
 </div>
</footer>

<script type="text/javascript">

mybutton = document.getElementById("myBtn");

window.onscroll = function(){
  scrollFunction()
};

function scrollFunction() {
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    mybutton.style.display = "block";
  }
  else{
    mybutton.style.display = "none";
  }
}

function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function fetch(){
  $.get("'https://api.covid19api.com/summary",
    function(data){
      //console.log(data['Countries'].length)
      var tbval = document.getElementById('tbval');

      for(var i=1;i<=(data['Countries'].length);i++){
        var x = tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background = '#7a4a91';
        tbval.rows[i].cells[0].style.color = '#ffffff';

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background = '#4bb7d8';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background = '#4bb7d8';

        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background = '#f36e23';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background = '#4bb7d8';

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background = '#9cc850';

        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background = '#f36e23';
      }
    }
  );
}


</script>

</body>

</html>


<?php

  include 'dbcon.php';

  if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp= $_POST['coronasym'];
    $msg = $_POST['msg'];
  

  $chk = "";

  foreach($symp as $chk1){
    $chk .= $chk1.",";
  }

  $insertquery = " insert into coronacase(username,	email, mobile, symp, message) 
  values('$username', '$email', '$mobile', '$chk', '$msg') ";

  $query = mysqli_query($con, $insertquery);

  if($query){
    ?>
    <script>
        alert("Data inserted Successfully");
    </script>  
    <?php  
}
else{
    ?>
    <script>
        alert("Error!!! , Data could not be inserted");
    </script>
    <?php
}

} 

?>
