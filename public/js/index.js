// Bar Chart Example
// var ctx = document.getElementById("myBarChart");
// const labels = [
//   "January",
//   "February",
//   "March",
//   "April",
//   "May",
//   "June",
//   "July",
//   "August",
//   "September",
//   "October",
// ];

// const data = {
//   labels: labels,
//   datasets: [
//     {
//       label: "Database Test",
//       backgroundColor: [
//         "rgba(255, 99, 132, 0.7)",
//         "rgba(255, 159, 64, 0.7)",
//         "rgba(255, 205, 86, 0.7)",
//         "rgba(75, 192, 192, 0.7)",
//         "rgba(54, 162, 235, 0.7)",
//         "rgba(153, 102, 255, 0.7)",
//         "rgba(201, 203, 207, 0.7)",
//       ],
//       borderColor: [
//         "rgb(255, 99, 132)",
//         "rgb(255, 159, 64)",
//         "rgb(255, 205, 86)",
//         "rgb(75, 192, 192)",
//         "rgb(54, 162, 235)",
//         "rgb(153, 102, 255)",
//         "rgb(201, 203, 207)",
//       ],
//       data: [28, 48, 40, 19, 45, 27, 22, 34, 22, 17],
//     },
//   ],
// };

// const config = {
//   type: "bar",
//   data: data,
//   options: {
//     maintainAspectRatio: false,
//     layout: {
//       padding: {
//         left: 10,
//         right: 25,
//         top: 25,
//         bottom: 0,
//       },
//     },
//   },
// };

// const myChart = new Chart(document.getElementById("myBarChart"), config);
// var myBarChart = new Chart(ctx, {
//   type: 'bar',
//   data: {
//     labels: ["January", "February", "March", "April", "May", "June"],
//     datasets: [{
//       label: "Revenue",
//       backgroundColor: "#4e73df",
//       hoverBackgroundColor: "#2e59d9",
//       borderColor: "#4e73df",
//       data: [4215, 5312, 6251, 7841, 9821, 14984],
//     }],
//   },
//   options: {
//     maintainAspectRatio: false,
//     layout: {
//       padding: {
//         left: 10,
//         right: 25,
//         top: 25,
//         bottom: 0
//       }
//     },
//     scales: {
//       xAxes: [{
//         time: {
//           unit: 'month'
//         },
//         gridLines: {
//           display: false,
//           drawBorder: false
//         },
//         ticks: {
//           maxTicksLimit: 6
//         },
//         maxBarThickness: 25,
//       }],
//       yAxes: [{
//         ticks: {
//           min: 0,
//           max: 15000,
//           maxTicksLimit: 5,
//           padding: 10,
//           // Include a dollar sign in the ticks
//           callback: function(value, index, values) {
//             return '$' + number_format(value);
//           }
//         },
//         gridLines: {
//           color: "rgb(234, 236, 244)",
//           zeroLineColor: "rgb(234, 236, 244)",
//           drawBorder: false,
//           borderDash: [2],
//           zeroLineBorderDash: [2]
//         }
//       }],
//     },
//     legend: {
//       display: false
//     },
//     tooltips: {
//       titleMarginBottom: 10,
//       titleFontColor: '#6e707e',
//       titleFontSize: 14,
//       backgroundColor: "rgb(255,255,255)",
//       bodyFontColor: "#858796",
//       borderColor: '#dddfeb',
//       borderWidth: 1,
//       xPadding: 15,
//       yPadding: 15,
//       displayColors: false,
//       caretPadding: 10,
//       callbacks: {
//         label: function(tooltipItem, chart) {
//           var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
//           return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
//         }
//       }
//     },
//   }
// });
