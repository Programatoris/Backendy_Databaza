<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tvoj Názov Stránky</title>
</head>
<body>
    <header>
        <!-- Hlavička stránky -->
    </header>
    <main>
        <!-- Hlavný obsah stránky -->
        <section>
            <h1>Blogové články</h1>
            <ul>
                @foreach ($posts as $post)
                <li>
                    <h2>
                        <a href="{{ url('blog', ['id' => $post['id']]) }}">{{ $post['title'] }}</a>
                    </h2>
                    <p>{{ $post['excerpt'] }}</p>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
    <footer>
        <!-- Päta stránky -->
    </footer>
</body>
</html>
