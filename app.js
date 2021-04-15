const project = [
    {
        img: 'img/projects/restaurant page.jpg',
        name: 'The Burger',
        description: 
            `The burger is a restaurant landing page made with HTML Sass and Javascript.
            I built this website to showcase my abilities with Sass and manipulating data with Javascript.`,
        github: 'https://github.com/migueldeleon012/the-burger',
        website: 'https://theburger.netlify.app/'
    },
    {
        img: 'img/projects/bootstrap page.jpg',
        name: 'Lorem',
        description: 
            `Lorem is a simple landing page made mainly with Bootstrap5 and PHP. This project
            was built to showcase my abilities with bootstrap and it has a functional contact form`,
        github: 'https://github.com/migueldeleon012/Bootstrap-website.',
        website: 'https://buildwithlorem.netlify.app/'
    },
    {
        img: 'img/projects/guitar page.jpg',
        name: 'Guitar Mastery',
        description:    
            `Guitar Mastery is the first page that i've built. This is made with HTML, CSS, Javascript, and PHP.
            This project is focused mainly to its design. It has a functional contact form.`,
        github: 'https://github.com/migueldeleon012/guitar-website',
        website: 'https://guitarmastery.netlify.app'
    }
]

$(document).ready(()=>{
    // console.log('loaded')
    const query = window.matchMedia('(max-width: 770px)')
    const ul= $('.items')
    const li = $('.item')

    //mobile
    if(query.matches){        
        //mobile navbar
        ul.removeClass('d-flex')
        ul.slideUp()
        $('.hamburger-menu').on('click', ()=>{  
            ul.css('visibility','visible')
            ul.slideToggle(300)
        })
        
        li.on('click',()=>{
            ul.slideUp(300)
        })   
    }
    
    else{

        //desktop navbar
        $(window).scroll(function(){
            let scrolled = window.scrollY > 0;
            $('.navbar-custom').toggleClass('nav-scrolled', scrolled)
        })
    }



    //smooth scroll
    li.on('click', function(e) {
        e.preventDefault();
        $('body,html').animate({
          scrollTop: $(this.hash).offset().top - 30
        }, 1000 );
    });


    //change active state
    $(window).scroll(function() {
        let scrollbarLocation = $(this).scrollTop();
        li.each(function() {
            let sectionOffset = $(this.hash).offset().top-300
            if ( sectionOffset <= scrollbarLocation ) {
                li.removeClass('active');
                $(this).closest(li).addClass('active');
            }
        })
    })

    //load the projects
    for(let i = 0; i<project.length; i++){
        const projectWrapper = $('.project-wrapper')
        const projects = project[i]

        let projectDiv = document.createElement('div');
        projectDiv.className = 'top col-md-4 col-sm-6'
        projectDiv.innerHTML = `
            <div class="card-custom">
                <img src="${projects.img}" class="card-img-top" alt="${projects.name}">
                <div class="card-body">
                <h5 class="display-6 fs-3 fw-normal">${projects.name}</h5>
                <p class="card-text mb-3">${projects.description}</p>
                <div class="project-links d-flex justify-content-evenly align-items-center">
                    <a href="${projects.github}" target="blank"><button class="github"><i class="fab fa-github"></i> View Code</button></a>
                    <a href="${projects.website}" target="blank"><button class="website"><i class="fas fa-globe-europe"></i> View Website</button></a>
                </div>
            <div>
        `
        projectWrapper.append(projectDiv)
    }
})


//preloader
$(window).on('load', function(){
    const loader = $('#loader')
    loader.addClass('fade-out')
})
