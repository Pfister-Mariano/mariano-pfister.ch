async function getArticles() {
    try {
        const response = await fetch(
            `http://127.0.0.1:5500/content/blog.json`
        );
        const data = await response.json();
        
        const blogWrapper = document.querySelector("#blog .blogArticles")

        data.articles.forEach(article => {
            blogWrapper.innerHTML += `
                <article>
                  <picture class="teaserImg imgRatio-4-3">
                     <source srcset="content/images/webp-50/${article.image}.webp" type="image/webp" media="(max-width: 600px)" >
                     <source srcset="content/images/webp-100/${article.image}.webp" type="image/webp" media="(min-width: 601px)">
                     <img src="content/images/original/${article.image}.jpg" alt="${article.title}">
                  </picture>
                  <div class="teaserText">
                     <h3>${article.title}</h3>
                     <p>${article.text}</p>
                     <a aria-label="${article.title}" class="button" href="${article.link}">${article.linkText}</a>
                  </div>
               </article>
            `
        });

    } catch (error) {
        console.error(error);
    }
}

getArticles();