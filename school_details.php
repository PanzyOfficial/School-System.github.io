<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Name</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/font-awesome.css" rel="stylesheet" type="text/css" />
     <!-- custom css file link  -->
  <link rel="stylesheet" href="css/details.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<!-- home section starts  -->
<div class="blurry" id="blur">
<section class="home" id="home" >

    <div class="swiper home-slider" >

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(image/school-images/JHS/creator-school.png) no-repeat;">
                    <div class="hover-container">
                       <a href="#" class="btn">Day</a>
                       <a href="#" class="btn">Private</a>
                       <a href="#" class=" love-btn" onclick="toggleLove(this)">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                        </svg>
                       </a>
                       <h1>CREATOR SCHOOLS</h1>
                       <p> <h3>Creator Schools, founded by Rev. Comfort Chemfe Adjarko in 1983, emerged from humble beginnings as a creche in Tema, Ghana. </h3></p>
                       <a href="backend/schools/JHS/CREATOR/index.php">
                                <button>
                                    Visit Creator Schools Website.
                                </button>
                       </a>
                    </div>
                    <div class="hover-box">
                        
                        <div class="duration">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                            </svg>
                            <p><h2>NURSERY - JHS</h2> </p>
                            <p> <h4>Education Levels</h4></p>
                        </div>

                        <div class="Fees">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                        <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                        </svg>
                            <p><h2>GH₵ 1,000.00</h2> </p>
                            <p> <h4>Fees</h4></p>
                        </div>

                        <div class="application">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                            <p><h2>Mar 2024</h2> </p>
                            <p> <h4>Application Date</h4></p>
                        </div>

                        <div class="admission">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                            </svg>
                            <p><h2>Sept 2024</h2> </p>
                            <p> <h4>Start Date</h4></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<br><br><br><br><br>
<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/school-images/JHs/creator-logo.jpg" alt="">
    </div>

    <div class="content" id="aboutContent">
        <h3>About CREATOR SCHOOLS</h3>
        <p>Welcome to Creator Schools, a leading educational institution located in the heart of Tema, Ghana. Our school is dedicated to providing quality education to students from all walks of life, empowering them to become wise seekers of knowledge and creators of their own future.</p>
        <p class="hidden">At Creator Schools, we believe that knowledge is the key to unlocking boundless possibilities. Our mission is to contribute to the training of disciplined, morally astute, well-informed persons equipped for further training to meet the challenges of their society. We strive to create a clean environment that fosters honesty, neatness, proper dressing, initiative, hard work, prayer, the word of God, and worship.</p>
        <p class="hidden">Our vision is to be the school that turns out academically excellent and morally upright graduands who are able to compete anywhere in the world. We are proud to have been in the education sector for over 40 years, and we continue to provide our students with the best possible education.</p>
        <p class="hidden">We offer a wide range of courses, including ballet dancing, school band, pre-school extra-curricular activities, baseball team, and more. Our graduates have achieved great heights, excelling in diverse careers and securing admissions to top universities.</p>
       <button class="btn" onclick="toggleReadMore()">Read More</button>
    </div>

</section>

<!-- about section ends -->

<!-- information section starts  -->

<section class="Latest" id="Latest">
    <h1 class="heading">Infomartion About Creator Schools</h1>

    <div class="keywords">
        <li onclick="handleClick(this); overview();">Overview</li>
        <li onclick="handleClick(this); programme();">Programme Structure</li>
        <li onclick="handleClick(this); admission();">Admission Requirement</li>
        <li onclick="handleClick(this); fees();">Fees And Funding</li>
        <li onclick="handleClick(this); scholarship();">Scholarships</li>
    </div>

    <div class="keywords-content">
        <div class="overview" id="overview">
            <h1>Overview</h1>
            <p>Creator Schools is an educational institution located in Tema, Ghana. The school was founded in 1983 by Reverend Comfort Chemfe Adjarko with the aim of shaping Ghanaian children academically and morally . The school has grown from a creche to a full-fledged educational institution that provides quality education to students from pre-school to junior high school .</p>
            <p>The school’s motto is “The Wise Seeks Knowledge” . The school believes that knowledge is the key to unlocking boundless possibilities and aims to nurture young minds, empowering them to become wise seekers of knowledge and creators of their own future .</p>
            <p>Creator Schools is committed to training disciplined, morally astute, well-informed persons equipped for further training to meet the challenges of their society . The school’s core values include Clean Environment, Honesty, Neatness and Proper Dressing, Initiative and Hardwork, and Prayer, the Word of God, and Worship .</p>
            <p>The school has a vision to be the school that turns out academically excellent and morally upright graduands who are able to compete anywhere in the world . The school offers a range of services, including primary education .</p>
            <p>
            Creator Schools has produced remarkable alumni who have excelled in diverse careers and secured admissions to top universities . Miss Christiana Anguah, a military personnel in the US Navy, is one of the school’s notable alumni .    </p> 
            <p>The school’s website  provides information on the school’s history, mission, vision, and core values. The website also features the latest news and events, including the school’s 40th-anniversary launch, pre-school  pyjamas day, Ghana day celebration, and inter-class sporting activities .</p>
            <p>Creator Schools is dedicated to providing quality education to students in Tema and beyond. The school’s commitment to academic excellence, moral uprightness, and discipline has made it a top choice for parents seeking quality education for their children .</p>

        </div>

        <div class="programme" id="programme">
            <h1>Programme Structure</h1>
            <p>Creator Schools is an educational institution located in Tema, Greater Accra Region, Ghana. We offer a wide range of programmes to students of all ages, from pre-school to high school. Our programmes are designed to provide students with a well-rounded education that prepares them for success in their future endeavors.</p>
            <br>
            <p><h2>Pre-School Programme</h2></p>
            <p>The Pre-School program is designed for children aged 2-5 years old. The program focuses on developing the child’s cognitive, social, and emotional skills. The curriculum includes activities such as storytelling, music, art, and physical education.</p>

            <p><h2>Primary School Program</h2></p>
            <p>The Primary School program is designed for students aged 6-11 years old. The program is divided into two stages: Lower Primary (Grades 1-3) and Upper Primary (Grades 4-6). The curriculum includes subjects such as English, Mathematics, Science, Social Studies, and Creative Arts.</p>

            <p><h2>Junior High School Program</h2></p>
            <p>The Junior High School program is designed for students aged 12-15 years old. The program is divided into three stages: JHS 1, JHS 2, and JHS 3. The curriculum includes subjects such as English, Mathematics, Integrated Science, Social Studies, and French.</p>

            <br>
            <p>Creator Schools is committed to providing quality education to its students. The school has a team of experienced teachers who are dedicated to helping students achieve their full potential. The school also provides a range of extracurricular activities such as sports, music, and drama to help students develop their talents and interests.</p>
        
        </div>

        <div class="admission" id="admission">
           <h1>Admission Requirement</h1>
           <p>Creator Schools is an educational institution located in Tema, Ghana. The school offers a supportive and enriching learning environment that fosters personal development and academic excellence. The admission requirements for Creator Schools vary depending on the level of education. Here are the admission requirements for each level:</p> 

           <br>
           <p><h3>Pre-School 1 & 2 (Infants from 6 months above - 6 years)</h3></p>
           <p>
                <li>Visit the school website</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </p>

            <p><h3>Upper Primary</h3></p>
           <p>
                <li>Visit the school website</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </p>

            <p><h3>Junior High School</h3></p>
           <p>
                <li>Visit the school website</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </p>

            
            
        </div>

        <div class="fees" id="fees">
            <h1>Fees And Funding</h1>

        </div>

        <div class="scholarships" id="scholarships">
            <h1>Scholarships</h1>

        </div>
    </div>

</section>

<!-- information section ends -->

<!-- footer section starts  -->

 

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#reviews">reviews</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my wishlist</a>
            <a href="#">ask questions</a>
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>

        <div class="box" id="Contact">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +2345678908 </a>
            <a href="#"> <i class="fas fa-phone"></i> +11111114455 </a>
            <a href="#"> <i class="fas fa-envelope"></i> CompanyEmail@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Location </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit">created by <span>JOB GROUP LIMITED</span> | all rights reserved!</div>

</section>

<!-- footer section ends -->
<body>
<script>
function toggleLove(button) {
  const svg = button.querySelector('svg');
  if (button.classList.contains('clicked')) {
    svg.style.fill = '#f6b93b';
  } else {
    svg.style.fill = 'currentColor'; // Change from 'none' to 'currentColor'
  }
  button.classList.toggle('clicked');
}

</script>

<script>
    function handleClick(element) {
        // Remove 'clicked' class from all list items
        const listItems = document.querySelectorAll('.keywords li');
        listItems.forEach(item => item.classList.remove('clicked'));

        // Add 'clicked' class to the clicked list item
        element.classList.add('clicked');
    }

    function toggleReadMore() {
    var aboutContent = document.getElementById('aboutContent');
    aboutContent.classList.toggle('collapsed');
}

</script>


<script>
        var x = document.getElementById("overview")
        var y = document.getElementById("programme")
        var z = document.getElementById("admission")
        var w = document.getElementById("fees")
        var q = document.getElementById("scholarships")
       
        function overview()
        {
          x.style.left="50px";
          y.style.left="900px";
          z.style.left="950px";
          w.style.left="1050px";
          q.style.left="2000px";
         
        }
        function programme()
        {
          x.style.left="-900px";
          y.style.left="50px";
          z.style.left="900px";
          q.style.left="1025px";
          w.style.left="950px";
        }
        function admission()
        {
          x.style.left="-900px";
          y.style.left="-800px";
          z.style.left="50px";
          q.style.left="1230px";
          w.style.left="2550px";
         
        }
        function fees()
        {
          w.style.left="50px";
          x.style.left="-900px";
          y.style.left="-800px";
          z.style.left="-1050px";
          q.style.left="3060px";
         
        }
        function scholarship()
        {
          w.style.left="-3250px";
          x.style.left="-900px";
          y.style.left="-800px";
          z.style.left="-1050px";
          q.style.left="50px";
         
        }
        
   
   </script>


</body>

</html>