<!DOCTYPE html>
<html lang="de">

<head>
   <title>Fähigkeiten - Portfolio Mariano</title>
   <meta name="description" content="Erfahren Sie mehr über die beeindruckende Bandbreite an Fähigkeiten und Kompetenzen von Mariano Pfister in Design, Frontend- und Backend-Entwicklung. Entdecken Sie sein Fachwissen und seine Leidenschaft für die Schaffung einzigartiger Web-Erfahrungen.">
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
            <h1>Meine Fähigkeiten und Erfahrungen</h1>
            <p>Trete ein in meinen Bereich der beruflichen Fähigkeiten als Mediamatiker. Die Ausbildung in einer
               Web-Agentur haben meine Schwerpunkte auf die Frontend-Entwicklung gelegt. Der tägliche Umgang mit den
               Adobe-Softwares wie Photoshop und Illustrator ermöglicht es mir, nicht nur technisch versierte, sondern
               auch ästhetisch Lösungen zu schaffen. Hier erfährst du mehr über meinen beruflichen Werdegang und meine
               Passion für innovative Web-Entwicklung und kreatives Design.</p>
            <div class="introButtons">
               <a aria-label="Weiter zu der Unterseite über mich" href="ueber-mich.php" class="button">Mehr Über mich</a>
               <a aria-label="Runterscrollen zu den Fakten über Mariano" href="#facts" class="button scrolldownIcon">Fakten zu mir</a>
               <a aria-label="Runterscrollen zu den Erfahrungen" href="#erfahrungen" class="button scrolldownIcon">Erfahrungen</a>
            </div>
         </div>
      </section>

      <section id="abilities" class="abilityList backgroundLight">
         <div class="wrapper">
            <h2>Meine Fähigkeiten</h2>
            <div class="abilityWrapper">
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/photoshop.png" alt="Logo von Adobe Photoshop">
                     </div>
                  </div>
                  <h6>Photoshop</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/indesign.png" alt="Logo von Adobe InDesign">
                     </div>
                  </div>
                  <h6>InDesign</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/html.png" alt="Logo von HTML">
                     </div>
                  </div>
                  <h6>HTML</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/css.png" alt="Logo von CSS">
                     </div>
                  </div>
                  <h6>CSS</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/js.png" alt="Logo von Jacascript">
                     </div>
                  </div>
                  <h6>JS</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/craft.svg" alt="Logo vom CMS-System Craft">
                     </div>
                  </div>
                  <h6>Craft CMS</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/illustrator.png" alt="Logo von Adobe Illustrator">
                     </div>
                  </div>
                  <h6>Illustrator</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/lightroom.png" alt="Logo von Adobe Lightroom">
                     </div>
                  </div>
                  <h6>Lightroom</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/twig.png" alt="Logo von der template engine twig ">
                     </div>
                  </div>
                  <h6>template engine Twig</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="content/images/original/logos-faehigkeiten/premier-pro.png" alt="Logo von Adobe Premier Pro">
                     </div>
                  </div>
                  <h6>Premier Pro</h6>
               </article>
            </div>
         </div>
      </section>

      <section id="facts" class="factsTeaser backgroundDark">
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
                  <source srcset="content/images/webp-50/portfolio-mariano-facts-1.webp" type="image/webp" media="(max-width: 600px)" >
                  <source srcset="content/images/webp-100/portfolio-mariano-facts-1.webp" type="image/webp" media="(min-width: 601px)">
                  <img src="content/images/original/portfolio-mariano-facts-1.jpg" alt="Mariano der am Laptop arbeitet">
               </picture>
            </article>
         </div>
      </section>

      <section id="referenzen" class="highlightBoxes backgroundLight">
         <div class="wrapper">
            <h2>Meine Referenzpersonen</h2>
            <div class="highlightBoxGrid">
               <div class="box">
                  <h4>Michael Trachsel</h4>
                  <p>Ausbildner während meiner Lehre als Mediamatiker.</p>
                  <p>HOMM interactive GmbH<br>
                     Mitglied Geschäftsleitung<br>
                     <a aria-label="Per Telefon anrufen" href="tel:04111122233">041 111 222 33</a><br>
                     <a aria-label="Eine Mail schreiben an Michael Trachsel" href="mailto:max@musterman.ch">max@musterman.ch</a>
                  </p>
                  <a aria-label="Eine Mail schreiben an Michael Trachsel" href="mailto:max@musterman.ch" class="button mailIcon">Kontaktieren</a>
               </div>
               <div class="box">
                  <h4>Markus Ineichen</h4>
                  <p>Projekt Coach während meiner Zeit bei der Projektklasse.</p>
                  <p>Projektklasse AG<br>
                     Schulleiter<br>
                     <a aria-label="Weiter zu der Unterseite über mich" href="tel:04111122233">041 111 222 33</a><br>
                     <a aria-label="Eine Mail schreiben an Markus Ineichen" href="mailto:max@musterman.ch">max@musterman.ch</a>
                  </p>
                  <a aria-label="Eine Mail schreiben an Markus Ineichen" href="mailto:max@musterman.ch" class="button mailIcon">Kontaktieren</a>
               </div>

            </div>
         </div>
      </section>

      <section id="erfahrungen" class="teaserLeftRight backgroundDark">
         <div class="wrapper wrapperSmall">
            <article>
               <picture class="teaserImg imgRatio-4-3">
                  <source srcset="content/images/webp-50/portfolio-mariano-entwicklung.webp" type="image/webp" media="(max-width: 600px)" >
                  <source srcset="content/images/webp-100/portfolio-mariano-entwicklung.webp" type="image/webp" media="(min-width: 601px)">
                  <img src="content/images/original/portfolio-mariano-entwicklung.jpg" alt="Bild von HTML code in Visual Studio Code">
               </picture>
               <div class="teaserText">
                  <h3>Entwickelte und betreute Projekte bei HOMM Interactive</h3>
                  <p>Bei HOMM Interactive war ich in der Entwicklung von neuen Website-Projekten tätig.</p>
               </div>
            </article>
         </div>
      </section>

      <div class="formModalTrigger">
         <?xml version="1.0" encoding="UTF-8"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.81 66.72">
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