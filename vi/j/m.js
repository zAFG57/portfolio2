function cp(p,a) {
  if (page === p) {
    return;
  }
  gAPI(p,a,document.getElementsByClassName("body")[0]);
}
function gAPI(p,a,n) {
  const xhr = new XMLHttpRequest();
  r = "./index.php?api&action="+p;
  a.forEach(e => {
    r = r+"&params[]="+e;
  });
  xhr.open("GET",r);
  xhr.send();
  xhr.responseType = "json";
  let data="";
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      data = xhr.response;
      aP(n,data["page"]);
    } else {
      console.log(`Error: ${xhr.status}`);
    }
  };
}
function aP(node,p) {
  var range = document.createRange();
  range.selectNode(node);
  var documentFragment = range.createContextualFragment(p);
  node.innerHTML = "";
  node.appendChild(documentFragment);
}
document.querySelector('body').addEventListener('mousemove', mouse);
function mouse() {
  document.getElementById('mouse').style.left = event.pageX + 'px';
  document.getElementById('mouselerp').style.left = event.pageX + 'px';
  document.getElementById('mouse').style.top = event.pageY + 'px';
  document.getElementById('mouselerp').style.top = event.pageY + 'px';
  document.querySelectorAll('.h').forEach( clicable => {
    clicable.addEventListener('mouseover', hover); 
    clicable.addEventListener('mouseout', nohover);
  });
}
function nohover () {
  document.getElementById('mouselerp').style.height = 30 + 'px';
  document.getElementById('mouselerp').style.padding = 0 + 'px';
  document.getElementById('mouselerp').style.border = 3 + 'px solid currentColor';
}
function hover () {
  document.getElementById('mouselerp').style.height = 10 + 'px';
  document.getElementById('mouselerp').style.padding = 50 + 'px';
  document.getElementById('mouselerp').style.border = 1 + 'px solid currentColor';
}
function rInt(max) {
  return Math.floor(Math.random() * max);
}
document.addEventListener("click",click );
function click(event) {
  console.log(event.clientX, event.clientY);
  fetch('./vi/c/json/'+(rInt(2)+1)+".json").then(json => json.json()).then(data => {
    document.querySelector("#css").innerHTML = data["css"];
  });

}