document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('quizz-form');
    const resultContainer = document.getElementById('result-container');
    const resultsDiv = document.getElementById('results');

    // Vérifier si le formulaire existe
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher la soumission classique du formulaire

            // Obtenir toutes les réponses sélectionnées
            const answers = {};

            // On boucle sur chaque question pour obtenir la réponse sélectionnée
            const questions = form.querySelectorAll('.form-group');
            questions.forEach((question, index) => {
                const questionName = question.querySelector('input[type="radio"]')?.name; // Récupérer le nom de la question (ex : question1)
                if (questionName) {
                    const selectedOption = question.querySelector(`input[name="${questionName}"]:checked`);
                    if (selectedOption) {
                        answers[questionName] = selectedOption.value; // Enregistrer la réponse sélectionnée
                    }
                }
            });

            // Si une ou plusieurs réponses sont manquantes, afficher un message d'erreur
            if (Object.keys(answers).length < questions.length) {
                alert('Veuillez répondre à toutes les questions.');
                return;
            }

            // Afficher les résultats sous le formulaire
            resultContainer.style.display = 'block'; // Afficher la section des résultats

            // Générer les résultats à afficher
            let resultsHtml = '';
            for (const [question, answer] of Object.entries(answers)) {
                resultsHtml += `<p><strong>${question} :</strong> ${answer}</p>`;
            }

            // Insérer les résultats dans le div
            resultsDiv.innerHTML = resultsHtml;
        });
    }
});

