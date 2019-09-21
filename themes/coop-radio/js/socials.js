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

document.getElementById("foto2").style.display = "none";

document.getElementById("foto1").onclick = function() { 
  
  document.getElementById("foto1").style.display = "none", 

}

// document.getElementById("foto2").style.display = "show";
