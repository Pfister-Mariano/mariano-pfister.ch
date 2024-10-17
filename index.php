<!DOCTYPE html>
<html lang="de">

<head>
   <title>Startseite - Portfolio Mariano</title>
   <meta name="description" content="Erleben Sie die Kunst des digitalen Handwerks mit Mariano Pfister: Wo Design auf Frontend- und Backend-Entwicklung trifft. Erleben Sie die Synergie von Ästhetik und Funktionalität in jedem Projekt, von eleganten UI-Designs bis hin zu leistungsstarken Backend-Lösungen für eine nahtlose Webpräsenz">

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
                        <h1>Portfolio<br>
                           Mariano Pfister</h1>
                        <p>Selbstbewusst und mit einem fundierten Hintergrund als gelernter Mediamatiker und einer der
                           Begeisterung für Webseiten.</p>
                     </span>
                  </div>
                  <div class="heroImage">
                     <picture>
                        <source srcset="assets/content/images/webp-100/portfolio-mariano-portrait.webp" type="image/webp">
                        <img src="assets/content/images/original/portfolio-mariano-portrait.png"
                           alt="Seitliches Portrait von Mariano Pfister" height="900px">
                     </picture>
                  </div>
               </article>
            </div>
         </section>
      </header>
      <section id="teaser" class="teaserLeftRight backgroundLight">
         <div class="wrapper wrapperSmall">
            <article>
               <div class="teaserImage imageSlider">
                  <div class="sliderControls">
                     <div class="sliderShadow"></div>
                     <div class="sliderPagination">
<!--                         <span class="active"></span>
                        <span></span>
                        <span></span>
                        <span></span> -->
                     </div>
                     <div class="sliderButtons">
                        <div class="prevSlide">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path
                                 d="M2.7 256l22.6 22.6 192 192L240 493.3 285.3 448l-22.6-22.6L93.3 256 262.6 86.6 285.3 64 240 18.7 217.4 41.4l-192 192L2.7 256z" />
                           </svg>
                        </div>
                        <div class="pauseSlide">
                           <svg class="pauseIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path d="M128 64H0V448H128V64zm192 0H192V448H320V64z" />
                           </svg>
                           <svg class="playIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                              <path d="M384 256L0 32V480L384 256z" />
                           </svg>
                        </div>
                        <div class="nextSlide">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path
                                 d="M317.3 256l-22.6 22.6-192 192L80 493.3 34.7 448l22.6-22.6L226.7 256 57.4 86.6 34.7 64 80 18.7l22.6 22.6 192 192L317.3 256z" />
                           </svg>
                        </div>
                     </div>
                  </div>

                  <div class="imageSlides imgRatio-4-3">
                     <picture title="1" class="active">
                        <source srcset="assets/content/images/webp-50/portfolio-mariano-about.webp" type="image/webp"
                           media="(max-width: 600px)">
                        <source srcset="assets/content/images/webp-100/portfolio-mariano-about.webp" type="image/webp"
                           media="(min-width: 601px)">
                        <img src="assets/content/images/original/portfolio-mariano-about.jpg"
                           alt="Portrait von Mariano vor fahrenden Autos">
                     </picture>
                     <picture title="2" class="">
                        <img src="assets/content/images/original/portfolio-mariano-cta-1.jpg">
                     </picture>
                     <picture title="3" class="">
                        <img src="assets/content/images/original/portfolio-mariano-cta-2.jpg">
                     </picture>
                     <picture title="4" class="">
                        <img src="assets/content/images/original/portfolio-mariano-facts-1.jpg">
                     </picture>
                  </div>

               </div>

               <div class="teaserText">
                  <h3>Über Mich</h3>
                  <p>Lesen Sie mehr über mich, meine Leidenschaften und Hobbys. Machen Sie sich ein besseres Bild von
                     mir und was mich auszeichnet als Person.</p>
                  <a class="button" aria-label="Weiter zu der Unterseite über mich" href="ueber-mich.php">Mehr
                     Erfahren</a>
               </div>
            </article>
            <article>
               <div class="teaserText">
                  <h3>Meine Fähigkeiten</h3>
                  <p>Erfahren Sie mehr über mein Kenntnissen und Erfahrungen im Umgang mit Software und Webseiten. Hier
                     finden Sie einen Überblick von all meinen Fähigkeiten</p>
                  <a class="button" aria-label="Weiter zu der Unterseite Fähigkeiten" href="faehigkeiten.php">Mehr
                     erfahren</a>
               </div>
               <div class="teaserImage">
                  <picture class="imgRatio-4-3">
                     <source srcset="assets/content/images/webp-50/portfolio-mariano-faehigkeiten.webp" type="image/webp"
                        media="(max-width: 600px)">
                     <source srcset="assets/content/images/webp-100/portfolio-mariano-faehigkeiten.webp" type="image/webp"
                        media="(min-width: 601px)">
                     <img src="assets/content/images/original/portfolio-mariano-faehigkeiten.jpg"
                        alt="Bild von Laptop mit fokus auf Adobe programmen">
                  </picture>
               </div>
            </article>
         </div>
      </section>
      <section id="abilities" class="abilityList backgroundDark">
         <div class="wrapper">
            <h2>Meine Fähigkeiten und Erfahrungen</h2>
            <div class="abilityWrapper">
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/photoshop.png"
                           alt="Logo von Adobe Photoshop">
                     </div>
                  </div>
                  <h6>Photoshop</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/indesign.png"
                           alt="Logo von Adobe InDesign">
                     </div>
                  </div>
                  <h6>InDesign</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/html.png" alt="Logo von HTML">
                     </div>
                  </div>
                  <h6>HTML</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/css.png" alt="Logo von CSS">
                     </div>
                  </div>
                  <h6>CSS</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/js.png" alt="Logo von Jacascript">
                     </div>
                  </div>
                  <h6>JS</h6>
               </article>
               <article>
                  <div class="abilityOuterStroke">
                     <div class="abilityInnerStroke imgRatio-1-1">
                        <img src="assets/content/images/original/logos-faehigkeiten/craft.svg" alt="Logo vom CMS-System Craft">
                     </div>
                  </div>
                  <h6>Craft CMS</h6>
               </article>
            </div>
            <a class="button" aria-label="Weiter zu der Unterseite Fähigkeiten" href="faehigkeiten.php#abilities">alle
               fähigkeiten</a>
         </div>
      </section>
      <section id="ctaTeaser" class="ctaTeaser backgroundLight">
         <div class="wrapper">
            <article>
               <picture class="ctaImg imgRatio-3-4">
                  <source srcset="assets/content/images/webp-50/portfolio-mariano-cta-1.webp" type="image/webp"
                     media="(max-width: 600px)">
                  <source srcset="assets/content/images/webp-100/portfolio-mariano-cta-1.webp" type="image/webp"
                     media="(min-width: 601px)">
                  <img src="assets/content/images/original/portfolio-mariano-cta-1.jpg"
                     alt="Foto von Mariano an einem Holztisch">
               </picture>
               <div class="ctaText">
                  <h3>Konnte ich Ihr Interesse wecke?</h3>
                  <p>Bestehen noch Fragen oder ist etwas unklar? Rufen Sie mich jetzt an oder Schreiben sie mir eine
                     Mail unter: <a aria-label="Jetzt eine Mail schreiben"
                        href="mailto:max@musterman.ch">max@musterman.ch</a></p>
                  <a aria-label="Jetzt eine Mail schreiben" href="mailto:max@musterman.ch" class="button mailIcon">Jetzt
                     Schreiben</a>
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
         <div>

         </div>
      </div>
   </main>
   <?php
      require_once('partials/footer.php');
   ?>

</body>

</html>