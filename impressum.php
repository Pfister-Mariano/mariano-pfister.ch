<!DOCTYPE html>
<html lang="de">

<head>
   <title>Impressum - Portfolio Mariano</title>
   <meta name="description" content="Auf der Impressum-Seite von Mariano Pfister finden Sie alle erforderlichen rechtlichen Informationen sowie Kontaktmöglichkeiten. Erfahren Sie mehr über die Verantwortlichkeiten und Informationen gemäß den geltenden Datenschutz- und Impressumsrichtlinien.">
   <?php
      require_once('partials/head.php');
   ?>
</head>

<body>
   <?php
      require_once('partials/navigation.php');
      require_once('partials/formular.php');
   ?>
   <main>
      <header class="backgroundDark">
         <section class="fullScreen" id="hero">
            <div class="wrapper">
               <article class="heroContent">
                  <div>
                     <span class="heroText">
                        <h1>Impressum<br>
                           Mariano Pfister</h1>
                        <p>
                           <a aria-label="Jetzt eine Mail schreiben" href="mailto:max@musterman.ch">max@musterman.ch</a><br>
                           <a aria-label="Per Telefon anrufen" href="tel:0761112233">076 111 22 33</a><br>
                           <a aria-label="Per Telefon anrufen"href="tel:04111122233">041 111 222 33</a><br>
                        </p>
                        <p>
                           Musterstraße 1<br>
                           99999 Musterstadt
                        </p>
                        <h3>Haftungsausschluss:</h3>
                        <p>Die auf meiner Webseite bereitgestellten Informationen dienen ausschließlich
                           Informationszwecken. Ich übernehme keine Gewähr für die Richtigkeit, Vollständigkeit und
                           Aktualität der bereitgestellten Inhalte. Jegliche Haftung für Schäden, die direkt oder
                           indirekt aus der Nutzung meiner Webseite entstehen, wird ausgeschlossen</p>
                        <h3>
                           Urheberrecht
                        </h3>
                        <p>Die auf meiner Webseite präsentierten Bilder und Inhalte wurden von mir, selbst erstellt und
                           unterliegen dem Urheberrecht. Jegliche Nutzung, Vervielfältigung oder Verbreitung bedarf
                           meiner ausdrücklichen schriftlichen Zustimmung.</p>
                        <h3>
                           Haftung für Externe Links:
                        </h3>
                        <p>Meine Webseite enthält Links zu externen Webseiten Dritter. Trotz sorgfältiger inhaltlicher
                           Kontrolle übernehme ich keine Haftung für die Inhalte externer Links. Für den Inhalt der
                           verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich..</p>
                     </span>
                  </div>
                  <div class="heroImage">
                     <picture>
                        <source srcset="content/images/webp-100/portfolio-mariano-portrait.webp" type="image/webp">
                        <img src="content/images/original/portfolio-mariano-portrait.png" alt="Seitliches Portrait von Mariano Pfister"
                        height="900px">
                     </picture>
                  </div>
               </article>
            </div>
         </section>
      </header>

      <section id="teaser" class="teaserTopDown backgroundLight">
         <div class="wrapper wrapperSmall">
            <div class="teaserTopDownGrid">
               <article>
                  <picture class="teaserImg imgRatio-4-3">
                     <source srcset="content/images/webp-50/portfolio-mariano-about.webp" type="image/webp" media="(max-width: 600px)" >
                     <source srcset="content/images/webp-100/portfolio-mariano-about.webp" type="image/webp" media="(min-width: 601px)">
                     <img src="content/images/original/portfolio-mariano-about.jpg" alt="Portrait von Mariano vor fahrenden Autos">
                  </picture>
                  <div class="teaserText">
                     <h3>Über Mich</h3>
                     <p>Lesen Sie mehr über mich, meine Leidenschaften und Hobbys. Machen Sie sich ein besseres Bild von
                        mir und was mich auszeichnet als Person.</p>
                     <a aria-label="Weiter zu der Unterseite über mich" class="button" href="ueber-mich.php">Mehr Erfahren</a>
                  </div>
               </article>
               <article>
                  <picture class="teaserImg imgRatio-4-3">
                     <source srcset="content/images/webp-50/portfolio-mariano-faehigkeiten.webp" type="image/webp" media="(max-width: 600px)" >
                     <source srcset="content/images/webp-100/portfolio-mariano-faehigkeiten.webp" type="image/webp" media="(min-width: 601px)">
                     <img src="content/images/original/portfolio-mariano-faehigkeiten.jpg" alt="Bild von Laptop mit fokus auf Adobe programmen">
                  </picture>
                  <div class="teaserText">
                     <h3>Meine Fähigkeiten</h3>
                     <p>Erfahren Sie mehr über mein Kenntnissen und Erfahrungen im Umgang mit Software und Webseiten.
                        Hier
                        finden Sie einen Überblick von all meinen Fähigkeiten</p>
                     <a aria-label="Weiter zu der Unterseite Fähigkeiten" class="button" href="faehigkeiten.php">Mehr erfahren</a>
                  </div>
               </article>
            </div>
         </div>
      </section>

      <div class="formModalTrigger">
        <svg viewBox="0 0 89.81 66.72">
            <path id="pen-field"
               d="M64.27,17.97l6.19,5.75-15.21,14.12-7.07.82.88-6.57,15.21-14.12ZM77.6,25.93l2.39-2.22,5.07-4.7,4.76-4.42-4.76-4.42-6.2-5.76-4.76-4.42-4.76,4.42-5.07,4.7-2.38,2.22-2.38,2.22-16.84,15.64-1.39,10.28-.86,6.4,6.89-.79,11.07-1.29,16.84-15.64,2.39-2.22ZM75.21,19.3l-6.19-5.75,5.07-4.7,6.19,5.75-5.07,4.7ZM3.37,16.68H0v50.04h80.82v-29.19h-6.74v22.94H6.74V22.93h33.68v-6.25H3.37ZM22.45,37.53h-8.98v8.34h8.98v-8.34ZM26.94,37.53v8.34h8.98v-8.34h-8.98Z"
               fill="#f1ebdc" stroke-width="0" />
         </svg>
      </div>
      <div class="borderStrokes">
         <div></div>
      </div>
   </main>
   <?php
      require_once('partials/footer.php');
   ?>
</body>
<script src="scripts/script.js"></script>

</html>