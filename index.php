<?php
include_once 'header.php';
?>




<body>

<!-- home section starts  -->

<section class="home" id="home">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pr-md-5" data-aos="zoom-in">
            <img src="img/7617.jpg" width="100%" alt="">
            
        </div>

        <div class="col-md-6 pl-md-5 content" data-aos="fade-left">

            <h1>The Health Multiclinic  aim to provide extensive healthcare to all 
                 students and employees of any institution.</h1>
            <a href="#"><button class="button">learn more</button></a>
        </div>

    </div>

</div>

</section>


<!-- home section ends -->

<!-- about services section start  -->

<section class="about" id="about">

<div class="container">
    <h1 class="heading">Services </h1>

    <div class="row min-vh-80 align-items-center">

        <div class="col-md-6 content" data-aos="fade-right">

          
            <div class="box">
                <h3> <i class="fas fa-tooth"></i> Dental Treatment </h3>
                <p>Dental care is the maintenance of healthy
                    teeth and may refer to: oral hygiene, the
                    practice of keeping the mouth and teeth
                    clean in order to prevent dental disorders.</p>
            </div>
                
            <div class="box">
                
                <h3> <i class="fas fa-user-md"></i> Physical Examination </h3>
                <p>A physical examination is a routine
                    test your primary care provider performs to check your overall health.</p>
            </div>

            <div class="box">
                <h3> <i class="fas fa-notes-medical"></i> Medical Examination</h3>
                <p> medical examination will include a
                    medical history review, physical
                    examination, chest X-ray and blood
                    tests for syphilis. </p>
            </div>

            <div class="box">
                <h3> <i class="fas fa-stethoscope"></i>Medical Treatment </h3>
                <p>TMedical treatment means the
                    management care of a patient to 
                    combat disease or disorder. </p>
            </div>

           

        </div>

        <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
            <img src="img/services offered.jpg" width="100%" alt="">
        </div>

    </div>

</div>

</section>

<!-- about services section ends -->

<!-- Staff section starts  -->

<section class="post" id="post">

    <div class="container min-vh-100">

        <h1 class="heading"><span></span> Staff <span></span></h1>

        <div class="box-container">

            <div class="box" data-aos="fade-right">
                <img src="img/nurse1.jpg" alt="">
                <div class="content">
                    <h3>Summer Davis</h3>
                    <p>Nurse</p>
                    
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="img/doctor.jpg" alt="">
                <div class="content">
                    <h3>Jennifer Oscar</h3>
                    <p>Head Doctor</p> 
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/nurse2.jpg" alt="">
                <div class="content">
                    <h3>Anthony Armstrong</h3>
                    <p>Nurse</p>
                  
                </div>
            </div>

        </div>

    </div>

</section>

<!-- staff section ends -->

<!-- facility section starts  -->

<section class="facility" id="facility">

<div class="container">

<h1 class="heading"> facilities </h1>

<div class="box-container">

    <div class="box" data-aos="zoom-in">
        <a href="img/dental1.jpg" title="Dental check-ups">
            <img src="img/dental1.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img/dental.jpg" title="Dental room">
            <img src="img/dental.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img/dental2.jpg" title="Dental check-ups">
            <img src="img/dental2.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img/reception1.jpg" title="Reception">
            <img src="img/reception1.jpg" alt="">
        </a>
    </div>
    <div class="box" data-aos="zoom-in">
        <a href="img/reception.jpeg" title="Reception">
            <img src="img/reception.jpeg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img/reception2.jpg" title="reception">
            <img src="img/reception2.jpg" alt="">
        </a>
    </div>

    <div class="box" data-aos="zoom-in">
        <a href="img/bed.jpg" title="reception">
            <img src="img/bed.jpg" alt="">
        </a>
    </div>
    <div class="box" data-aos="zoom-in">
        <a href="img/check-up.jpg" title="reception">
            <img src="img/check-up.jpg" alt="">
        </a>
    </div>


</div>

</div>

</section>

<!-- facility section ends -->

<?php
include_once 'footer.php';
?>



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="main.js"></script>


<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>