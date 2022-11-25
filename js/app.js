const titre = document.querySelector('h1');
const txt = document.querySelector('p');
const btn = document.querySelector('button');
const imglaptop = document.querySelector('.laptop');

const TL1 = new TimeLineMax({paused: true});

TL1
.from(titre, 1, {y: -100, opacity: 0});

TL1.play();
