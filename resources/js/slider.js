const image = document.getElementById("img");
const imglist = [
    "images/banner-1.jpg",
    "images/banner-2.jpg",
];
let index = 0;
setInterval(()=>{
index ++
if(imglist.length == index){
    index = 0
}
image.setAttribute("src",imglist[index]);
},5000)