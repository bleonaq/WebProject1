

  
  
  function validate() {
    var username = document.getElementById("username").value();
    
    if (username == "") {
        alert("Username must be filled out");
       
    }
    var password =  document.getElementById("password").value();
   
    if (password=="") {
        alert("Password must be filled out");
        
    }
    var password1 =  document.getElementById("password1").value();
   
    if (password1=="") {
        alert("Password must be filled out");
       
    }else if(password1!=password){
      alert("Passwords dont match");
      
    }
    
  }