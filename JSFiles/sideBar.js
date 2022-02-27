function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }


  i=0;
  var images=[];
  images [0]='../images/a.jpg';
  images [1]='src';
  images [2]='src';

  function slider(){
    if(i<images.length-1){
      i++;
      document.slider.src=[i];
    }else{
      i=0;
      document.slider.src[i];
    }
  }

  function slider2(){
    if(i<=0){
      i=images.length-1;
      document.slider.src=[i];
    }else{
      i--;
      document.slider.src=[i];
    }
  }
