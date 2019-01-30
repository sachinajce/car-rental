$(function(){

			$.ajax({
				url: "getcountry.php",
				success: function(result){

						var obj = JSON.parse(result);
						for(var i=0;i<obj.admno.length;i++){


							$("#ctry").append("<option value="+obj.admno[i].cid+" >"+obj.admno[i].cname+"</option> ");
						}


				}
			});

	});
  function getstate(val)
  {
  	$.ajax({

  		type: "POST",
  		url: "getstate.php",
  		data:'cid='+val,
  		success: function(data){
  		if(data=="false"){

  			alert("No Place Found");
        $("#stat").html("<option>Select</option>");
  		}
  		else {
  			var obj = JSON.parse(data);
  				$("#stat").html("<option>Select</option>");
  			for(var i=0;i<obj.admno.length;i++){

  				$("#stat").append("<option value="+obj.admno[i].sid+">"+obj.admno[i].sname+"</option>");
  			}
  		}

  	}
  });

  }
  function getdist(val)
  {
    $.ajax({

      type: "POST",
      url: "getdist.php",
      data:'sid='+val,
      success: function(data){
        
      if(data=="false"){

        alert("No Place Found");
        $("#dist").html("<option>Select</option>");
      }
      else {
        var obj = JSON.parse(data);
          $("#dist").html("<option>Select</option>");
        for(var i=0;i<obj.admno.length;i++){

          $("#dist").append("<option value="+obj.admno[i].did+">"+obj.admno[i].dname+"</option>");
        }
      }

    }
  });

  }
