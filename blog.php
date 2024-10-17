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
            <h1>Meine Erfahrungen und Projekte</h1>
            <p>Hier finden Sie eine Auswahl meiner Webentwicklungsprojekte, die sowohl reale Anwendungen als auch Lernprojekte umfassen. Jedes Projekt bietet mir die Möglichkeit, Neues auszuprobieren und meine Fähigkeiten mit aktuellen Technologien und Best Practices weiterzuentwickeln. Diese Projekte spiegeln meine Leidenschaft für kontinuierliches Lernen und Experimentieren wider.</p>
         </div>
      </section>

      <section id="blog" class="teaserTopDown backgroundLight active">
         <div class="wrapper wrapperSmall">
            <div class="teaserTopDownGrid blogArticles">
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

</html>