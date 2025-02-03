async function showMileages(month) {

    if(month == 'currentMonth') {
        selectMonth('#monthSelect', 'currentMonth');
            }

    const myForm = new FormData (document.getElementById('monthForm'));
        let response = await fetch('https://dov.pp.ua/miles/',
            {
            method: 'POST',
            body: myForm
            }
        );
    let content = await response.text();
        let myVar = document.getElementById('modalBody');
                myVar.innerHTML = content;

    // Get date for update and paid form
    let getElemInput = $('.inputEdit');
        let inputComUpd = document.querySelector('#inputComUpd');
            let getElemDate = document.getElementById('dateUpd');
                let getElemTr = document.querySelectorAll('.tabRow');

    // Get month and year from selected form
    let getMonthHis = document.querySelector('#monthSelect').value;
        let getYearHis  = document.querySelector('#yearSelect').value; 
    
    // if (getMonthHis < 10) {
    //     getMonthHis = "0" + getMonthHis;
    //     }


       // console.log(getMonthHis);


    for (i = 0; i < getElemTr.length; i++) {

    // Get data from row
        let getDate = getElemTr[i].children[0].innerText;
            let getMyMile = getElemTr[i].children[1].innerText;
                let getCountedMile = getElemTr[i].children[2].innerText;
                    let getCommentMile = getElemTr[i].children[4].innerText;                      
                        if(getCommentMile == "-")
                        {
                            getCommentMile = null; 
                        }

    // Build full date
    let dateEdit = getDate.replace(" ", "");  


    if (dateEdit < 10){
        dateEdit = "0" + dateEdit;
    }
        dateEdit = getYearHis + "-" + getMonthHis + "-" + dateEdit;


    // Event for row
        getElemTr[i].addEventListener('click', function(){ 
            getElemDate.value = dateEdit;
                getElemInput[0].value = getMyMile;
                    getElemInput[1].value = getCountedMile;
                        inputComUpd.value = getCommentMile;
                        

        $('#modMileages').modal('hide');
            $('#modUpdMileages').modal('show');
        })    
    }
        // - /get date for update form

    $('#modMileages').modal('show');
};



async function showCalc(month) {

    if(month == 'currentMonth') {
        selectMonth('#monthCalc', 'currentMonth');
   }

    const myForm = new FormData (document.getElementById('monthForm2'));
        let response = await fetch('https://dov.pp.ua/miles/', 
            {
            method: 'POST',
            body: myForm
            }
        );   
    let content = await response.text();
        let myVar = document.getElementById('modalBody2');
                myVar.innerHTML = content;

         calcClickFuel();
            calcClickDepr();

        $('#modCalc').modal('show');
};



function calcClickFuel() {
   let getFuel = document.getElementById('paidId');
            getFuel.addEventListener('click', function(){

    // get element from modCalcFuelAdd 
        let alertPaid = document.querySelector('#alertPaid');
            let fuelMounth = document.querySelector('#fuelMounth');
                let fuelYearHid = document.querySelector('#fuelYearHid');
                    let fuelMonthHid = document.querySelector('#fuelMonthHid');
                        let fuelKeyHid = document.querySelector('#fuelKeyHid');
                            let fuelSum = document.querySelector('#fuelSum');
                                let buttonPaid = document.querySelector('#buttonPaid');
                                    let fuelYear = null;
                                        let fuelButDel = document.querySelector('#fuelButDel');

    // get values from elements modCalc and tabCalc
        let monthCalc = document.querySelector('#monthCalc');
            let yearCalc = document.querySelector('#yearCalc');
                let paidIdvalue = document.getElementById('paidIdvalue');

    // concatenation of values       
        fuelMounth.value = monthCalc.selectedOptions[0].innerText;
            fuelYearHid.value = yearCalc.value;
                fuelMonthHid.value = monthCalc.value;

            if(paidIdvalue.innerHTML >= '0' )
            {    
            buttonPaid.attributes.onclick.value = "calcButUpd('fuel')"; 
                alertPaid.innerHTML = 'За цей місяць виплати вказані! Оновити?<br><br>'; 
                    fuelSum.value = paidIdvalue.innerHTML;
                        buttonPaid.textContent = 'Оновити';
                        fuelKeyHid.value = "fuelUpd";
                            fuelButDel.hidden = false;
            } 
            else 
            {
            buttonPaid.attributes.onclick.value = "calcButAdd('fuel')"; 
                alertPaid.innerHTML = null;
                    fuelSum.value = null;
                        buttonPaid.textContent = 'Зберегти';
                        fuelKeyHid.value = "fuelAdd";
                            fuelButDel.hidden = true;
            }
        $('#modCalc').modal('hide');
            $('#modCalcFuelAdd').modal('show');
    });
}



function calcClickDepr() {
    let getDepr = document.getElementById('deprID');
            getDepr.addEventListener('click', function(){

    // get element from modCalcDeprAdd 
        let deprMonthHid = document.querySelector('#deprMonthHid');
            let deprYearHid = document.querySelector('#deprYearHid');
                let deprKeyHid = document.querySelector('#deprKeyHid');
                    let fuelSum = document.querySelector('#fuelSum');
                       let alertPaid2 = document.querySelector('#alertPaid2');
                        let deprMonth = document.querySelector('#deprMonth');
                            let deprSum = document.querySelector('#deprSum');
                                let butDeprAddOrUpd = document.querySelector('#butDeprAddOrUpd');
                                    let deprButDel = document.querySelector('#deprButDel');
                                        let deprYear = null;
                    
    // get values from elements modCalc and tabCalc
        let monthCalc = document.querySelector('#monthCalc');
            let yearCalc = document.querySelector('#yearCalc');
                let paidIdvalue2 = document.querySelector('#paidIdvalue2');

    // concatenation of values       
        deprMonth.value = monthCalc.selectedOptions[0].innerText;
            deprYearHid.value = yearCalc.value;
                deprMonthHid.value = monthCalc.value;
            
            if(paidIdvalue2.innerHTML >= '0')
            {    
            butDeprAddOrUpd.attributes.onclick.value = "calcButUpd('depr')";
                alertPaid2.innerHTML = 'За цей місяць виплати вказані! Оновити?<br><br>'; 
                    deprSum.value = paidIdvalue2.innerHTML;
                        butDeprAddOrUpd.textContent = 'Оновити';
                            deprKeyHid.value = "deprUpd";
                                deprButDel.hidden = false;                    
            }
            else 
            {
            butDeprAddOrUpd.attributes.onclick.value = "calcButAdd('depr')";               
                alertPaid2.innerHTML = null;
                    deprSum.value = null;
                        butDeprAddOrUpd.textContent = 'Зберегти';
                            deprKeyHid.value = "deprAdd";
                                deprButDel.hidden = true;
            }
        $('#modCalc').modal('hide');
            $('#modCalcDeprAdd').modal('show');
    });
}



async function calcButAdd(key) {
    
    if(key == 'fuel')
    {
        const myForm = new FormData (document.querySelector('#formPaid'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );

             $('#modCalcFuelAdd').modal('hide');
           showCalc();  
    }
    else if (key == 'depr')
    {

       const myForm = new FormData (document.querySelector('#formPaid2'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );
             $('#modCalcDeprAdd').modal('hide');
           showCalc();  

    }
}



async function calcButUpd(key) {

    if(key == 'fuel')
    {
        const myForm = new FormData (document.querySelector('#formPaid'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );

             $('#modCalcFuelAdd').modal('hide');
           showCalc(); 
    } 
    else if(key == 'depr')
    {
    
       const myForm = new FormData (document.querySelector('#formPaid2'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );
             $('#modCalcDeprAdd').modal('hide');
           showCalc();      
    }
}

async function calcButDel(key) {

    if (key == 'fuel')
    {
        let fuelKeyHid = document.querySelector('#fuelKeyHid');
            fuelKeyHid.value = 'fuelDel';
                let fuelMounth = document.querySelector('#fuelMounth').value;
    if(confirm('Виплати за паливо ' + fuelMounth + ' місяць будуть видалені! Ви впевнені?')) {
        const myForm = new FormData (document.querySelector('#formPaid'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );  
        }

        $('#modCalcFuelAdd').modal('hide');
           showCalc();
    }
    else if (key == 'depr')
    {
        let deprKeyHid = document.querySelector('#deprKeyHid');
            deprKeyHid.value = 'deprDel';
                let deprMonth = document.querySelector('#deprMonth').value;

    if(confirm('Виплати за амортизацію ' + deprMonth + ' місяць будуть видалені! Ви впевнені?')) {
        const myForm = new FormData (document.querySelector('#formPaid2'));
            let response = await fetch('https://dov.pp.ua/miles/', 
                {
                method: 'POST',
                body: myForm
                }
            );  
        }
            $('#modCalcDeprAdd').modal('hide');
                showCalc();
    }
}



// function data check for modal modAddMileages
async function checkDate2() {

    let getFormKey = document.getElementById('formKey');
            getFormKey.value = "addMileage_check";

    const formMyAdd = new FormData (document.getElementById('form_mileage_add'));
        let responseMy = await fetch(
            'https://dov.pp.ua/miles/',
            {
                method: 'POST',
                body: formMyAdd
            }
        );

    let myMileage = await responseMy.text();

    let getMyMileage = document.getElementById('inputMyM');
        let getCountMileage = document.getElementById('inputCountM');
            let getAlertCheck = document.getElementById('alertCheckDate');
                let getButToday = document.getElementById('butCheckDate');
                    let getInputComAdd = document.getElementById('inputComAdd');
                
    const arrMileage = myMileage.split("-");
   
        getAlertCheck.innerHTML = null;
            getButToday.textContent = "Зберегти";
                getFormKey.value = "addMileage_add";
                    getMyMileage.value = null;
                        getCountMileage.value = null;
                            getInputComAdd.value = null;


    if(arrMileage[0] > 0 || arrMileage[1] > 0) {
        getAlertCheck.innerHTML = "За обрану дату пробіг вже вказани! Оновити?<br><br>";
            getButToday.textContent = "Оновити";
                getFormKey.value = "addMileage_upd";
                    getMyMileage.value = arrMileage[0];
                        getCountMileage.value = arrMileage[1];
                            getInputComAdd.value = arrMileage[2];
    } else {

        }
    // Event select date for modAddMileages
        document.getElementById('inputDate').addEventListener('change', function() {
            checkDate2();
        });
};


function butAddMileages() {
    document.getElementById('inputDate').value = dateToday;
        checkDate2();
        $('#modMileages').modal('hide');
            $('#modAddMileages').modal('show');
};


function alertExit() {
    if (confirm('Ви впевнені що бажаєте вийти?')) {
        // document.querySelector('#but_exit_alert').click();
        butEnd();
    }
};


async function butSaveOrUpdMileages() {
    const getFormData = new FormData (document.getElementById('form_mileage_add'));
        let request = await fetch(
            'https://dov.pp.ua/miles/',
            {
                method: 'POST',
                body: getFormData
            }
        );
    $('#modAddMileages').modal('hide');
        showMileages('currentMonth');
};



// button del modUpdMileages
async function butDel() {
    document.getElementById('keyDelOrUpd').value = "del";
        let getElemDateInput = document.getElementById('dateUpd');
            let selectedDate = getElemDateInput.value;
                let arrDateUkr = selectedDate.split("-");
                    let dateUkr = arrDateUkr[2] + "-" + arrDateUkr[1] + "-" + arrDateUkr[0];
    if(confirm('Пробіг за ' + dateUkr +  ' буде видалено! Ви впевнені?')) {     
        const getForm = new FormData(document.getElementById('formUpdMileages'));
            await fetch('https://dov.pp.ua/miles/',
                {
                method: 'POST',
                body: getForm
                }    
            );
    $('#modUpdMileages').modal('hide');
        showMileages();
    }
};


// button upd modUpdMileages
async function butUpd() {
    document.getElementById('keyDelOrUpd').value = "upd";
        const getForm = new FormData(document.getElementById('formUpdMileages'));
            await fetch('https://dov.pp.ua/miles/',
            {
            method: 'POST',
            body: getForm
            }    
        );
    $('#modUpdMileages').modal('hide');
        showMileages();
};


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
           // let dateYesterday = yearNow + "-" + monthNow + "-" + dayYest;
// get date







let elmounthForm = document.getElementById('monthForm');
    elmounthForm.addEventListener('change', function(){
        showMileages();
    });



let elmounthForm2 = document.getElementById('monthForm2');
        elmounthForm2.addEventListener('change', function(){
            showCalc();
});
