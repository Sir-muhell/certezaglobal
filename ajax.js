$(document).ready(function () {
	//Long description
$("#subscribe").click(function () {
    var name  = $("#sub_name").val();
    var email = $("#sub_email").val();

    if (name == null || name == "") {
      $("#msg").html("Kindly input your name");
    } else {
    	if (email == null || email == "") {
      $("#msg").html("Kindly input your email");
		  }else{
		      $("#msg").html("Sending...");
		      $.ajax({
		        type: "post",
		        url: "data/functions.php",
		        data: {name: name, email: email},
		        success: function (data) {
		          $("#msg").html(data);
		        },
		      });
		    }
		}

  });

$("#submitButton").click(function() {
      
      //adds 
      var str = $("#frm-comment").serialize();
      var names = $("#comname").val();
      var emails = $("#comemail").val();
      var comment = $("#comment").val();
      var post_id = $("#post_id").val();
      var comment_id  = '0';

      if (names === null || names === "") {
	      document.getElementById("msgs").innerHTML = "Please Input your Full Name &#128579";
	          return false;
	      } else {

	           if (emails === null || emails === "") {
	      document.getElementById("msgs").innerHTML = "Your Email can't be empty &#128580";
	          return false;
	      } else {

	            if (comment === null || comment === "") {
	      document.getElementById("msgs").innerHTML = "Please Input your Comment &#129488";
	          return false;
	      }else {

	      document.getElementById("msgs").innerHTML = "Submitting...";
	     
        $.ajax({
              url: "com_add.php",
              data: {comment_id: comment_id, comment: comment, email: emails, name: names, post_id: post_id},
              type: 'post',
              success: function (data) {
                $("#output").html(data);
                
              },
            });
        document.getElementById("msgs").innerHTML = "Comment Added Succesfully! &#128519";
       }

	      }
	   
	  }

     
      
      
    });

  });