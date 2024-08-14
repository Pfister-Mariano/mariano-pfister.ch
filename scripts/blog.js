async function getArticles() {
    try {
        const response = await fetch(
            `content/blog.json`
        );
        const data = await response.json();
        
        const blogWrapper = document.querySelector("#blog .blogArticles")

        data.articles.forEach(article => {
            blogWrapper.innerHTML += `
                <article>
                  <picture class="teaserImg imgRatio-4-3">
                     <source srcset="content/images/webp-50/${article.image}.webp" type="image/webp" media="(max-width: 600px)" >
                     <source srcset="content/images/webp-100/${article.image}.webp" type="image/webp" media="(min-width: 601px)">
                     <img src="content/images/original/${article.image}.jpg" alt="${article.imageAlt}">
                  </picture>
                  <div class="teaserText">
                     <h4>${article.title}</h4>
                     <p>${article.text}</p>
                     <a aria-label="${article.title}" class="button externalLinkIcon" href="${article.link}" target="_blank">${article.linkText}</a>
                  </div>
               </article>
            `
        });

    } catch (error) {
        console.error(error);
    }
}

getArticles();