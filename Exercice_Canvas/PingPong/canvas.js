/*window.onload = function()
{
  var canvas = document.getElementById('mon_canvas');
  if(!canvas)
  {
    alert("Impossible de récupérer le canvas");
    return;
  }
  var context = canvas.getContext('2d');
  if(!context)
  {
    alert("Impossible de récupérer le context du canvas");
    return;
  }
  //C'est ici que l'on placera tout le code servant à nos dessins.
  context.beginPath();//On démarre un nouveau tracé
  context.moveTo(0, 300);//On se déplace au coin inférieur gauche
  context.lineTo(150, 0);
  context.lineTo(150, 300);
  context.lineTo(200, 200);
  context.lineTo(0, 300);
  context.stroke();//On trace seulement les lignes.
  context.closePath();

  context.beginPath();
  context.strokeRect(20,50,50,50);
  context.closePath();

  context.beginPath();
  context.arc(300,50,50,0,Math.PI*2);
  context.stroke();
  context.closePath();

  context.beginPath();
  var bourrikhal = new Image();
  bourrikhal.src = '/home/dumontois/Images/bourrical.jpg';
  context.drawImage(bourrikhal,300,500);
  context.closePath();

  context.beginPath();
  context.font = "50px Helvetica";
  context.fillStyle = "#AAC442";
  context.strokeStyle = "#424258";
  context.strokeText("GO G2 GO ! ! !", 700, 100);
  context.fillText("GO G2 GO ! ! !", 700, 100);
  context.closePath();

  context.beginPath();
  var degrade = context.createLinearGradient(0,0,600,100);//Délimitation du début et de la fin du dégradé.
  degrade.addColorStop(0,"#FFFFFF");//Ajout d'une première couleur.
  degrade.addColorStop(1,"#000000");//Ajout de la seconde couleur.

  context.fillStyle = degrade;//On passe notre dégradé au fillStyle();
  context.fillRect(0,500,300,300);//On trace un rectangle plein qui aura pour style le dégradé.
  context.closePath(); */
}
