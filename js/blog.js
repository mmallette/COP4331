

$(document).ready(function(){


  $('.modal-title').append('<strong> Fish_Wisper_18</strong>');

  $('.btn-lg').click(function () {      
      $('userInput').empty();      
  });

  $('#myModal').on('hidden.bs.modal', function (e) {     
    $('.btn-primary').click(function () {
      var input = document.getElementById("userInput").value;      
    });
  }); 
}); 
