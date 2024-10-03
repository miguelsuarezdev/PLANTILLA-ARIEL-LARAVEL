<!-- resources/views/convert_text.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Texto a Audio</title>
</head>
<body>
    <h1>Convertir Texto a Audio</h1>

    <form action="{{ route('convert.text.to.audio') }}" method="POST">
        @csrf
        <label for="text">Introduce el texto:</label>
        <textarea name="text" id="text" rows="4" required></textarea>

        <button type="submit">Convertir a Audio</button>
    </form>
</body>
</html>
