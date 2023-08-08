<?php
$host = "localhost";
$username = "root";
$password = " ";

try
{
    $conn = PDD("mysql:host=$host;dbname=phptest", $username, $password);
    $conn->setAttribute(PDD::ATTR_ERRMODE, PDD::ERRMORE_EXCEPTION);
}
catch(PDDException $e)
{
    echo "connection failed: " . $e->getMessage();
}

if(isset($_POST['adoptform']))
{
    print_r($POST);
    $sql * "INSERT INTO petadoption(day, month, year, dogName, firstName,lastName, gender, address, town, postcode, phone, email, age, reason, allergy, housing, dropdown, comments) VALUES('".ddslashes($_POST['day'])."', '" .addcslashes($_POST['month'])"', '" .addcslashes($_POST['year'])"', '" .addcslashes($_POST['firstName'])"', '" .addcslashes($_POST['lastName'])"', '" .addcslashes($_POST['gender'])"', '" .addcslashes($_POST['address'])"', '" .addcslashes($_POST['town'])"', '" .addcslashes($_POST['postcode'])"', '" .addcslashes($_POST['phone'])"', '" .addcslashes($_POST['email'])"', '" .addcslashes($_POST['age'])"', '" .addcslashes($_POST['reason'])"', '" .addcslashes($_POST['allergy'])"', '" .addcslashes($_POST['housing'])"', '" .addcslashes($_POST['dropdown'])"', '" .addcslashes($_POST['comments'])."')";
    $conn->query($sql);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- External CSS -->
    <link href="styleforms.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Title -->
    <title>Pet Details Form</title>

  </head>

  <body>
    <!-- header -->

    <header>
        <h1 id="title">Pet Adoption Form</h1>
        <img id="top-pic" src="img/peekingdog.png" alt="Cute Dog Stare">
    </header>
        
    <!-- form -->
    
    <main>
    
        <form id="survey-form" action="adpotforms.php" method="post">
            <p id="description"><em>Thank you for wishing to offer a rescue dog a home! Please  could you complete the form below and submit it to us. </em></p>
    
    
    
            <!-- todays date -->
                <div id="todays-date">
                <label class="main-label" for="todays-date">Today's Date: </label>
                <select name="day" />
                    <option value="day">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="month" />
                    <option value="month">Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
                <select name="year" />
                    <option value="" e="year">Year</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
    
            <!-- dog name -->
    
            <div id="dogName">
                <label class="main-label" for="dogNameLabel">Name of the dog you wish to adopt: </  label>
                <input type="text" id="dogNameLabel" name="dogName" placeholder="Dog Name"  required />
            </div>
    
    
            <!-- name -->
    
            <div id="first-last-name">
                <label class="main-label" id="name-label">First Name: </label>
                <input type="text" id="firstname" name="firstName" placeholder="John" required />
    
                <label class="main-label">Last Name: </label>
                <input type="text" id="lastname" name="lastName" placeholder="Smith" required />
            </div>
    
            <!-- gender -->
            <div id="gender">
                <input type="radio" id="male" name="gender" value="1" required />
                <label class="main-label" for="male">Male</label>
    
                <input type="radio" id="female" name="gender" value="2" required />
                <label class="main-label" for="female">Female</label>
            </div>
    
            <!-- address  -->
    
            <div id="address">
                <label class="main-label" for="address1">Address: </label>
                <input type="text" id="address1" name="address" size="30" placeholder="Enter your   address here" />
    
    
                <label class="main-label" for="town">Town: </label>
                <input type="text" id="town" name="town" size="15" placeholder="Your town" />
    
                <label class="main-label" for="postcode">Postcode: </label>
                <input type="text" id="postcode" name="postcode" size="10" placeholder="Postcode" />
    
            </div>
    
            <!-- email / phone / age -->
    
            <div id="email-phone">
                <label class="main-label" id="phone-label" for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone" placeholder="e.g. +60 1234 567 890" />
    
                <label class="main-label" id="email-label" for="email">Email: </label>
                <input type="email" id="email" name="email" placeholder="e.g.   youremail@example.com" required size="35" />
    
            </div>
    
            <!-- age -->
    
            <div id="age">
                <ul><label class="main-label" for="age">Age of applicant:</label></ul>
    
                <li><input type="radio" id="u18" name="age" value="1" required />
                    <label for="u18">Under 18</label></li>
    
                <li><input type="radio" id="18" name="age" value="2" required />
                    <label for="18">18 - 24</label></li>
    
                <li><input type="radio" id="25" name="age" value="3" required />
                    <label for="25">25 - 34</label></li>
    
                <li><input type="radio" id="35" name="age" value="4" required />
                    <label for="35">35 - 44</label></li>
    
                <li><input type="radio" id="45" name="age" value="5" required />
                    <label for="45">45 and older</label></li>
    
            </div>
    
            <!-- why dog? -->
    
            <div id="why">
                <ul><label class="main-label" for="why">Why do you want to adopt a dog? Please  check all that apply:</label></ul>
                <li><input type="checkbox" name="reason" id="companion" value="companion" />
                    <label for="companion">Pet & Companion</label></li>
    
                <li><input type="checkbox" name="reason" id="gift" value="gift">
                    <label for="gift">Gift</label></li>
    
                <li><input type="checkbox" name="reason" id="hunting" value="hunting" />
                    <label for="hunting">Hunting Dog</label></li>
    
                <li><input type="checkbox" name="reason" id="breeding" value="breeding" />
                    <label for="breeding">Breeding Dog</label></li>
    
                <li><input type="checkbox" name="reason" id="guard" value="guard" />
                    <label for="guard">Guard Dog</label></li>
    
                <li><input type="checkbox" name="reason" id="senior" value="senior" />
                    <label for="senior">For a Senior</label></li>
    
                <li><input type="checkbox" name="reason" id="child" value="child" />
                    <label for="child">For a Child</label></li>
    
            </div>
    
            <!-- allergies -->
    
            <div id="allergies">
                <ul><label class="main-label" for="allergies">Is anyone in your household   allergic to pets?</label></ul>
    
                <li><input type="radio" id="yes" name="allergy" value="1" required/>
                    <label for="yes">Yes</label></li>
    
                <li><input type="radio" id="no" name="allergy" value="2" required/>
                    <label for="no">No</label></li>
    
                <li><input type="radio" id="sometimes" name="allergy" value="3" required/>
                    <label for="sometimes">Sometimes</label></li>
            </div>
    
            <!-- pets in household -->
    
            <div id="pets-household">
                <ul><label class="main-label" id="number-label">How many pets are already in your   household?
                </label></ul>
                <li><input type="number" id="number" name="housing" min="1" max="10" placeholder="0  " /></li>
            </div>
    
            <!-- housing -->
    
            <div id="housing">
                <label class="main-label">What type of housing you reside?</label>
                <select id="dropdown" name="dropdown" />
                <option disabled selected value>Select an option</option>
                <option value="apt">Apt / Condo</option>
                <option value="house">House</option>
                <option value="other">Other</option>
                </select>
            </div>
    
            <!-- comments -->
    
            <div id="prepare">
                <label class="main-label">How did you prepare yourself?</label>
            </div>
            <div id="textarea">
            <textarea id="comments" name="comments" 
                  rows="10" cols="70" placeholder=" Write here how did you prepare yourself for     adoption." /></textarea>
            </div>
    
            <!-- submit button -->
            <div id="button">
                <button type="submit" id="submit" name="send" value="submit">Submit</button>
            </div>            
    
                        <!-- Bootstrap | JS -->
                <!--<script>
                    document.getElementById("submitBtn").addEventListener('submit', btnClick);
                    
                    function btnClick() {
                      alert ("Thank you for saving a life by adopting!");
                    }
                </script>-->
    
    
    
    
        </form>
    </main>
    
    <!--above footer -->
    
    <div id="above-footer">
        <img id="bottom-pic" src="img/pet30.png" alt="Lying dog staring up">
    </div>
    
    <!-- footer -->
    
    <footer>
            <p id="copyright">2022 &copy; Barking Lot</p>
            <ul class="list-inline">
                <li class="list-inline-item footer-social"><a href="#" target="_blank"><i class="   fab fa-free-code-camp"></i></a></li>
                <li class="list-inline-item footer-social"><a href="#" target="_blank"><i class="   fab fa-codepen"></i></a></li>
                <li class="list-inline-item footer-social"><a href="#" target="_blank"><i class="   fab fa-github"></i></a></li>
                <li class="list-inline-item footer-social"><a href="#" target="_blank"><i class="   fab fa-linkedin"></i></a></li>
                <li class="list-inline-item footer-social"><a href="#" target="_blank"><i class="   fab fa-twitter"></i></a></li>
            </ul>
        </footer>
    
          
      </body>