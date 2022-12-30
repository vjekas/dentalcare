<?php

// $conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

// if (isset($_POST['submit'])) {

//     $name = mysqli_real_escape_string($conn, $_POST['name']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $number = $_POST['number'];
//     $date = $_POST['date'];

//     $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

//     if ($insert) {
//         $message[] = 'appointment made successfully!';
//     } else {
//         $message[] = 'appointment failed';
//     }
// }

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=contact_db', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = date('Y-m-d H:i:s');

    $statement = $pdo->prepare("INSERT INTO contact_form (name, email, number, date)
                    VALUES (:name, :email, :number, :date)");

    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':number', $number);
    $statement->bindValue(':date', $date);
    $statement->execute();

    if ($statement) {
        $message[] = 'Appointment made successfully!';
    } else {
        $message[] = 'Appointment failed';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts -->

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental<span>Care.</span></a>

                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn">Schedule Now</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>
        </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Treat your smile, treat your soul.
                    </p>
                    <a href="#contact" class="link-btn">Schedule Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">
        <div class="container">
            <div class="row aling-items-center">

                <div class="col-md-6 image">
                    <img src="images/zubar-about.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h2>Family Dentistry</h2>
                    <p>All the care your family needs — all under one roof. From your infant’s first dental exam
                        to teeth whitening before your wedding day,
                        you’ll be glad Dental Care is where you chose to call home for your whole family’s dental health needs.
                    </p>
                    <a href="#contact" class="link-btn">Schedule Now</a>
                </div>

            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignment Specialist</h3>
                <p>In our practice, we take time to listen to our patients’ thoughts and concerns,
                    and we work with them to create healthy and naturally beautiful smiles.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Everyone has a couple of things they wish they could change about their teeth.
                    At Dental Care, we design smile improvements focused on increasing your confidence and health.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>We can suggest the best products to help you to maintain your oral hygiene. Contact our team at Dental Care.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Root Canal Specialist</h3>
                <p>Our root canal dentist in Dental Care, provides specialized care including gentle root canals and emergency treatment.

                </p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Live Dental Advisory</h3>
                <p>In our practice, we take time to listen to our patients’ thoughts and concerns,
                    and we work with them to create healthy and naturally beautiful smiles.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>One of the most common dental issues in patients of all ages is the development of cavities or tooth decay.
                </p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- process section starts -->

    <section class="process">
        <h1 class="heading">Work Process</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>An attractive smile, or lack thereof, affects your oral health.</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pedriatic Dentistry</h3>
                <p>We can't wait to see you at your next visit!</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>The goal of teeth replacement in dentistry is to restore function as well as esthetics.</p>
            </div>

        </div>

    </section>

    <!-- process section ends -->

    <!-- reviews section ends -->

    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Great and legitimate service. You will look forward to going to the dentist.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mike James</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Doctor Vjekas Dev. Is a wonderful, passionate, loving, caring doctor.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Sandy Lima</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Friendly staff with awesome Doctor. They treat you like family.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>John Lakis</h3>
                <span>Satisfied Client</span>
            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>

        <!-- action="?php echo $_SERVER['PHP_SELF']; ?" -->
        <form action="" method="post">
            <?php

            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }

            ?>

            <span>Your Name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>Your Email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>Your Number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>Appointment Date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="Schedule Now" name="submit" class="link-btn">
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+123-456-789</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Adress</h3>
                <p>Novi Sad 21400, Srbija</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours</h3>
                <p>07:00 to 19:00</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>office@dentalcare.com</p>
            </div>

        </div>

         <!-- Solving problem with DB, clear history, no duplicates entries while refreshing page  -->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>

        <div class="credit">&copy; vjekas<span>.dev</span></div>

    </section>

    <!-- footer section ends -->




    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>