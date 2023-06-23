<!DOCTYPE html>
<html>
<head>
    <title>Множення</title>
</head>
<body>
    <form action="{{ route('multiply') }}" method="POST">
       @csrf
       <input type="number" name="num1" required>
       <input type="number" name="num2" required>
       <button type="submit">Множити</button>
    </form>
</body>
</html>
