// Edit basic info buttons

$('.uploading-profile-pic').on('click', function () {
    $('#profile-pics').trigger('click');
  });

$('.uploading-bg-pic').on('click', function () {
    $('#bg-covers').trigger('click');
});

// In Create Group back button 
function goBack() {
  window.history.back();
}
// when button click in create group section
function gothere() {
  window.location.href = "./invite-friend.html";
}


// delete group button warning message
$('.delete-group-btn').click(function (e) { 
  e.preventDefault();  
  $('.delete-page-disable-bg').slideToggle('fast');
  // $('.delete-page-pop-up-container').show();
  $('.delete-page-pop-up-container').slideToggle('fast');  
});
$(".delete-option-no").click(function (e) { 
  e.preventDefault();
  $('.delete-page-disable-bg').slideToggle('fast');
  $('.delete-page-pop-up-container').slideToggle('fast');

  
});

// delete group final message
$('.delete-option-yes').click(function (e) { 
  e.preventDefault();
  $('.delete-page-pop-up-container').hide();
  $('.delete-page-pop-up-container2').slideToggle('fast');
    
  });
$('.delete-page-close-icon').click(function (e) { 
  e.preventDefault();
  $('.delete-page-disable-bg').slideToggle('fast');
  $('.delete-page-pop-up-container2').slideToggle('fast');
  
});
$('.delete-option-permanently').click(function () { 
  // e.preventDefault();
  alert("Group Deleted Successfully now remove this JS dummy code in js/script2.js at line 51");
  $('.delete-page-close-icon').trigger('click');
});


$('.delete-page-disable-bg').click(function (e) { 
  e.preventDefault();
  $('.delete-page-pop-up-container').slideUp();
  $('.delete-page-pop-up-container2').slideUp();
  $('.delete-page-disable-bg').hide();
  
});