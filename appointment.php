<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/Home.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <!--Script-->
    <script src="js/scripts.js"></script>
</head>
<body>
    <header>
        <ul>
            <div id="logobox">
                <li><img src="image/logo2.jpeg" alt="" width="400px"></li>
            </div>
            <div class="menu" style="margin: 0px;">
                <ul class="links">
                    <li class="Contact"><a href="#"><i class="fas fa-hand-holding-medical"></i> Services Medical <i class="fas fa-caret-down"></i></a> 
                        <ul class="submenu">
                            <li><a href="#">Laboratory</a></li>
                            <li><a href="#">Pharmacy</a></li>
                        </ul>
                    </li>
                    <li class="Pharmacy"><a href="#"><i class="fas fa-pager"></i> Page <i class="fas fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </li>
                    <li class="Doctors"><a href="#"><i class="fas fa-user-md"></i> Doctors <i class="fas fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Doctors</a></li>
                        </ul>
                    </li>
                    <li class="Centre"><a href="#"><i class="fas fa-spa"></i> Thalasso </a> 
                        <ul class="submenu">
                            <li><a href="#">Thalasso</a></li>
                            <li><a href="#">Thalasso</a></li>
                            <li><a href="#">Thalasso</a></li>
                        </ul>
                    </li>
                    <li class="clinics"><a href="#"><i class="fas fa-clinic-medical"></i> Clinics </a> 
                        <ul class="submenu">
                            <li><a href="#">Clinics</a></li>
                            <li><a href="#">Clinics</a></li>
                            <li><a href="#">Clinics</a></li>
                        </ul>
                    </li>
                    <li class="home"><a href="#" style="padding: 7px 75px;"><i class="fas fa-home"></i> Home <i class="fas fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">What we treat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </ul>
    </header>
    <img src="image/ban00123.png" style="margin:120px 0px 0px -1%; width: 101%">
    <section>
        <aside>
            <img src="image/th.jpg.jpg">
            <img src="image/logo.png">
            <p>Sign up to receive the newsletters in your mailbox.</p>
            <img id="logoemail" src="image/Image5-150x150.png">
            <div class="mail">
                <li><input type="email" id="email" placeholder="Your email" pattern=[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$ required></li>
                <li><input type="submit" id="send" name="send" value="Send"></li>
            </div>
        </aside>
        <div class="Appointment">
            <h1>Make An Appointment Now</h1>
            <p>To Request an appointment, please enter your informations and press the "send " bouton. 
                Name, phone number, and email are mendortory to recive your request</p>
            <form action="php/mail.php" method="POST" name="form" class="form-box">
            <center>
                <ul>
                    <li>
                        <label>First Name(Required)</label><br>
                        <input type="text" id="FirstName" name="FirstName" pattern=[a-zA-Z]* title="must contain only letters" required><br>
                        <span id="erreurF"> </span>
                    </li>
                    <li>
                        <label>Second Name(Required)</label><br>
                        <input type="text" id="SecondName" name="SecondName"  pattern=[A-Za-z]* title="must contain only letters" required><br>
                        <span id="erreurS"> </span>
                    </li><br>
                    <li>
                        <label>Mobile(Required)</label><br>
                        <input type="number" id="Mobile" name="Mobile" pattern=[0-9]* title="must contain only numbers" required><br>
                        <span id="erreurM"> </span>
                    </li>
                    <li>
                        <label>Email(Required)</label><br>
                        <input type="email" id="email" name="email" placeholder="Your email" pattern=[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$ required>
                    </li><br>
                    <li>
                        <label>Country</label>
                        <br><input list="browsers" name="browser1" id="country"  oninput="hideList(this,'browsers')" required></li>
                        <datalist id="" class="browsers" >
                            <option value="Tunis">
                                <option value="Sousse">
                                <option value="Sfax">
                                <option value="Monastir">
                                <option value="Djerba">
                            </datalist>
                        </li>
                    </li>
                    <li>
                        <label>Job</label><br>
                        <input type="text" id="Job" name="Job" pattern=[a-zA-Z]* required><br>
                        <span id="erreurJ"> </span>
                    </li><br>
                    <li style="margin-left:-330px">
                        <label>Type Treatment</label>
                        <br><input list="browsers2" name="browser2" id="treatment" oninput="hideList(this,'browsers2')" required></li>
                        <datalist id="" class="browsers2">
                                <option value="Dental implants">
                                <option value="laser teeth whitening"></option>
                                <option value="regular teeth cleaning"></option>
                                <option value="dentistry and orthodontics"></option>
                                <option value="root canal treatment"></option>
                                <option value="urology"></option>
                                <option value="orthopedics"></option>
                                <option value="plastic surgery"></option>
                                <option value="ophtalmology"></option>
                                <option value="male infertility"></option>
                                <option value="female infertility"></option>
                                <option value="massage"></option>
                                <option value="wrinkles removal"></option>
                                <option value="laser lipolysis"></option>
                                <option value="face lift surgery"></option>
                                <option value="facial peels"></option>
                                <option value="crown-porcelain/ceramic"></option>
                            </datalist>
                        </li>   
                    </li>
                    <li>
                        <label>Clinic (Required)</label>
                        <br><input list="browsers3" name="browser3" id="clinic"  oninput="hideList(this,'browsers3')" required></li>
                        <datalist id="" class="browsers3">
                                <option value="Clinic">
                                <option value="Clinic">
                                <option value="Clinic">
                                <option value="Clinic">
                                <option value="Clinic">
                            </datalist>
                        </li>
                    </li>
                </ul>
                <input type="submit" id="send" name="send" value="Send" onclick="verif()">
            </center>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-top">
            <ul style=" width: 39%;" >
                <li><a href="#">About Us</a></li>
                <li><a href="#">Clinics</a></li>
                <li><a href="#">Doctors</a></li>
            </ul>
            <ul style=" width: 39%;">
                <li><a href="#">Thalasso Center</a></li>
                <li><a href="#">Pharmacy</a></li>
                <li><a href="#">Make an oppointement</a></li>
            </ul>
            <ul style="width: 10%;">
                <li><a href="#">What we treat</a></li>
                <li><a href="#">Magazine</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="adresse">
            <p>Adresse: Route de soukra Tunis 1001</p>
            <p>E-mail: <a href="mailto:Conatct@tourismmedical.com">Conatct@tourismmedical.com</a></p>
            <p>Phone: 71000000</p>
        </div>
        <div class="follow">
            <li><h3>Follow us</h3></li>
            <li><div class="social">
                    <img src="image/fb.png">
                    <img src="image/twi.png">
                    <img src="image/inst.png">
                    <img src="image/yout.png">
                </div>
            </li>
        </div>
        <div class="footer-bottom">
            <li><img src="image/smallogo.png"></li>
            <li><p>Copyright © 2020 World Medical Tourism | <a href="http://smartbrandweb.com">Development and Management from Smart Brand Web</a></p></li> 
        </div>
    </footer>


</body>
</html>