function comprobar() {
    var nombre = document.formu.nombre.value;
    var edad = document.formu.edad.value;

    if (nombre.length > 30) {
        alert("Tu nombre es demasiado grande. Redúcelo.");
        return false;
    }

    if (edad >= 20 && edad <= 40) {
        alert("Si tienes entre 20 y 40 años, no puedes usar este programa.");
        return false;
    }

    return true;
}
