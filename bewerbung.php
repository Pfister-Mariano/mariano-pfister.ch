<!DOCTYPE html>
<html lang="de">

<head>
   <title>Bewerbung - Portfolio Mariano</title>
   <meta name="description" content="Entdecken Sie Mariano Pfisters Bewerbungsschreiben, in dem er seine Leidenschaft für Design, seine technischen Fähigkeiten und seine Motivation zur Zusammenarbeit mit Ihrem Unternehmen unterstreicht. Erfahren Sie mehr über seine Erfahrungen und seine Bereitschaft, einen Mehrwert zu schaffen.">
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
      <section id="intro" class="textIntro introSideButtons backgroundDark">
         <div class="wrapper wrapperSmall">
            <h1>Wieso ich bei HOMM Interactive Arbeiten möchte</h1>
            <p>
               Ich bin Mariano, ein leidenschaftlicher Full-Stack Entwickler mit einem Auge für kreative Lösungen und einem Herz für innovative Technologien. Durch meine Erfahrung und meine Fähigkeiten in der Softwareentwicklung habe ich bereits zahlreiche spannende Projekte zum Leben erweckt.<br>
               <br>
               Als Full-Stack Entwickler beherrsche ich nicht nur die Kunst des Frontend-Designs, sondern auch die komplexe Logik des Backends. Was mich antreibt, sind nicht nur die Nullen und Einsen des Codes, sondern auch die Möglichkeiten, die sich durch Technologie eröffnen. Bei der Gestaltung und Entwicklung von Anwendungen strebe ich stets nach Innovation und Benutzerfreundlichkeit. Meine Projekte zeichnen sich durch sauberen Code, intuitive Benutzeroberflächen und eine nahtlose Benutzererfahrung aus.<br>
               <br>
               Eines meiner Highlights war die Arbeit bei HOMM Interactive, einem führenden Unternehmen für digitale Innovation. Dort konnte ich meine Fähigkeiten unter Beweis stellen und an Projekten arbeiten, die die Grenzen des Möglichen erweitern. Von der Konzeption bis zur Umsetzung war ich Teil eines engagierten Teams, das gemeinsam an der Zukunft des digitalen Erlebnisses arbeitet.<br>
               <br>
               Auf meiner Portfolio-Webseite finden Sie einen Überblick über meine bisherigen Projekte und erfahren mehr über meine Fähigkeiten und Erfahrungen. Wenn Sie auf der Suche nach einem Full-Stack Entwickler sind, der Ihre Vision zum Leben erwecken kann, dann bin ich genau der richtige Partner für Sie.<br>
               <br>
               Lassen Sie uns zusammen etwas Großartiges schaffen!
            </p>
            <div class="introButtons">
               <a aria-label="Runterscrollen zu den Diplomen" href="#diplome" class="button scrolldownIcon">Meine Hobbys</a>
               <a aria-label="Weiter zu der Unterseite Fähigkeiten" href="faehigkeiten.php" class="button">Fähigkeiten</a>
            </div>
         </div>
      </section>

      <section id="diplome" class="highlightBoxes backgroundLight">
         <div class="wrapper">
            <h2>Ausbildung und Diplome</h2>
            <div class="highlightBoxGrid">
               <div class="box">
                  <h4>Gelernter Mediamatiker EFZ</h4>
                  <p>Ich bin gelernter Mediamatiker EFZ und konnte meine Lehre bei der Firma HOMM Interactive in Luzern abschliessen. Dies ist eine kleinere Agentur, mit einem Full-Service-Gedanken und dem Schwerpunkt auf Webseiten Design und Entwicklung mit dem "Craft" CMS.</p>
                  <a aria-label="Die Webseite homm.ch öffnen" href="https://www.homm.ch" target="_blank" rel="noopener noreferrer" class="button externalLinkIcon">homm.ch</a>
               </div>
               <div class="box">
                  <h4>Englisch First - Niveau B2</h4>
                  <p>Englisch wird immer wichtiger, besonders in technischen Berufen und der Entwicklung ist gute Englischkenntnisse eine Voraussetzung. Deshalb habe ich mich am Ende der Lehre, einen Englisch-Kurs für das Niveau B2 erfolgreich abgeschlossen.</p>
               </div>
            </div>
         </div>
      </section>

      <section id="ctaTeaser" class="ctaTeaser backgroundDark">
         <div class="wrapper">
            <article>
               <picture class="ctaImg imgRatio-3-4">
                  <source srcset="assets/content/images/webp-50/portfolio-mariano-faehigkeiten.webp" type="image/webp" media="(max-width: 600px)" >
                  <source srcset="assets/content/images/webp-100/portfolio-mariano-cta-1.webp" type="image/webp" media="(min-width: 601px)">
                  <img src="assets/content/images/original/portfolio-mariano-cta-1.jpg" alt="Foto von Mariano an einem Holztisch">
               </picture>
               <div class="ctaText">
                  <h3>Konnte ich Ihr Interesse wecke?</h3>
                  <p>Bestehen noch Fragen oder ist etwas unklar? Rufen Sie mich jetzt an oder Schreiben sie mir eine
                     Mail unter: <a aria-label="Jetzt eine Mail schreiben" href="mailto:max@musterman.ch">max@musterman.ch</a></p>
                  <a aria-label="Jetzt eine Mail schreiben" href="mailto:max@musterman.ch" class="button mailIcon">Jetzt Schreiben</a>
               </div>
            </article>
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

</html>