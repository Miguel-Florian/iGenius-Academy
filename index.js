$(document).on("click", "nav li a", function () {
  $this.addClass("active").siblings().removeClass("active");
}).style.color = "red";

document
  .querySelector("#nav li a")
  .addClass("active")
  .siblings()
  .removeClass("active");

$(document).on("click", "#nav li a", function () {
  $(this).addClass("active").siblings().removeClass("active");
});
