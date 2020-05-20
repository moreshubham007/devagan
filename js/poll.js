// Poll lock/unlock functions
function myFunction() {
    var x = document.getElementById('poll_status');
    if (x.innerHTML === 'Unlock') {
      x.innerHTML = 'Locked';
      x.style.color = 'rgb(181, 1, 1)';
    } else {
      x.innerHTML = 'Unlock';
      x.style.color = 'green';
    }
  }

// Create Poll button event
$(function() {
    $('.create-poll').click(function() {
      $(this).text(function(i, text) {
        return text === 'Create' ? 'Hide' : 'Create';
      });
      $('.answers').slideToggle();
    });
    $('.create-poll').click();
  });

// Delete poll button
$('.delete-poll-button').click(function() {
  $('#delete-poll-pop').slideToggle();
  $('.delete-poll-bg').show();
//   var isVisible = $('.delete-poll-bg').show();


const elemento = document.querySelector('.delete-poll-bg')
var isVisible = document.getComputedStyle(elemento);

//   if(isVisible.style.display)

//   if(isVisible == show()){
//     $('.delete-poll-bg').hide();
//   }
//   else{
//     $('.delete-poll-bg').show();
//   }

});
// if select not to delete
$('.pop-no').click(function() {
  $('#delete-poll-pop').slideToggle();
  $('.delete-poll-bg').hide();
});