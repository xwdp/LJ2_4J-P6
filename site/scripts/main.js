// //brian
// let slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// };

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// };

// function showSlides(n) {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";

// };

// setInterval(plusSlides, 5000, 1);
// function buy() {

//   let areusure = confirm("wil je dit product kopen?");
//     if(areusure == true){
//       let multiple = confirm("wil je er meer als 1 toevoegen?");

//         if(multiple == true){
//           let totaal = prompt("hoeveel weel je er");
//           alert(`${totaal} toe ge voegt aan de bestelling`);
//       };

//     }else{
//       alert("niks toe gevoegt aan de bestelling");
//     };
// };
// //brian