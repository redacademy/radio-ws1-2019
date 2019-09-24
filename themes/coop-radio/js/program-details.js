/* js for program details page */

const enrollNow = document.getElementsByClassName('enroll-now')[0];

console.log(enrollNow, 'enroll button');
enrollNow.addEventListener("click", function (event) {
    event.preventDefault();
    console.log(event.target);
    document.getElementById(`${event.target.dataset.target}`).scrollIntoView({ behavior: 'smooth' })
});

