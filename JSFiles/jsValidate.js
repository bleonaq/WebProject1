

  const emailReg=/^[A-Za-z0-9+_.-]+@(.+)$/;

  function validateArr(){
      let inputs = document.querySelectorAll("input");
          username = inputs[0].value;
          email = inputs[1].value;
          password = inputs[2].value;
      
          if(username==""){
              alert("Please enter a username!");
              return false;
          }
          else if(username.length<3){
              alert("Username must be at least 3 characters long!");
              return false;
          }
          else if(email==""){
              alert("Please enter a valid email address!");s
              return false;
          }
          else if(!emailReg.test(email)){
              alert("Please enter a valid email address!");
              return false;
          }
          else if(password==""){
              alert("Please enter a password!");
              return false;
          }
          else{
              alert("Your registration was succesful!");
              return true;
          }
  }
  