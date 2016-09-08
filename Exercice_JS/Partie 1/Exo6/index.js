function TBK() {
var premiernombre = document.getElementById("premier_nombre").value
var deuxiemenombre = document.getElementById("deuxieme_nombre").value
if (isNaN (premiernombre) == true || isNaN (deuxiemenombre) == true) {
  alert("Error");
}
else {
 premiernombre = parseInt(premiernombre);
deuxiemenombre = parseFloat(deuxiemenombre);
var result = premiernombre / deuxiemenombre;
alert(result);
}
}
