<?php

function ajouter_styles_personnalises() {
    wp_enqueue_style(
        'style-personnalise',
        get_template_directory_uri() . '/assets/css/app.css',
        array(), 
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');

// Fonction pour traiter et analyser les réponses du formulaire
function analyser_reponses_questionnaire() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Initialisation des variables pour les réponses
        $responses = [
            'question1' => $_POST['question1'] ?? null,
            'question2' => $_POST['question2'] ?? null,
            'question3' => $_POST['question3'] ?? null,
            'question4' => $_POST['question4'] ?? null,
            'question5' => $_POST['question5'] ?? null,
            'question6' => $_POST['question6'] ?? null,
            'question7' => $_POST['question7'] ?? null,
            'question8' => $_POST['question8'] ?? null,
            'question9' => $_POST['question9'] ?? null,
            'question10' => $_POST['question10'] ?? null,
        ];

        // Comptage des réponses
        $counts = ['A' => 0, 'B' => 0, 'C' => 0, 'D' => 0];

        foreach ($responses as $response) {
            if (isset($counts[$response])) {
                $counts[$response]++;
            }
        }

        // Détermination du niveau de la situation
        if ($counts['A'] >= 4) {
            // Niveau élevé : signes de relation abusive ou toxique
            $message = "Votre évaluation révèle des signes préoccupants de comportements abusifs ou de manipulation. Il est essentiel que vous considériez sérieusement ces signaux et que vous cherchiez de l'aide, soit par un professionnel, soit auprès de personnes de confiance. Vous méritez des relations où vous vous sentez en sécurité et respectée.";
        } elseif ($counts['A'] >= 2 || ($counts['B'] >= 3 && $counts['C'] >= 1)) {
            // Niveau moyen : potentielle problématique relationnelle
            $message = "Votre évaluation montre des signes de comportements préoccupants qui pourraient être nuisibles à votre bien-être. Il est conseillé de parler ouvertement de vos préoccupations avec la personne concernée ou de consulter un professionnel pour explorer ces problèmes plus en profondeur.";
        } else {
            // Niveau faible : relation généralement saine
            $message = "Votre évaluation indique que votre relation semble généralement saine et équilibrée. Vous vous sentez écouté et respecté la plupart du temps. Continuez à maintenir une bonne communication et à prendre soin de vos besoins.";
        }

        // Afficher le message de résultat
        echo '<div class="result-message">' . esc_html($message) . '</div>';
    }
}

// Hook pour afficher le message après soumission du formulaire
add_action('wp_footer', 'analyser_reponses_questionnaire');



