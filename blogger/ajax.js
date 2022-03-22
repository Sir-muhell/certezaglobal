$(document).ready(function () {
  //signup for a user
  $("#submit").click(function () {
    var fname   = $("#fname").val();
    var uname   = $("#uname").val();
    var email   = $("#email").val();
    var pword   = $("#pword").val();
    var cpword  = $("#cpword").val();
    var pnum    = $("#pnum").val();
    var wnum    = $("#wnum").val();
    var edit    = $("#edit").val();
    var niche   = $("#niche").val();
    var spec    = $("#spec").val();
    var strength = $("#strength").val();
    var weak    = $("#weak").val();
    var fbook   = $("#fbook").val();
    var linkedin = $("#linkedin").val();
    var ig      = $("#ig").val();
    var twitter = $("#twitter").val();


    if (uname == "" || uname == null) {
      $("#msg").html("Please input your Username");
    } else {
      if (email == "" || email == null) {
        $("#msg").html("Please input your email");
      } else {
        if (password == "" || password == null) {
          $("#msg").html("Type a password");
        } else {
          if (pword != cpword) {
            $("#msg").html("Password does not match");
          } else {
             $("#msg").html("Loading...");

             $.ajax({
                      type: "post",
                      url: "functions/init.php",
                      data: {
                        fname: fname,
                        uname: uname,
                        email: email,
                        pword: pword,
                        cpword: cpword,
                        pnum  : pnum,
                        wnum  : wnum,
                        edit  : edit,
                        niche : niche,
                        spec  : spec,
                        strength : strength,
                        weak   : weak,
                        fbook : fbook,
                        linkedin : linkedin,
                        ig    : ig,
                        twitter : twitter
                      },
                      success: function (data) {
                        $("#msg").html(data);
                      },
                    });
          }
        }
      }

    }
   $("#modal").modal();
   
  });

  //login for a user
  $("#login").click(function () {
    var username = $("#username").val();
    var password = $("#password").val();

    if (username == "" || username == null) {
      $("#msg").html("Please insert your username");
    } else {
      if (password == "" || password == null) {
        $("#msg").html("Please insert your Password");
      } else {
        $.ajax({
          type: "post",
          url: "Functions/init.php",
          data: { username: username, password: password },
          success: function (data) {
            $("#msg").html(data);
          },
        });
      }
    }

    $("#modal").modal();
  });

  //forgot
  $("#forgot").click(function () {
    var ffemail = $("#femail").val();

    if (ffemail == "" || ffemail == null) {
      $("#msg").html("Please insert your email");
    } else {
      $("#msg").html("Loading... Please Wait!");

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { ffemail: ffemail },
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }

    $("#modal").modal();
  });

  //reset
  $("#update").click(function () {
    var fpassword = $("#fpassword").val();
    var cfpassword = $("#cfpassword").val();
    var mail = $("#data").text();
    console.log(mail);

    if (fpassword == "" || fpassword == null) {
      $("#msg").html("Please create a password");
    } else {
      if (cfpassword == "" || cfpassword == null) {
        $("#msg").html("Confirm Your Password");
      } else {
        if (cfpassword != cfpassword) {
          $("#msg").html("Password does not match!");
        } else {
          $("#msg").html("Loading...Please Wait!");

          $.ajax({
            type: "post",
            url: "functions/init.php",
            data: { fpassword: fpassword, cfpassword: cfpassword, mail: mail },
            success: function (data) {
              $("#msg").html(data);
            },
          });
        }
      }
    }

    $("#modal").modal();
  });


  //update bio data
  $("#update_profile").click(function (){
    var cfname   = $("#cfname").val();
    var cuname   = $("#cuname").val();
    var cphone   = $("#cphone").val();
    var cwnum    = $("#cwnum").val();
    var cniche   = $("#cniche").val();
    var cspec    = $("#cspec").val();
      if (cfname == "" || cfname == null) {
      $("#msg").html("Please input your Full Name");
    } else {
      if (cuname == "" || cuname == null) {
      $("#msg").html("Please input your New Username");
    }else{
      if (cphone == "" || cphone == null) {
      $("#msg").html("Please input your New Phone Number");
    }else{
      if (cwnum == "" || cwnum == null) {
      $("#msg").html("Please input your New WhatsApp Number");
    }else{
      if (cniche == "" || cniche == null) {
      $("#msg").html("Please input your New Niche");
    }else{
      if (cspec == "" || cspec == null) {
      $("#msg").html("Please input your New Specialization");
    }else{
      $("#msg").html("Please Wait...");
      $.ajax({
                      type: "post",
                      url: "functions/init.php",
                      data: {
                        cfname: cfname,
                        cuname: cuname,
                        cphone: cphone,
                        cwnum : cwnum,
                        cniche: cniche,
                        cspec : cspec,
                      },
                      success: function (data) {
                        $("#msg").html(data);
                      },
                    });
    }
    }
    }
    }
    }
    }
    $("#modal").modal();
  });

 //Update Password form Profile
  $("#cpassword").click(function () {
    var lpass = $("#lpass").val();
    var npass = $("#npass").val();
    var cpass = $("#cpass").val();
    
    if (lpass == "" || lpass == null) {
      $("#msg").html("Input your last Password");
    } else {
      if (npass == "" || npass == null) {
        $("#msg").html("Input a new Password");
      } else {
        if (cpass != npass) {
          $("#msg").html("Password does not match!");
        } else {
          $("#msg").html("Loading...Please Wait!");

          $.ajax({
            type: "post",
            url: "functions/init.php",
            data: { lpass: lpass, npass: npass, cpass: cpass },
            success: function (data) {
              $("#msg").html(data);
            },
          });
        }
      }
    }

   

    $("#modal").modal();
  });


 //Update Social Media links
  $("#links").click(function () {
    var cfb        = $("#fb").val();
    var clinkedin  = $("#linkedin").val();
    var cig        = $("#ig").val();
    var ctwitter   = $("#twitter").val();
    
    if (fb == "" || fb == null) {
      $("#msg").html("Input your New Facebook link");
    } else {
      if (linkedin == "" || linkedin == null) {
        $("#msg").html("Input your New linkedin link");
      } else {
        if (ig == "" || ig == null) {
          $("#msg").html("Input your New Instagram link ");
        } else {
          if (twitter == "" || twitter == null) {
            $("#msg").html("Input your New Twitter link ");
          }else{
          $("#msg").html("Loading...Please Wait!");

          $.ajax({
            type: "post",
            url: "functions/init.php",
            data: { cfb: cfb, clinkedin: clinkedin, cig: cig, ctwitter: ctwitter },
            success: function (data) {
              $("#msg").html(data);
            },
          });
        }
      }
    }
  }
  $("#modal").modal();
});


//update profile picture
$("#ppix").click(function () {
    var picture = new FormData();
    var files = $("#propix").prop("files")[0];
    picture.append("file", files);

    if (files == null || files == "") {
      $("#msg").html("Kindly select a picture");
    } else {
      $("#msg").html("Updating...");
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: picture,
        contentType: false,
        processData: false,
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#modal").modal();
  });

//edit profile details
$("#about").click(function () {
    var about = $("#summernote").val();

    if (about == null || about == "") {
      $("#msg").html("Please write about yourself.");
    } else {
      $("#msg").html("Updating...");
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { about: about },
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#modal").modal();
  });

//write article
 $("#write").click(function () {
    // var image = document.getElementById('img');
    var title        = $("#title").val();
    var tags  = $("#tags").val();
    var cat        = $("#cat").val();
    var content   = $("#summernote").val();
    var status    = $("#status").val();
    var pix = $("#pic").val();
    
    if (title == "" || title == null) {
      $("#msg").html("Input a Title");
    } else {
        if (cat == "" || cat == null) {
          $("#msg").html("Please choose category ");
        } else {
          if (status == "" || status == null) {
            $("#msg").html("Choose status ");
          }else{
            if (content == "" || content == null) {
             $("#msg").html("Please write articles in text box "); 
            }else{

            $("#msg").html("Uploading, Please wait!");
            $.ajax({
              type: "post",
              url: "functions/init.php",
              data: { title: title, tags: tags, cat: cat, status: status, content: content, pix: pix},
              success: function (data) {
                $("#msg").html(data);
              },
            });
          }
        }
      }
    }
    
      $("#modal").modal();
    
});

//edit article
$("#nwrite").click(function () {
    // var image = document.getElementById('img');
    var ntitle        = $("#ntitle").val();
    var ntags  = $("#ntags").val();
    var ncat        = $("#ncat").val();
    var ncontent   = $("#summernote").val();
    var nstatus    = $("#nstatus").val();
    var npix = $("#pic").val();
    var p_id = $("#pid").val();
    
    if (ntitle == "" || ntitle == null) {
      $("#msg").html("Input a Title");
    } else {
        if (ncat == "" || ncat == null) {
          $("#msg").html("Please choose category ");
        } else {
          if (nstatus == "" || nstatus == null) {
            $("#msg").html("Choose status ");
          }else{
            if (ncontent == "" || ncontent == null) {
             $("#msg").html("Please write articles in text box "); 
            }else{

            $("#msg").html("Uploading, Please wait!");
            $.ajax({
              type: "post",
              url: "functions/init.php",
              data: { ntitle: ntitle, ntags: ntags, ncat: ncat, nstatus: nstatus, ncontent: ncontent, npix: npix, p_id: p_id},
              success: function (data) {
                $("#msg").html(data);
              },
            });
          }
        }
      }
    }
    
      $("#modal").modal();
    
});


//Upload Ads
$("#ads").click(function () {
    // var image = document.getElementById('img');
    var name        = $("#name").val();
    var product  = $("#product").val();
    var start        = $("#start").val();
    var end   = $("#end").val();
    var contact    = $("#contact").val();
    var contact = $("#contact").val();
    var image = $("#pic").val();
    
    if (name == "" || name == null) {
      $("#msg").html("Please input Business Owner's Name");
    } else {
        if (product == "" || product == null) {
          $("#msg").html("Please input product Name ");
        } else {
          if (start == "" || start == null) {
            $("#msg").html("Choose Start Date ");
          }else{
            if (end == "" || end == null) {
             $("#msg").html("Please input End Date "); 
            }else{
              if (contact == "" || contact == null) {
                  $("#msg").html("Enter a Contact Detail attached to this Business ");
                }else{
                  if (image == "" || image == null) {
                   $("#msg").html("Please Upload Ads Image "); 
                  }else{

                  $("#msg").html("Uploading, Please wait!");
                  $.ajax({
                    type: "post",
                    url: "functions/init.php",
                    data: { name: name, product: product, start: start, end: end, contact: contact, image: image},
                    success: function (data) {
                      $("#msg").html(data);
                    },
                  });
                }
              }
            }
          }
        }
      }
      
    
      $("#modal").modal();
    
});


//add new category
$("#new_cat").click(function () {
    var category = $("#cat").val();

    if (category == null || category == "") {
      $("#msg").html("Please input a category.");
    } else {
      $("#msg").html("Adding...");
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: { category: category },
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#modal").modal();
  });



//send email to users
$("#esend").click(function () {
    var user        = $("#muser").val();
    var message     = $("#summernote").val();
    var subject     = $("#subject").val();

    if (user == null || user == "") {
      $("#msg").html("Kindly select a user");
    } else {
      if (message == null || message == "") {
        $("#msg").html("Kindly type your message");
      }
      $("#msg").html("Sending...");
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: {user: user, message: message, subject: subject},
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#modal").modal

  });

    //signup for a user for admin dashboard
  $("#new_user").click(function () {
    var fname   = $("#fname").val();
    var uname   = $("#uname").val();
    var email   = $("#umail").val();
    var pword   = $("#pass").val();
    var cpword  = $("#cpass").val();
    var pnum    = $("#phone").val();
    var wnum    = $("#wnum").val();
    var niche   = $("#niche").val();
    var spec    = $("#spec").val();
    var fbook   = $("#fb").val();
    var linkedin = $("#linkedin").val();
    var ig      = $("#ig").val();
    var twitter = $("#twitter").val();
    var image   = $('#pic').val();


    if (uname == "" || uname == null) {
      $("#msg").html("Please input your Username");
    } else {
      if (email == "" || email == null) {
        $("#msg").html("Please input your email");
      } else {
        if (pword == "" || pword == null) {
          $("#msg").html("Type a password");
        } else {
          if (pword != cpword) {
            $("#msg").html("Password does not match");
          } else {
            if (image == "" || image == null) {
              $("#msg").html("Password does not match");
            } else {
              if (wnum == "" || wnum == null) {
                $("#msg").html("Password does not match");
              } else {
                if (password == "" || password == null) {
                  $("#msg").html("Password does not match");
                } else {
                  if (password == "" || password == null) {
                    $("#msg").html("Password does not match");
                  } else {
                    if (password == "" || password == null) {
                      $("#msg").html("Password does not match");
                    } else {
                       $("#msg").html("Loading...");

                       $.ajax({
                                type: "post",
                                url: "functions/init.php",
                                data: {
                                  fname: fname,
                                  uname: uname,
                                  email: email,
                                  pword: pword,
                                  cpword: cpword,
                                  pnum  : pnum,
                                  wnum  : wnum,
                                  edit  : edit,
                                  niche : niche,
                                  spec  : spec,
                                  strength : strength,
                                  weak   : weak,
                                  fbook : fbook,
                                  linkedin : linkedin,
                                  ig    : ig,
                                  twitter : twitter
                                },
                                success: function (data) {
                                  $("#msg").html(data);
                                },
                              });
                    }
                  }
                }
              }}}}}

    }
   $("#modal").modal();

 });  
   
  });