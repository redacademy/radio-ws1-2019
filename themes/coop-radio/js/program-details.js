/* js for program details page */

const enrollNow = document.getElementsByClassName('enroll-now')[0];
const signUpNow = document.getElementsByClassName('signup-now')[0];

enrollNow.addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById(`${event.target.dataset.target}`).scrollIntoView({ behavior: 'smooth' })
});

signUpNow.addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById(`${event.target.dataset.target}`).scrollIntoView({ behavior: 'smooth' })
});


