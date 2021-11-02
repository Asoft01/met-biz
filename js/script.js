$(function () {
  $(".dropdown").on("show.bs.dropdown hide.bs.dropdown", function () {
    $(this).find(".flipnav").toggleClass("caretflip");
  });
});

// $(".hideme").click(function() {
//   $(".btn-darkkk").hide(500);
// });

$(document).ready(function () {
  $(".request_more").click(function () {
    $("html,body").animate(
      {
        //  fine in moz, still quicker in chrome.
        scrollTop: $(".request").offset().top,
      },
      "slow"
    );
  });
});

// $(document).ready(function () {
//   $('.find [data-toggle="collapse"]').click(function () {
//     $(this).toggleClass("active");
//     if ($(this).hasClass("active")) {
//       $(this).html(
//         "Show fewer <i class='fa fa-chevron-up' aria-hidden='true'></i>"
//       );
//     } else {
//       $(this).html(
//         "Show more <i class='fa fa-chevron-down' aria-hidden='true'></i>"
//       );
//     }
//   });
// });

// $(document).ready(function () {
//   $('.find [data-toggle="collapse"]').click(function () {
//     $(this).toggleClass("active");
//     if ($(this).hasClass("active")) {
//       $(this).html("Show fewer");
//     } else {
//       $(this).html("Show more");
//     }
//   });
// });

$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      $("#sofar").slideUp();
    }
    if ($(this).scrollTop() < 70) {
      $("#sofar").slideDown();
    }
  });
});

$(document).ready(function () {
  //Popular Sources
  var ctx = document.getElementById("dashboard-chart-2").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "Social media",
        "Word of Mouth",
        "Google",
        "Poster/Handbill",
        "Television",
      ],
      datasets: [
        {
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
          ],
          data: [25, 50, 25, 25, 15],
          borderWidth: [1, 1, 1, 1, 1, 1],
        },
      ],
    },
    options: {
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        displayColors: false,
      },
    },
  });
});


$(document).ready(function () {
  //Popular Courses Chart

  var ctx = document.getElementById("dashboard-chart-3").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "MBA in Information Technology",
        "SEMP in Business Admin",
        "Short Course in Marketing",
        "MBA in Research",
        "SEMP in Study Skills",
        "MBA in Public Relations",
      ],
      datasets: [
        {
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          data: [25, 50, 25, 25, 15, 10],
          borderWidth: [1, 1, 1, 1, 1, 1],
        },
      ],
    },
    options: {
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        displayColors: false,
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("dashboard-chart-5").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Completed", "In Progress", "Not Started"],
      datasets: [
        {
          backgroundColor: ["#111D40", "#B6DBF2", "#36BF98"],
          hoverBackgroundColor: ["#111D40", "#B6DBF2", "#36BF98"],
          data: [25, 50, 25],
          borderWidth: [1, 1, 1],
        },
      ],
    },
    options: {
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        displayColors: false,
      },
    },
  });
});

$(document).ready(function () {
  if ($("#barChart2").length) {
    var ctx = document.getElementById("barChart2").getContext("2d");

    var myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "Abuja",
          "Accra",
          "Dubai",
          "East Nigeria",
          "Lagos",
          "London",
          "Online Course",
          "Sharjah",
          "Victoria Island",
        ],
        datasets: [
          {
            label: "Enrolled",
            data: [12, 19, 3, 5, 2, 3, 10, 5, 7],
            backgroundColor: "#0F3D59",
          },
          {
            label: "Drop Out",
            data: [10, 11, 7, 5, 9, 13, 2, 1, 9],
            backgroundColor: "#BF212E",
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
          xAxes: [
            {
              ticks: {
                autoSkip: false,
              },
            },
          ],
        },
      },
    });
  }
});

$(document).ready(function () {
  if ($("#barChart3").length) {
    var ctx = document.getElementById("barChart3").getContext("2d");

    var myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "UAE",
          "UK",
          "Nigeria",
          "Ghana",
          "Kenya",
          "SA",
          "USA",
          "India",
          "France",
          "Oman",
        ],
        datasets: [
          {
            label: "Students",
            data: [12, 19, 3, 5, 2, 3, 10, 5, 7, 5],
            backgroundColor: "#0F3D59",
          },
          // {
          //   label: "Drop Out",
          //   data: [10, 11, 7, 5, 9, 13, 2, 1, 9],
          //   backgroundColor: "#BF212E",
          // },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
          xAxes: [
            {
              ticks: {
                autoSkip: false,
              },
            },
          ],
        },
      },
    });
  }
});

$(document).ready(function () {
  var ctx = document.getElementById("myChart2").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: [
        "Abridged Prog.",
        "Postgraduate Dip.",
        "Postgraduate Prog.",
        "SEMP Classroom",
        "SEMP Online",
        "Undergraduate Prog.",
      ],
      datasets: [
        {
          label: "Courses",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          borderColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        displayColors: false,
      },
    },
  });
});
$(document).ready(function () {
  var ctx = document.getElementById("ceoChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: [
        "CEO",
        "Senior Manager",
        "Middle Manager",
        "Executive",
        "Officer",
        "Other",
      ],
      datasets: [
        {
          label: "Courses",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          borderColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        displayColors: false,
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("chartIndustry").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: [
        "Banking And Finance : 15%",
        "Consulting : 13%",
        "Healthcare : 10%",
        "IT Services: 20%",
        "Government: 11%",
        "Oil and Gas : 27%",
        "Other industries : 4%",
      ],
      datasets: [
        {
          label: "Industry",
          data: [15, 13, 10, 20, 11, 27, 4],
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
            "#FEA556",
          ],
          //   borderColor: [
          //     "#111D40",
          //     "#B6DBF2",
          //     "#36BF98",
          //     "#F29A2E",
          //     "#F25C5C",
          //     "#F24405",
          //     "#FEA556",
          //     "#ADEFF4"
          //   ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }

      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        callbacks: {
          label: function (tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat(
              ((currentValue / total) * 100).toFixed(1)
            );
            return currentValue + " (" + percentage + "%)";
          },
          title: function (tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          },
        },
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("chartPosition").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: [
        "CEO/Executive Director : 47%",
        "Senior Manager : 22%",
        "Middle Manager : 15%",
        "Executive : 12%",
        "Junior Officer : 3%",
        "Other : 1%",
      ],
      datasets: [
        {
          label: "Position",
          data: [47, 22, 15, 12, 3, 1],
          backgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
            "#F24405",
          ],
          // borderColor: [
          //   "#111D40",
          //   "#B6DBF2",
          //   "#36BF98",
          //   "#F29A2E",
          //   "#F25C5C",
          //   "#F24405",

          // ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }
      // maintainAspectRatio: false,
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        callbacks: {
          label: function (tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat(
              ((currentValue / total) * 100).toFixed(1)
            );
            return currentValue + " (" + percentage + "%)";
          },
          title: function (tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          },
        },
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("chartAge").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: ["18-30 : 8%", "30-40 : 33%", "40-60 : 59%"],
      datasets: [
        {
          label: "Age",
          data: [8, 33, 59],
          backgroundColor: ["#111D40", "#B6DBF2", "#36BF98"],
          // borderColor: [
          //   "#111D40",
          //   "#B6DBF2",
          //   "#36BF98",

          // ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },
      tooltips: {
        callbacks: {
          label: function (tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat(
              ((currentValue / total) * 100).toFixed(1)
            );
            return currentValue + " (" + percentage + "%)";
          },
          title: function (tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          },
        },
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("chartGender").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Male: 73%", "Female: 22%"],
      datasets: [
        {
          label: "Gender",
          data: [73, 27],
          backgroundColor: ["#111D40", "#B6DBF2"],
          borderColor: ["#111D40", "#B6DBF2"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      // scales: {
      //     yAxes: [{
      //         ticks: {
      //             beginAtZero: true
      //         }
      //     }]
      // }
      cutoutPercentage: 25,
      legend: {
        position: "right",
        display: true,
        labels: {
          boxWidth: 12,
        },
      },

      tooltips: {
        callbacks: {
          label: function (tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat(
              ((currentValue / total) * 100).toFixed(1)
            );
            return currentValue + " (" + percentage + "%)";
          },
          title: function (tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          },
        },
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("myChart3").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: [
        "Abuja",
        "Accra",
        "Dubai",
        "East Nigeria",
        "Lagos",
        "London",
        "Online Course",
        "Sharjah",
        "Victoria Island",
      ],
      datasets: [
        {
          label: "Study Center",
          data: [12, 19, 3, 5, 2, 3, 10, 5, 7],
          backgroundColor: [
            "#D91255",
            "#C61367",
            "#920298",
            "#3C2072",
            "#082380",
            "#FF552B",
            "#A62317",
            "#FBB03B",
            "#44140A",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
        xAxes: [
          {
            ticks: {
              autoSkip: false,
            },
          },
        ],
      },
    },
  });
});

$(document).ready(function () {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields = 4;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === maxFields - 1) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function () {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function () {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});

$(document).ready(function () {
  $("#myModal").modal("show");
});

$(function () {
  $("#draggable, #draggable2,#draggable3,#draggable4").draggable({
    snap: true,
  });
  $("#droppable, #droppable2, #droppable3, #droppable4").droppable({
    accept: "#draggable",
    classes: {
      "ui-droppable-active": "ui-state-active",
      "ui-droppable-hover": "ui-state-hover",
    },
    drop: function (event, ui) {
      $(this).addClass("ui-state-highlight").find("p").html("Dropped!");
    },
  });
});

$(document).ready(function ($) {
  $(".btnrating").on("click", function (e) {
    var previous_value = $("#selected_rating").val();

    var selected_value = $(this).attr("data-attr");
    $("#selected_rating").val(selected_value);

    $(".selected-rating").empty();
    $(".selected-rating").html(selected_value);

    for (i = 1; i <= selected_value; ++i) {
      $("#rating-star-" + i).toggleClass("btn-warning");
      $("#rating-star-" + i).toggleClass("btn-default");
    }

    for (ix = 1; ix <= previous_value; ++ix) {
      $("#rating-star-" + ix).toggleClass("btn-warning");
      $("#rating-star-" + ix).toggleClass("btn-default");
    }
  });
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

const menu_toggle = document.querySelector("#menu-toggle")
const toggled = document.querySelector(".toggled")

$(document).ready(function() {
    if ($(window).width() < 768) {
        // $("#wrapper").addClass("toggled");
        // $("#otherDiv").removeClass("myClass");
        menu_toggle.innerHTML = '<i class="fa fa-chevron-right"></i>'
    }
});

menu_toggle.addEventListener("click", function() {
    if (menu_toggle.innerHTML === '<i class="fa fa-chevron-right"></i>') {
        menu_toggle.innerHTML = '<i class="fa fa-chevron-left"></i>';
    } else {
        if (menu_toggle.innerHTML === '<i class="fa fa-chevron-left"></i>') {
            menu_toggle.innerHTML = '<i class="fa fa-chevron-right"></i>';
        }
    }
});
