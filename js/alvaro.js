
$(document).ready(function(){

  // function called when the modal is shown
  $('#myModal').on('shown.bs.modal', function (e) {

    // hide once the submit button is clicked
    $('.submit').click(function () {
      $('#myModal').modal('hide');
    });
  });
});