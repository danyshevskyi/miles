function selectMonth(monthSelect, month) {
  const objDate = new Date();
  let monthNow = objDate.getMonth() + 1;
  let getMonthSelect = document.querySelector(monthSelect);
  let numMonth;

  if (month == "currentMonth") {
    numMonth = 0;
  } else if (month == "lastMonth") {
    numMonth = 1;
  }

  for (let i = 1; i < 12; i++) {
    if (getMonthSelect[i].value == monthNow - numMonth) {
      getMonthSelect[i].selected = true;
    }
  }
  selectYearNow('#yearSelect')
}

function select(selectId, value) {
  let getSel = $(selectId);
  let lengthSel = getSel.length;
  for (let i = 0; i <= getSel[0].length - 1; i++) {
    if (getSel[0][i].value == value) {
      getSel[0][i].selected = true;
    }
  }
}

function cleanInput(classInput) {
  let getInput = document.querySelectorAll(classInput);
  for (let i = 0; i < getInput.length; i++) {
    getInput[i].value = null;
  }
}

function showMod(option) {
  const myModal = new bootstrap.Modal(option);
  myModal.show();
}

// update 09.04.2026
function selectMonth2(idGetMonth, idSetMonth) {
  let getMonthInSelect = document.querySelector(idGetMonth);
    let setMonthInSelect = document.querySelector(idSetMonth);
  for (let i = 1; i < 12; i++) {
    if (setMonthInSelect[i].value == getMonthInSelect.value.split('-')[1]) {
      setMonthInSelect[i].selected = true;
    }
  }
}

function selectYear2(whatIdInput, whereIdSelect) {
  let what = document.querySelector(whatIdInput);
    let where = document.querySelector(whereIdSelect);
  for (let i = 0; i < where.length; i++) {
    if(where[i].value == what.value.split('-')[0]) {
      where[i].selected = true
    }
  }



}

function selectValue(what, where) {
  // what and where are id select elements
      let whatValue = document.querySelector(what).value
          let whereSelect = document.querySelector(where)
      for (let i = 1; i < whereSelect.length; i++) {
          if (whereSelect[i].value == whatValue) {
              whereSelect[i].selected = true
          }
      }
}
  
function selectDefault(selectId) {
      let select = document.querySelector(selectId)
      select[0].selected = true
}

function selectYearNow(selectWhere) {
  const date = new Date()
  let getSelector = document.querySelector(selectWhere)
    for(let i = 0; i < getSelector.length; i++) {
      if(getSelector[i].value == date.getFullYear()) {
        getSelector[i].selected = true
      }
    } 
}