gsap.registerPlugin(ScrollTrigger)

gsap.from(".formModalTrigger", {
    x: 200,
    autoAlpha: 0,
    duration: 1,
})

gsap.from(".heroText h1", {
    x: -200,
    autoAlpha: 0,
    duration: 1,
    delay: 0.4
})
gsap.from(".heroText p", {
    x: -200,
    autoAlpha: 0,
    duration: 1,
    delay: .8
})


/****************************/

const teaserLeftRight = gsap.timeline({
    scrollTrigger: {
        trigger: '.teaserLeftRight article',
        scrub: 1,
        start: 'top 80%',
        end: 'top 10%'
    }
})

teaserLeftRight.fromTo('.teaserLeftRight article', {
    y: -50,
    autoAlpha: 0,
}, {
    y: 0,
    autoAlpha: 1,
    stagger: 1,
    ease: 'ease.inOut'
})

/****************************/

const teaserTopDown = gsap.timeline({
    scrollTrigger: {
        trigger: '.teaserTopDown article',
        scrub: 1,
        start: 'top 80%',
        end: 'top 10%'
    }
})

teaserTopDown.fromTo('.teaserTopDown article', {
    y: -50,
    autoAlpha: 0,
}, {
    y: 0,
    autoAlpha: 1,
    stagger: 1,
    ease: 'ease.inOut'
})



/****************************/

const abilities = gsap.timeline({
    scrollTrigger: {
        trigger: '.abilityList article',
    }
})

abilities.fromTo('.abilityList article', {
    y: -50,
    autoAlpha: 0,
}, {
    y: 0,
    autoAlpha: 1,
    stagger: {
        amount: 1,
        grid: 'auto',
        from: 'left'
      },
    ease: 'ease.inOut',
})


/****************************/

const cta = gsap.timeline({
    scrollTrigger: {
        trigger: '.ctaTeaser article',
        start: 'top 80%',
    },
    markers: {
        startColor: 'green',
        endColor: 'red'
    },
})

cta.fromTo('.ctaTeaser .ctaImg', {
    x: -50,
    autoAlpha: 0,
}, {
    x: 0,
    autoAlpha: 1,
    ease: 'ease.inOut',
})

cta.fromTo('.ctaTeaser .ctaText', {
    x: 50,
    autoAlpha: 0,
}, {
    x: 0,
    autoAlpha: 1,
    ease: 'ease.inOut',
})

/****************************/

const facts = gsap.timeline({
    scrollTrigger: {
        trigger: '.factsTeaser article',
    }
})

facts.fromTo('.factsTeaser .factsText span', {
    y: -50,
    autoAlpha: 0,
}, {
    y: 0,
    autoAlpha: 1,
    stagger: {
        amount: 1,
        grid: 'auto',
        from: 'left'
      },
    ease: 'ease.inOut',
})