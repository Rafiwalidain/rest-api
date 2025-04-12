// let mahasiswa = {
//   nama: "rafi walidain",
//   npm: "21120119130020",
//   email: "rafiwalidain@gmail.com",
// };

// console.log(JSON.stringify(mahasiswa));

// vanila js
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };

// xhr.open("GET", "cbae.json", true);
// xhr.send();

// jQuery
$.getJSON("cbae.json", function (data) {
  console.log(data);
});
