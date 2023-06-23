<!DOCTYPE html>
<html>
<head>
    <title>Ділення</title>
</head>
<body>
    <form action="{{ route('divide') }}" method="POST">
       @csrf
       <input type="number" name="num1" required>
       <input type="number" name="num2" required>
       <button type="submit">Ділити</button>
    </form>
</body>
</html>
