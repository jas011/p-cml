<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="flip-card.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="script.js"></script>
    <script src="shuffle.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&family=Katibeh&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:wght@400;700&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Sometype+Mono:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&family=Katibeh&family=Poppins:wght@400;700&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Sometype+Mono:wght@600&display=swap" rel="stylesheet">
<style>
.member {
    display: flex;
    grid-template-columns: auto auto auto;
    gap: 25px;
    margin: auto;
    justify-items: center;
    width: auto;
    flex-wrap: wrap;
    justify-content: center;
}


.contain {
    display: flex;
    flex-direction: column;
    gap: 52px;
    padding: 65px;
    align-items: center;
}
.container{
    justify-content: center;
}
.flip-card-container {
    margin: 0;
}
.ybox{
  display: flex;
  flex-direction: column;
  align-items: center;
}
@media only screen and (max-width: 920px) { 
  section.title {
    margin-top: 24vw;
}
.container {
  margin: 0;
}
.items h6 {
        color: black;
        font-size: 3vw;
        word-break: break-word;
    }
#date h6 {
    font-size: 15px;
}
div#desc {
    width: 192px;
}
.contain {
  padding:0;
}
h2 {
        margin: 12px auto;
        text-align: center;
        color: #F5643C;
    }
}
</style>
</head>
<body>

<header class="header">
    <?php include "components/navbar.php" ?>
     </header>

     <?php include "components/svg.php" ?>

        <section class="title">
        <div class="head"style="background: none;"> 
        <h2>Center for Multi-Faceted Learning hosts events throughout the session <br><span style="color:black;">to boost your knowledge, interpersonal skills, and personal growth</span></h2> 
        </div>
        </section>

        <section class="Faculty">
           <div class="container sec" style="background: #1d2026">
            <div class="contain">
                <h2 style="color:#DDDDDD">Events</h2>
                <div class="box member"></div>
            </div>
            
           </div>
        </section>

           
          </div>
       </section>
          <footer>
            <div class="container sec" style="flex-direction: column;margin: 47px auto;margin-bottom: 0;">
              
              <div class="box">
              <div class="logoico">
                <img src="https://cml.gndec.ac.in/assets/images/logogne.png" alt="" height="140">
                <img src="https://cml.gndec.ac.in/assets/images/cml_logo.png" alt=""  height="140">
              </div>
              <div class="email">
                <input type="email" name="" class="inp" placeholder="Email Address"> <input type="button" value="Subscribe"class="btn">
              </div>
            </div>
              <hr>
              <div class="pglinks">
                <div class="t">
                  <h4>CML</h4>
                  <h5>Center For Multi-Faceted Learning,<br> Guru Nanak Dev Engineering College, Ludhiana</h5>
                </div>
                <div class="l">
                  
                    <div class="navl">
                      <h3>Navigation</h3>
                      <ol>
                        <li><a href="">Home</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                      </ol>
                    </div>
                  
                    <div class="navl">
                      <h3>Social</h3>
                      <ol>
                        <li><a href="">Youtube</a></li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">LinkedIn</a></li>
                        <li><a href="">Instagram</a></li>
                      </ol>
                    </div>
                  
                    <div class="navl">
                      <h3>More..</h3>
                      <ol>
                        <li><a href="">Faculty</a></li>
                        <li><a href="">Members</a></li>
                        <li><a href="">Web Developers</a></li>
                        
                      </ol>
                    </div>
                  
                </div>
              </div>
              <hr>
              <div class="cc">
                <div style="flex:1.7">
                <h6>Copyright <span id="date" style="display: contents;">2024</span> © CML GNDEC</h6></div>
                <div class="pglinks" style="flex: 1;justify-content: space-between;align-self: end;padding: 37 0;">
                  <h6><a href="">CML, GNDEC</a></h6>
                  <h6><a href="">0161-5064813</a></h6>
                  <h6><a href="">cml.gndec@gmail.com</a></h6>
                </div>
              </div>
            </div>
          </footer>

          </script>
          <script>
           let box = document.querySelector(".box");
const data = [
    [
        "12",
        "October",
        "2022",
        "Series fulfilled with the great experience lessons remarking the importance of crucial time, time management skills, productivity and efficiency",
        "https://cml.gndec.ac.in/assets/images/events/Time%20Management.png"
    ],
    [
        "23",
        "September",
        "2022",
        "Workshop enriched with excellent knowledge of demanding technology and thinking out of box, illustrating use of NFTs representing real-world items like artwork & real estate",
        "https://cml.gndec.ac.in/assets/images/events/Acceleration%20Zone%202.0.png"
    ],
    [
        "7",
        "September",
        "2022",
        "Webinar demonstrates the quote - \"The price of success is hard work, dedication to job at hand, & determination that whether we win/lose, we have applied the best of ourselves to the task at hand\"",
        "https://cml.gndec.ac.in/assets/images/events/Entrepreneurship.png"
    ],
    [
        "12",
        "August",
        "2022",
        "Workshop enriched with excellent knowledge about Decision making and research writing was conducted with hands on training",
        "https://cml.gndec.ac.in/assets/images/events/Decision_Making-Research_Writing.jpg"
    ],
    [
        "03",
        "June",
        "2022",
        "Pedal for Sidhu Moosewala was Organised to remember his greatness and to mark the occasion of World Bicycle Day",
        "https://cml.gndec.ac.in/assets/images/events/32.jpg"
    ],
    [
        "20",
        "May",
        "2022",
        "The Video Making Competition was organised for having competition between departments to enhance creative skill",
        "https://cml.gndec.ac.in/assets/images/events/31.jpg"
    ],
    [
        "22",
        "April",
        "2022",
        "A Seminar on Dr. B.R. Ambedkar\nAn Architect of Modern India",
        "https://cml.gndec.ac.in/assets/images/events/30.jpg"
    ],
    [
        "08",
        "April",
        "2022",
        "A book drive for the students by the students with the aim to learn and conquer the dreams",
        "https://cml.gndec.ac.in/assets/images/events/12.jpg"
    ],
    [
        "05",
        "April",
        "2022",
        "Taking the talent of calligraphy and combining it with Gurmukhi, the workshop inspired many students",
        "https://cml.gndec.ac.in/assets/images/events/27.jpg"
    ],
    [
        "31",
        "March",
        "2022",
        "Bringing out the creativity of students to their life",
        "https://cml.gndec.ac.in/assets/images/events/26.jpg"
    ],
    [
        "07",
        "March",
        "2022",
        "Poster Making Competition Organised with the motto to empower women around the world",
        "https://cml.gndec.ac.in/assets/images/events/25.jpg"
    ],
    [
        "02",
        "March",
        "2022",
        "CML recruitment was held in offline mode. And was glad to get such an overwhelming response",
        "https://cml.gndec.ac.in/assets/images/events/23.jpg"
    ],
    [
        "02",
        "March",
        "2022",
        "Frequently meeting is organised for Peer to Peer Interaction in Center For Multi-Faceted Learning",
        "https://cml.gndec.ac.in/assets/images/events/24.jpg"
    ],
    [
        "28",
        "January",
        "2022",
        "A series of lectures to motivate you make life changes. It was a five days program",
        "https://cml.gndec.ac.in/assets/images/events/21.jpg"
    ],
    [
        "7",
        "December",
        "2021",
        "Organized on demand for the students who dream to study abroad.",
        "https://cml.gndec.ac.in/assets/images/events/2.jpg"
    ],
    [
        "17",
        "November",
        "2021",
        "Organized with the aim to provide new goals of life.",
        "https://cml.gndec.ac.in/assets/images/events/1.jpg"
    ],
    [
        "17",
        "November",
        "2021",
        "To gain first hand knowledge and information about the latest techniques used in construction of the tunnel.",
        "https://cml.gndec.ac.in/assets/images/events/Atal_Tunnel_Trip.jpg"
    ],
    [
        "5",
        "November",
        "2021",
        "Using creativity students presented their video making and presenting skills to mark the festival of lights “Diwali”",
        "https://cml.gndec.ac.in/assets/images/events/Capture_The_Spark.jpg"
    ],
    [
        "21",
        "October",
        "2021",
        "Encouraging students to actively know the Indian politics and be part of the reforms and visionary development by parties.",
        "https://cml.gndec.ac.in/assets/images/events/Pycon_Youth_Conference.jpg"
    ],
    [
        "20",
        "October",
        "2021",
        "CML held recruitments in both online and offline mode. And is glad to get such an overwhelming response",
        "https://cml.gndec.ac.in/assets/images/events/Recruitments_20_oct.jpg"
    ],
    [
        "25",
        "September",
        "2021",
        "Peer to Peer Learning Workshop was Organised by the students and for the students to upskill their talents.",
        "https://cml.gndec.ac.in/assets/images/events/Peer_to_Peer_Learning_Workshop.jpg"
    ],
    [
        "06",
        "September",
        "2021",
        "A book drive for the students by the students with the aim to learn and conquer the dreams.",
        "https://cml.gndec.ac.in/assets/images/events/graciousGivers.png"
    ],
    [
        "01",
        "September",
        "2021",
        "CML Webinar by Dr. Raman Sehgal on topic (Key Aspects of Research Hotspots and Gaps)",
        "https://cml.gndec.ac.in/assets/images/events/researchHotspots.png"
    ],
    [
        "28",
        "August",
        "2021",
        "CML organized a session on Boost your LinkedIn Profile",
        "https://cml.gndec.ac.in/assets/images/events/linkedInProfile.png"
    ],
    [
        "15",
        "August",
        "2021",
        "Flag Hoisting was done by our worthy Principal Dr. Sehijpal Singh.\nCML organized Cleanliness Drive on the occasion of Independence Day in the college campus.",
        "https://cml.gndec.ac.in/assets/images/events/flagHosting.png"
    ],
    [
        "11",
        "August",
        "2021",
        "A motivational eve combined with a fusion of fitness, supremacy of public speaking, and grails for decision making",
        "https://cml.gndec.ac.in/assets/images/events/inspirationalDrift.png"
    ],
    [
        "30",
        "July",
        "2021",
        "A Webinar on General Awareness and to help students take one step for preparing for any competitive exam",
        "https://cml.gndec.ac.in/assets/images/events/introductorySession.png"
    ],
    [
        "02",
        "July",
        "2021",
        "A Webinar by Zaryab Mahmood and Ali Qaswar Khaleeq on Resume writing and Interview Skills",
        "https://cml.gndec.ac.in/assets/images/events/ResumeWriting.png"
    ],
    [
        "27",
        "May",
        "2021",
        "An Interactive Session by Mr. Sudhir Dua on CHOOSE TO BE GREAT- BE A MASSIVE ACTION TAKER",
        "https://cml.gndec.ac.in/assets/images/events/chooseToBeGreat.png"
    ],
    [
        "08",
        "March",
        "2021",
        "A seminar by experts: Sony Goyal, Prof. Lakhveer Singh Khana, Prof. Shivmanmeet Singh and Mr.Sudhir Dua",
        "https://cml.gndec.ac.in/assets/images/events/seriesexpert.png"
    ],
    [
        "01",
        "March",
        "2021",
        "The program provided the opportunity to students to reorient and empower themselves in the light of emerging employment opportunities at all levels",
        "https://cml.gndec.ac.in/assets/images/events/capsule.png"
    ]
]
data.forEach((d) => {
  let html = `<div class="flip-card-container" style="--hue: 220">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg" style="background:url(${d[4]});background-size: contain;"></div>
        
      </figure>
    </div>

    <div class="card-back">
      <figure>
        <div class="img-bg" ></div>
      </figure>

      <div class="items">
        <div class="ybox" >
        


        <div id="date">
          <h2>${d[0]}</h2>
          <h6>${d[1]}</h6>
        </div>
        <h6>${d[2]}</h6>
        </div>

        <hr class="line">
        <div id="desc">
          <h6>${d[3]}</h6>
        </div>
      </div>

    </div>

  </div>
</div>`;
  box.innerHTML += html;
});


          </script>




    </body>
    </html>