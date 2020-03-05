$( document ).ready(function() {

  $(".edit-btn").click(function() {
    var id = $(this).attr("id");
    ShowEditModal(id);
  });

  function ShowEditModal(x) {
    var id = x;
    var sel_name = ".name_" + x;
    var sel_quant = ".quant_" + x;
    var sel_pos = ".pos_" + x;
    $("div#edit-modal div h2").html("Edit Item - " + id);
    $("input[name='id']").val(id);
    $("input[name='edit_name']").val($(sel_name).html());
    $("input[name='edit_quantity']").val($(sel_quant).html());
    $("input[name='edit_position']").val($(sel_pos).html());
    UIkit.modal("#edit-modal").show();
  }

});
