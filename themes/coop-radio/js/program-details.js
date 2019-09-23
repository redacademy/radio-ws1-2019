/* js for program details page */

// jQuery(document).ready(function ($) {

//     $('.enroll-now').addEventListener("click", function(event){
//             event.preventDefault();
//             document.querySelector(event.target.hash).scrollIntoView({behavior: 'smooth'})

//         });

//     });
// });

const enrollNow = document.querySelectorAll('.enroll-now');


enrollNow.addEventListener("click", function (event) {
    event.preventDefault();
    document.querySelector(event.target.hash).scrollIntoView({ behavior: 'smooth' })

});

