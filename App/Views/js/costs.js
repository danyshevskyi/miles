async function getCosts(month) {

        //     if(month == 'currentMonth') {
        //     selectMonth('#monthCosts', 'currentMonth');
        // }

    const myForm = new FormData (document.getElementById('monthForm_c'));
        let response = await fetch('https://dov.pp.ua/miles/',
            {
            method: 'POST',
            body: myForm
            }
        );
    let content = await response.text();
        let myVar = document.getElementById('modalBody_c');
                myVar.innerHTML = content;


    // Get elements from modCostsUpd
    let inpDateCosts = document.querySelector('#inpDateCostsUpd');
        let selCostsUpd = document.querySelector('#selCostsUpd');
            let inpAmountCosts = document.querySelector('#inpAmountCostsUpd');
                let inpCommCosts = document.querySelector('#inpCommCostsUpd');
                    let inpIdCosts = document.querySelector('#inpIdCosts');

    // Get data from modCosts for modCostsUpd
    let costsBlock = document.querySelectorAll('.costsBlock');

    // Event for div costs
    for(let i = 0; i < costsBlock.length; i++){
        costsBlock[i].addEventListener('click', function(){ 
            inpDateCosts.value = costsBlock[i].children[3].innerText;
                selCosts('#selCostsUpd', costsBlock[i].children[1].children[0].innerText);
                    inpAmountCosts.value = costsBlock[i].children[1].children[1].innerText.replace(" грн", "");
                        inpIdCosts.value = costsBlock[i].children[2].innerText
                            inpCommCosts.value = costsBlock[i].children[4].innerText;                         
                                modCosts('hide');
                                    $('#modCostsUpd').modal('show');
        })    
    }

};


function modCosts(option){
    if(option == 'show'){
        selectMonth('#monthCosts', 'currentMonth');
            select('#selFilterCosts', 'all');
                getCosts('currentMonth');
                    $('#modCosts').modal('show');
                        // Events for select filter
                        let selFilterCosts = $('#selFilterCosts');
                            selFilterCosts.on('change', function(){
                                getCosts();
                        });
                        // Events for select month
                        let elmounthForm_c = document.getElementById('monthCosts');
                            elmounthForm_c.addEventListener('change', function(){
                                getCosts();
                        });     
    }
    else if(option == 'hide'){
        $('#modCosts').modal('hide');
    }
};



async function selCosts(idTag, selected = 0) {

    let keyCosts = {
        keyJSON: 'selCosts'
    }

    let response = await fetch('https://dov.pp.ua/miles/',
        {
        method: 'POST',
        headers:
            {
            'Content-Type': 'application/json;charset=utf-8'
            },
        body: JSON.stringify(keyCosts)
        }
    );

    let content = await response.text();
        let myVar = document.querySelector(idTag);
                myVar.innerHTML = content;
    
    // selected option in tag select 
    if(selected !== 0 ) {
        for(let i = 0; i < myVar.length; i++) {
            if(myVar[i].innerText == selected) {
                myVar[i].selected = true;
            }
        }
    }
};



function butAddCosts() {
    document.getElementById('inputDate_c').value = dateToday;
        selCosts('#selCosts');
    
        // clear fields
    document.querySelector('#inpPriceCosts').value = null;
        document.querySelector('#inpCommCosts').value = null;

        // show modal
    $('#modCosts').modal('hide');
        $('#modCostsAdd').modal('show');
};



async function costsAdd() {
    const getFormData = new FormData (document.getElementById('form_costs_add'));
        let request = await fetch(
            'https://dov.pp.ua/miles/',
            {
                method: 'POST',
                body: getFormData
            }
        );
    $('#modCostsAdd').modal('hide');
        modCosts('show');
};



// button del modUpdCosts
async function butDelCosts() {
    document.querySelector('#keyCostsDelOrUpd').value = "costsDel";
        let getSelCostsUpd = document.querySelector('#selCostsUpd').selectedOptions[0].innerText;
            let getInpAmountCostsUpd = document.querySelector('#inpAmountCostsUpd').value;
    if(confirm('Витрати на ' + getSelCostsUpd +  ' на суму ' + getInpAmountCostsUpd + ' грн будуть видалені! Ви впевнені?')) {     
        const getForm = new FormData(document.querySelector('#formCostsUpd'));
            await fetch('https://dov.pp.ua/miles/',
                {
                method: 'POST',
                body: getForm
                }    
            );
    $('#modCostsUpd').modal('hide');
        modCosts('show');
    }
};



// button upd modUpdMileages
async function butUpdCosts() {
    document.querySelector('#keyCostsDelOrUpd').value = "costsUpd";
        const getForm = new FormData(document.querySelector('#formCostsUpd'));
            await fetch('https://dov.pp.ua/miles/',
            {
            method: 'POST',
            body: getForm
            }    
        );
    $('#modCostsUpd').modal('hide');
        modCosts('show');
};
