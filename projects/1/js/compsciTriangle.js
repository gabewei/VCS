$(document).ready(function() {

  $("#RunnerCode, #TriangleCode, #RectangleCode, #CircleCode, #SphereCode, #CuboidCode").hide();

  $("#RunnerClick").click(function() {
    $("#RunnerCode").toggle();
  });

  $("#TriangleClick").click(function() {
    $("#TriangleCode").toggle();
  });

  $("#RectangleClick").click(function() {
    $("#RectangleCode").toggle();
  });

  $("#CircleClick").click(function() {
    $("#CircleCode").toggle();
  });

  $("#SphereClick").click(function() {
    $("#SphereCode").toggle();
  });

  $("#CuboidClick").click(function() {
    $("#CuboidCode").toggle();
  });

});
