var reload = document.getElementById('reload');
if (reload) {
  reload.addEventListener('click', reloardAvatar);
}

const a = [
  'adventure-cat',
  'class-act',
  'codercat',
  'dojocat',
  'inspectocat',
  'okal-eltocat',
  'plumber',
  'poptocat_v2',
  'setuptocat',
  'visionary',
  'waldocat'
];

var nI, nA;

function reloardAvatar() {
  nI = Math.floor((Math.random() * a.length) + 1) - 1;
  nA = a[nI];
  document.getElementById('avatar').src = templateUrl + '/assets/avatars/' + nA + '.png';
}