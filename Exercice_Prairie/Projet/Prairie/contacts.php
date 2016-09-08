    <?php  include "header.php";?>
    <div class="contenu contenu_contacts">
     <h1>Vous souhaitez des informations complémentaires ? Contactez-nous !</h1>
     <div id="contact_formulaire">
       <form>
        <label for="nom">Nom<span class="contactast">*</span> :</label><br>
        <input class="contact_form_input" type="text"  placeholder="Nom" name=""/><br>
        <label for="Prénom">Prénom<span class="contactast">* </span>:</label><br>
        <input class="contact_form_input" type="text"  placeholder="Prénom" /><br>
        <label for="Adresse email">Adresse Email<span class="contactast">*</span> :</label><br>
        <input class="contact_form_input" type="email"  placeholder="Adresse Mail" /><br>
        <label for="Téléphone">Téléphone <i class="fa fa-phone contacts" aria-hidden="true"></i>:
        </label><br>
        <input class="contact_form_input" type="tel" placeholder="Téléphone"/><br>
        <p>LAISSEZ NOUS UN MESSAGE<span class="contactast">*</span> :</p>
        <label for="OBJET">Objet<span class="contactast">*</span> : </label><input class="contact_input_champ" type="Champ" /><br>
        <label for="Message"></label>
        <textarea name="message" rows="10" cols="50">
        </textarea>
        <p><a id="contact_button" href="#">Envoyer</a></p>
      </form>
      <p><span class="contactast">*</span> Champs Obligatoires</p>
    </div>
     <div id="contact_coordonees">
       <p>L'Ecole du Numérique du Noyonnais vient d'ouvrir sa première session de formation. La prairie, pré-rentrée, a eu lieu du 2 au 13 mai 2016. La formation de 6 mois démarrera le 17 mai 2016.</p>
       <p><i class="fa fa-clock-o" aria-hidden="true"></i> Ouvert du lundi au vendredi :<br/>de 8 h 30 à 12 h 30 et de 13 h 30 à 16 h 30.</p>
       <p>E2N Ecole du Numérique du Noyonnais</p>
       <p>Campus Inovia</p>
       <p>1435 Bd Cambronne Bat 12<br/>
       60400 NOYON</p>
       <p><i class="fa fa-envelope" aria-hidden="true"></i> Mail : <a href="mailto:contact.formation@novei.fr">contact.formation@novei.fr</a></p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.990841552822!2d3.0059642508433875!3d49.597922156203246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e873965082a315%3A0xe4d8e82d29dec85b!2s1435+Boulevard+Cambronne%2C+60400+Noyon!5e0!3m2!1sfr!2sfr!4v1462961940871" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
     <div class="press_stop_float">
     </div>
    </div>
      <?php include "modules.php";?>
      <?php  include "footer.php";?>
