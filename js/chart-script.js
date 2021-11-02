
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
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
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
  //Popular Sources
  var ctx = document.getElementById("gender-chart").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "Male",
        "Female",
      ],
      datasets: [
        {
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
          ],
          data: [25, 50],
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
  //Popular Sources
  var ctx = document.getElementById("gender-chart-2").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "Male",
        "Female",
      ],
      datasets: [
        {
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
          ],
          data: [25, 50],
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
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939"
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
  //Popular Courses Chart

  var ctx = document.getElementById("age-chart").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "20-30",
        "31-40",
        "41-50",
        "51-60",
        "61-70",
      ],
      datasets: [
        {
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
          ],
          data: [25, 50, 25, 25, 15],
          borderWidth: [1, 1, 1, 1, 1],
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

  var ctx = document.getElementById("age-chart-2").getContext("2d");

  var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: [
        "20-30",
        "31-40",
        "41-50",
        "51-60",
        "61-70",
      ],
      datasets: [
        {
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
          ],
          hoverBackgroundColor: [
            "#111D40",
            "#B6DBF2",
            "#36BF98",
            "#F29A2E",
            "#F25C5C",
          ],
          data: [25, 50, 25, 25, 15],
          borderWidth: [1, 1, 1, 1, 1],
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
        "Abridged Programme",
        "Postgraduate Diploma",
        "Postgraduate Programme",
        "SEMP Classroom",
        "SEMP Online",
        "Undergraduate Programme",
      ],
      datasets: [
        {
          label: "Courses",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
          ],
        //   borderColor: [
        //     "#111D40",
        //     "#B6DBF2",
        //     "#36BF98",
        //     "#F29A2E",
        //     "#F25C5C",
        //     "#F24405",
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
        displayColors: false,
      },
    },
  });
});

$(document).ready(function () {
  var ctx = document.getElementById("myChartPCC").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: [
            "Professional Certificate in Networking Hardware",
            "Professional Certificate in Project Planning Concepts and Tools",
            "Professional Certificate in Financial Instruments Trading; Concepts and Analysis",
            "Professional Certificate in Business Intelligence and Data Warehousing",
            "Professional Certificate in Leading Interdepartmental Change Management",
            "Professional Certificate in Choosing a Strategic Position",
            "Professional Certificate in International Branding Strategies",
            "Professional Certificate in Effective Information Research for Zero Plagiarism",
            "Professional Certificate in Improving Performance Management through Quad Model",
            "Professional Certificate in Intelligent Business Technologies"
      ],
      datasets: [
        {
          label: "Courses",
          data: [12, 19, 3, 5, 2, 3, 10, 15, 6, 8],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#F2F0E9",
            "#2E7B8C",
            "#242D40",
            "#3D5928",
            "#401520",
          ],
        //   borderColor: [
        //     "#111D40",
        //     "#B6DBF2",
        //     "#36BF98",
        //     "#F29A2E",
        //     "#F25C5C",
        //     "#F24405",
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
    //   responsive: true,
      cutoutPercentage: 25,
      legend: {
        position: "bottom",
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
        "USA",
        "Accra",
        "Dubai",
        "Japan",
        "Nigeria",
        "London",
        "India",
        "Kenya",
        "Oman",
      ],
      datasets: [
        {
          data: [12, 19, 3, 5, 2, 3, 10, 5, 7],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
            "#BF4904",
            "#D97904",
            "#97A4A6",
          ],
          borderWidth: 1,
        },
        ],
    },
    options: {
        maintainAspectRatio: false,
         legend: {
            display: false,
            labels: {
                boxWidth: 12,
            },
        },
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
  var ctx = document.getElementById("position-chart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
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
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
          ],
          borderWidth: 1,
        },
        ],
    },
    options: {
        maintainAspectRatio: false,
         legend: {
            display: false,
            labels: {
                boxWidth: 12,
            },
        },
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
  var ctx = document.getElementById("position-chart-2").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
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
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
          ],
          borderWidth: 1,
        },
        ],
    },
    options: {
        maintainAspectRatio: false,
         legend: {
            display: false,
            labels: {
                boxWidth: 12,
            },
        },
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
  var ctx = document.getElementById("myChart4").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31"
      ],
      datasets: [
        {
          data: [12, 19, 3, 5, 2, 3, 10, 5, 7],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
            "#BF4904",
            "#D97904",
            "#97A4A6",
          ],
          borderWidth: 1,
        },
        ],
    },
    options: {
        maintainAspectRatio: false,
         legend: {
            display: false,
            labels: {
                boxWidth: 12,
            },
        },
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
  var ctx = document.getElementById("myChart4-2").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31"
      ],
      datasets: [
        {
          data: [12, 19, 3, 5, 2, 3, 10, 5, 7],
          backgroundColor: [
            "#fa5c7c",
            "#727cf5",
            "#0acf97",
            "#ffbc00",
            "#39afd1",
            "#565939",
            "#BF4904",
            "#D97904",
            "#97A4A6",
          ],
          borderWidth: 1,
        },
        ],
    },
    options: {
        maintainAspectRatio: false,
         legend: {
            display: false,
            labels: {
                boxWidth: 12,
            },
        },
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


$(document).ready(function (e) {
        var ctx = document.getElementById("dashboard-chart-20").getContext("2d");

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


    $(document).ready(function (e) {
        var ctx = document.getElementById("dashboard-chart-21").getContext("2d");

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
        var ctx = document.getElementById("dashboard-chart-22").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                label: "Monthly",
                data: [12, 19, 3, 5, 2, 3, 10, 5, 7, 1, 1, 2],
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
                    "#CC453A",
                    "#FDA112",
                    "#76EADA",
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
        var ctx = document.getElementById("dashboard-chart-23").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
            labels: [
                "China",
                "France",
                "UAE",
                "Jordan",
                "Nigeria",
                "Accra",
                "Kenya",
                "Oman",
                "Togo",
                "Japan"
            ],
            datasets: [
                {
                label: "Country",
                data: [12, 19, 3, 5, 2, 3, 10, 5, 7, 1],
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
                    "#CC453A",
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
    if ($('#HorizontalbarChart').length) {
		var ctx = document.getElementById("HorizontalbarChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: ['India', 'Nigeria', 'United State America', 'Oman', 'Ghana', 'France', 'China'],
                datasets: [{
                    label: 'Countries',
                    data: [13, 20, 4, 18, 29, 25, 8],
                    backgroundColor: "#0acf97"
                }]
            },
            options: {
                maintainAspectRatio: false
            }
        });
	}
})
