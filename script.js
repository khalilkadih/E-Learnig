    // document.forms[0].onsubmit = function(e) {
    //     e.preventDefault();
    //     // window.open("../dashbord/Dashbord.html");
    //     window.location.href = "../dashbord/dashboard.php";
    // }


    const form = document.getElementById('form');
    const firstName=document.getElementById('firstName');
    const LastName=document.getElementById('LastName');
    const email=document.getElementById('email');
    const password=document.getElementById('password');
    const password_conf=document.getElementById('confirmPwd');

    function showerror(input ,message){

        const formControll=input.parentElement;
        formControll.className='form-control error';
        const small=formControll.querySelector('small');
        small.innerText=message;
    }
    function showSuccess(input){
        const formControl=input.parentElement;
        formControl.className='form-control success';
    }
    function checkPassworMatch(input1 ,input2,ev){
        if(input1.value !==input2.value){
            showerror(input2,'password not Match ');
            ev.preventDefault();
        }
        
    }
  


    form.addEventListener('submit',function(e){
            
        // e.preventDefault();

            if(firstName.value==="")
        {
            showerror(firstName,'first Name required');

            e.preventDefault();
        }else{
            showSuccess(firstName);
        }
        if(LastName.value==="")
        {
        showerror(LastName,'first Name required');
        e.preventDefault();
    }else{
        showSuccess(LastName);
    }
    if(email.value==="")
    {
        showerror(email,'first Name required');
        e.preventDefault();
    }else{
        showSuccess(email);
    }
    if(firstName.value==="")
    {
        showerror(password,'first Name required');
        e.preventDefault();
        }else{
        showSuccess(password);
    }
    if(firstName.value==="")
    {
        showerror(password_conf,'first Name required');
        e.preventDefault();

    }else{
        showSuccess(password_conf);
    }

    checkPassworMatch(password, password_conf,e);


    })