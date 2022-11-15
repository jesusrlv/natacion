function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
}

function queryDate(){
   
  var dateS1= document.querySelector("[name='scheduleDate']").value;
  var dateS2= document.querySelector("[name='scheduleTime']").value;
        $.ajax({
                type:"POST",
                url:"prcd/date.php",
                data:{
                  dateS1:dateS1,
                  dateS2:dateS2
                },
                dataType: "html",
                cache: false,
                  success: function(data) {
                    $("#scheduleId").html(data);                  
                  }               
                });
                

}