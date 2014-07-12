

// A premiliminary approach to the fishing blog
// here is some stuff to help you sync with 
// PHP and bootstrap
// http://stackoverflow.com/questions/16915278/getting-data-back-from-a-bootstrap-modal


var name;
var input;
var defaultPic = "http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg";

$(document).ready(function(){

  // resets the modal once the post button is posted
  $('.btn-lg').click(function () {      
    document.getElementById("userInput").value = ''; 
    document.getElementById("userName").value = '';   
  });

  // function called when the modal is shown
  $('#myModal').on('shown.bs.modal', function (e) {

    // get a photo if you want it
    $(function() {
        $('#file-input').change(function(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);        
        });

        function fileOnload(e) {
            var $img = $('<img>', { src: e.target.result });
            var canvas = $('#canvas')[0];
            var context = canvas.getContext('2d');

            $img.load(function() {
                context.drawImage(this, 0, 0);
            });
        }
    });

    // hide once the submit button is clicked
    $('.submit').click(function () {
      $('#myModal').modal('hide');
    });
  });

  // get called when the the modal completes hidding
  $('#myModal').on('hidden.bs.modal', function (e) {

    // get user input
    input = document.getElementById("userInput").value;
    name = document.getElementById("userName").value;

    // post user input and name to our blog
    $('.blog').append('<div class="row featurette"><div class="col-md-5"><img class="featurette-image img-responsive" src="'+defaultPic+'" alt="Generic placeholder image"></div><div class="col-md-7"><h3>'+name+'</h3><p>'+input+'</p></div></div><hr class="featurette-divider">');
  });
});


