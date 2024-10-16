<!DOCTYPE html>
<html lang="de">

<head>
   <title>Über Mich - Portfolio Mariano</title>
   <meta name="description" content="Tauchen Sie ein in die Welt von Mariano Pfister und entdecken Sie die Geschichte eines leidenschaftlichen Designers und Entwicklers. Erfahren Sie mehr über seine Fachkenntnisse, Erfahrungen und die Leidenschaft, die ihn antreibt, herausragende Webseiten zu gestalten.">
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
      <section id="intro" class="textIntro backgroundDark">
         <div class="wrapper wrapperSmall">
            <h1>Fakten über mich <br> und meine Hobbys</h1>
            <p>Hier findest du einen Einblick in meine wichtigsten Hobbys, die mein Leben bunter gestalten.Vom
               fesselnden Gaming, über die kreativen Abenteuer als Geschichtenerzähler in Dungeons and Dragons, bis hin
               zu den schneebedeckten Pisten, die ich seit meiner Kindheit hinuntergleite. Dabei das erstellen der
               Miniatur-Figuren um von sich von allem zu erholen. Dies sind meine liebsten Hobbys und
               Freizeitbeschäftigungen. Die Freude am Entdecken, Erschaffen und Erleben ist der Kern was alle meine
               Hobbys verbindet.</p>
            <div class="introButtons">
               <a aria-label="Runterscrollen zu den Hobbys" href="#hobbys" class="button scrolldownIcon">Meine Hobbys</a>
               <a aria-label="Weiter zu der Unterseite Fähigkeiten" href="faehigkeiten.php" class="button">Fähigkeiten</a>
            </div>
         </div>
      </section>

      <section id="hobbys" class="hobbySection backgroundLight">
         <div class="wrapper wrapperSmall">
            <div class="hobbyRows">
               <article>
                  <div>
                     <picture class="hobbyImg imgRatio-4-3">
                        <source srcset="content/images/webp-50/portfolio-mariano-hobby-dnd.webp" type="image/webp" media="(max-width: 600px)" >
                        <source srcset="content/images/webp-100/portfolio-mariano-hobby-dnd.webp" type="image/webp" media="(min-width: 601px)">
                        <img src="content/images/original/portfolio-mariano-hobby-dnd.jpg" alt="Bild von einem Krug und einer Schriftrolle mit dem Dungeons and Dragons Logo">
                     </picture>
                     <div class="hobbyText">
                        <h5>Geschichten-Ersteller in Dungeons and Dragons</h5>
                        <p>Dungeons and Dragons ist für mich mehr als ein Spiel. Als Dungeon Master lenke ich nicht nur die Geschichte, sondern erschaffe ganze Welten, die durch die Kreativität der Spieler zum Leben erweckt werden.</p>
                     </div>
                  </div>
               </article>
               <article>
                  <div>
                     <picture class="hobbyImg imgRatio-4-3">
                        <source srcset="content/images/webp-50/portfolio-mariano-hobby-ski.webp" type="image/webp" media="(max-width: 600px)" >
                        <source srcset="content/images/webp-100/portfolio-mariano-hobby-ski.webp" type="image/webp" media="(min-width: 601px)">
                        <img src="content/images/original/portfolio-mariano-hobby-ski.jpg" alt="Bild einer reflektierenden Ski-Brille">
                     </picture>
                     <div class="hobbyText">
                        <h5>Ski-Fahrer seit der Kindheit</h5>
                        <p>Ski fahren begleitet mich seit meiner Kindheit und hat sich zu einer lebenslangen Leidenschaft entwickelt. Dabei bestaune ich immer wieder von neuem die Schönheit der Natur</p>
                     </div>
                  </div>
               </article>
               <article>
                  <div>
                     <picture class="hobbyImg imgRatio-4-3">
                        <source srcset="content/images/webp-50/portfolio-mariano-hobby-gaming.webp" type="image/webp" media="(max-width: 600px)" >
                        <source srcset="content/images/webp-100/portfolio-mariano-hobby-gaming.webp" type="image/webp" media="(min-width: 601px)">
                        <img src="content/images/original/portfolio-mariano-hobby-gaming.jpg" alt="Bild einer Logitech Maus mit farbiger beläuchtung">
                     </picture>
                     <div class="hobbyText">
                        <h5>Digitaler Entdecker und Gamer</h5>
                        <p>Als passionierter Gamer bin ich ständig auf der Suche nach neuen digitalen Welten, epische Rollenspiele und Herausforderungen. Das eintauchen und entdecken in unbekannte Welten ist was mich fesselt.</p>
                     </div>
                  </div>
               </article>
               <article>
                  <div>
                     <picture class="hobbyImg imgRatio-4-3">
                        <source srcset="content/images/webp-50/portfolio-mariano-hobby-warhammer.webp" type="image/webp" media="(max-width: 600px)" >
                        <source srcset="content/images/webp-100/portfolio-mariano-hobby-warhammer.webp" type="image/webp" media="(min-width: 601px)">
                        <img src="content/images/original/portfolio-mariano-hobby-warhammer.jpg" alt="Bild von mehreren Warhammer Modelfiguren">
                     </picture>
                     <div class="hobbyText">
                        <h5>Figuren zum Leben erwecken</h5>
                        <p>Das Erschaffen von Warhammer-Figuren ist meine Art abzuschalten und einen Moment zu entspannen. Es gibt mir einen Ort, an dem ich besonders in stressigen Situationen runterfahren kann.</p>
                     </div>
                  </div>
               </article>
               <article>
                  <div>
                     <picture class="hobbyImg imgRatio-4-3">
                        <source srcset="content/images/webp-50/portfolio-mariano-hobby-entdecken.webp" type="image/webp" media="(max-width: 600px)" >
                        <source srcset="content/images/webp-100/portfolio-mariano-hobby-entdecken.webp" type="image/webp" media="(min-width: 601px)">
                        <img src="content/images/original/portfolio-mariano-hobby-entdecken.jpg" alt="Bild von einer alten Kirche in Rom">
                     </picture>
                     <div class="hobbyText">
                        <h5>Entdeckungen und gemeinsame Erfahrung</h5>
                        <p>Freundschaft und die Energie von Aktivitäten sind für mich ein wichtiger Teil. Ob beim gemeinsamen Essen oder einfachem Zusammensein – in diesen Momenten finde ich Inspiration und Gelassenheit.</p>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </section>

      <section id="factsTeaser" class="factsTeaser backgroundDark">
         <div class="wrapper">
            <article>
               <div class="factsText">
                  <span>
                     <h6>Tüftler und immer neue Tools am probieren und entdecken</h6>
                  </span>
                  <span>
                     <h6>Grosses Interesse am erstellen von 3D Animationen </h6>
                  </span>
                  <span>
                     <h6>Seit der Sekundarstufe im Umgang mit den Adobe Programmen</h6>
                  </span>
                  <span>
                     <h6>Grosses Interesse an Web-Technologien</h6>
                  </span>
               </div>
               <picture class="factsImg imgRatio-3-4">
                  <source srcset="content/images/webp-50/portfolio-mariano-facts-2.webp" type="image/webp" media="(max-width: 600px)" >
                  <source srcset="content/images/webp-100/portfolio-mariano-facts-2.webp" type="image/webp" media="(min-width: 601px)">
                  <img src="content/images/original/portfolio-mariano-facts-2.jpg" alt="Mariano der am Laptop arbeitet">
               </picture>
            </article>
         </div>
      </section>

      <section id="ctaTeaser" class="ctaTeaser backgroundLight">
         <div class="wrapper">
            <article>
               <picture class="ctaImg imgRatio-3-4">
                  <source srcset="content/images/webp-50/portfolio-mariano-cta-2.webp" type="image/webp" media="(max-width: 600px)" >
                  <source srcset="content/images/webp-100/portfolio-mariano-cta-2.webp" type="image/webp" media="(min-width: 601px)">
                  <img src="content/images/original/portfolio-mariano-cta-2.jpg" alt="Foto von Mariano an einem Holztisch">
               </picture>
               <div class="ctaText">
                  <h3>Konnte ich Ihr Interesse wecke?</h3>
                  <p>Bestehen noch Fragen oder ist etwas unklar? Rufen Sie mich jetzt an oder Schreiben sie mir eine
                     Mail unter: <a aria-label="Jetzt eine Mail schreiben" href="mailto:max@musterman.ch">max@musterman.ch</a></p>
                  <a aria-label="Jetzt per Telefon anrufen" href="mailto:max@musterman.ch" class="button mailIcon">Jetzt Schreiben</a>
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