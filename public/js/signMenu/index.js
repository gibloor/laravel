function show (name, visibility) {
  document.getElementById(name).style.display = visibility;
};

function hideSign(e) {
  let target = e.target.id;

  if (target === 'sign_in'||target === 'sign_up') {
    document.getElementById('sign_in').style.display = 'none';
    document.getElementById('sign_up').style.display = 'none';
  }
};