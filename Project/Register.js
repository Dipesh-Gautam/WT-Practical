document.querySelector('.hide').style.zIndex = 0;
document.querySelector('.show').style.zIndex = 1;
document.querySelector('.Chide').style.zIndex = 0;
document.querySelector('.Cshow').style.zIndex = 1;

function change (data, id) {
    if (data == 'hide') {
        document.querySelector('.' + id + 'hide').style.zIndex = 0;
        document.querySelector('.' + id + 'show').style.zIndex = 1;
        document.querySelector('.' + id + 'password').type = "password";

    }
    else {
        document.querySelector('.' + id + 'hide').style.zIndex = 1;
        document.querySelector('.' + id + 'show').style.zIndex = 0;
        document.querySelector('.' + id + 'password').type = "text";
    }
}
document.querySelector('#first_name').addEventListener("keyup", vfn);
document.querySelector('#last_name').addEventListener("keyup", vln);
document.querySelector('#Email').addEventListener("keyup", vmail);
document.querySelector('#username').addEventListener("keyup", vuser);
document.querySelector('#Phone').addEventListener("keyup", vphn);
document.querySelector('.password').addEventListener("keyup", vpass);
document.querySelector('.password').addEventListener("keyup", vcpass);
document.querySelector('.Cpassword').addEventListener("keyup", vcpass);

document.querySelector('#first_name').addEventListener("blur", vfn);
document.querySelector('#last_name').addEventListener("blur", vln);
document.querySelector('#Email').addEventListener("blur", vmail);
document.querySelector('#username').addEventListener("blur", vuser);
document.querySelector('#Phone').addEventListener("blur", vphn);
document.querySelector('.password').addEventListener("blur", vpass);
document.querySelector('.password').addEventListener("blur", vcpass);
document.querySelector('.Cpassword').addEventListener("blur", vcpass);


function vfn()
{
    var fn = document.querySelector("#first_name").value.trim();
    if (fn == "")
    {
        document.querySelector(".fname_err").innerHTML = "Enter your first name";
        setTimeout(remove,2500);
        return false;
    }
    else 
    {
        document.querySelector(".fname_err").innerHTML = "";
        return true;
    }
}
function vln()
{
    var ln = document.querySelector("#last_name").value.trim();
    if (ln == "")
    {
        document.querySelector(".lname_err").innerHTML = "Enter your last name";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".lname_err").innerHTML = "";
        return true;
    }
}
function vgen()
{
    if (!(document.querySelector(".male").checked || document.querySelector(".female").checked || document.querySelector(".others").checked))
    {
        document.querySelector(".gender_err").innerHTML = "Select your gender";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".gender_err").innerHTML ="";
        return true;
    }
}
function vmail()
{
    var mail = document.querySelector("#Email").value.trim();
    if (mail == "")
    {
        document.querySelector(".email_err").innerHTML = "Enter your email";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".email_err").innerHTML = "";
        return true;
    }
}
function vuser()
{
    var user = document.querySelector("#username").value.trim();
    if(user == "")
    {
        document.querySelector(".username_err").innerHTML = "Username can't be empty";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".username_err").innerHTML = "";    
        return true;
    }
}
function vphn()
{
    var phn = document.querySelector("#Phone").value.trim();
    if (phn == "")
    {
        document.querySelector(".phone_err").innerHTML = "Enter your mobile number";
        setTimeout(remove,2500);
        return false;
    }
    else if (!phn.match(/\d{10}$/))
    {
        document.querySelector(".phone_err").innerHTML = "Invalid mobile number";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".phone_err").innerHTML = "";
        return true;
    }
}
function vpass()
{
    var pass = document.querySelector(".password").value.trim();
    if (pass == "")
    {
        document.querySelector(".password_err").innerHTML = "Password can't be empty";
        setTimeout(remove,2500);
        return false;
    }
    else if (pass.length <= 3 )
    {
        document.querySelector(".password_err").innerHTML = "Password too short";
        setTimeout(remove,2500);
        return false;
    }
    else if (pass.length <=6)
    {
        document.querySelector(".password_err").innerHTML = "Not strong enough";
        setTimeout(remove,2500);
        return false;

    }
    else if (!pass.match(/[\~!@#$%^&*()-_+=,<>?/`{}|:;]/))
    {
        document.querySelector(".password_err").innerHTML = "Enter atleast one symbol";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".password_err").innerHTML = "";
        vcpass();
        return true;
    }
}
function vcpass()
{
    var pass = document.querySelector(".password").value;
    var cpass = document.querySelector(".Cpassword").value;
    if (cpass !== pass)
    {
        document.querySelector(".Cpassword_err").innerHTML = "Password doesn't match";
        setTimeout(remove,2500);
        return false;
    }
    else
    {
        document.querySelector(".Cpassword_err").innerHTML = "";
        return true;
    }
}

function validate()
{
    var f = vfn();
    var l = vln();
    var e = vmail();
    var u = vuser();
    var ph = vphn();
    var p = vpass();
    var Cp = vcpass();
    var g = vgen();


    var valid = f && l && e && u && ph && p && Cp && g;
    if(!valid) 
    {
        document.querySelector(".response").innerHTML = "Enter a valid information.";
        setTimeout(remove,2500);
        return false;
    }
    else 
    {
        document.querySelector(".response").innerHTML = "";
        return true;
    }
}

function remove()
{
    document.querySelector(".fname_err").innerHTML = "";
    document.querySelector(".lname_err").innerHTML = "";
    document.querySelector(".gender_err").innerHTML ="";
    document.querySelector(".email_err").innerHTML = "";
    document.querySelector(".username_err").innerHTML = "";
    document.querySelector(".username_err").innerHTML = "";
    document.querySelector(".phone_err").innerHTML = "";
    document.querySelector(".password_err").innerHTML = "";
    document.querySelector(".Cpassword_err").innerHTML = "";
    document.querySelector(".response").innerHTML = "";
}