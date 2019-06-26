// Adding bootstrap JavaScript from node_modules
require('bootstrap');

/* ============================================================================================================
* ------------------------------ Add in you icons ass needed --------------------------------------------------
* -------------- Visit the link below, find "Package name" where 3 available types are ------------------------
* -- @fortawesome/free-solid-svg-icons, @fortawesome/free-regular-svg-icons, @fortawesome/free-brands-svg-icons
* ---------- https://fontawesome.com/how-to-use/with-the-api/setup/importing-icons#packages -------------------
* ------------------  And one or more icon sets, depending on which icons you want: ---------------------------
* ========================================================================================================== */

// import the needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// import your SVGs here free-brands (Facebook and Twitter icons)
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

// import your SVGs here free solid (faHeart icons)
import { faHeart } from '@fortawesome/free-solid-svg-icons';

// import your SVGs here free regular (faHeart icons)
 // import {  } from '@fortawesome/free-regular-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter, faHeart);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

// That's it!!

/* =======================================================================
* --------------- Add your custom JavaScript here ------------------------
* ------------------------ src/app.js  -----------------------------------
* ------------------------------------------------------------------------
* ===================================================================== */
console.log('e_Web starter theme is working!');

// function([string1, string2],target id,[color1,color2])
consoleText(['Hello World!', 'Welcome to _eWeb starter theme', 'Made with Love here on the Gold Coast, enjoy!'], 'text',['tomato','rebeccapurple','lightblue']);

function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    let visible = true;
    let con = document.getElementById('console');
    let letterCount = 1;
    let x = 1;
    let waiting = false;
    let target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
            waiting = true;
            target.innerHTML = words[0].substring(0, letterCount)
            window.setTimeout(function() {
                const usedColor = colors.shift();
                colors.push(usedColor);
                const usedWord = words.shift();
                words.push(usedWord);
                x = 1;
                target.setAttribute('style', 'color:' + colors[0])
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
            waiting = true;
            window.setTimeout(function() {
                x = -1;
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (waiting === false) {
            target.innerHTML = words[0].substring(0, letterCount)
            letterCount += x;
        }
    }, 120)
    window.setInterval(function() {
        if (visible === true) {
            con.className = 'console-underscore hidden'
            visible = false;

        } else {
            con.className = 'console-underscore'

            visible = true;
        }
    }, 400)
}



