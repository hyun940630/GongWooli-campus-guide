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

var global_rooms = Array();
$(document).ready(function () {
  initParams();
})

$(document).ready(function() {
  setTextSearchListner();
})

function setTextSearchListner() {
  let KEY_ENTER = 13;

  $('#stretchy_input').keydown(function(event) {
    if(event.keyCode == KEY_ENTER) {
      let searchTerm = $('#stretchy_input').val();
      requestBySearchTerm(searchTerm);
      $('#stretchy_input').val('');
    }
  });
}

function initParams() {
  var fnrs = getParameter();

  var searchDisplay = document.getElementById('search_display');
  searchDisplay.innerHTML = "'<font>" + decodeURIComponent(getSpecParameter('searchTerm')) + "' 에 대한 검색 결과</font>";

  if(fnrs.length == 1) {
    var searchList = document.getElementById('search_list');
    searchList.innerHTML = '<font>검색 결과가 없습니다</font>';
  } else {
    for(var i=0; i<fnrs.length - 1; i++) {
      request(fnrs[i], i, fnrs.length - 2);
    }
  }
}

function getParameter() {
  var fnrs = Array();

  var _tempUrl = window.location.search.substring(1);
  var _tempArray = _tempUrl.split('&');

  for(var i = 1; i < (_tempArray.length); i++) {
    var _keyValuePair = _tempArray[i].split('=');
    fnrs.push(_keyValuePair[1]);
  }

  return fnrs;
}

function getSpecParameter(paramName) {
  var _tempUrl = window.location.search.substring(1);
  var _tempArray = _tempUrl.split('&');

  for(var i = 0; _tempArray.length; i++) {
    var _keyValuePair = _tempArray[i].split('=');

    if(_keyValuePair[0] == paramName) {
      return _keyValuePair[1];
    }
  }
}

function request(fnr, index, length) {
  $.ajax({
      url:'http://ecguide.wku.ac.kr/Ecguide/server/search_room.php?fnr=' + fnr,
      type: "GET",
      success: function (data) {
        room = parseRoomData(data);
        global_rooms.push(room);
        renderingRoomList(room);
      }
  });
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

function requestBySearchTerm(searchTerm) {
  var error_flag = true;

  searchTerm = deleteCharacter(searchTerm, ' ');
  error_flag = exceptionHandling(searchTerm);

  if (error_flag) {
    $.ajax({
        url:'http://ecguide.wku.ac.kr/Ecguide/server/search_fnr.php?search=' + searchTerm,
        type: "GET",
        success: function (data) {
          keywords = parseKeywordData(data);
          responseToFnr(searchTerm, keywords);
        }
    });
  }
}

function parseRoomData(data) {

  splitData = data.split('$');

  for(var i=0; i<(splitData.length - 1); i++) {
    splitSplitData = splitData[i].split('#');
  }

  room = new Room(splitSplitData[0], splitSplitData[1], splitSplitData[2], splitSplitData[3], splitSplitData[4], splitSplitData[5], splitSplitData[6], splitSplitData[7], splitSplitData[8], splitSplitData[9], splitSplitData[10]);

  return room;
}

function renderingRoomList(room) {
  console.log("rendering!!!" + global_rooms.length);
  var searchList = document.getElementById('search_list');
  var innerhtml = searchList.innerHTML;

  innerhtml += '<div id="' + room.getRoomFnr() + '" class="list_item_wrap">';
  innerhtml +=      '<div class="number_wrap">';
  innerhtml +=          '<center><font>' + room.getRoomMajNo() + '</font></center>';
  innerhtml +=      '</div>';
  innerhtml +=      '<div class="title_wrap">';
  innerhtml +=          '<center><font>' + room.getRoomNm() + '</font></center>';
  innerhtml +=      '</div>';
  innerhtml +=      '<div class="left_wrap">';
  innerhtml +=          '<div class="category_wrap">';
  innerhtml +=              '<center><font>' + room.getUseNm() + '</font></center>';
  innerhtml +=          '</div>';
  innerhtml +=          '<div class="dept_wrap">';
  innerhtml +=              '<center><font>' + room.getUseDeptNm() + '</font></center>';
  innerhtml +=          '</div>';
  innerhtml +=      '</div>';
  innerhtml +=      '<div class="user_wrap">';
  innerhtml +=          '<center><font>' + room.getRoomUsr() + '</font></center>';
  innerhtml +=      '</div>';
  innerhtml += '</div>';

  searchList.innerHTML = innerhtml;

  setClickListener();
}

function goToLocation(id) {
  room = getRoomByIndex(id);

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

function getRoomByIndex(room_fnr) {
  for(var i=0; i<global_rooms.length; i++) {
    if(global_rooms[i].getRoomFnr() == room_fnr) {
      return global_rooms[i];
    }
  }

  return -1;
}

var dragging = false;

function setClickListener() {
  $('.list_item_wrap').click(function(){
    var id = $(this).attr("id");
    goToLocation(id);
  });

  $('.list_item_wrap').bind("touchend",function(e){
    if(dragging)
      return;

    e.preventDefault();

    var id = $(this).attr("id");
    goToLocation(id);
  });

  $('.list_item_wrap').bind("touchmove", function(){
      dragging = true;
  });
}

function deleteCharacter(sentence, char) {
  parsedSentence = "";
  splitSentence = sentence.split(char);

  for(var i=0; i<splitSentence.length; i++) {
    parsedSentence += splitSentence[i];
  }

  return parsedSentence;
}

function exceptionHandling(searchTerm) {
  if(searchTerm == "") {
    console.log("error: searchTerm is empty");
    alert("검색어를 입력하세요");

    return false;
  }

  return true;
}

function parseKeywordData(data) {
  keywords = new Array();

  splitData = data.split('$');

  for(var i=0; i<(splitData.length - 1); i++) {
    keywords.push(splitData[i]);
  }

  return keywords;
}

function responseToFnr(searchTerm, keywords) {
  console.log(searchTerm);
  url = "./list.php?searchTerm=" + encodeURIComponent(searchTerm) + "&";

  for(var i=0; i<(keywords.length-1); i++) {
    url += "fnr" + (i+1) + "=" + keywords[i] + "&";
  }

  location.href = url;
}
