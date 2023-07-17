

  function updateProgressBar() {
    var currentForm = $("fieldset:visible");
    var nextForm = currentForm.next("fieldset");
    var previousForm = currentForm.prev("fieldset");
    var progressBar = $("#progressbar li");
  
    if (nextForm.length > 0) {
      currentForm.hide();
      nextForm.show();
      progressBar.removeClass("active");
      progressBar.eq($("fieldset").index(nextForm)).addClass("active");
    } else if (previousForm.length >=0) {
      currentForm.hide();
      previousForm.show();
      progressBar.removeClass("active");
      progressBar.eq($("fieldset").index(previousForm)).addClass("active");
    }
  }


  $(document).ready(function() {
    $(".next").click(function() {
      updateProgressBar("next");
    });
  
    $(".previous").click(function() {
      updateProgressBar("previous");
    });
  });