function check(){

  while(true){
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let product1 = document.getElementById('shirtA').value;
    let product2 = document.getElementById('shirtB').value;
    let product3 = document.getElementById('shirtC').value;


    if(document.getElementById('shp1').checked == false && document.getElementById('shp2').checked == false && document.getElementById('shp3').checked == false){ //If radio buttons are all unchecked
      alert("ERROR: Please select a type of shipping.");
      return false;
    }
    else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)){
      alert("Invalid username. Username must have a valid e-mail syntax.");
      return false;
    }
    else if(password == ""){
      alert("ERROR: Please type a password");
      return false;
    }
    else if(product1 == "" || product1 < 0 || product2 == "" || product2 < 0 || product3 == "" || product < 0){
      alert("ERROR: Invalid product amount. Make sure you type a product number and that this number is greater than zero.");
      return false;
    }
    else{
      return true;
    }
  }
}
