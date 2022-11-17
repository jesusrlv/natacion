function validarInputs(){

  var inp1 = 0;
  var inp2 = 0;
  var inp3 = 0;
  var inp4 = 0;

inp1 = document.getElementById('firstName');
inp2 = document.getElementById('lastName');
inp3 = document.getElementById('email');
inp4 = document.getElementById('address');

if((inp1.value.length > 0) && (inp2.value.length > 0) && (inp3.value.length > 0) && (inp4.value.length > 0)){
  document.getElementById("button2").disabled = false;
}
else {
  document.getElementById("button2").disabled = true;
}
}

function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}
function validarInputs2(){

  var inp5 = 0;
  var inp6 = 0;
  var inp7 = 0;
  var inp8 = 0;

inp5 = document.getElementById('cc-name');
inp6 = document.getElementById('cc-number');
inp7 = document.getElementById('cc-expiration');
inp8 = document.getElementById('cc-cvv');

if((inp5.value.length > 0) && (inp6.value.length > 0) && (inp7.value.length > 0) && (inp8.value.length > 0)){
  document.getElementById("button3").disabled = false;
}
else {
  document.getElementById("button3").disabled = true;
}
}

function checkOut(){
  document.getElementById("btnCheckout").disabled = false;
}

function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}

function queryDate(){
   
  var dateS= document.querySelector("[name='scheduleDate']").value;
  var dateT= document.querySelector("[name='scheduleTime']").value;
  console.log(dateS);
        $.ajax({
                type:"POST",
                url:"prcd/date.php",
                data:{
                  dateS:dateS,
                  dateT:dateT
                },
                dataType: "html",
                cache: false,
                  success: function(data) {
                    $("#scheduleId").html(data);                  
                  }               
                });
}

function reservation(){
    var date = document.getElementById('scheduleDate').value;
    document.getElementById('dateInf').innerHTML = date;

    var hour = document.getElementById('scheduleTime').value;
    document.getElementById('hourInf').innerHTML = hour;

    var last = document.getElementById('lastName').value;
    document.getElementById('lastInf').innerHTML = last;

    var first = document.getElementById('firstName').value;
    document.getElementById('firstInf').innerHTML = first;

    var email = document.getElementById('email').value;
    document.getElementById('emailInf').innerHTML = email;

    var address = document.getElementById('address').value;
    document.getElementById('addressInf').innerHTML = address;

    var namecc = document.getElementById('cc-name').value;
    document.getElementById('ccInf').innerHTML = namecc;

    var numbercc = document.getElementById('cc-number').value;
    document.getElementById('ccnumber').innerHTML = numbercc;

}