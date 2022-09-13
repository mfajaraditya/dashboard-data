
let dashboard = document.querySelector("#dashboard");
let table = document.querySelector("#table");
let admin = document.querySelector("#admin");
let login = document.querySelector("#login");

dashboard.onclick = function () {
  dashboard.className = "select-active-dashboard";
  table.className = "select-active";
  admin.className = "select-active";
  login.className = "select-active";
};
table.onclick = function () {
  dashboard.className = "select-active";
  table.className = "select-active-dashboard";
  admin.className = "select-active";
  login.className = "select-active";
};
admin.onclick = function () {
  dashboard.className = "select-active";
  table.className = "select-active";
  admin.className = "select-active-dashboard";
  login.className = "select-active";
};
login.onclick = function () {
  dashboard.className = "select-active";
  table.className = "select-active";
  admin.className = "select-active";
  login.className = "select-active-dashboard";
  
};
