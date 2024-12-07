<?php get_header(); ?>

<div class="marge">

<section class="intro-section">
  <div class="intro-content">
    <h1 class="titlee">Êtes-vous victime de violence psychologique ?</h1>
    <h1 class="titlee">Faites le test pour le découvrir</h1>
    <br><br>
    <p>
      La violence psychologique peut être difficile à identifier, car elle se manifeste souvent de manière subtile et progressive.<br><br>
      Ce formulaire a pour but de vous aider à mieux comprendre certaines situations de votre vie et à repérer des comportements qui pourraient être nocifs pour votre bien-être émotionnel.<br><br>
      À travers une série de questions, vous pourrez évaluer si certaines personnes ou certaines relations vous mettent mal à l’aise ou vous affectent négativement.<br><br>
      Ce test peut être une première étape pour identifier ce que vous ressentez et vous orienter vers des ressources d’aide si besoin.
    </p>
  </div>
  <div class="intro-image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imgform.jpg" alt="img">
  </div>
  
</section>


    <form class="questionnaire-form" action="#" method="post">
        <div class="form-group">
            <label for="question">1. Y a-t-il des personnes ou des situations qui vous mettent particulièrement mal à l’aise ?</label>
            <div class="options">
                <label><input type="radio" name="question1" value="A">A. Mon partenaire</label>
                <label><input type="radio" name="question1" value="B">B. Un membre de ma famille</label>
                <label><input type="radio" name="question1" value="C">C. Des collègues ou mon supérieur au travail</label>
                <label><input type="radio" name="question1" value="D">D. Mes amis</label>
                <label><input type="radio" name="question1" value="E">E. Personne en particulier</label>
            </div>
        </div>

   
        <div class="form-group">
            <label for="question">2. Ressentez-vous souvent que votre opinion, vos idées, ou vos sentiments sont ignorés ou minimisés par votre partenaire ou une personne proche ?</label>
            <div class="options">
                <label><input type="radio" name="question2" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
                <label><input type="radio" name="question2" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
                <label><input type="radio" name="question2" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
                <label><input type="radio" name="question2" value="D">D. Non, je me sens écoutée et respectée</label>
            </div>
        </div>

        <div class="form-group">
            <label for="question">3. Votre partenaire ou une autre personne de votre entourage vous fait-elle sentir responsable de ses propres erreurs ou difficultés, vous amenant à douter de votre valeur ?</label>
            <div class="options">
                <label><input type="radio" name="question3" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
                <label><input type="radio" name="question3" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
                <label><input type="radio" name="question3" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
                <label><input type="radio" name="question3" value="D">D. Non, je me sens écoutée et respectée</label>
            </div>
        </div>

        <div class="form-group">
            <label for="question">4. Vous arrive-t-il de vous sentir en insécurité ou d’avoir peur à l’idée d’exprimer vos véritables besoins, vos émotions, ou vos attentes à quelqu’un de proche ?</label>
            <div class="options">
                <label><input type="radio" name="question4" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
                <label><input type="radio" name="question4" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
                <label><input type="radio" name="question4" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
                <label><input type="radio" name="question4" value="D">C. Non, je me sens écoutée et respectée</label>
            </div>
        </div>


        <div class="form-group">
            <label for="question">5. Est-ce que quelqu’un dans votre entourage tente de contrôler ce que vous faites, avec qui vous êtes en contact, ou comment vous passez votre temps ?</label>
            <div class="options">
                <label><input type="radio" name="question5" value="A">A. Oui, mon partenaire ou une autre personne très proche surveille mes actions</label>
                <label><input type="radio" name="question5" value="B">B. Parfois, et cela m’amène à me poser des questions</label>
                <label><input type="radio" name="question5" value="C">C. Rarement, mais cela est déjà arrivé</label>
                <label><input type="radio" name="question5" value="D">D. Non, je me sens libre de mes choix</label>
            </div>
        </div>


        <div class="form-group">
            <label for="question">6. Avez-vous déjà ressenti qu’une personne essayait de vous éloigner de vos proches, de vos amis ou de vos activités habituelles ?</label>
            <div class="options">
                <label><input type="radio" name="question6" value="A">A. Oui, cela arrive régulièrement et affecte mes liens sociaux</label>
                <label><input type="radio" name="question6" value="B">B. Parfois, et cela m’amène à réduire mes relations sociales</label>
                <label><input type="radio" name="question6" value="C">C. Rarement, mais j’y ai déjà pensé</label>
                <label><input type="radio" name="question6" value="D">D. Non, jamais</label>
            </div>
        </div>

    
        <div class="form-group">
            <label for="question">7. Après une discussion avec votre partenaire ou une personne proche, vous arrive-t-il de douter de votre propre perception de la situation, comme si vous aviez mal compris ou exagéré ?</label>
            <div class="options">
                <label><input type="radio" name="question7" value="A">A. Oui, très souvent, comme si je ne pouvais plus me fier à mon propre jugement</label>
                <label><input type="radio" name="question7" value="B">B. Parfois, mais cela me laisse confuse</label>
                <label><input type="radio" name="question7" value="C">C. Rarement, mais cela m’a déjà troublée</label>
                <label><input type="radio" name="question7" value="D">D. Non, je me sens généralement sûre de mes perceptions</label>
            </div>
        </div>


        <div class="form-group">
            <label for="question">8. 8. Avez-vous remarqué que cette personne minimise souvent vos émotions, en vous faisant sentir que vous exagérez ou êtes « trop sensible » ?</label>
            <div class="options">
                <label><input type="radio" name="question8" value="A">A. Oui, fréquemment, et je commence à douter de moi</label>
                <label><input type="radio" name="question8" value="B">B. Parfois, mais cela reste perturbant</label>
                <label><input type="radio" name="question8" value="C">C. Rarement, cela n’arrive qu’occasionnellement</label>
                <label><input type="radio" name="question8" value="D">D. Non, cette personne respecte mes émotions</label>
            </div>
        </div>


        <div class="form-group">
            <label for="question">9. Est-ce qu’une personne de votre entourage utilise des menaces, comme le fait de partir ou de rompre la relation, pour obtenir quelque chose de vous ?</label>
            <div class="options">
                <label><input type="radio" name="question9" value="A">A. Oui, régulièrement, et cela me fait beaucoup de peine</label>
                <label><input type="radio" name="question9" value="B">B. Parfois, et cela me perturbe profondément</label>
                <label><input type="radio" name="question9" value="C">C. Rarement, mais cela est déjà arrivé</label>
                <label><input type="radio" name="question9" value="D">D. Non, jamais</label>
            </div>
        </div>



        <div class="form-group">
            <label for="question">10. Ressentez-vous fréquemment le besoin de « faire attention » à ce que vous dites ou faites pour éviter une réaction de colère, de rejet ou d’agressivité ?</label>
            <div class="options">
                <label><input type="radio" name="question10" value="A">A. Oui, constamment, comme si je devais marcher sur des œufs</label>
                <label><input type="radio" name="question10" value="B">B. Souvent, cela affecte ma manière de m’exprimer</label>
                <label><input type="radio" name="question10" value="C">C. Parfois, mais cela ne m’empêche pas d’être moi-même</label>
                <label><input type="radio" name="question10" value="D">D. Non, je me sens libre et détendue</label>
            </div>
        </div>

   
        <div class="form-group">
            <button type="submit" class="btn-submit">Soumettre le formulaire</button>
        </div>
    </form>




</div>
<?php get_footer(); ?>