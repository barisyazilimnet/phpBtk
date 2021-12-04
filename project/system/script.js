$(document).ready(function () {
  $.question_answer_show = function (id) {
    var question_id = "#" + id;
    $(".SSS_answer").slideUp();
    $(question_id).parent().find(".SSS_answer").slideToggle();
  };
});
