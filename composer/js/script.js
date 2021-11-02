$(document).ready(function () {
  var max_fields = 10; //maximum input boxes allowed
  var wrapper = $(".input_fields_wrap"); //Fields wrapper
  var add_button = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < max_fields) {
      //max input box allowed
      x++; //text box increment
      $(wrapper).append(
        '<div class="form-group"><h6>Banner #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <input type="text" placeholder="Write a text on the banner" class="form-control" name="mytext[' +
          x +
          ']"/><br/> <input type="text" placeholder="Place a link on the banner" class="form-control" name="myurl[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Masters Add more fields
$(document).ready(function () {
  var masters_max_fields = 3; //maximum input boxes allowed
  var masters_wrapper = $(".masters_wrap"); //Fields wrapper
  var masters_add_button = $(".masters_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(masters_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < masters_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(masters_wrapper).append(
        '<div class="form-group"><h6>Masters #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(masters_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Masters Degree Add more fields
$(document).ready(function () {
  var masters_degree_max_fields = 6; //maximum input boxes allowed
  var masters_degree_wrapper = $(".masters_degree_wrap"); //Fields wrapper
  var masters_degree_add_button = $(".masters_degree_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(masters_degree_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < masters_degree_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(masters_degree_wrapper).append(
        '<div class="form-group"><h6>What makes us different? #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/><input type="text" placeholder="heading" class="form-control" name="myheading[' +
          x +
          ']"/><br/><textarea placeholder="description" rows="5" class="form-control" name="mydesc[' +
          x +
          ']"></textarea><br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(masters_degree_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Masters Degree Add more fields
$(document).ready(function () {
  var masters_degree_feature_max_fields = 3; //maximum input boxes allowed
  var masters_degree_feature_wrapper = $(".masters_degree_feature_wrap"); //Fields wrapper
  var masters_degree_feature_add_button = $(
    ".masters_degree_feature_add_field_button"
  ); //Add button ID

  var x = 1; //initlal text box count
  $(masters_degree_feature_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < masters_degree_feature_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(masters_degree_feature_wrapper).append(
        '<div class="form-group"><h6>Features #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/><input type="text" placeholder="heading" class="form-control" name="myheading[' +
          x +
          ']"/><br/><textarea placeholder="description" rows="5" class="form-control" name="mydesc[' +
          x +
          ']"></textarea><br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(masters_degree_feature_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Masters Degree Add more fields
$(document).ready(function () {
  var masters_degree_dual_max_fields = 3; //maximum input boxes allowed
  var masters_degree_dual_wrapper = $(".masters_degree_dual_wrap"); //Fields wrapper
  var masters_degree_dual_add_button = $(
    ".masters_degree_dual_add_field_button"
  ); //Add button ID

  var x = 1; //initlal text box count
  $(masters_degree_dual_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < masters_degree_dual_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(masters_degree_dual_wrapper).append(
        '<div class="form-group"><h6>Features #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/><input type="text" placeholder="heading" class="form-control" name="myheading[' +
          x +
          ']"/><br/><textarea placeholder="description" rows="5" class="form-control" name="mydesc[' +
          x +
          ']"></textarea><br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(masters_degree_dual_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Bachelors Add More fields
$(document).ready(function () {
  var bachelor_max_fields = 3; //maximum input boxes allowed
  var bachelor_wrapper = $(".bachelor_wrap"); //Fields wrapper
  var bachelor_add_button = $(".bachelor_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(bachelor_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < bachelor_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(bachelor_wrapper).append(
        '<div class="form-group"><h6>Bachelors #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(bachelor_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Diploma Add More fields
$(document).ready(function () {
  var diploma_max_fields = 3; //maximum input boxes allowed
  var diploma_wrapper = $(".diploma_wrap"); //Fields wrapper
  var diploma_add_button = $(".diploma_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(diploma_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < diploma_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(diploma_wrapper).append(
        '<div class="form-group"><h6>Diploma #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(diploma_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//Short Course Add More fields
$(document).ready(function () {
  var short_course_max_fields = 3; //maximum input boxes allowed
  var short_course_wrapper = $(".short_course_wrap"); //Fields wrapper
  var short_course_add_button = $(".short_course_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(short_course_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < short_course_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(short_course_wrapper).append(
        '<div class="form-group"><h6>Short Course #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(short_course_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

//One Week Add More fields
$(document).ready(function () {
  var one_week_max_fields = 3; //maximum input boxes allowed
  var one_week_wrapper = $(".one_week_wrap"); //Fields wrapper
  var one_week_add_button = $(".one_week_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(one_week_add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < one_week_max_fields) {
      //max input box allowed
      x++; //text box increment
      $(one_week_wrapper).append(
        '<div class="form-group"><h6>One Week MBA #' +
          x +
          '</h6><input type="file" class="form-control" name="myfile[' +
          x +
          ']"/><br/> <select class="form-control" name="mycountry[' +
          x +
          ']"><option selected disabled hidden>Please Select a country your banner will show</option><option>United Arab Emirates</option><option>United State America</option></select> <br/> <a href="#" class="remove_field"><i class="far fa-trash-alt"></i> Remove Fields</a> </div>'
      ); // add input boxes.
    }
  });

  $(one_week_wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").remove();
    x--;
  });
});

/* Set the width of the side navigation to 250px */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "350px";
// }

/* Set the width of the side navigation to 0 */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
// }

function openNav() {
  var x = document.getElementById("mySidenav");
  // var y = document.getElementById("sidebar-text");
  if (x.className === "sidenav") {
    x.className += " expand-nav";
  } else {
    x.className = "sidenav";
  }
}

// function closeNav() {
//   var y = document.getElementById("mySidenav");
//   if (y.className === "sidenav") {
//     y.className += " expand-nav";
//   } else {
//     y.className = "sidenav";
//   }
// }

const collapseLink = document.querySelectorAll(".collapseLink");
const sidenav = document.querySelector(".sidenav");

collapseLink.forEach((collapseEach) => {
  collapseEach.addEventListener("click", () => {
    sidenav.classList.add("expand-nav");
  });
});
