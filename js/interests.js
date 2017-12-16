var namArr = ['ali', 'austin', 'fayaz', 'george', 'haris', 'kevin', 'qifan', 'samir'];

$("#ali").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/ali.php");
});

$("#aus").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/austin.php");
});

$("#fay").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/fayaz.php");
});

$("#geo").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/george.php");
});

$("#har").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/haris.php");
});

$("#kev").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/kevin.php");
});

$("#qif").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/qifan.php");
});

$("#sam").click(function(event) {
  event.preventDefault();
  $("#currInterests").load("interests/samir.php");
});

function contains(a, obj) {
    var i = a.length;
    while (i--) {
       if (a[i] === obj) {
           return true;
       }
    }
    return false;
}

$("#submit").click(function() {
  var likes = $("#likes").val();
  var name = $("#name").val();

  if (likes == '' || name == '') {
    alert("Make sure you entered something in the field, dumbass");
  } else if (!contains(namArr, name.toLowerCase())){
    alert("That person isn't a part of Seanmas, smh");
  } else {
    $.ajax({
        type: 'POST',
        url: 'seanmas/post.php',
        data: {
            i: likes,
            n: name
        },
        success: function (data) {
            $("#likes").val('');
            $("#name").val('');
            //alert("Successfully added your interests");
            console.log(data);
        }
    });
    return false;
  }
});
