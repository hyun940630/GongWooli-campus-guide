////////////////////// DATA TYPE : ROOM ///////////////////
var Room = function(room_maj_no, room_fnr, room_nm, room_nm_2, use_dept_nm, use_nm, room_usr, floor, section, path, tel) {
  this.room_maj_no = room_maj_no;
  this.room_fnr = room_fnr;
  this.room_nm = room_nm;
  this.room_nm_2 = room_nm_2;
  this.use_dept_nm = use_dept_nm;
  this.use_nm = use_nm;
  this.room_usr = room_usr;
  this.floor = floor;
  this.section = section;
  this.path = path;
  this.tel = tel;
}

Room.prototype = {
  getRoomMajNo : function() { return this.room_maj_no; },
  getRoomFnr : function() { return this.room_fnr; },
  getRoomNm : function() { return this.room_nm; },
  getRoomNm2 : function() { return this.room_nm_2; },
  getUseDeptNm : function() { return this.use_dept_nm; },
  getUseNm : function() { return this.use_nm; },
  getRoomUsr : function() { return this.room_usr; },
  getFloor : function() { return this.floor; },
  getSection : function() { return this.section; },
  getPath : function() { return this.path; },
  getTel : function() { return this.tel; }
}
////////////////////// DATA TYPE : ROOM //////////////////////

var animation_flag = false;
var search_empty_flag = true;

$(document).ready(function() {
  setTextSearchListner();
})

function setTextSearchListner() {
  let KEY_ENTER = 13;

  $('#stretchy_input').keydown(function(event) {
    if(event.keyCode == KEY_ENTER) {
      let searchTerm = $('#stretchy_input').val();
      request(searchTerm);
      $('#stretchy_input').val('');
    }
  });
}

function voiceSearch(searchTerm) {
  request(searchTerm);
}

function request(searchTerm) {
  var error_flag = true;

  searchTerm = deleteCharacter(searchTerm, ' ');
  error_flag = exceptionHandling(searchTerm);

  if (error_flag) {
    $.ajax({
        url:'http://ecguide.wku.ac.kr/Ecguide/server/search_fnr.php?search=' + searchTerm,
        type: "GET",
        success: function (data) {
          console.log(data);
          keywords = parseKeywordData(data);
          console.log(keywords);
          responseToFnr(searchTerm, keywords);
        }
    });
  }
}

function requestByMenu(fnr) {
  $.ajax({
      url:'http://ecguide.wku.ac.kr/Ecguide/server/search_room.php?fnr=' + fnr,
      type: "GET",
      success: function (data) {
        room = parseRoomData(data);
        goToLocationByMenu(room);
      }
  });
}

function parseRoomData(data) {

  splitData = data.split('$');

  for(var i=0; i<(splitData.length - 1); i++) {
    splitSplitData = splitData[i].split('#');
  }

  room = new Room(splitSplitData[0], splitSplitData[1], splitSplitData[2], splitSplitData[3], splitSplitData[4], splitSplitData[5], splitSplitData[6], splitSplitData[7], splitSplitData[8], splitSplitData[9], splitSplitData[10]);

  return room;
}

function goToLocationByMenu(room) {
  location.href="./location.php?room_maj_no=" + room.getRoomMajNo()
      + "&room_fnr=" + room.getRoomFnr()
      + "&room_nm=" + encodeURIComponent(room.getRoomNm())
      + "&room_nm_2=" + room.getRoomNm2()
      + "&use_dept_nm=" + room.getUseDeptNm()
      + "&use_nm=" + room.getUseNm()
      + "&room_usr=" + room.getRoomUsr()
      + "&floor=" + room.getFloor()
      + "&section=" + room.getSection()
      + "&path_url=" + room.getPath()
      + "&tel=" + room.getTel()
}

function exceptionHandling(searchTerm) {
  if(searchTerm == "") {
    console.log("error: searchTerm is empty");
    alert("검색어를 입력하세요");

    return false;
  }

  return true;
}

function responseToFnr(searchTerm, keywords) {
  console.log(searchTerm);
  url = "./list.php?searchTerm=" + encodeURIComponent(searchTerm) + "&";

  for(var i=0; i<keywords.length; i++) {
    url += "fnr" + (i+1) + "=" + keywords[i] + "&";
  }

  location.href = url;
}

function parseKeywordData(data) {
  keywords = new Array();

  splitData = data.split('$');

  for(var i=0; i<(splitData.length - 1); i++) {
    keywords.push(splitData[i]);
  }

  return keywords;
}

function deleteCharacter(sentence, char) {
  parsedSentence = "";
  splitSentence = sentence.split(char);

  for(var i=0; i<splitSentence.length; i++) {
    parsedSentence += splitSentence[i];
  }

  return parsedSentence;
}
