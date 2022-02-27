i=0;
 var images = [];

 images[0] = '../images/p-1.jpg';
 images[1] = '../images/p-2.jpg';
 images[2] = '../images/p-3.jpg';
 images[3] = '../images/p-4.jpg';;

function slider() {

     if(i < images.length - 1){
         i++;
         document.slide.src = images[i];
     }else{
         i=0;
         document.slide.src = images[i];
 }
}
function slider2() {
     if(i <= 0){
         i=images.length -1;
         document.slide.src = images[i];
     }else{
         i--;
         document.slide.src = images[i];
 }
}



i=0;
var images=[];
images [0]="";
images [1]="";
images [2]="";

    if(i<images.length-1){
        i++;
        document.slider.src=[i];
    }else{
        i=0;
        document.slider.pics=[i];
    }

    if(i<=0){
        i=images.length-1;
        document.slider.src=[i];
    }else{
        i--;
        document.slider.src=[i];
    }




i=0;
var images=[];
images[0]="";
if(i<images.length-1){
    i++;
    document.slider.src=[i];
}else{
    i=0;
    document.slider.src=[i];
}

if(i<=0){
    i=images.length-1;
    document.slider.src=[i];
}else{
    i--;
    document.slider.src=[i];
}
