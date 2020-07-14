<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>rpg</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?v=1{{ time() }}">
</head>
<body>
@include('header')

<main>

    <section class="heroarea">

        <picture class="heroarea__image">
            <img alt="" src="{{ asset('images/startpage.jpeg') }}"/>
        </picture>

        <!-- <h1 class="heroarea__text">
            <span class="row1">Release your fantasy</span>
            <span class="row2">Create YOUR RPG</span>
            <span class="row3">Or JOIN an adventure</span>
        </h1> -->

    </section>

    <section class="about">

        <h1>Erkundet das Jenseits EURER Geschichten</h1>

        <div class="features">

            <div>

                <h2>Erstelle deine Geschichte</h2>

                <p>
                    Ob RPG, Fan-Fictions oder anderen Geschichten, hier kannst Du deiner Kreativität freien
                    lauf lassen!
                </p>

            </div>

            <div>

                <h2>Nimm an RPGs anderer Teil</h2>

                <p>
                    Zu faul Dir etwas eigenes auszudenken? Dir gefällt ein bestehendes RPG?
                    Nimm dran teil und erkunde die Welten anderer Dimensionen!
                </p>

            </div>

            <div>

                <h2>Profil-Anpassungen</h2>

                <p>
                    Ob schlichtes Design oder ein Drache der sich um deinen Hals schmiegt,
                    passe dein Profil so an, wie Du es willst und wie die Abenteurer dieser Seite
                    dich in Erinnerung behalten sollen!
                </p>

            </div>

            <div>

                <h2>Belohnungssystem</h2>

                <p>
                    Deine Kreativität und Mühen sollen wertgeschätzt werden, deshalb gibt es bei uns
                    hunderte von Belohnungen die Du Dir verdienen kannst, wenn Du aktiv auf unserer Seite
                    bist!
                </p>

            </div>

        </div>

    </section>

    <section class="creators">
        <h1>Wer steckt hinter der Seite?</h1>
        <div class="cards">
            <div class="card">
                <h2>Kaye, nikame_coleya</h2>
                <img alt="Kaye, Gründerin, Authorin" src="{{ asset('images/kaye.jpg') }}" />
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
            <div class="card">
                <h2>Sven, Suben</h2>
                <img alt="Sven, Entwickler" src="{{ asset('images/sven.jpg') }}" />
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </section>

</main>

<footer>
    <nav>
        <ul>
            <li>
                <a href="https://twitter.com/RPGames_online" target="_blank">
                    <img alt="Twitter" src="{{ asset('images/twitter.svg') }}"/>
                </a>
            </li>
        </ul>
    </nav>
    <div>
        <h3>Feedback oder Fragen? Zögere nicht uns zu schreiben!</h3>
        <p>
            <a href="hello@rpgames.online">hello@rpgames.online</a>
        </p>
    </div>
</footer>

</body>
</html>
