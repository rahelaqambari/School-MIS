const image = document.getElementById("img");
const imglist = [
    "images/banners3.jpg",
    "images/banners2.jpg",
];
let index = 0;
setInterval(()=>{
index ++
if(imglist.length == index){
    index = 0
}
image.setAttribute("src",imglist[index]);
},5000)