<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <div class="">
      I am admin!
    </div>
    <?php include('../js/common_footer.php'); ?>
    <script>
      //feature access based on firebase remote config,
      //if overall features get turned on/off, this will take effect after next login
      let sessionStorage = window.sessionStorage;

      const basic_features = sessionStorage.getItem("basic_features");
      const gamification = sessionStorage.getItem("gamification");
      const virtual_classrooms = sessionStorage.getItem("virtual_classrooms");

      //update the ui based on the value

      updateUi("basic_features", basic_features);
      updateUi("gamification", gamification);
      updateUi("virtual_classrooms", virtual_classrooms);

      function updateUi(element, state){
        //update ui based on variables
      }
    </script>
  </body>
</html>
