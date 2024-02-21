d ="";
function sp(p,a) {
    if (page === p) {
      return;
    }
    gAPI(p,a,document.getElementById("subPage"));
    document.getElementById("subPage").style.left = "0vw";
    document.getElementById("retour").style.left = "5vw";
}

function c() {
    document.getElementById("subPage").style.left = "100vw";
    document.getElementById("retour").style.left = "105vw";
}