$(document).ready(function() {
  $.question_answer_show = function(id) {
      var question_id = "#" + id;
      $(".SSS_answer").slideUp();
      $(question_id).parent().find(".SSS_answer").slideToggle();
  };

  $.product_detail_change_img = function(file_path, img) {
      var img_path = "img/products/" + file_path + "/" + img;
      $("#main_img").attr("src", img_path);
  };
});
