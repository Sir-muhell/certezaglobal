$(document).ready(function () {
	//Long description
$("#subscribe").click(function () {
    var name  = $("#name").val();
    var email = $("#email").val();

    if (name == null || name == "") {
      $("#msg").html("Kindly input your name");
    } else {
    	if (email == null || email == "") {
      $("#msg").html("Kindly input your email");
		  }else{
		      $("#msg").html("Sending...");
		      $.ajax({
		        type: "post",
		        url: "functions/init.php",
		        data: {name: name, email: email},
		        success: function (data) {
		          $("#msg").html(data);
		        },
		      });
		    }
		}

  });


  });