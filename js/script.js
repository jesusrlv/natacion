function dateChange(){
    var dateS= document.querySelector("[name='scheduleDate']").value;
    var dateS= document.querySelector("[name='scheduleDate']").value;
          $.ajax({
                  type:"POST",
                  url:"prcd/date.php",
                  data:{
                    dateS:dateS
                  },
                  dataType: "html",
                  cache: false,
                    success: function(data) {
                      $("#scheduleId").html(data);                  
                    }               
                  });
                  
                  event.preventDefault();
}

function dateTime(){

}