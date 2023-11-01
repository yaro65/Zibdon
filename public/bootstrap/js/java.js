//  function animateValue(id, target) {
//         const countElement = document.getElementById(id);
//         let currentCount = 0;
//         const timer = setInterval(() => {
//             if (currentCount >= target) {
//                 clearInterval(timer); // Arrêter l'animation une fois que la cible est atteinte
//             } else {
//                 currentCount++;
//                 countElement.textContent = currentCount; // Mettre à jour le contenu du HTML avec la valeur actuelle
//             }
//         }, 10); // Définir l'intervalle de temps en millisecondes (ici, 100 ms)
//     }

//     animateValue('count1', 15);
//     animateValue('count2', 400);
//     animateValue('count3', 290);
//     animateValue('count4', 75);


//     let prevScrollpos = window.pageYOffset;
//     window.onscroll = function() {
//         let currentScrollPos = window.pageYOffset;
//         if (prevScrollpos > currentScrollPos) {
//             document.getElementById("navba").style.position = "fixed";
//             document.getElementById("navba").style.top = "75";
//             document.getElementById("navba").style.width = "100%";
//         } else {
//             document.getElementById("navba").style.position = "relative";
//             document.getElementById("navba").style.top = "450";
//             document.getElementById("navba").style.width = "100%";
//         }
//         prevScrollpos = currentScrollPos;
//     }

// var canvas = document.getElementById('myCanvas');
// var context = canvas.getContext('2d');

// function drawCircle() {
//     var x = canvas.width / 3;
//     var y = canvas.height / 3;
//     var radius = 150;
//     var startAngle = 0.3 * Math.PI;
//     var endAngle = 1.6 * Math.PI;
//     var counterClockwise = false;

//     context.beginPath();
//     context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
//     context.lineWidth = 0.02 * canvas.width;
//     context.strokeStyle = 'rgb(15, 219, 49)'; // Changer la couleur du contour en bleu
//     context.stroke();
// }

// drawCircle();

// window.addEventListener('resize', function () {
//     canvas.width = window.innerWidth * 0.8;
//     canvas.height = window.innerHeight * 0.4;
//     drawCircle();
// });