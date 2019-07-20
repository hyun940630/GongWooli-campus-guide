$(document).ready(function() {
  goSpaceInfoSystem();
});

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

function goSpaceInfoSystem() {
  document.getElementById("ifr").src = "http://intra.wku.ac.kr/WFiles/asset/space/room.jsp?room_no=" + getParameter('room_no');
}
