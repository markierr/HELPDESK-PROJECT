function toggleDetails() {
    var detailsElement =document.getElementById('detaills');
    detailsElement.style.display=(detailsElement.style.display=== 'none') ? 'block' : 'none';
}

var detailsArray = [];


// code for registration of users
function register(){

    let newUserPassword = document.getElementById('pwdRegister').value;
    let newUserEmail = document.getElementById("email").value;
    let newUserName = document.getElementById("usrNameRegister").value;
    let newFullName = document.getElementById("usrRegister").value;
    let userDetails = {
        fullname: newFullName,
        username: newUserName,
        useremail: newUserEmail,
        userpassword: newUserPassword
    };
    for(let i = 0; i< detailsArray.length; i++) {
        if (detailsArray[i].username === newUserName) {
            document.getElementById("alert").innerText = "Username already exists!!";
            return;
        }

    }
            detailsArray.push(userDetails);
            localStorage.userRecord = JSON.stringify(detailsArray);


    document.getElementById('registrationForm').reset();
    window.location = "tickets.html";

}

function init() {
    if(localStorage.userRecord) {
        detailsArray = JSON.parse(localStorage.userRecord);
        /**for(let i = 0; i< detailsArray.length; i++){
            let fullName = detailsArray[i].fullname;
            let userName = detailsArray[i].username;
            let userEmail = detailsArray[i].useremail;
            let userPassword = detailsArray[i].userpassword;
        }**/
    }
}


function login(){

    let loginUserName = document.getElementById('usrLogin').value;
    let loginPassword = document.getElementById('pwdLogin').value;

    for (let i = 0; i < detailsArray.length; i++) {

        if(detailsArray[i].username === loginUserName && detailsArray[i].userpassword === loginPassword){
            localStorage.setItem('curUser', detailsArray[i].fullname);
            window.location = "tickets.html";
           }else{
            document.getElementById("loginAlert").innerHTML = "Error!! Try again";
            document.getElementById('loginForm')reset();

        }
    }


}


/**function welcome(){

    let display = localStorage.getItem('curUser').toUpperCase();
       let welcomeText = document.getElementById("headerTicket");
       welcomeText.style.fontSize = '25px';
       welcomeText.style.color='olive';
       welcomeText.class="text-primary";
       welcomeText.innerHTML ="Logged In:    "+ display
}**/

function toggleDetails() {
    var detailsElement =document.getElementById('detaills');
    detailsElement.style.display=(detailsElement.style.display=== 'none') ? 'block' : 'none';
}

document.addEventListener('DomContentLoaded', function()
const registrationForm = document.getElementById('registrationform');
registrationForm.addEventListener('submit', function(event) {
    event.preventDefault();
    <form id="registrationForm" autocomplete="on">
            <div class="form-group">
              <label for="usrRegister">Full Name:</label>
              <input
                type="text"
                class="form-control"
                id="usrRegister"
                autocomplete="name"
              />
            </div>

            <div class="form-group">
              <label for="usrNameRegister">Username:</label>
              <input
                type="text"
                class="form-control"
                id="usrNameRegister"
                autocomplete="name"
              />
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                autocomplete="email"
              />
            </div>
            <div class="form-group">
              <label for="pwdRegister">Password:</label>
              <input type="password" class="form-control" id="pwdRegister" />
            </div>
            <div>
              <button type="button" class="btn btn-danger" onclick="register()">
                Register
              </button>
            </div>
            <br />
            <div id="alert"></div>
          </form>
 window.location.href = 'path/to/another/tickets.html';  
}
)
)