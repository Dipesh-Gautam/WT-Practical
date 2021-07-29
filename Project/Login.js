var a = document.querySelector(".pass")
        var b = document.querySelector(".check")
        b.addEventListener("click",()=>{
            b.checked ? a.type="text" : a.type="password";
          
        })

        function validateuser()
        {
            var a = document.querySelector('.username').value.trim();
            var b = document.querySelector('.pass').value.trim();
            if (a == '' && b == '') 
            {
                document.querySelector(".username_err").innerHTML = "Please enter a username";
                document.querySelector(".password_err").innerHTML = "Please enter a password";
                setTimeout(remove_errors, 2500);
                return false;
            }
                else if (a =='')
                {
                    document.querySelector(".username_err").innerHTML = "Please enter a username";
                    setTimeout(remove_errors, 2500);
                    return false;
                }
                else if (b=='')
                {
                    document.querySelector(".password_err").innerHTML = "Please enter a password";
                    setTimeout(remove_errors, 2500);
                    // b.style.bordercolor = "red";
                    return false;
                }
                else
                {
                    document.querySelector(".username_err").innerHTML = "";
                    document.querySelector(".password_err").innerHTML = "";
                    return true;
                } 
        }


        function remove_errors()
        {
            document.querySelector(".response").innerHTML = ""; 
            document.querySelector(".password_err").innerHTML ="";
            document.querySelector(".username_err").innerHTML ="";
        }

