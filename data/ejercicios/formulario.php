<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form name="formulario" action="/autoriza.php" method="GET">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu">
        </p>

        <p>
            <label for="password">Introduce la contraseña</label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <p>
            <p>Elige tu módulo preferido:</p>
            <label for="asignatura1">PHP</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP">
            <label for="asignatura2">JavaScript</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="JavaScript">
            <label for="asignatura3">Python</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python">
            <label for="asignatura4">SQL</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
        </p>

        <p>Elige tu equipo de baloncesto preferido: </p>
        <p>
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont">
            <label for="equipo2">San pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Obradoiro</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro">

        </p>

        <p>Elige tu plato favorito: </p>
        <p>
            <select name="menus" id="menus">
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada César</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <input type="hidden" name="ip" value="<?= $_SERVER['SERVER_ADDR'] ?>">

        <p>Elige tus platos favoritos: </p>
        <p>
            <select name="menusm[]" id="menus" multiple=5>
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada César</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>
    </form>
</body>

</html>