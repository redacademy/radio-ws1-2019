var coll = document.getElementsByClassName('collapsible');
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener('click', function() {
    this.classList.toggle('active');
    var content = this.nextElementSibling;
    if (content.style.display === 'block') {
      content.style.display = 'none';
    } else {
      content.style.display = 'block';
    }
  });
  coll[i].addEventListener('blur', function() {
    this.classList.toggle('active');
    var content = this.nextElementSibling;
    content.style.display = 'none';
  });
}

const foto1 = document.getElementById('foto1');
const foto2 = document.getElementById('foto2');
foto2.style.display = 'none';

foto1.addEventListener('click', function() {
  foto1.style.display = 'none';
  foto2.style.display = 'block';
});

foto2.addEventListener('click', function() {
  foto2.style.display = 'none';
  foto1.style.display = 'block';
});
