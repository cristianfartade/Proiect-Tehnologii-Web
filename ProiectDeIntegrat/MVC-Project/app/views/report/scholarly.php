<!DOCTYPE html>
<html lang="ro-RO" xml:lang="ro-RO" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Scholarly HTML</title>
    <link rel="stylesheet" href="/MVC-Project/public/css/scholarly.css">
</head>

<body prefix="schema: http://schema.org">
    <div class="navbar">
        <a href="/MVC-Project/public/home">
            <img src="/MVC-Project/public/css/images/logo.png" alt="logo" class="logo" width="200" height="62">
        </a>
        <div class="buttons">
            <button class="btn-1" onclick="window.location.href='/MVC-Project/public/home'"><strong>Home</strong></button>
        </div>
    </div>
    <header>
        <h1>Raport ScholarlyHTML</h1>
    </header>
    <div role="contentinfo">
        <dl>
            <dt>   Autori</dt>
            <dd>
                <a href="https://github.com/victorwenom123/Proiect-Tehnologii-Web">Andrieș Dumitru-Andrei </a> &amp;
                <a href="https://github.com/victorwenom123/Proiect-Tehnologii-Web">Fârțade Cristian </a> &amp;
                <a href="https://github.com/victorwenom123/Proiect-Tehnologii-Web">Stanciu Victor-Nicolae</a>
            </dd>
        </dl>
    </div>
    <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
        <h2><span>1) </span>Abstract</h2>
        <p>
            Scholarly HTML reprezintă un format cu un domeniu specific dezvoltat în întregime pe baza unor standarde deschise ce permite schimbul interoperabil de articole de tip "scholarly" într-o manieră ce este compatibilă cu browsere utilizabile.
        </p>
        <p>
            Documentul descrie atât aspectele esențiale referitoare la funcționalitățile esențiale ale aplicației, cât și cele privind interacțiunea cu utilizatorul.
        </p>

    </section>

    <section typeof="sa:Introducere" id="introducere" role="doc-introduction">
        <h2><span>2) </span>Introducere</h2>
        <section id="cerinta">
            <h3><span>2.1) </span>Cerința</h3>
            <p>
                Să se implementeze o aplicație Web capabilă – pe baza unui API REST sau GraphQL propriu – să detecteze similaritatea dintre conținuturi sonore disponibile via API-uri audio specializate. Pentru calculul similarității, se vor considera (meta-)date precum
                titlul, descrierea, lungimea, autorul, termenii de conținut (tag-urile), comentariile utilizatorilor și altele. Aplicația va oferi suport pentru căutare multi-criterială și va sugera melodii de interes în funcție de preferințe și starea
                de spirit (mood), localizarea geografică, moment de timp, factori demografici, anturaj. Aceste recomandări vor fi sugerate și prin intermediul unui flux de știri RSS și plasate pe o rețea socială pe baza hashtag-ului #saudio.
            </p>
        </section>
        <section id="structura">
            <h3><span>2.2) </span> Structura</h3>
            <p>
                În primul rând, a priori, am ajuns la un consens cu privire la structura proiectului, alcătuit din mai multe pagini și opțiuni specifice cerinței în cauză: "Home", "Login/Sign up", "Report", "Social Media", "Compare".
            </p>
        </section>

    </section>

    <section id="implementare">
        <h2><span>3) </span>Implementare</h2>
        <p>
            Am dezvoltat o interfață grafică HTML5 pentru utilizatorul care va avea la dispoziție funcționalități precum: înregistrare, autentificare, compararea a două melodii, accesul la o rețea socială sau la recomandări de melodii în funcție de criteriile precizate.

        </p>
        <p>
            Am respectat principiul responsiv specific pentru designul web, încât aplicația este accesibilă și utilizabilă de pe orice platformă, având o interfață atractivă pentru utilizator și în conformitate cu tema aleasă, cu domeniul muzicii (reprezentând, de
            altfel, motivul alegerii ideii de design).
        </p>
        <p>Am realizat partea grafică pentru funcționalitățile esențiale ale aplicației: </p>
        <ul>
            <li>Sign-up - pentru înregistrare;</li>
            <li>Login - pentru autentificare;</li>
            <li>Compare songs - pentru compararea a două melodii;</li>
            <li>Get recommandations - pentru a primi recomandări de melodii în funcție de anumite criterii;</li>
            <li>Social media - o rețea socială în care utilizatorul poate primi recomandări sau poate comunica cu alți utilizatori prin intermediul tweet-urilor.</li>
        </ul>
        <p>În primul rând, utilizatorul are la dispoziție pagina "Home" ( <a href="https://imgur.com/w6ZG7kZ">screenshot</a> ) .</p>
        <p>În ceea ce privește interacțiunea aplicație-utilizator, pe pagina Home, utilizatorul beneficiază de următoarele opțiuni: poate accesa "Compare songs" ( <a href="https://imgur.com/9PMyNvO">screenshot</a> ) pentru a completa un formular, ce îl va
            direcționa spre o pagină care va afișa rezultatul comparației ( <a href="https://imgur.com/RW3NfDu">screenshot</a> ) . Acest formular conține date precum: numele, autorul, durata, tag-urile, genul, cât și comentariile melodiilor .
        </p>
        <p>Analog, poate accesa "Get recommandations" ( <a href="https://imgur.com/e4IV9uO">screenshot</a> ), pentru a primi anumite recomandări pe o nouă pagină ( <a href="https://imgur.com/YlelJdy">screenshot</a> ) . Va completa un formular conținând următoarele
            date: preferințele, starea de spirit, locații geografice, data apariției melodiei, vârsta, tipul habitatului, nivelul de educație, tipul zonei și compatibilitatea melodiei cu anturajul.
        </p>
        <p> Atât autentificarea ( <a href="https://imgur.com/MDfdEeZ">screenshot</a> ), cât și înregistrarea ( <a href="https://imgur.com/OrCTRxF">screenshot</a> ) au în vedere un nume de utilizator și o parolă. În plus, signup solicită o adresă de email.
        </p>
        <p>Rețeaua socială ( <a href="https://imgur.com/meSrbql">screenshot</a> ) va afișa recomandări de melodii, dar va oferi și posibilitatea utilizatorului de a comunica cu alți utilizatori prin intermediul tweet-urilor. De asemenea, aceasta pune la
            dispoziție un buton de "Back" pentru a reveni la pagina anterioară.</p>
        <p>În ceea ce privește soluționarea problemelor întampinate, pentru o așezare în pagină mai bună, se remarcă redimensionarea elementelor paginii, a butoanelor, a containerelor și a elementelor de text și input în funcție de dimensiunile viewport-ului.
            (cu ajutorul "vw", "vh", "vmin" și "vmax"). În ceea ce privește așezarea elementelor pe diferite dispozitive, a fost realizată crearea de layout-uri diferite pentru acestea, încât, de pildă, pe sisteme Desktop, elementele sunt așezate diferit
            comparativ cu așezarea lor pe telefoane. </p>
    </section>
    <section id="ref-ResurseExterne">
        <h2><span>4) </span>Conținut extern</h2>
        <p>
            Ca resurse externe, au fost utilizate următoarele :
        </p>
        <ul>
            <li>
                <a href="#ref-Scholarly">Scholarly HTML</a>, cu ajutorul căruia a fost realizat raportul.
            </li>
            <li>
                <a href="#ref-Imgur">Imgur</a>, site pe care au fost încărcate screenshot-urile.
            </li>
        </ul>
    </section>
    <section id="Referinte">
        <h2><span>5) </span>Referințe</h2>
        <dl>
            <dt id="ref-Developer">Developer</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML ">Referință Developer</a>
                </cite>
            </dd>
            <dt id="ref-W3schools">W3schools</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://www.w3schools.com/html/ ">Referință W3schools</a>
                </cite>
            </dd>
            <dt id="ref-Imgur">Imgur</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://imgur.com ">Referință Imgur</a>
                </cite>
            </dd>
            <dt id="ref-Youtube1">Pagină Home</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://www.youtube.com/watch?v=CZTCciHE72I  ">Referință pagina Home</a>
                </cite>
            </dd>
            <dt id="ref-CreateLogo">Creare logo</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://www.youtube.com/watch?v=f-jopUTj5_Y ">Referință creare logo</a>
                </cite>
            </dd>
            <dt id="ref-Scholarly">Raport Scholarly HTML</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://w3c.github.io/scholarly-html/ ">Raport Scholarly HTML</a>
                </cite>
            </dd>
            <dt id="ref-Social">Social Media</dt>
            <dd property="schema:citation" typeof="schema:Webpage">
                <cite property="schema:name">
                    <a href="https://www.youtube.com/watch?v=HwPjBpMiU0o  ">Referință Social Media</a>
                </cite>
            </dd>
            <dt id="ref-Login">Login</dt>
            <dd property="schema:citation" typeof="schema:Webpag">
                <cite property="schema:name">
                    <a href="https://www.youtube.com/watch?v=L5WWrGMsnpw  ">Referință Login</a>
                </cite>
            </dd>
        </dl>
    </section>

</body>

</html>