function cp(p,a) {
  if (page === p) {
    return;
  }
  const xhr = new XMLHttpRequest();
  r = "./index.php?api&action="+p;
  a.forEach(e => {
    r = r+"&params[]="+e;
  });
  xhr.open("GET",r);
  xhr.send();
  xhr.responseType = "json";
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const data = xhr.response;
      var range = document.createRange();
      let b= document.getElementsByClassName("body")[0];
      range.selectNode(b);
      var documentFragment = range.createContextualFragment(data["page"]);
      b.innerHTML = "";
      b.appendChild(documentFragment);
    } else {
      console.log(`Error: ${xhr.status}`);
    }
  };
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