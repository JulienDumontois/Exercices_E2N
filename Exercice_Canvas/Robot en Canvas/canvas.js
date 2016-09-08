window.onload = function()
{
    var canvas = document.getElementById("mon_canvas");
    if(!canvas)
    {
        alert("Impossible de récupérer le canvas");
        return;
  }
    var context = canvas.getContext("2d");
    if(!context)
    {
        alert("Impossible de récupérer le context");
        return;
    }

    context.beginPath();
    context.moveTo(300,50);
    context.lineTo(200,50);
    context.lineTo(150,100);
    context.lineTo(150,200);
    context.lineTo(200,250);
    context.lineTo(300,250);
    context.lineTo(350,200);
    context.lineTo(350,100);
    context.lineTo(300,50);
    context.stroke();
    context.closePath();


    context.beginPath();
    context.arc(225, 125, 15, 0, Math.PI*2);
    context.fill();
    context.closePath();

    context.beginPath();
    context.arc(275, 125, 15, 0, Math.PI*2);
    context.fill();
    context.closePath();

    context.beginPath();
    context.moveTo(200,175);
    context.lineTo(200,200);
    context.lineTo(300,200);
    context.lineTo(300,175);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.moveTo(200,250);
    context.lineTo(200,300);
    context.lineTo(300,300);
    context.lineTo(300,250);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.moveTo(200,300);
    context.lineTo(100,300);
    context.lineTo(100,600);
    context.lineTo(400,600);
    context.lineTo(400,300);
    context.lineTo(300,300);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.moveTo(150,600);
    context.lineTo(150,800);
    context.lineTo(125,825);
    context.lineTo(250,825);
    context.lineTo(250,600);
    context.lineTo(350,600);
    context.lineTo(350,800);
    context.lineTo(375,825);
    context.lineTo(250,825);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.moveTo(400,350);
    context.lineTo(450,350);
    context.lineTo(450,500);
    context.lineTo(475,500);
    context.lineTo(475,550);
    context.lineTo(400,550);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.moveTo(100,350);
    context.lineTo(50,350);
    context.lineTo(50,500);
    context.lineTo(25,500);
    context.lineTo(25,550);
    context.lineTo(100,550);
    context.stroke();
    context.closePath();

    context.beginPath();
    context.font = "20px Helvetica";
    context.fillStyle = "#AAC442";
    context.strokeStyle = "#424258";
    context.strokeText("Cadeau d'aurevoir à Juju <3", 125, 400);
    context.fillText("Cadeau d'aurevoir à Juju <3", 125, 400);
    context.closePath();
}
