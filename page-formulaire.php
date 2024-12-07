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
        <label for="question1">1. Y a-t-il des personnes ou des situations qui vous mettent particulièrement mal à l’aise ?</label>
        <div class="options">
            <label for="option1A "><input type="radio" id="option1A" name="question1" value="A">A. Mon partenaire</label>
            <label for="option1B"><input type="radio" id="option1B" name="question1" value="B">B. Un membre de ma famille</label>
            <label for="option1C"><input type="radio" id="option1C" name="question1" value="C">C. Des collègues ou mon supérieur au travail</label>
            <label for="option1D"><input type="radio" id="option1D" name="question1" value="D">D. Mes amis</label>
            <label for="option1E"><input type="radio" id="option1E" name="question1" value="E">E. Personne en particulier</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question2">2. Ressentez-vous souvent que votre opinion, vos idées, ou vos sentiments sont ignorés ou minimisés par votre partenaire ou une personne proche ?</label>
        <div class="options">
            <label for="option2A"><input type="radio" id="option2A" name="question2" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
            <label for="option2B"><input type="radio" id="option2B" name="question2" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
            <label for="option2C"><input type="radio" id="option2C" name="question2" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
            <label for="option2D"><input type="radio" id="option2D" name="question2" value="D">D. Non, je me sens écoutée et respectée</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question3">3. Votre partenaire ou une autre personne de votre entourage vous fait-elle sentir responsable de ses propres erreurs ou difficultés, vous amenant à douter de votre valeur ?</label>
        <div class="options">
            <label for="option3A"><input type="radio" id="option3A" name="question3" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
            <label for="option3B"><input type="radio" id="option3B" name="question3" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
            <label for="option3C"><input type="radio" id="option3C" name="question3" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
            <label for="option3D"><input type="radio" id="option3D" name="question3" value="D">D. Non, je me sens écoutée et respectée</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question4">4. Vous arrive-t-il de vous sentir en insécurité ou d’avoir peur à l’idée d’exprimer vos véritables besoins, vos émotions, ou vos attentes à quelqu’un de proche ?</label>
        <div class="options">
            <label for="option4A"><input type="radio" id="option4A" name="question4" value="A">A. Oui, j’ai souvent l’impression que ce que je ressens ou pense n’a pas de valeur à ses yeux</label>
            <label for="option4B"><input type="radio" id="option4B" name="question4" value="B">B. Parfois, mais je me demande si c’est moi qui exagère</label>
            <label for="option4C"><input type="radio" id="option4C" name="question4" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
            <label for="option4D"><input type="radio" id="option4D" name="question4" value="D">D. Non, je me sens écoutée et respectée</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question5">5. Est-ce que quelqu’un dans votre entourage tente de contrôler ce que vous faites, avec qui vous êtes en contact, ou comment vous passez votre temps ?</label>
        <div class="options">
            <label for="option5A"><input type="radio" id="option5A" name="question5" value="A">A. Oui, mon partenaire ou une autre personne très proche surveille mes actions</label>
            <label for="option5B"><input type="radio" id="option5B" name="question5" value="B">B. Parfois, et cela m’amène à me poser des questions</label>
            <label for="option5C"><input type="radio" id="option5C" name="question5" value="C">C. Rarement, mais cela est déjà arrivé</label>
            <label for="option5D"><input type="radio" id="option5D" name="question5" value="D">D. Non, je me sens libre de mes choix</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question6">6. Avez-vous déjà ressenti qu’une personne essayait de vous éloigner de vos proches, de vos amis ou de vos activités habituelles ?</label>
        <div class="options">
            <label for="option6A"><input type="radio" id="option6A" name="question6" value="A">A. Oui, cela arrive régulièrement et affecte mes liens sociaux</label>
            <label for="option6B"><input type="radio" id="option6B" name="question6" value="B">B. Parfois, et cela m’amène à réduire mes relations sociales</label>
            <label for="option6C"><input type="radio" id="option6C" name="question6" value="C">C. Rarement, mais j’y ai déjà pensé</label>
            <label for="option6D"><input type="radio" id="option6D" name="question6" value="D">D. Non, jamais</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question7">7. Après une discussion avec votre partenaire ou une personne proche, vous arrive-t-il de douter de votre propre perception de la situation, comme si vous aviez mal compris ou exagéré ?</label>
        <div class="options">
            <label for="option7A"><input type="radio" id="option7A" name="question7" value="A">A. Oui, très souvent, comme si je ne pouvais plus me fier à mon propre jugement</label>
            <label for="option7B"><input type="radio" id="option7B" name="question7" value="B">B. Parfois, mais cela me laisse confuse</label>
            <label for="option7C"><input type="radio" id="option7C" name="question7" value="C">C. Rarement, mais cela m’a déjà traversé l’esprit</label>
            <label for="option7D"><input type="radio" id="option7D" name="question7" value="D">D. Non, je me sens sûre de ma perception</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question8">8. Est-ce que vous sentez que votre partenaire ou une personne proche utilise la culpabilité pour manipuler ou vous influencer ?</label>
        <div class="options">
            <label for="option8A"><input type="radio" id="option8A" name="question8" value="A">A. Oui, souvent et cela me fait sentir mal</label>
            <label for="option8B"><input type="radio" id="option8B" name="question8" value="B">B. Parfois, et cela me fait réfléchir</label>
            <label for="option8C"><input type="radio" id="option8C" name="question8" value="C">C. Rarement, mais cela est arrivé</label>
            <label for="option8D"><input type="radio" id="option8D" name="question8" value="D">D. Non, jamais</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question9">9. Vous arrive-t-il de recevoir des insultes ou des critiques fréquentes, même en privé ?</label>
        <div class="options">
            <label for="option9A"><input type="radio" id="option9A" name="question9" value="A">A. Oui, cela arrive souvent et cela me blesse</label>
            <label for="option9B"><input type="radio" id="option9B" name="question9" value="B">B. Parfois, cela m'affecte</label>
            <label for="option9C"><input type="radio" id="option9C" name="question9" value="C">C. Rarement</label>
            <label for="option9D"><input type="radio" id="option9D" name="question9" value="D">D. Non, jamais</label>
        </div>
    </div>

    <div class="form-group">
        <label for="question10">10. Avez-vous du mal à vous sentir à l'aise d'être vous-même en présence de certaines personnes ?</label>
        <div class="options">
            <label for="option10A"><input type="radio" id="option10A" name="question10" value="A">A. Oui, toujours</label>
            <label for="option10B"><input type="radio" id="option10B" name="question10" value="B">B. Souvent</label>
            <label for="option10C"><input type="radio" id="option10C" name="question10" value="C">C. Parfois</label>
            <label for="option10D"><input type="radio" id="option10D" name="question10" value="D">D. Rarement</label>
            <label for="option10E"><input type="radio" id="option10E" name="question10" value="E">E. Jamais</label>
        </div>
    </div>

    <div class="btn-container">
        <button type="submit" class="btn-submit">Soumettre le formulaire</button>
    </div>
</form>






</div>
<?php get_footer(); ?>



