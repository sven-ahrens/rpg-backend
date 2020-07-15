@extends('layout')

@section('content')

    <main class="home">

        <section class="heroarea">

            <picture class="heroarea__image">
                <img alt="" src="{{ asset('images/startpage.jpeg') }}"/>
            </picture>

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
                    <img alt="Kaye, Gründerin, Authorin" src="{{ asset('images/kaye.jpg') }}"/>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>

                <div class="card">
                    <h2>Sven, Suben</h2>
                    <img alt="Sven, Entwickler" src="{{ asset('images/sven.jpg') }}"/>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>

            </div>

        </section>

    </main>

@endsection
