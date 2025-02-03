function selectMonth(monthSelect, month) {
    const objDate = new Date(); 
        let monthNow = (objDate.getMonth() + 1);
            let getMonthSelect = document.querySelector(monthSelect);
                let numMonth;

    if(month == 'currentMonth') {
        numMonth = 0;
    } else if (month == 'lastMonth') {
       numMonth = 1; 
    }
    
    for (let i = 1; i < 12; i++) {
        if (getMonthSelect[i].value == monthNow - numMonth) {
            getMonthSelect[i].selected = true;
        }
    }
}



function select(selectId, value){
    let getSel = $(selectId);
        let lengthSel = getSel.length;
            for(let i = 0; i <= getSel[0].length - 1; i++ ){
                if(getSel[0][i].value == value){
                        getSel[0][i].selected = true;
                }
            }
};


function cleanInput(classInput) {
    let getInput = document.querySelectorAll(classInput);
        for(let i = 0; i < getInput.length; i++) {
            getInput[i].value = null;
        }
}


// function validEmail(inputID){
//     let getInputEmail = document.querySelector('#' + inputID);
//         let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            
//             if(getInputEmail.value.match(validRegex)) {
//                     return true;
//                 } else {
//                     return false;
//             }
// }




function showMod(option) {
    const myModal = new bootstrap.Modal(option);
        myModal.show();
}