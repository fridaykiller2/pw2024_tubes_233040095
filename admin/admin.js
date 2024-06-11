// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById("keyword");
var search = document.getElementById("search");
var search_user = document.getElementById("search_user");

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log(xhr.responseText);
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/coba.text", true);
  xhr.send();
});
