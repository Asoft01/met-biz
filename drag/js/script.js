function makeDrag(el) {
  // Pass me an object, and I will make it draggable
  el.draggable({
    revert: "invalid",
  });
}
$(function () {
  makeDrag($("#dvSource img"));

  $("#dvDest").droppable({
    drop: function (event, ui) {
      if ($("#dvDest img").length === 0) {
        $("#dvDest").html("");
      } else {
        $("#dvDest img:first")
          .hide(600, function () {
            $(this).removeAttr("class");
            $(this).removeAttr("style");
            $(this).appendTo("#dvSource");
          })
          .show(600, function () {
            makeDrag($(this));
          });
      }
      ui.draggable.addClass("dropped");
      ui.draggable.draggable("destroy");
      $("#dvDest").append(ui.draggable);
    },
  });
});
