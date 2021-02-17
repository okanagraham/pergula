/*
Set the default config (basic features on, all others off),
then after sign in, get the feature list then set the session variables
if features are updated, users will need to log off then back on for changes to take effect
*/

document.addEventListener("keydown", function(event){
  if(event.defaultPrevented){
    return;
  }
  var key = event.key || event.keyCode;

  if(key === 13 || key === 'Enter'){
    signIn();
  }
});

let sessionStorage = window.sessionStorage;

const remoteConfig = firebase.remoteConfig();
remoteConfig.settings.minimumFetchIntervalMillis = 60000;
remoteConfig.defaultConfig = {

  "basic_features": true,
  "gamification": false,
  "virtual_classrooms": false
};

let basic_features = remoteConfig.getString("basic_features");
let gamification = remoteConfig.getString("gamification");
let virtual_classrooms = remoteConfig.getString("virtual_classrooms");

function signIn(){
  if(validateForm()){
    var email = password = "";
    email = document.getElementById("uname").value;
    password = document.getElementById("pwd").value;

    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((user) => {
        // Signed in user - update to take values from input fields
        firebase.auth().currentUser.getIdTokenResult()
          .then((idTokenResult) => {
              remoteConfig.fetchAndActivate()
              .then(() => {
                //save the features in session variables, they expire when browser is closed . Any changes require log off and back on to visually take effect

                basic_features = remoteConfig.getString("basic_features");
                sessionStorage.setItem("basic_features", basic_features);

                gamification = remoteConfig.getString("gamification");
                sessionStorage.setItem("gamification", gamification);

                virtual_classrooms = remoteConfig.getString("virtual_classrooms");
                sessionStorage.setItem("virtual_classrooms", virtual_classrooms);

                // Confirm the user is an Admin.
                if (!!idTokenResult.claims.admin) {
                  // Show admin UI.
                  window.location.replace('admin/');
                }
                if (!!idTokenResult.claims.parent) {
                  // Show admin UI.
                  //showAdminUI();
                  window.location.replace('parent/');
                }
                if (!!idTokenResult.claims.student) {
                  // Show admin UI.
                  //showAdminUI();
                  window.location.replace('student/');
                }
                if (!!idTokenResult.claims.teacher) {
                  // Show regular user UI.
                  window.location.replace('teacher/');
                }
              })
              .catch((err) => {
                // error fetching config
                // TODO: find solution if this happens
                console.log(err);
              });
          })
          .catch((error) => {
            console.log(error);
        });
      })
      .catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;
        if (errorCode === 'auth/wrong-password') {
          document.getElementById("response-message").innerHTML = errorMessage;
          $("#response-header-modal").modal();
        }
        if (errorCode === 'auth/user-not-found') {
          document.getElementById("response-message").innerHTML = errorMessage;
          $("#response-header-modal").modal();
        }
        console.log(errorMessage);
    });
  }
}

function validateForm(){
  var valid = true;

  var email = password = null;

  email = document.getElementById("uname").value;
  if(email.length == 0){
    document.getElementById("uname").classList.add("is-invalid");
    valid = false;
  }else if(!document.getElementById("uname").checkValidity()){
    document.getElementById("uname").classList.add("is-invalid");
    valid = false;
  }
  else{
    document.getElementById("uname").classList.remove("is-invalid");
    document.getElementById("uname").classList.add("is-valid");
  }

  password = document.getElementById("pwd").value;
  //console.log(password);
  if(password.length <= 5){
    //console.log("Password length" + password.length);
    document.getElementById("pwd").classList.add("is-invalid");
    valid = false;
  }else{
    document.getElementById("pwd").classList.remove("is-invalid");
    document.getElementById("pwd").classList.add("is-valid");
  }
  //console.log(countryData);

  return valid;
}
