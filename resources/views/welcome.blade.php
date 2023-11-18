
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookiNow</title>
    <link rel="shortcut icon" href="https://tr.rbxcdn.com/7ecab4aac37bee92a4a05bb910b2b457/250/250/Decal/Png" type="image/x-icon">
    

    <meta name="theme-color" content="#2091F9">

  
</head>

<body>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

:root {
    --padding-container: 100px 0;
    --color-title: #001A49;
}

body {
    font-family: 'Poppins', sans-serif;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
    padding: var(--padding-container);
}

.hero {
    width: 100%;
    height: 100vh;
    min-height: 600px;
    max-height: 800px;
    position: relative;
    display: grid;
    grid-template-rows: 100px 1fr;
    color: #fff;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('https://cdn.wallpapersafari.com/9/71/6acbpn.jpg');
    background-size: cover;
    z-index: -1;
}


/* Nav */

.nav {
    --padding-container: 0;
    height: 100%;
    display: flex;
    align-items: center;
}

.nav__title {
    font-weight: 300;
}

.nav__link {
    margin-left: auto;
    padding: 0;
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: max-content;
    gap: 2em;
}

.nav__items {
    list-style: none;
}

.nav__links {
    color: #fff;
    text-decoration: none;
}

.nav__menu {
    margin-left: auto;
    cursor: pointer;
    display: none;
}

.nav__img {
    display: block;
    width: 30px;
}


.nav__close {
    display: var(--show, none);
}


/* Hero container */

.hero__container {
    max-width: 800px;
    --padding-container: 0;
    display: grid;
    grid-auto-rows: max-content;
    align-content: center;
    gap: 1em;
    padding-bottom: 100px;
    text-align: center;
}

.hero__title {
    font-size: 3rem;
}

.hero__paragraph {
    margin-bottom: 20px;
}

.cta {
    display: inline-block;
    background-color: #2091F9;
    justify-self: center;
    color: #fff;
    text-decoration: none;
    padding: 13px 30px;
    border-radius: 32px;
}

/* About */

.about {
    text-align: center;
}

.subtitle {
    color: var(--color-title);
    font-size: 2rem;
    margin-bottom: 25px;
}


.about__paragraph {
    line-height: 1.7;
}

.about__main {
    padding-top: 80px;
    display: grid;
    width: 90%;
    margin: 0 auto;
    gap: 1em;
    overflow: hidden;
    grid-template-columns: repeat(auto-fit, minmax(260px, auto));
}


.about__icons {
    display: grid;
    gap: 1em;
    justify-items: center;
    width: 260px;
    overflow: hidden;
    margin: 0 auto;
}

.about__icon {
    width: 60px;
    height: 40px;
}

/* Knowledge */

.knowledge {
    background-color: #e5e5f7;
    background-image: radial-gradient(#444cf7 0.5px, transparent 0.5px), radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
    background-size: 20px 20px;
    background-position: 0 0, 10px 10px;
    overflow: hidden;
}

.knowledge__container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1em;
    align-items: center;
}

.knowledge__picture{
    max-width: 500px;
}

.knowledge__paragraph{
    line-height: 1.7;
    margin-bottom: 15px;
}

.knowledge__img{
    width: 100%;
    display: block;
}

/* price */

.price{
    text-align: center;
}

.price__table{
    padding-top: 60px;
    display: flex;
    flex-wrap: wrap;
    gap: 2.5em;
    justify-content: space-evenly;
    align-items: center;
}

.price__element{
    background-color: #e5e5f7;
    text-align: center;
    border-radius: 10px;
    width: 330px;
    padding: 40px;
    --color-plan: #696871;
    --color-price: #1D293F;
    --bg-cta: #fff;
    --color-cta: #5454D4;
    --color-items: #696871;
}

.price__element--best{
    width: 370px;
    padding: 60px 40px;
    background-color: #FF7143;
    --color-plan: rgb(255 255 255 / 75%);
    --color-price: #fff;
    --bg-cta: #9F3919;
    --color-cta: #FFF;
    --color-items: #fff;
}


.price__name{
    color: var(--color-plan);
    margin-bottom: 15px;
    font-weight: 300;
}

.price__price{
    font-size: 2.5rem;
    color: var(--color-price);
}

.price__items{
    margin-top: 35px;
    display: grid;
    gap: 1em;
    font-weight: 300;
    font-size: 1.2rem;
    margin-bottom: 50px;
    color: var(--color-items);
}

.price__cta{
    display: block;
    padding: 20px 0;
    border-radius: 10px;
    text-decoration: none;
    background-color: var(--bg-cta);
    font-weight: 600;
    color: var(--color-cta);
    box-shadow: 0 0 1px rgba(0, 0, 0, .5);
}

/* Testimony */

.testimony{
    background-color: #e5e5f7;
}

.testimony__container{
    display: grid;
    grid-template-columns: 50px 1fr 50px;
    gap: 1em;
    align-items: center;
}

.testimony__body{
    display: grid;
    grid-template-columns: 1fr max-content;
    justify-content: space-between;
    align-items: center;
    gap: 2em;
    grid-column: 2/3;
    grid-row: 1/2;
    opacity: 0;
    pointer-events: none;
}


.testimony__body--show{
    pointer-events: unset;
    opacity: 1;
    transition: opacity 1.5s ease-in-out;
}

.testimony__img{
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    object-position: 50% 30%;
}

.testimony__texts{
    max-width: 700px;
}

.testimony__course{
    background-color: royalblue;
    color: #fff;
    display: inline-block;
    padding: 5px;
}

.testimony__arrow{
    width: 90%;
    cursor: pointer;
}

/* Questions */

.questions{
    text-align: center;
}

.questions__container{
    background-image: linear-gradient(180deg, #ffffff8c 0%, #ffffff8c 100%), url('http://drasler.ru/wp-content/uploads/2018/11/5b77ef29cdb29.jpg');

    display: grid;
    gap: 2em;
    padding-top: 50px;
    padding-bottom: 100px;
}

.questions__padding{
    padding: 0;
    transition: padding .3s;
    border: 1px solid #5454D4;
    border-radius: 6px;
}

.questions__padding--add{
    padding-bottom: 30px;
}

.questions__answer{
    padding: 0 30px 0;
    overflow: hidden;
}

.questions__title{
    text-align: left;
    display: flex;
    font-size: 20px;
    padding: 30px 0 30px;
    cursor: pointer;
    color: var(--color-title);
    justify-content: space-between;
}

.questions__arrow{
    border-radius: 50%;
    background-color: var(--color-title);
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: flex-end;
    margin-left: 10px;
    transition:  transform .3s;
}

.questions__arrow--rotate{
    transform: rotate(180deg);
}

.questions__show{
    text-align: left;
    height: 0;
    transition: height .3s;
}

.questions__img{
    display: block;
}

.questions__copy{
    width: 60%;
    margin: 0 auto;
    margin-bottom: 30px;
}

/* Footer */

.footer{
    background-image: url('https://cdn.wallpapersafari.com/9/71/6acbpn.jpg');
} 
.footer__title{
    font-weight: 300;
    font-size: 2rem;
    margin-bottom: 30px;
}

.footer__title, .footer__newsletter{
    color: #fff;
}


.footer__container{

    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #fff;
    padding-bottom: 60px;
}

.nav--footer{
    padding-bottom: 20px;
    display: grid;
    gap: 1em;
    grid-auto-flow: row;
    height: 100%;
}

.nav__link--footer{
    display: flex;
    margin: 0;
    margin-right: 20px;
    flex-wrap: wrap;
}

.footer__inputs{
    margin-top: 10px;
    display: flex;
    overflow: hidden;
}

.footer__input{
    background-color: #fff;
    height: 50px;
    display: block;
    padding-left: 10px;
    border-radius: 6px;
    font-size: 1rem;
    outline: none;
    border: none;
    margin-right: 16px;
}

.footer__submit{
    margin-left: auto;
    display: inline-block;
    height: 50px;
    padding: 0 20px ;
    background-color: #2091F9;
    border: none;
    font-size: 1rem;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
}

.footer__copy{
    --padding-container: 30px 0;
    text-align: center;
    color: #fff;
}

.footer__copyright{
    font-weight: 300;
}

.footer__icons{
    margin-bottom: 10px;
}

.footer__img{
    width: 30px;
}

/* Media queries */

@media (max-width:800px){
    .nav__menu{
        display: block;
    }

    .nav__link--menu{
        position: fixed;
        background-color: #000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        z-index: 100;
        opacity: 0;
        pointer-events: none;
        transition: .7s opacity;
    }

    .nav__link--show{
        --show: block;
        opacity:1 ;
        pointer-events: unset;
    }

    .nav__close{
        position: absolute;
        top: 30px;
        right: 30px;
        width: 30px;
        cursor: pointer;
    }

    .hero__title{
        font-size: 2.5rem;
    }


    .about__main{
        gap: 2em;
    }

    .about__icons:last-of-type{
        grid-column: 1/-1;
    }


    .knowledge__container{
        grid-template-columns: 1fr;
        grid-template-rows: max-content 1fr;
        gap: 3em;
        text-align: center;
    }

    .knowledge__picture{
        grid-row: 1/2;
        justify-self: center;
    }

    .testimony__container{
        grid-template-columns: 30px 1fr 30px;
    }

    .testimony__body{
        grid-template-columns: 1fr;
        grid-template-rows: max-content max-content;
        gap: 3em;
        justify-items:center ;
    }


    .testimony__img{
        width: 200px;
        height: 200px;
        
    }

    .questions__copy{
        width: 100%;
    }

    .footer__container{
        flex-wrap: wrap;
    }

    .nav--footer{
        width: 100%;
        justify-items: center;
    }

    .nav__link--footer{
        width: 100%;
        justify-content: space-evenly;
        margin: 0;
    }

    .footer__form{
        width: 100%;
        justify-content: space-evenly;
    }

    .footer__input{
        flex: 1;
    }

}

@media (max-width:600px){
    .hero__title{
        font-size: 2rem;
    }

    .hero__paragraph{
        font-size: 1rem;
    }

    .subtitle{
        font-size: 1.8rem;
    }

    .price__element{
        width: 90%;
    }

    .price__element--best{
        width: 90%;
        /* padding: 40px; */
    }

    .price__price{
        font-size: 2rem;
    }

    .testimony{
        --padding-container: 60px 0;
    }

    .testimony__container{
        grid-template-columns: 28px 1fr 28px;
        gap: .9em;
    }

    .testimony__arrow{
        width: 100%;
    }

    .testimony__course{
        margin-top: 15px;
    }

    .questions__title{
        font-size: 1rem;
    }

    .footer__title{
        justify-self: start;
        margin-bottom: 15px;
    }

    .nav--footer{
        padding-bottom: 60px;
    }

    .nav__link--footer{
        justify-content: space-between;
    }

    .footer__inputs{
        flex-wrap: wrap;
    }

    .footer__input{
        flex-basis: 100%;
        margin: 0;
        margin-bottom: 16px;
    }

    .footer__submit{
        margin-right: auto;
        margin-left: 0;
        

        /* 
        margin:0;
        width: 100%;
        */
    }
}


/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

 *{
    margin: 0;
    box-sizing: border-box;
} 

html {
    line-height: 1.15;
    /* 1 */
    -webkit-text-size-adjust: 100%;
    /* 2 */
}

/* Sections
     ========================================================================== */

/**
   * Remove the margin in all browsers.
   */

body {
    margin: 0;
}

/**
   * Render the `main` element consistently in IE.
   */

main {
    display: block;
}

/**
   * Correct the font size and margin on `h1` elements within `section` and
   * `article` contexts in Chrome, Firefox, and Safari.
   */

h1 {
    font-size: 2em;
    margin: 0;
}

/* Grouping content
     ========================================================================== */

/**
   * 1. Add the correct box sizing in Firefox.
   * 2. Show the overflow in Edge and IE.
   */

hr {
    box-sizing: content-box;
    /* 1 */
    height: 0;
    /* 1 */
    overflow: visible;
    /* 2 */
}

/**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */

pre {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}

/* Text-level semantics
     ========================================================================== */

/**
   * Remove the gray background on active links in IE 10.
   */

a {
    background-color: transparent;
}

/**
   * 1. Remove the bottom border in Chrome 57-
   * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
   */

abbr[title] {
    border-bottom: none;
    /* 1 */
    text-decoration: underline;
    /* 2 */
    text-decoration: underline dotted;
    /* 2 */
}

/**
   * Add the correct font weight in Chrome, Edge, and Safari.
   */

b,
strong {
    font-weight: bolder;
}

/**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */

code,
kbd,
samp {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}

/**
   * Add the correct font size in all browsers.
   */

small {
    font-size: 80%;
}

/**
   * Prevent `sub` and `sup` elements from affecting the line height in
   * all browsers.
   */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}

/* Embedded content
     ========================================================================== */

/**
   * Remove the border on images inside links in IE 10.
   */

img {
    border-style: none;
}

/* Forms
     ========================================================================== */

/**
   * 1. Change the font styles in all browsers.
   * 2. Remove the margin in Firefox and Safari.
   */

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    /* 1 */
    font-size: 100%;
    /* 1 */
    line-height: 1.15;
    /* 1 */
    margin: 0;
    /* 2 */
}

/**
   * Show the overflow in IE.
   * 1. Show the overflow in Edge.
   */

button,
input {
    /* 1 */
    overflow: visible;
}

/**
   * Remove the inheritance of text transform in Edge, Firefox, and IE.
   * 1. Remove the inheritance of text transform in Firefox.
   */

button,
select {
    /* 1 */
    text-transform: none;
}

/**
   * Correct the inability to style clickable types in iOS and Safari.
   */

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

/**
   * Remove the inner border and padding in Firefox.
   */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    border-style: none;
    padding: 0;
}

/**
   * Restore the focus styles unset by the previous rule.
   */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
    outline: 1px dotted ButtonText;
}

/**
   * Correct the padding in Firefox.
   */

fieldset {
    padding: 0.35em 0.75em 0.625em;
}

/**
   * 1. Correct the text wrapping in Edge and IE.
   * 2. Correct the color inheritance from `fieldset` elements in IE.
   * 3. Remove the padding so developers are not caught out when they zero out
   *    `fieldset` elements in all browsers.
   */

legend {
    box-sizing: border-box;
    /* 1 */
    color: inherit;
    /* 2 */
    display: table;
    /* 1 */
    max-width: 100%;
    /* 1 */
    padding: 0;
    /* 3 */
    white-space: normal;
    /* 1 */
}

/**
   * Add the correct vertical alignment in Chrome, Firefox, and Opera.
   */

progress {
    vertical-align: baseline;
}

/**
   * Remove the default vertical scrollbar in IE 10+.
   */

textarea {
    overflow: auto;
}

/**
   * 1. Add the correct box sizing in IE 10.
   * 2. Remove the padding in IE 10.
   */

[type="checkbox"],
[type="radio"] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */
}

/**
   * Correct the cursor style of increment and decrement buttons in Chrome.
   */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

/**
   * 1. Correct the odd appearance in Chrome and Safari.
   * 2. Correct the outline style in Safari.
   */

[type="search"] {
    -webkit-appearance: textfield;
    /* 1 */
    outline-offset: -2px;
    /* 2 */
}

/**
   * Remove the inner padding in Chrome and Safari on macOS.
   */

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/**
   * 1. Correct the inability to style clickable types in iOS and Safari.
   * 2. Change font properties to `inherit` in Safari.
   */

::-webkit-file-upload-button {
    -webkit-appearance: button;
    /* 1 */
    font: inherit;
    /* 2 */
}
.rounded-image {
        border-radius: 50%;
    }

    .discord-button {
            background-color: #7289DA; /* Color morado de Discord */
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        /* Estilos del icono de Discord (puedes personalizar la imagen) */
        .discord-button img {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Efecto de hover */
        .discord-button:hover {
            background-color: #5865F2; /* Color morado más oscuro al pasar el ratón */
        }

        /* Animación del botón */
        .discord-button::before {
            content: "";
            position: absolute;
            background: #99AAB5; /* Color de fondo del botón al hacer clic */
            border-radius: 50%;
            transform: scale(0);
            transition: transform 0.3s ease-out;
        }

        .discord-button:hover::before {
            transform: scale(2);
        }

/* Interactive
     ========================================================================== */

/*
   * Add the correct display in Edge, IE 10+, and Firefox.
   */

details {
    display: block;
}

/*
   * Add the correct display in all browsers.
   */

summary {
    display: list-item;
}

/* Misc
     ========================================================================== */

/**
   * Add the correct display in IE 10+.
   */

template {
    display: none;
}

/**
   * Add the correct display in IE 10.
   */

[hidden] {
    display: none;
}


    </style>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Elli.</h2>
                <img src="https://tr.rbxcdn.com/7ecab4aac37bee92a4a05bb910b2b457/250/250/Decal/Png" width="30" height="30" >
                
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#pepe2" class="nav__links">Opiniones</a>
                </li>
<li>

    <a href="{% url 'wagtailadmin_home' %}" class="nav__links"> Administración</a>

</li>
                <li class="nav__items">
                    <a href="#news" class="nav__links">Juegos Nuevos</a>
                </li>
                <li class="nav__items">
                    <a href="#Atencion" class="nav__links">Atencion </a>
                </li>
                <li class="nav__items">
                    <a href="#nosotros" class="nav__links">Nosotros </a>
                </li>
                <li class="nav__items">
                    <a href="{% url 'search' %}" class="nav__links">Buscar ></a>
                </li>

                <img src="{% static 'images/close.svg' %}" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="{% static 'images/menu.svg' %}" class="nav__img">
            </div>
        </nav>

        <section id="home2" class="hero__container container">
            <h1 class="hero__title">Los Mejores Juegos de 2023.</h1>
            <p class="hero__paragraph">Los videojuegos en venta actualmente son como un buffet de delicias digitales esperando a ser devoradas por jugadores ávidos de diversión. Imagina que estás frente a un festín de entretenimiento.</p>
            <a href="{% slugurl 'blog' %}" class="cta">Comienza ahora !!!</a>

        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué nos espera para 2023??</h2>
            <p class="about__paragraph"> Cada uno ofrece una experiencia única y emocionante. Así que, ¿qué estás esperando? ¡A tomar el control y a disfrutar de horas de diversión en el mundo digital!</p>

            <div class="about__main">
               

                <article class="about__icons">
                    <img src="https://logos-world.net/wp-content/uploads/2021/02/Call-of-Duty-Logo-2008-2009.png" class="about__icon">
                    <h3 class="about__title">Guerra</h3>
                    <p class="about__paragrah">videojuegos de disparos en primera persona que te sumerge en emocionantes batallas militares de alta intensidad en diversas épocas y escenarios.</p>
                </article>

                <article class="about__icons">
                    <img src="https://vignette.wikia.nocookie.net/assassinscreed/images/6/6b/AC4_Insignia.png/revision/latest?cb=20131015163049" class="about__icon">
                    <h3 class="about__title">Historia</h3>
                    <p class="about__paragrah">es una saga de videojuegos sobre una milenaria lucha entre los Asesinos y los Templarios a lo largo de la historia.</p>
                </article>

                
            </div>
        </section>

        <section id="porta1" class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Posibilidad de encontrar Cualquier Juego!!!!!</h2>
                    <p class="knowledge__paragraph">¿Alguna vez te has sentido abrumado por la vasta selección de videojuegos disponibles en el mercado? Si es así, no estás solo. Elegir el juego perfecto puede ser una tarea desafiante, y es precisamente en ese momento cuando un buscador de videojuegos se convierte en tu mejor amigo en el mundo de la diversión digital.</p>
                    <a href="{% url 'search' %}" class="cta">Buscar Mis Juegos</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c129aab8-0fed-4d3e-8c10-3fc467fb661b/ddyjdmr-b48faa53-4620-4de8-a2f9-77f168cc1ea6.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2MxMjlhYWI4LTBmZWQtNGQzZS04YzEwLTNmYzQ2N2ZiNjYxYlwvZGR5amRtci1iNDhmYWE1My00NjIwLTRkZTgtYTJmOS03N2YxNjhjYzFlYTYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.p35BQpGLlAzpoubUIz7AbPR7bSAMkT2FQiVGGp8BaF8" class="knowledge__img">
                </figure>
            </div>
        </section>
        <section class="testimony">
            <div class="testimony__container container">
                <img src="{% static 'images/leftarrow.svg' %}" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Elli Games >>>>>  <span class="testimony__course">El mejor blog desarrollado para encontrar cualquier informacion acerca de los Videojuegos desde DOOM hasta Valorant.</span></h2>
                        <p class="testimony__review">Elli Games es un blog líder en el mundo de los videojuegos que tiene un impacto significativo en los usuarios. Con una amplia cobertura de videojuegos de todos los géneros, este blog ofrece a los jugadores una fuente confiable de información, análisis y reseñas!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://i.pinimg.com/736x/90/54/79/905479d4ba7af435abf6634c3058783f.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Juegos Online 2023  <span class="testimony__course">Venta a minimos precios y de buena calidad .</span></h2>
                        <p class="testimony__review">Jugar videojuegos puede ayudar a reducir el estrés al proporcionar una distracción, mejorar el estado de ánimo y permitir la socialización, lo que puede ser beneficioso para alguien que se siente abrumado.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://i.pinimg.com/736x/38/5d/39/385d39571c369117b5d835175a463e0e.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Elli Games  <span class="testimony__course">Blog numero 1 de videojuegos </span></h2>
                        <p class="testimony__review">tiene como misión ofrecer a sus seguidores una visión de la actualidad del videojuego de manera muy personalizada, dando un enfoque adaptado al perfil de su usuario. Destacar sus detallados análisis de los distintos juegos.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://i.pinimg.com/originals/35/21/af/3521af5d65be87110f719bd224b071b4.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Desarrolado por SENA  <span class="testimony__course">estudiante de
                                ADSO .</span></h2>
                        <p class="testimony__review">Este proyecto fue hecho por parte del SENA en 2023 del estudiante Andres de Avila perteneciente a la ficha 2558346 </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="http://3.bp.blogspot.com/-F0ypVRYDooI/T8KPkcVTy2I/AAAAAAAAAHE/Gc7HDVVkeD0/s1600/logo+sena.jpg" class="testimony__img">
                    </figure>
                </section>


                <img src="{% static 'images/rightarrow.svg' %}" class="testimony__arrow" id="next">
            </div>
        </section>

        <section id="news" class="questions container">
            <h2 class="subtitle">Ultimos lanzamientos !!!!</h2>
            <p class="questions__paragraph">Entre los nuevos lannzamientos de este año estan los siguientes sagasen juegos actuales que esperas para jugarlos?.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 style="font-family: cursive; font-size: 18px; line-height: 1.5; "class="questions__title">Assasins Creed >>>
                            <span class="questions__arrow">
                                <img src="{% static 'images/arrow.svg' %}" class="questions__img">
                            </span>
                        </h3>

 
                        <p class="questions__show">Imagina tener la capacidad de revivir los recuerdos de tus antepasados, de viajar siglos atrás y caminar entre las calles de la antigua Jerusalén.
                            <br><br>
                                                        <a href="https://store.ubisoft.com/ofertas/assassins-creed?lang=es_CO&addinfo=Gamesite_Ubisoft.com_product_assassins%20creed_assassins%20creed_navigation__action_buy%20now_&ucid=UWB-ID_151373" style="text-decoration: none; background-color: #cd9494; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; text-transform: uppercase;">
                                                          Download
                                                            <i class="fa fa-download" style="margin-left: 5px;"></i>
                                                        </a>
                                                    </p>                       
                   
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 style="font-family: cursive; font-size: 18px; line-height: 1.5; "class="questions__title">Call of Duty >>>
                            <span class="questions__arrow">
                                <img src="{% static 'images/arrow.svg' %}" class="questions__img">
                            </span>
                        </h3>

                       
                        <p class="questions__show">Es una experiencia que te sumerge de lleno en el calor de la batalla, donde cada bala cuenta y cada decisión puede marcar la diferencia entre la victoria y la derrota.
<br><br>
                            <a href="https://www.callofduty.com/es/warzone" style="text-decoration: none; background-color: #94cd94; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; text-transform: uppercase;">
                              Download
                                <i class="fa fa-download" style="margin-left: 5px;"></i>
                            </a>
                        </p>
                       
                   
                    </div>

                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 style="font-family: cursive; font-size: 18px; line-height: 1.5; "class="questions__title">Spiderman No way Home >>>
                            <span class="questions__arrow">
                                <img src="{% static 'images/arrow.svg' %}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Imagina tener la capacidad de revivir los recuerdos de tus antepasados, de viajar siglos atrás y caminar entre las calles de la antigua Jerusalén.
                            <br><br>
                                                        <a href="https://www.marvel.com/" style="text-decoration: none; background-color: #94a0cd; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; text-transform: uppercase;">
                                                          Download
                                                            <i class="fa fa-download" style="margin-left: 5px;"></i>
                                                        </a>
                                                    </p>                             </div>
                </article>
            </section>

            <section id="pepe2" class="knowledge">
                <div class="knowledge__container container">
                    <h2 class="subtitle">Opiniones y Comentarios sobre Elli:</h2>
            
                    <div class="opinion">
                        <div class="opinion__image">
                            <img src="https://superacionymotivacion.com/wp-content/uploads/2021/04/sonreir.jpg" width="60" height="60" alt="Imagen de Usuario 1" class="rounded-image">
                        </div>
                        <div class="opinion__text">
                            <p>"Elli es una maravilla. Me encanta jugarlo todos los días. ¡Altamente recomendado!"</p>
                        </div>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> <!-- 4 estrellas de 5 -->
                        </div>
                    </div>
            
                    <div class="opinion">
                        <div class="opinion__image">
                            <img src="https://cdn.domestika.org/c_limit,dpr_auto,f_auto,q_auto,w_820/v1576497340/content-items/003/518/329/_MG_5442-original.jpg?1576497340" width="60" height="60" alt="Imagen de Usuario 2" class="rounded-image">
                        </div>
                        <div class="opinion__text">
                            <p>"Elli es adictivo y entretenido. No puedo dejar de jugar. ¡Increíble!"</p>
                        </div>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> <!-- 4 estrellas de 5 -->
                        </div>
                    </div>
            
                    <div class="opinion">
                        <div class="opinion__image">
                            <img src="https://i.pinimg.com/736x/2f/15/28/2f1528b62976f213cbbdd0818ee73f4f.jpg" width="60" height="60" alt="Imagen de Usuario 3" class="rounded-image">
                        </div>
                        <div class="opinion__text">
                            <p>"Los gráficos de Elli son impresionantes. Es una experiencia de juego única."</p>
                        </div>
                        <div class="rating">
                          <span>&#9733;</span><span>&#9734;</span> <!-- 4 estrellas de 5 -->
                        </div>
                    </div>
            
                    <div class="opinion">
                        <div class="opinion__image">
                            <img src="https://thumbs.dreamstime.com/b/hombre-joven-en-el-fondo-blanco-21832721.jpg" width="60" height="60" alt="Imagen de Usuario 4" class="rounded-image">
                        </div>
                        <div class="opinion__text">
                            <p>"Elli es la mejor app de juegos que he probado. ¡No puedo dejar de jugar!"</p>
                        </div>
                        <div class="rating">
                          <span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> <!-- 4 estrellas de 5 -->
                        </div>
                    </div>
            
                    <div class="opinion">
                        <div class="opinion__image">
                            <img src="https://c.wallhere.com/photos/48/f8/face_women_portrait-1477657.jpg!d" width="60" height="60" alt="Imagen de Usuario 5" class="rounded-image">
                        </div>
                        <div class="opinion__text">
                            <p>"Elli es una maravilla absoluta. No puedo esperar para jugar más."</p>
                        </div>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> <!-- 4 estrellas de 5 -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="nosotros" class="questions__offer">
                <h2 class="subtitle">Quienes Somos?</h2>
                <p class="questions__copy">Tu Puerta al Mundo de los Videojuegos

                    En Elli, creemos en el poder de la diversión y la emoción que los videojuegos pueden brindar a la vida de las personas. Somos una empresa de software apasionada y comprometida en proporcionar a nuestros usuarios la oportunidad de explorar y disfrutar una amplia variedad de juegos, sin importar sus preferencias o nivel de experiencia.
                         
                    Nuestra Misión
                    
                    Nuestra misión es sencilla: hacer que los videojuegos estén al alcance de todos. Queremos que cada usuario, desde el jugador ocasional hasta el entusiasta más apasionado, tenga la oportunidad de descubrir y jugar juegos que les encanten. Creemos que los videojuegos son una forma única de entretenimiento, que puede unir a personas de todas las edades y orígenes.
                    
                  
                 
                    Únete a la Comunidad Elli en Discord
                    
                    Te invitamos a unirte a nuestra comunidad y explorar un mundo de posibilidades de juego. Con Elli, no importa si eres un jugador casual o un fanático, ¡si te apasionan los videojuegos, este es tu hogar! ¡Bienvenido a la familia Elli, donde la diversión nunca termina!
                    
                    En Elli, creamos el vínculo perfecto entre los jugadores y los juegos que aman. ¡Descubre tu próximo juego favorito y comienza la aventura con nosotros!</p>
                    
                    
                    <button class="discord-button">
                        Discord Now
                        <a href="https://discord.com" target="_blank" rel="noopener noreferrer">
                            <img src="https://www.pngkit.com/png/full/17-179788_discord-logo-png.png" alt="Icono de Discord">
                        </a>
                    </button>
            </section>
        </section>
    </main>
    <br>
    <br><br><br>
    <br>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Blogs  </h2>
               
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form"    action="https://formspree.io/f/xzblwggz"
            method="POST">
                <h2 class="footer__newsletter">Preguntas Y Comentarios </h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <label>
                       
                        <textarea name="message" placeholder="comentarios:"></textarea>
                      </label>
                      <br>
                      <br>
                    <input type="submit" value="Comentar !!!" class="footer__submit">
                </div>
            </form>



            
        </section>

        <section id="Atencion" class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="{% static 'images/facebook.svg' %}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{% static 'images/twitter.svg' %}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{% static 'images/youtube.svg' %}" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Andres de Avila </h3>
            <h3 class="footer__copyright">Trabajo Blog Django 2023 Git-V1..1 &copy; Ficha: 2558346  </h3>

        </section>
    </footer>

    <script>

(function(){
    const openButton = document.querySelector('.nav__menu');
    const menu = document.querySelector('.nav__link');
    const closeMenu = document.querySelector('.nav__close');

    openButton.addEventListener('click', ()=>{
        menu.classList.add('nav__link--show');
    });

    closeMenu.addEventListener('click', ()=>{
        menu.classList.remove('nav__link--show');
    });

    


})();



(function(){
    const titleQuestions = [...document.querySelectorAll('.questions__title')];
    console.log(titleQuestions)

    titleQuestions.forEach(question =>{
        question.addEventListener('click', ()=>{
            let height = 0;
            let answer = question.nextElementSibling;
            let addPadding = question.parentElement.parentElement;

            addPadding.classList.toggle('questions__padding--add');
            question.children[0].classList.toggle('questions__arrow--rotate');

            if(answer.clientHeight === 0){
                height = answer.scrollHeight;
            }

            answer.style.height = `${height}px`;
        });
    });
})();

(function(){
    
    const sliders = [...document.querySelectorAll('.testimony__body')];
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');
    let value;   

    buttonNext.addEventListener('click', ()=>{
        changePosition(1);
    });

    buttonBefore.addEventListener('click', ()=>{
        changePosition(-1);
    });

    const changePosition = (add)=>{
        const currentTestimony = document.querySelector('.testimony__body--show').dataset.id;
        value = Number(currentTestimony);
        value+= add;


        sliders[Number(currentTestimony)-1].classList.remove('testimony__body--show');
        if(value === sliders.length+1 || value === 0){
            value = value === 0 ? sliders.length  : 1;
        }

        sliders[value-1].classList.add('testimony__body--show');

    }

})();


    </script>
</body>

</html>