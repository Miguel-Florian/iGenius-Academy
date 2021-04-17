$(document).on("click", "#nav li a", function () {
  $(this).addClass("active").siblings().removeClass("active");
});
