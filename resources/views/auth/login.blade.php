



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <style>
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
    height: 50%;
    background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('https://www.xtrafondos.com/wallpapers/carretera-en-otono-6185.jpg');
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
                <h2 class="nav__title">Blue .</h2>
                <img src="https://tr.rbxcdn.com/7ecab4aac37bee92a4a05bb910b2b457/250/250/Decal/Png" width="30" height="30" >
                
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#pepe2" class="nav__links">Commits And Social Media  </a>
                </li>
<li>

    <a href="{% url 'wagtailadmin_home' %}" class="nav__links">Administrator</a>

</li>
                <li class="nav__items">
                    <a href="#news" class="nav__links">New Games Here</a>
                </li>
                <li class="nav__items">
                    <a href="#Atencion" class="nav__links">Contact us  </a>
                </li>
                <li class="nav__items">
                    <a href="#nosotros" class="nav__links">We  are? </a>
                </li>
                <li class="nav__items">
                    <a href="{% url 'search' %}" class="nav__links">search here  ></a>
                </li>

                <img src="{% static 'images/close.svg' %}" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="{% static 'images/menu.svg' %}" class="nav__img">
            </div>
        </nav>

    




    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo"
            >
                <x-authentication-card-logo />
            </x-slot>
    
            <x-validation-errors class="mb-4" />
            <h4 style="font-family: 'Tu-Fuente-Elegante', cursive; text-align: center; color: #ffffff;"> Log in  </h4>
    
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full h-30 "  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="correo@gmail.com" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>
                <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" href="{{ route('register') }}">
                    {{ __('Register?') }}
                </a>
    
    
    
    
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-button>
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
    
            <style>
                .rounded-circle {
          border-radius: 50%;
          width: 50px; /* Ajusta el tamaño según tus necesidades */
          height: 50px; /* Ajusta el tamaño según tus necesidades */
          display: flex;
          justify-content: center;
          align-items: center;
        }
            </style>
    
           
    <div class="flex space-x-4">
        <a class="bg-red-500 hover:bg-white text-white font-semibold hover:text-red-500 py-2 px-4 border border-white hover:border-transparent rounded-circle" href="{{ url('/login-google') }}"><i class="fa-brands fa-google fa-lg"></i></a>
      
        <a class="bg-blue-500 hover:bg-white text-white font-semibold hover:text-blue-500 py-2 px-4 border border-white hover:border-transparent rounded-circle" href="{{ url('/login-facebook') }}">
          <i class="fa-brands fa-facebook-f fa-lg"></i>
        </a>
      
        <a class="bg-purple-500 hover:bg-white text-white font-semibold hover:text-purple-500 py-2 px-4 border border-white hover:border-transparent rounded-circle" href="{{ url('/login-github') }}"><i class="fa-brands fa-git fa-lg"></i></a>
      </div>
      

    
    
    
            
        </x-authentication-card>
    </x-guest-layout>
    <script src="https://kit.fontawesome.com/f15154e1e9.js" crossorigin="anonymous"></script>

</body>
</html>
