function validarInputs(){

  var inp1 = 0;
  var inp2 = 0;
  var inp3 = 0;
  var inp4 = 0;

inp1 = document.getElementById('firstName');
inp2 = document.getElementById('lastName');
inp3 = document.getElementById('email');
inp4 = document.getElementById('address');

console.log(inp1);
console.log(inp2);
console.log(inp3);
console.log(inp4);

if((inp1.value.length > 0) && (inp2.value.length > 0) && (inp3.value.length > 0) && (inp4.value.length > 0)){
  document.getElementById("button2").disabled = false;
}
else {
  document.getElementById("button2").disabled = true;
}
}
// }
// if(inp2 == "" || inp2 == null){
//   var x2 = 0;
// }
// else{
//   x2 = 1;
// }
// if(inp3 == "" || inp3 == null){
//   var x3 = 0;
// }
// else{
//   x3 = 1;
// }
// if(inp4 == "" || inp4 == null){
//   var x4 = 0;
// }
// else{
//   x4 = 1;
// }

// var suma = x1 + x2 + x3 + x4;

// if(suma = 5){
//   document.getElementById("button2").disabled = false;
// }

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

    var namecc = document.getElementById('cc-number').value;
    document.getElementById('ccnumber').innerHTML = namecc;

}