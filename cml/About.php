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
    <script src="shuffle.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&family=Katibeh&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:wght@400;700&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Sometype+Mono:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&family=Katibeh&family=Poppins:wght@400;700&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Sometype+Mono:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&family=Katibeh&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:wght@400;700&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Sometype+Mono:wght@600&display=swap" rel="stylesheet"> 
 <style>
 h3 {
    font-size: 24;
    font-family: oddlini;
    width: 80%;

}
.title h2 {
    font-size: 132px;
}
.title {
    display: flex;
}
.headimg {
    height: 55vw;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    background: #ccc;
    margin: 38px auto;
    border-radius: 0;
    background: url(https://cml.gndec.ac.in/assets/images/about/about-us.jpg);
}
.svg{
    z-index: 10;
}
.data-tile{
    display:flex;
    flex-direction:column;
    gap:38px
}
#canvas {
  width: 100%;
  height: 100%;
      margin-top: 6vh;
}
.data {
    display: flex;
    gap: 5vw;
    align-items: center;
}
.data-tile>h1 {
    font-family: katibeh;
    font-weight: 100;
}
.data-tile>h4{
    font-family: "Merriweather";
    font-size: 24px;
}
.member {
    display: flex;
    gap: 69px;
    margin: auto;
    justify-content: center;
    flex-wrap: wrap;
}
.img-box {
  height: 498px;
  width: 375px;
  background-color: #d9d9d9;
}
.title-box {
  display:flex;
  width: 373px;
  height: 156px;
  flex-grow: 0;
  border: solid 1px #000;
  background-color: #fff;
}
.title-box a{
  margin:auto;
text-decoration:none;
}
a.join {
     padding: 0; 
    background: none; 
     border-radius: 0; 
     
}
a.join>span{
    color:#000
}
#date{
    display:contents;
}

section.Events {
        opacity: 1;
    }
h1#event {
  font-size:76px
}
    @media only screen and (max-width: 920px) { 
      h3 {
    font-size: 3vw;
    font-family: oddlini;
    width: 80%;
}
.title {
    display: flex;
    flex-direction: column;
}
.data {
    height: 10vh;
    padding: 2vh 0;
}
.data-tile {
    gap: 0px;
}
.line {
    height: inherit;
}
h1#event {
  font-size:9vw
}
#canvas {
    margin-top: -6vh;
}
.member_tile {
    width: 283px;
}
.img-box {
    height: 355px;
    width: inherit;
    background-color: #d9d9d9;
}
.title-box {
    width: calc(100% - 2px);
    height: 120px;

} 
.data h1{
  margin:0;
  height: 4vh;
}
       }
.boxing {
    padding: 8vh 0;
}


    </style>
</head>
<body>

<header class="header">
    <?php include "components/navbar.php" ?>
     </header>

     <?php include "components/svg.php" ?>

        <section class="about-cml">
            <div class="container sec">
              <div class="head">
                <div class="title">
                <h2>WE ARE</h2>
                
                
                  <h3>Center for Multi-Faceted Learning is a hub for imparting ethical and general-purpose knowledge in terms of education, morality, and humility. The concept of this program is to utilize all the capabilities of the students to negotiate and clinch top-quality communication skills, problem-solving skills, and develop distinctive personalities. This absolutely helps students to identify their fields of interest. A lot of activities under this updated society surely help the students to explore and have a broader view of their selective fields. In addition to this center also encourage students for enrolling in MOOCs and get involved in self-learning which will lead to incremental knowledge and development of interest in different fields. Being a part of this club an individual can primarily build not only his/her personal individualization but also enrich their mindset with optimistic thoughts, constructive behavior, and confidence.</h3>
                </div>
                
            </div>
              </div>
            </div>
          </section>

          <section class="image">
            <div class="headimg" style="background-repeat: no-repeat;background-size: cover;"></div>
        </section>

        <section class="Events" >
            <div class="container a" style="border-radius: 0;background: none;height:fit-content; "  data-color="black"> 
              <div class="head"style="padding: 12vw 0;background: none;overflow: hidden;height: fit-content;"> 
                <h1 class="event" id="event" style="color:white;">In our college, societies play a crucial role. Some focus on technical skills, while others on creative talents, each regularly organizing events and hosting webinars with highly qualified speakers.</h1>
    
            </div>
                
            </div>
          </section>
          <section class="cml-team">
            <div class="head"style="background: white; position: relative; "> 
                <div class="members" style="position: absolute;
                width: fit-content;
                display: flex;
                flex-direction: column;
                align-items: center;
                left: 0%;
                padding: 5vw 0;">
                <h1 >CML Team</h1> 
                <h3>CML is a vibrant hub for learning, discovery, and innovation. It offers dynamic projects, professional webinars, and events that enhance personal growth, interpersonal skills, and ethical expertise. Students benefit from interactive sessions on entrepreneurship, competitive exam training, and guidance for careers in GATE, PSU, UPSC, and the armed forces. By staying aligned with the latest technological and career trends, CML equips students for a confident and purposeful future.</h3>
                <div class="data">
                    <div class="data-tile">
                      <h1>12</h1>
                      <h4>Faculty</h4>
                    </div>
                    <hr class="line">
                    <div class="data-tile">
                      <h1>38</h1>
                      <h4>Events</h4>
                    </div>
                    <hr class="line">
                    <div class="data-tile">
                      <h1>281</h1>
                      <h4>Members</h4>
                    </div>
                      
                    </div>
            </div>
            <div class="canvas"><canvas id="canvas" width="1743" height="872" ></canvas></div>
            
            </div>
          </section>

          <section>
            <div class="head"style="background: white;"> 
                <div class="member boxing">
                    <div class="member_tile">
                      <div class="img-box"></div>
                      <div class="title-box"><a class="join" href=""><span>Faculty</span> </a></div>
                    </div>
                    <div class="member_tile">
                      <div class="img-box"></div>
                      <div class="title-box"><a class="join" href=""><span>Web Developers</span>  </a></div>
                    </div>
                    <div class="member_tile">
                      <div class="img-box"></div>
                      <div class="title-box"><a class="join" href=""><span>Members</span> </a></div>
                    </div>
                      
                    </div>
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
                <h6>Copyright <span id="date">2024</span> © CML GNDEC</h6></div>
                <div class="pglinks" style="flex: 1;justify-content: space-between;align-self: end;padding: 37 0;">
                  <h6><a href="">CML, GNDEC</a></h6>
                  <h6><a href="">0161-5064813</a></h6>
                  <h6><a href="">cml.gndec@gmail.com</a></h6>
                </div>
              </div>
            </div>
          </footer>




          <script>
            console.clear();
      
      gsap.registerPlugin(ScrollTrigger);





      
      
      let e = document.querySelector(".a"); 
      let t = document.querySelector(".event"); 
      animate(e);
      function animate (section) {
        var color = section.getAttribute("data-color");
        
        gsap.to(document.body, {
          backgroundColor: color,
          ease: "power1.inOut",
          onStart: text_shuffle_effect,
          scrollTrigger: {
            trigger: section,
            start: "top 40%", 
            end: "top 40%",
            markers: false,
            toggleActions: "play  reverse"
          }
        });
        let tr = document.querySelector(".cml-team"); 
        gsap.to(tr, {
            opacity:100+"%",
            ease: "power1.inOut",
            Duration:10,
          onStart: text_shuffle_effect_1,
          scrollTrigger: {
            trigger: tr,
            start: "top 40%", 
            end: "top 40%",
            markers: false,
            toggleActions: "play  reverse"
          }
        });
        
      };


function text_shuffle_effect(){
            const typeShuffle = new TypeShuffle(t);
            typeShuffle.trigger('fx6');
};

function text_shuffle_effect_1(){
    let t = document.querySelectorAll(".data-tile>h1");
    t.forEach(t=>{const typeShuffle = new TypeShuffle(t);
    typeShuffle.trigger('fx6');})   
     // Trigger effect fx1
};











          </script>



<script>
    console.clear()
console.log('lsakdfalskjdflnksd')

const config = {
src: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/open-peeps-sheet.png',
rows: 15,
cols: 7
}

// UTILS

const randomRange = (min, max) => min + Math.random() * (max - min)

const randomIndex = (array) => randomRange(0, array.length) | 0

const removeFromArray = (array, i) => array.splice(i, 1)[0]

const removeItemFromArray = (array, item) => removeFromArray(array, array.indexOf(item))

const removeRandomFromArray = (array) => removeFromArray(array, randomIndex(array))

const getRandomFromArray = (array) => (
array[randomIndex(array) | 0]
)

// TWEEN FACTORIES

const resetPeep = ({ stage, peep }) => {
const direction = Math.random() > 0.5 ? 1 : -1
// using an ease function to skew random to lower values to help hide that peeps have no legs
const offsetY = 100 - 250 * gsap.parseEase('power2.in')(Math.random())
const startY = stage.height - peep.height + offsetY
let startX
let endX

if (direction === 1) {
startX = -peep.width
endX = stage.width
peep.scaleX = 1
} else {
startX = stage.width + peep.width
endX = 0
peep.scaleX = -1
}

peep.x = startX
peep.y = startY
peep.anchorY = startY

return {
startX,
startY,
endX
}
}

const normalWalk = ({ peep, props }) => {
const {
startX,
startY,
endX
} = props

const xDuration = 10
const yDuration = 0.25

const tl = gsap.timeline()
tl.timeScale(randomRange(0.5, 1.5))
tl.to(peep, {
duration: xDuration,
x: endX,
ease: 'none'
}, 0)
tl.to(peep, {
duration: yDuration,
repeat: xDuration / yDuration,
yoyo: true,
y: startY - 10
}, 0)

return tl
}

const walks = [
normalWalk,
]

// CLASSES

class Peep {
constructor({
image,
rect,
}) {
this.image = image
this.setRect(rect)

this.x = 0
this.y = 0
this.anchorY = 0
this.scaleX = 1
this.walk = null
}

setRect (rect) {
this.rect = rect
this.width = rect[2]
this.height = rect[3]

this.drawArgs = [
this.image,
...rect,
0, 0, this.width, this.height
]  
}

render (ctx) {
ctx.save()
ctx.translate(this.x, this.y)
ctx.scale(this.scaleX, 1)
ctx.drawImage(...this.drawArgs)
ctx.restore()
}
}

// MAIN

const img = document.createElement('img')
img.onload = init
img.src = config.src

const canvas = document.querySelector('#canvas')
const ctx = canvas.getContext('2d')

const stage = {
width: 0,
height: 0,
}

const allPeeps = []
const availablePeeps = []
const crowd = []

function init () {  
createPeeps()

// resize also (re)populates the stage
resize()

gsap.ticker.add(render)
window.addEventListener('resize', resize)
}

function createPeeps () {
const {
rows,
cols
} = config
const {
naturalWidth: width,
naturalHeight: height
} = img
const total = rows * cols
const rectWidth = width / rows
const rectHeight = height / cols

for (let i = 0; i < total; i++) {
allPeeps.push(new Peep({
image: img,
rect: [
(i % rows) * rectWidth,
(i / rows | 0) * rectHeight,
rectWidth,
rectHeight,
]
}))
}  
}

function resize () {
stage.width = canvas.clientWidth
stage.height = canvas.clientHeight
canvas.width = stage.width * devicePixelRatio
canvas.height = stage.height * devicePixelRatio

crowd.forEach((peep) => {
peep.walk.kill()
})

crowd.length = 0
availablePeeps.length = 0
availablePeeps.push(...allPeeps)

initCrowd()
}

function initCrowd () {
while (availablePeeps.length) {
// setting random tween progress spreads the peeps out
addPeepToCrowd().walk.progress(Math.random())
}
}

function addPeepToCrowd () {
const peep = removeRandomFromArray(availablePeeps)
const walk = getRandomFromArray(walks)({
peep,
props: resetPeep({
peep,
stage,
})
}).eventCallback('onComplete', () => {
removePeepFromCrowd(peep)
addPeepToCrowd()
})

peep.walk = walk

crowd.push(peep)
crowd.sort((a, b) => a.anchorY - b.anchorY)

return peep
}

function removePeepFromCrowd (peep) {
removeItemFromArray(crowd, peep)
availablePeeps.push(peep)
}

function render () {
canvas.width = canvas.width
ctx.save()
ctx.scale(devicePixelRatio, devicePixelRatio)

crowd.forEach((peep) => {
peep.render(ctx)
})

ctx.restore()
}

  </script>
    </body>
    </html>