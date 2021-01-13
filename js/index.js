firebase.auth().signInWithEmailAndPassword('okanagraham@gmail.com', 'Kroyen99!')
  .then((user) => {
    // Signed in
    firebase.auth().currentUser.getIdTokenResult()
      .then((idTokenResult) => {
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
      .catch((error) => {
        console.log(error);
    });
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage);
});
