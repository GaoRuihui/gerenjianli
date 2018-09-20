var bodyBgs = [];    //创建一个数组变量来存储背景图片的路径

bodyBgs[0] = "../images/home-bg.jpg";
bodyBgs[1] = "../images/one.jpg";
bodyBgs[2] = "../images/two.jpg";
bodyBgs[3] = "../images/demo.jpg";
var randomBgIndex = Math.round( Math.random() * 3 );
document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') repeat 100% 0}</style>');
console.log(randomBgIndex);