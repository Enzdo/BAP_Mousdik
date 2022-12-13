

var recent = document.getElementById("recents");
var ancien = document.getElementById("anciens");
var croissan = document.getElementById("croissant");
var decroissan = document.getElementById("decroissant");

recent.onclick = recentss;
ancien.onclick = ancienss;
croissan.onclick = croissantt;
decroissan.onclick = decroissantt;

function recentss() {
  recent.classList.add("active");
  recent.classList.remove("non_active");
  ancien.classList.remove("active");
  croissan.classList.remove("active");
  decroissan.classList.remove("active");
}

function ancienss() {
  ancien.classList.add("active");
  ancien.classList.remove('non_active');
  recent.classList.remove("active");
  croissan.classList.remove("active");
  decroissan.classList.remove("active");
}

function croissantt() {
    croissan.classList.add("active");
    croissan.classList.remove("non_active");
    ancien.classList.remove("active");
    recent.classList.remove("active");
    decroissan.classList.remove("active");
  }

  function decroissantt() {
    decroissan.classList.add("active");
    decroissan.classList.remove("non_active");
    ancien.classList.remove("active");
    recent.classList.remove("active");
    croissan.classList.remove("active");
  }