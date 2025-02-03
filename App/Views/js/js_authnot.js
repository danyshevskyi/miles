// get date 
const objDate = new Date();    
    let monthNow = (objDate.getMonth() + 1);
        if(monthNow < 10) {
            monthNow = "0" + monthNow;
        } 
    let dayNow = objDate.getDate();
        if(dayNow < 10) {
            dayNow = "0" + dayNow;
        }
    let dayYest = objDate.getDate() - 1;      
        if(dayYest < 10) {
                dayYest = "0" + dayYest;
        }

    let yearNow = objDate.getFullYear();
        let dateToday = yearNow + "-" + monthNow + "-" + dayNow;
// get date




// - get date for update and paid form
let getElemInput = $('.inputEdit');
    let getElemInputDel = $('.inputEditDel');
        let getElemInputPaid = $('.inputPaidDate');
            let getElemTr = document.querySelectorAll('.tabRow');


for (i = 0; i < getElemTr.length; i++) {

// Data from row
    let getDate = getElemTr[i].children[0].innerText;
        let getMyMile = getElemTr[i].children[1].innerText;
            let getCountedMile = getElemTr[i].children[2].innerText;


getDate = "2022-12-0" + getDate;

        
// Event for row
        getElemTr[i].addEventListener('click', function(){
            getElemInputDel[0].value = getDate;
                getElemInput[0].value = getDate;
                    getElemInput[1].value = getMyMile;
                        getElemInput[2].value = getCountedMile;


                            $('#modHistory_not').modal('hide');
                                $('#modMilesUpdate_not').modal('show');
        });
}

// module paid -----------------------------------
            document.getElementById('paidId').addEventListener('click', function(){

                $('#modCalc_not').modal('hide');
                $('#modPaidAdd_not').modal('show');   
        });
// /module paid -----------------------------------

// module depreciation ----------------------------
            document.getElementById('deprID').addEventListener('click', function(){
                $('#modCalc_not').modal('hide');
                $('#modPaidDepr_not').modal('show');   
        });
// /module depreciation ---------------------------

// history_form_not.php  ----------------------------

// Event for change month history_form_not.php and calc_not.php
        // I`m delete it 
// /history_form_not.php  ----------------------------


// mileage_add_not.php  ------------------------------
function addDateNow() {
    let getInpDate = document.querySelector('#floatingInput');
    getInpDate.value = dateToday;
}
// /mileage_add_not.php  -----------------------------


// modal_entry.php ------------------------------------------
// let getButEntry = document.querySelector('#nav-home-tab');
//     let getButReg = document.querySelector('#nav-profile-tab');   
//         let getButEntryCont = document.querySelector('#nav-home');
//             let getButRegCont = document.querySelector('#nav-profile');



// function pressEntry() {
//     getButEntry.classList.add("active");
//         getButEntryCont.classList.add("active", "show");
//     getButReg.classList.remove("active");
//         getButRegCont.classList.remove("active", "show");
//     document.querySelector('#inputAuthLog').value = null;
//         document.querySelector('#alertLoginWrong').hidden = true;
//     document.querySelector('#inputRegLog').value = null;
//         document.querySelector('#alertUserExist').hidden = true;
//             cleanInput('.inputPassAuth');
//                 cleanInput('.inputPassReg');
// }



// function pressReg() {
//     getButReg.classList.add("active");
//         getButRegCont.classList.add("active", "show");
//     getButEntry.classList.remove("active");
//         getButEntryCont.classList.remove("active", "show");
//             cleanInput('.inputPassReg'); 
//                 cleanInput('.inputPassAuth');
//                     document.querySelector('#inputAuthLog').value = null;
//                         document.querySelector('#inputRegLog').value = null;
// }



// async function butAuth() { 
//      const myForm = new FormData (document.querySelector('#formAuth'));       
//         let result = await fetch (
//             'https://dov.pp.ua/miles',
//             {
//                 method: 'POST',
//                 body: myForm
//             }
//                 ).then(response => response.text());
        

//     if(result.length > 50) {
//         location.replace('https://dov.pp.ua/miles');
//     } else {
//         document.querySelector('#alertLoginWrong').hidden = false;
//             document.querySelector('#inputAuthPass').value = null;
//     }
// }





// async function butReg() {

//     // Check the password confirmation
//         let getInput = document.querySelectorAll('.inputPassReg');
//             let getWrongPass = document.querySelector('#wrongPass');


//     if(validEmail('inputRegLog')) {
        
//         document.querySelector('#alertUserExist').innerHTML = null;

//         if(getInput[0].value === getInput[1].value) {

//              const myForm = new FormData (document.querySelector('#formReg'));
//                 let result = await fetch (
//                     'https://dov.pp.ua/miles',
//                     {
//                         method: 'POST',
//                         body: myForm
//                     }
//                         ).then(response => response.text());

//             if(result === 'true') {
//                 document.querySelector('#alertUserExist').innerHTML = 'Вибачте, але такий Email вже зареєстрований. Оберіть інший.';
//                     getWrongPass.innerHTML = null;

//                     cleanInput('.inputPassReg');
//             } 
//             else {
//                 document.querySelector('#checkOrReg').value = "reg";
//                     document.querySelector('#butRegUser').click();

//                     getWrongPass.innerHTML = null;
//             }
//         }
//         else
//         {  
//             getWrongPass.innerHTML = 'Вибачте, але паролі не співпадають! Будь ласка, перевірте правільність вводу!';
//         }
//     } else {
//         document.querySelector('#alertUserExist').innerHTML = 'Вибачте, але Email повинен бути формату user@example.com';
//     }
// }


// /modal_entry.php -----------------------------------------