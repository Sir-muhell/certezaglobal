$(document).ready(function () {
	//Long description
$("#subscribe").click(function () {
    var subname  = $("#subname").val();
    var subemail = $("#subemail").val();

    if (subname == null || subname == "") {
      $("#msg").html("Kindly input your name");
    } else {
    	if (subemail == null || subemail == "") {
      $("#msg").html("Kindly input your email");
		  }else{
		      $("#msg").html("Sending...");
		      $.ajax({
		        type: "post",
		        url: "data/functions.php",
		        data: {subname: subname, subemail: subemail},
		        success: function (data) {
		          $("#msg").html(data);
		        },
		      });
		    }
		}

  });


  });