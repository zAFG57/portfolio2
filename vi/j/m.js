let nbColor =7;
let last = 0;

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
  let range = document.createRange();
  range.selectNode(node);
  let documentFragment = range.createContextualFragment(p);
  if (node != document.getElementsByClassName("body")[0]) {
    node.innerHTML = "";
    node.appendChild(documentFragment);
    return;
  }

  let tr = document.getElementsByClassName("transitionPage")[0];
  tr.innerHTML = "";
  tr.appendChild(documentFragment);
  tr.style.transition = "1.5s ease-in-out transform";
  tr.style.transform = "rotateX(0deg)";
  setTimeout(()=>{
    node.style.transition = "0s ease-in-out transform";
    node.style.transform = "rotateX(90deg)";
    node.className = "transitionPage";
    tr.className = "body";
    node.innerHTML = "";
  },1500);
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
  let r = Math.floor(Math.random() * max);
  while (r == last) {
    r = Math.floor(Math.random() * max);
  }
  last = r;
  return r;
}
document.addEventListener("click",click );
function click(event) {
  let div = document.createElement("div");
  div.classList.add("clickCircle");
  document.querySelector("body").appendChild(div);
  setTimeout(()=>{div.style.left = event.clientX + "px";div.style.top = event.clientY + "px";div.style.height = "50vh";div.style.width = "50vh";div.style.opacity = "0";},10)
  setTimeout(()=>{div.remove();},500);
  fetch('./vi/c/json/a.json').then(json => json.json()).then(data => {
    document.querySelector("#css").innerHTML = data[rInt(nbColor)]["css"];
  });
}
fetch('./vi/c/json/a.json').then(json => json.json()).then(data => {
  document.querySelector("#css").innerHTML = data[rInt(nbColor)]["css"];
});