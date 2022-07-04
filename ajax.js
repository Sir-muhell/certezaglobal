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
      var name = $("#name").val();
      var email = $("#email").val();
      var comment = $("#comment").val();
      var post_id = $("#post_id").val();
      var comment_id  = $('#commentId').val();

      
      var a = document.forms["frm-comment"]["name"].value;
      var b = document.forms["frm-comment"]["email"].value;
      var c = document.forms["frm-comment"]["comment"].value;
      if (a === null || a === "") {
	      document.getElementById("msgs").innerHTML = "Please Input your Full Name &#128579";
	          return false;
	      } else {

	           if (b === null || b === "") {
	      document.getElementById("msgs").innerHTML = "Your Email can't be empty &#128580";
	          return false;
	      } else {

	            if (c === null || c === "") {
	      document.getElementById("msgs").innerHTML = "Please Input your Comment &#129488";
	          return false;
	      }else {

	      document.getElementById("msgs").innerHTML = "Submitting...";
	      }else{

	      

        $.ajax({
              url: "com_add.php",
              data: {comment_id: comment_id, comment: comment, email: email, name: name, post_id: post_id},
              type: 'post',
              success: function (data) {
                $("#output").html(data);
                document.getElementById("msgs").innerHTML = "Comment Added Succesfully! &#128519";
              },
            });
      
     }
	   
	  }
	  }
      
      
    });

  });