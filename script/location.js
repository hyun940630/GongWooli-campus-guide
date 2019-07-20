
$(document).ready(function() {
  document.getElementById('floor_value').innerHTML = getParameter('floor') + "층";
  document.getElementById('location_name').innerHTML = decodeURIComponent(getParameter('room_nm'));

  loadImg();
})

function getParameter(paramName) {
  var _tempUrl = window.location.search.substring(1);
  var _tempArray = _tempUrl.split('&');

  for(var i = 0; i < _tempArray.length; i++) {
    var _keyValuePair = _tempArray[i].split('=');

    if(_keyValuePair[0] == paramName) {
      return _keyValuePair[1];
    }
  }
}

function deleteCharacter(sentence, char) {
  parsedSentence = "";
  splitSentence = sentence.split(char);

  for(var i=0; i<splitSentence.length; i++) {
    parsedSentence += splitSentence[i];
  }

  return parsedSentence;
}

function goSpacePHP() {
  console.log(deleteCharacter(getParameter('room_fnr'), '-'));
  location.href="./space.php?room_no=" + deleteCharacter(getParameter('room_fnr'), '-');
}

function loadImg() {
  var pathImg = document.getElementById('path_img');
  pathImg.src = decodeURIComponent(getParameter('path_url'));
  console.log(pathImg.src);

  $('#path_img').error(function(){
    console.log("error!!!");
    $(this).attr('src', './img/no_image.png');
  });
}
