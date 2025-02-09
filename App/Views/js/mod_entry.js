let getButEntry = document.querySelector('#nav-home-tab');
    let getButReg = document.querySelector('#nav-profile-tab');   
        let getButEntryCont = document.querySelector('#nav-home');
            let getButRegCont = document.querySelector('#nav-profile');

function pressLogin() {
    getButEntry.classList.add("active");
        getButEntryCont.classList.add("active", "show");
    getButReg.classList.remove("active");
        getButRegCont.classList.remove("active", "show");     
}

function pressReg() {
    getButReg.classList.add("active");
        getButRegCont.classList.add("active", "show");
    getButEntry.classList.remove("active");
        getButEntryCont.classList.remove("active", "show");
}

async function butAuth(project) {
    
    let email = $('#authInputLogin').val();
        let pass = $('#authInputPass').val();
            let rem = $('#authRem').is( ':checked' );

    let dataUser = {
                      key: 'auth',
                      email: email,
                      pass: pass,
                      rem: rem  
                    };              

    let response = await fetch (
                    'https://dov.pp.ua/auth/',
                    {
                        method: 'POST',  
                        headers:
                                {
                                    'Content-Type': 'application/json;charset=utf-8'
                                },
                        body: JSON.stringify(dataUser)
                    }
                );
    let result = await response.json();

    if(result['status'])
    {
        location.replace('https://dov.pp.ua/' + project + '/');
    }
    else
    {
        document.querySelector('#alertLogin').hidden = false;
            document.querySelector('#alertRegPass').value = null;
    }
}

async function butReg(project) {

    let email = $('#inputRegEmail').val();
        let pass1 = $('#inputRegPass1').val();
            let pass2 = $('#inputRegPass2').val();
                let rem = $('#regRem').prop('checked');

    let wrongLogin = $('#wrongLogin');
        let wrongPass = $('#wrongPass');

    // Check of correct email
    if(validEmail(email)) {
        // wrongLogin.empty();

            // Check of password match
            if(pass1 === pass2) {

            // Registration
            let dataUser = {
                                key: 'reg',
                                email: email,
                                pass: pass1,
                                rem: rem  
                            };

        let response = await fetch (
                        'https://dov.pp.ua/auth/',
                        {
                            method: 'POST',  
                            headers:
                                    {
                                        'Content-Type': 'application/json;charset=utf-8'
                                    },
                            body: JSON.stringify(dataUser)
                        }
                    );

        let result = await response.json();

        if(result['status']) {
            location.replace('https://dov.pp.ua/' + project + '/');

        } else {
            wrongLogin.html('Вибачте, але такий Email вже зареєстрований. Оберіть інший.');
                wrongLogin.show();
                    wrongPass.hide();                       
        }
            } else {
                wrongPass.html('Вибачте, але паролі не співпадають! Будь ласка, перевірте правільність вводу!');
                    wrongLogin.hide();
                        wrongPass.show();
            }

    } else {
        wrongLogin.html('Вибачте, але Email повинен бути формату user@example.com');
            wrongLogin.show();
                wrongPass.hide();       
    }

};

async function butEnd(project) {

    if (confirm('Ви впевнені що бажаєте вийти?')) {
        let key = 
                {
                    key: 'end'
                };
           let result = await fetch('https://dov.pp.ua/auth/',
                {
                method: 'POST',
                headers:
                        {
                        'Content-Type': 'application/json;charset=utf-8'
                        },
                body: JSON.stringify(key)
                }
            ).then(response => response.json());
    
                if(result['status']) {
                    location.replace('https://dov.pp.ua/' + project + '/');
                }
    }
};

function validEmail(email) {
    // let getInputEmail = document.querySelector('#' + inputID);
        let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            
            if(email.match(validRegex)) {
                    return true;
                } else {
                    return false;
            }
};

function passShow(classInput) {
    let getInput = document.querySelectorAll('.' + classInput);
        let getEye = document.querySelector('#' + classInput);

        for(let i = 0; i < getInput.length; i++) {  
                if(getInput[i].type === "password")
                {
                    getInput[i].type = "text";
                } 
                else 
                {
                    getInput[i].type = "password";
                }
        }
                getEye.classList.toggle('bi-eye-slash');
            getEye.classList.toggle('bi-eye');
}
