$(document).ready(function() {
    $("#DOB").change(function() {
      var dob = $("#DOB").val();

      if (dob != null || dob != "") {
        $("#age").val(getAge(dob));
      }
    });

    function getAge(birth) {
      ageMS = Date.parse(Date()) - Date.parse(birth);
      age = new Date();
      age.setTime(ageMS);
      ageYear = age.getFullYear() - 1970;

      return ageYear;
    }
  });
