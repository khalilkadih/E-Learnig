// document.forms[0].onsubmit = function(e) {
//     e.preventDefault();
//     // window.open("../dashbord/Dashbord.html");
//     window.location.href = "../dashbord/dashboard.php";
// }



function showerror(input ,message){
const formControll=input.parentElemnt;
formControll.className='form-control error';
const small=document.querySelector('small');
small.innerText=message;


}
const form = document.getElementById('form');
const firstName=document.getElementById('firstName');
const lastName=document.getElementById('LastName');
const email=document.getElementById('email');
const password=document.getElementById('Password');
const password_conf=document.getElementById('confirmPwd');


form.addEventListener('submit',function(e){
e.preventDefault();

if(firstName.value==="")
{
showerror(firstName,'champ obligatoire');
}


})