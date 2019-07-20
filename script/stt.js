var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent

var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
recognition.grammars = speechRecognitionList;
recognition.continuous = false;
recognition.lang = 'ko-KR';
recognition.interimResults = false;
recognition.maxAlternatives = 1;

function recognitionStart() {
  $('#voice_rec').css('background-color', '#ff0000');
  $('#voice_dialog').text('듣는 중');
  recognition.start();
}

recognition.onresult = function(event) {
  var searchTerm = event.results[0][0].transcript;
  console.log(searchTerm);
  $('#voice_dialog').text('검색 결과 : ' + searchTerm);
  voiceSearch(searchTerm);
}

recognition.onspeechend = function(event) {
  recognition.stop();

  $('#voice_rec').css('background-color', '#15aabf');
  $('#voice_dialog').text('검색어를 말하세요');
}

recognition.onnomatch = function(event) {
  $('#voice_rec').css('background-color', '#15aabf');
  $('#voice_dialog').text('검색 결과가 없습니다');
  console.log("I didn't recognize that keword.");ww
}

recognition.onerror = function(event) {
  $('#voice_rec').css('background-color', '#15aabf');
  console.log('Error occurred in recognition: ' + event.error);

  if(event.error == "no-speech") {
    $('#voice_dialog').text('검색어를 말하세요');
  } else if(event.error == "not-allowed") {
    $('#voice_dialog').text('허락되지 않은 접근입니다')
  } else {
    $('#voice_dialog').text('음성인식에 문제가 발생하였습니다');
  }
}
