$(document).ready(function() {
  setCalendar();
});

function setCalendar() {
  var calendar = document.getElementById("calendar");
  var innerhtml = "";

  var currentDate = new Date();

  innerhtml +=  '<thead>';
  innerhtml +=    '<tr>';
  innerhtml +=      '<th scope="col" colspan="2">주요 학사일정</th>';
  innerhtml +=    '</tr>';
  innerhtml +=  '</thead>';
  innerhtml +=  '<tbody>';

  switch(currentDate.getMonth() + 1) {
    case 1: {
      innerhtml +=  addSchedule("2018.12.17 ~ 2019.01.11", "동계 계절수업기간(융합학기)");
      innerhtml +=  addSchedule("2019.01.01", "신정(휴무일)");
      innerhtml +=  addSchedule("2019.01.04", "졸업사정");
      innerhtml +=  addSchedule("2019.01.08 ~ 2019.01.18", "1학기 수업계획서 입력(교수)");
      innerhtml +=  addSchedule("2019.01.09 ~ 2019.01.11", "전과 원서접수");
      innerhtml +=  addSchedule("2019.01.14 ~ 2019.01.18", "재입학 원서접수");
      innerhtml +=  addSchedule("2019.01.29 ~ 2019.01.31", "1학기 예비수강신청");
      break;
    }
    case 2: {
      innerhtml +=  addSchedule("2019.02.04 ~ 2019.02.06", "설날연휴");
      innerhtml +=  addSchedule("2019.02.12 ~ 2019.02.14", "1학기 수강신청");
      innerhtml +=  addSchedule("2019.02.20", "학위수여식");
      innerhtml +=  addSchedule("2019.02.25 ~ 2019.03.01", "1학기 개강 준비기간");
      break;
    }
    case 3: {
      innerhtml +=  addSchedule("2019.02.25 ~ 2019.03.01", "1학기 개강 준비기간");
      innerhtml +=  addSchedule("2019.03.04 ~ 2019.03.15", "부전공, 복수전공(교직복수전공 포함)신청기간");
      innerhtml +=  addSchedule("2019.03.04", "2019학년도 1학기 개강 및 입학식");
      innerhtml +=  addSchedule("2019.03.07 ~ 2019.03.08", "수강신청 변경 및 확인");
      innerhtml +=  addSchedule("2019.03.18 ~ 2019.03.20", "2019학년도 1학기 수강신청 교과목 Drop기간");
      innerhtml +=  addSchedule("2019.03.18 ~ 2019.03.20", "2019학년도 1학기 성적포기 신청기간");
      innerhtml +=  addSchedule("2019.03.29", "일반휴학 및 군복학 마감");
      break;
    }
    case 4: {
      innerhtml +=  addSchedule("2019.04.01 ~ 2019.06.14", "평생교육실습기간");
      innerhtml +=  addSchedule("2019.04.01 ~ 2019.04.26", "교육실습기간");
      innerhtml +=  addSchedule("2019.04.22 ~ 2019.04.26", "수시시험기간");
      innerhtml +=  addSchedule("2019.04.29 ~ 2019.05.03", "집중수업 및 현장학습기간(정상수업)");
      break;
    }
    case 5: {
      innerhtml +=  addSchedule("2019.04.29 ~ 2019.05.03", "집중수업 및 현장학습기간(정상수업)");
      innerhtml +=  addSchedule("2019.05.01", "근로자의 날");
      innerhtml +=  addSchedule("2019.05.06", "대체공휴일(휴무일)");
      innerhtml +=  addSchedule("2019.05.15", "개교기념일(휴무일)");
      innerhtml +=  addSchedule("2019.05.27", "2019학년도 1학기 조기시험 신청 자격일(군입대)");
      innerhtml +=  addSchedule("2019.05.28 ~ 2019.05.30", "하계 계절수업 예비수강신청");
      innerhtml +=  addSchedule("2019.05.30 ~ 2019.06.14", "2019학년도 1학기 수업평가(학생)");
      break;
    }
    case 6: {
      innerhtml +=  addSchedule("2019.04.01 ~ 2019.06.14", "평생교육실습기간");
      innerhtml +=  addSchedule("2019.05.30 ~ 2019.06.14", "2019학년도 1학기 수업평가(학생)");
      innerhtml +=  addSchedule("2019.06.04 ~ 2019.06.05", "하계 계절수업 본수강신청");
      innerhtml +=  addSchedule("2019.06.06", "현충일(휴무일)");
      innerhtml +=  addSchedule("2019.06.11 ~ 2019.06.13", "하계 계절수업 등록기간");
      innerhtml +=  addSchedule("2019.06.17 ~ 2019.06.21", "기말시험기간");
      innerhtml +=  addSchedule("2019.06.21", "2019학년도 1학기 종강");
      innerhtml +=  addSchedule("2019.06.24 ~ 2019.07.19", "하계 계절수업기간(융합학기)");
      break;
    }
    case 7: {
      innerhtml +=  addSchedule("2019.06.24 ~ 2019.07.19", "하계 계절수업기간(융합학기)");
      innerhtml +=  addSchedule("2019.07.05", "성적사정");
      innerhtml +=  addSchedule("2019.07.12", "졸업사정");
      innerhtml +=  addSchedule("2019.07.16 ~ 2019.07.19", "2019학년도 2학기 수업계획서 입력(교수)");
      innerhtml +=  addSchedule("2019.07.17 ~ 2019.07.19", "2019학년도 2학기 전과 원서접수");
      innerhtml +=  addSchedule("2019.07.24 ~ 2019.07.26", "2019학년도 2학기 재입학 원서접수");
      innerhtml +=  addSchedule("2019.07.30 ~ 2019.08.01", "2019학년도 2학기 예비수강신청");
      break;
    }
    case 8: {
      innerhtml +=  addSchedule("2019.07.30 ~ 2019.08.01", "2019학년도 2학기 예비수강신청");
      innerhtml +=  addSchedule("2019.08.05 ~ 2019.08.08", "2019학년도 2학기 수강신청");
      innerhtml +=  addSchedule("2019.08.09", "2019학년도 2학기 추가수강신청");
      innerhtml +=  addSchedule("2019.08.20", "광복절(휴무일)");
      innerhtml +=  addSchedule("2019.08.20", "학위수여식");
      innerhtml +=  addSchedule("2019.08.26 ~ 2019.08.30", "2019학년도 2학기 개강 준비기간");
      break;
    }
    case 9: {
      innerhtml +=  addSchedule("2019.09.02 ~ 2019.09.16", "부전공, 복수전공(교직복수전공 포함)신청기간");
      innerhtml +=  addSchedule("2019.09.02", "2019학년도 2학기 개강");
      innerhtml +=  addSchedule("2019.09.05 ~ 2019.09.06", "수강신청 변경 및 확인");
      innerhtml +=  addSchedule("2019.09.12 ~ 2019.09.13", "추석 연휴(휴무일)");
      innerhtml +=  addSchedule("2019.09.16 ~ 2019.09.18", "2019학년도 2학기 성적포기 신청기간");
      innerhtml +=  addSchedule("2019.09.16 ~ 2019.09.18", "2019학년도 2학기 수강신청 교과목 Drop기간");
      innerhtml +=  addSchedule("2019.09.27", "일반휴학 및 군복학 마감");
      innerhtml +=  addSchedule("2019.09.30 ~ 2019.10.25", "교육실습기간");
      innerhtml +=  addSchedule("2019.09.30 ~ 2019.12.20", "평생교육실습기간");
      break;
    }
    case 10: {
      innerhtml +=  addSchedule("2019.09.30 ~ 2019.10.25", "교육실습기간");
      innerhtml +=  addSchedule("2019.10.03", "개천절(휴무일)");
      innerhtml +=  addSchedule("2019.10.09", "한글날(휴무일)");
      innerhtml +=  addSchedule("2019.10.21 ~ 2019.10.25", "수시시험기간");
      innerhtml +=  addSchedule("2019.10.28 ~ 2019.11.01", "집중수업 및 현장학습기간(정상수업)");
      break;
    }
    case 11: {
      innerhtml +=  addSchedule("2019.10.28 ~ 2019.11.01", "집중수업 및 현장학습기간(정상수업)");
      innerhtml +=  addSchedule("2019.11.19 ~ 2019.11.21", "동계 계절수업 예비수강신청");
      innerhtml +=  addSchedule("2019.11.25", "2019학년도 2학기 조기시험 신청 자격일(군입대)");
      innerhtml +=  addSchedule("2019.11.28 ~ 2019.12.13", "2019학년도 2학기 수업평가(학생)");
      break;
    }
    case 12: {
      innerhtml +=  addSchedule("2019.09.30 ~ 2019.12.20", "평생교육실습기간");
      innerhtml +=  addSchedule("2019.11.28 ~ 2019.12.13", "2019학년도 2학기 수업평가(학생)");
      innerhtml +=  addSchedule("2019.12.10 ~ 2019.12.12", "동계 계절수업 본수강신청");
      innerhtml +=  addSchedule("2019.12.16 ~ 2019.12.20", "기말시험기간");
      innerhtml +=  addSchedule("2019.12.17 ~ 2019.12.19", "동계 계절수업 등록기간");
      innerhtml +=  addSchedule("2019.12.20", "2019학년도 2학기 종강");
      innerhtml +=  addSchedule("2019.12.23 ~ 2020.01.17", "동계 게절수업기간(융합학기)");
      innerhtml +=  addSchedule("2019.12.25", "크리스마스(휴무일)");
      break;
    }
  }

  innerhtml +=  '</tbody>';

  calendar.innerHTML = innerhtml;
}

function addSchedule(date, content) {
  var innerhtml = "";

  innerhtml +=  '<tr>';
  innerhtml +=    '<td class="dotLine">' + date + '</td>';
  innerhtml +=    '<td>' + content + '</td>';
  innerhtml +=  '</tr>';

  return innerhtml;
}
