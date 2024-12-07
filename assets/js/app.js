document.querySelectorAll('input[type="radio"]').forEach(input => {
    input.addEventListener('change', function() {
        const label = document.querySelector(`label[for="${this.id}"]`);
        const selectedColor = label.getAttribute('data-color');
        
        // Applique la couleur de sélection au label
        label.style.backgroundColor = selectedColor;
        label.style.color = '#F2E4EE'; // Option de texte en blanc

        // Si un autre radio est sélectionné, on enlève la couleur de l'ancienne sélection
        const otherLabels = label.closest('.options').querySelectorAll('label');
        otherLabels.forEach(otherLabel => {
            if (otherLabel !== label) {
                otherLabel.style.backgroundColor = ''; // Retirer le fond
                otherLabel.style.color = ''; // Retirer la couleur du texte
            }
        });
    });
});