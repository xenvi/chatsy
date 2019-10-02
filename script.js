$(".signup-title").on("click", function() {
  // titles //
  $(this).removeClass("translucent");
  $(".login-title").addClass("translucent");

  // hide login form //
  $("#loginForm").addClass("hide");
  // reveal signup form //
  $("#signupForm").addClass("reveal");

  // extend container //
  $("#loginContainer").addClass("extend");
});

$(".login-title").on("click", function() {
  // titles //
  $(this).removeClass("translucent");
  $(".signup-title").addClass("translucent");

  // hide signup form //
  $("#signupForm").removeClass("reveal");
  // reveal login form //
  $("#loginForm").removeClass("hide");

  // extend container //
  $("#loginContainer").removeClass("extend");
});
