"use strict";

$(function () {


});


//
// Draw map in page-contact
//
function initMap() {
  var mapDiv = document.getElementById('contact-map');
  var map = new google.maps.Map(mapDiv, {
    center: { lat: 44.540, lng: -78.546 },
    zoom: 14
  });

  var marker = new google.maps.Marker({
    position: { lat: 44.540, lng: -78.546 },
    map: map
  });

  var infowindow = new google.maps.InfoWindow({
    content: "<strong>Our office</strong><br>3652 Seventh Avenue, Los Angeles, CA"
  });

  marker.addListener('click', function () {
    infowindow.open(map, marker);
  });

  infowindow.open(map, marker);

  map.set('styles', [{ "featureType": "landscape", "stylers": [{ "hue": "#FFBB00" }, { "saturation": 43.400000000000006 }, { "lightness": 37.599999999999994 }, { "gamma": 1 }] }, { "featureType": "road.highway", "stylers": [{ "hue": "#FFC200" }, { "saturation": -61.8 }, { "lightness": 45.599999999999994 }, { "gamma": 1 }] }, { "featureType": "road.arterial", "stylers": [{ "hue": "#FF0300" }, { "saturation": -100 }, { "lightness": 51.19999999999999 }, { "gamma": 1 }] }, { "featureType": "road.local", "stylers": [{ "hue": "#FF0300" }, { "saturation": -100 }, { "lightness": 52 }, { "gamma": 1 }] }, { "featureType": "water", "stylers": [{ "hue": "#0078FF" }, { "saturation": -13.200000000000003 }, { "lightness": 2.4000000000000057 }, { "gamma": 1 }] }, { "featureType": "poi", "stylers": [{ "hue": "#00FF6A" }, { "saturation": -1.0989010989011234 }, { "lightness": 11.200000000000017 }, { "gamma": 1 }] }]);
}

$('a[name = deleteBtn]').click(function () {

})


//editconf
$('a[name = editConf]').click(function () {

  $('input').prop('readonly', false);
  $('textarea').prop('disabled', false);

  $('a[name = editConf]').css('display', 'none');
  $('a[name = saveConf]').css('display', 'inline-block');

})

$('a[name = saveConf]').click(function () {

  $('input').prop('readonly', true);
  $('textarea').prop('disabled', true);


  $('a[name = saveConf]').css('display', 'none');
  $('a[name = editConf]').css('display', 'inline-block');

  var name = $('#name').val();
  var publisher = $('#publisher').val();
  var description = $('#description').val();
  var startdate = $('#startdate').val();
  var enddate = $('#enddate').val();
  var rank = $('#rank').val();
  var location = $('#location').val();


  var cid = $('#cid').text();

  $.ajax({
    url: "updateConf.php",
    type: "post",
    data: {
      cid: cid,
      name: name,
      publisher: publisher,
      description: description,
      startdate: startdate,
      enddate: enddate,
      rank: rank,
      location: location
    
    },
    success: function (result) {
      alert(result);
    },
    error: function (error) {
      alert(error);
    }
  });



});


//edituser 
$('a[name = editBtn]').click(function () {
  $('input').prop('readonly', false);
  $('select').prop('disabled', false);
  $('textarea').prop('disabled', false);


  $('a[name = editBtn]').css('display', 'none');
  $('a[name = saveBtn]').css('display', 'inline-block');

})


$('a[name = saveBtn]').click(function () {
  $('input').prop('readonly', true);
  $('select').prop('disabled', true);
  $('textarea').prop('disabled', true);


  $('a[name = saveBtn]').css('display', 'none');
  $('a[name = editBtn]').css('display', 'inline-block');

  var firstName = $('#firstname').val();
  var lastName = $('#lastname').val();
  var role = $('#role').val();
  var city = $('#city').val();
  var country = $('#country').val();
  var address = $('#address').val();
  var personalhomepage = $('#personalhomepage').val();
  var officephone = $('#officephone').val();
  var birthdate = $('#birthday').val();
  var mobile = $('#mobile').val();
  var email = $('#email').val();
  var username = $('#username').val();
  var userID = $('span[name = userID]').text();
  
  //alert("user id=" + userID);


  
  $.ajax({
    url: "updateUser.php",
    type: "post",
    data: {
      userID: userID,
      firstname: firstName,
      lastname: lastName,
      username: username,
      role: role,
      address: address,
      city: city,
      country: country,
      personalhomepage: personalhomepage,
      birthdate: birthdate,
      mobile: mobile,
      officephone: officephone,
      email: email
    },
    success: function (result) {
    //  alert(result);
    },
    error: function (error) {
      alert(error);
    }
  });
})

function removeItem(node, mode) {
  var parent = $(node).parent();
  var userID = parent.find('span[name=userID]').text();

  // alert(userID);
  $.ajax({
    url: "deleteUser.php",
    type: "post",
    data: {
      userID: userID
    },
    success: function (result) {
      //alert(result);
      var response = JSON.parse(result);
      if (response.code == 1) {
        if (mode == 0) {
          var parent = $(node).parent().parent().parent().parent();
          parent.fadeOut(1000);
        } else {
          window.location = 'user-manage.php';
          alert("deleted successfully");
        }
      }
    },
    error: function (error) {
      var response = JSON.parse(error);
      alert(response.message);
    }
  });


  // ajax
}

function deleteConf(node) {

  var cid = $('span[name=cid]').text();
  //alert(cid);

  $.ajax({
    url: "deleteConf.php",
    type: "post",
    data: {
      cid: cid
    },
    
    success: function (result) {
      var response = JSON.parse(result);
      window.location = 'conferences.php';
      alert(response.message);

    },
     error: function (error) {
      var response = JSON.parse(error);
      alert(response.message);
    }

  });
}
