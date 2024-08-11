document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('myButton').addEventListener('click', function(event) {
        event.preventDefault();
        alert('Se ha enviado correctamente!');
    });
});
