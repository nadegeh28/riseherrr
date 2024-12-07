document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les labels d'options
    const labels = document.querySelectorAll('.options label');
    
    // Ajouter un écouteur d'événements pour chaque label
    labels.forEach(function(label) {
        label.addEventListener('click', function() {
            // Supprimer la classe "selected" de tous les labels
            labels.forEach(function(l) {
                l.classList.remove('selected');
            });
            // Ajouter la classe "selected" à l'option cliquée
            label.classList.add('selected');
        });
    });
});
