//^ catturo il bottone
var myButton = document.getElementById('myButton');
//^ catturo la modale
var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
var tooltip = new bootstrap.Tooltip(myButton);

//^ evento all'entrata col mouse per mostrare il tooltip
myButton.addEventListener('mouseenter', function() {
    tooltip.show();
});

//^ evento all'uscita col mouse per mostrare il tooltip
myButton.addEventListener('mouseleave', function() {
    tooltip.hide();
});

//^ evento al click per mostrare la modale
myButton.addEventListener('click', function() {
    myModal.show();
});