$(function () {
  $("#sortable1, #sortable2")
    .sortable({
      accept: "#sortable2",
      connectWith: ".connectedSortable",
    })
    .disableSelection();
});
