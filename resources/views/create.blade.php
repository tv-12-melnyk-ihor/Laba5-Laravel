<!DOCTYPE html>
<html>
<head>
    <title>Створення продукту</title>
</head>
<body>
    <h1>Створити продукт</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label for="name">Назва</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Вартість</label>
        <input type="number" name="price" id="price" required>

        <label for="description">Опис</label>
        <textarea name="description" id="description" rows="3" required></textarea>

        <button type="submit">Створити</button>
    </form>
</body>
</html>
