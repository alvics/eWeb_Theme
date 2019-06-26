## e_Web WordPress Theme Framework
#### WordPress with bootstrap 4 and Font Awesome 5.
Welcome to e_Web starter theme with bootstrap 4, fontawesome 5 (SVGs) via the advanced JavaScript API to take advantage of tree shaking, node and webpack configuration from Laravel to compile your dependencies.



### Theme Installation
STEP 1. Clone or download zip.

STEP 2. cd to theme folder 


STEP 3. Run
      ```
       npm install
      ```
### Run
NEXT: To compile your live styles scss

```
 npm run watch
```



##### Some basics
Add your styles in src/app.scss


Add your custom JS in src/app.js


### How to Use Font Awesome 5
Start using Font Awesome 5, loading SVGs via the advanced JavaScript API to take advantage of tree shaking.



To add Icons in e_Web theme go to ```src/app.js``` import icons as needed.

```

// import the Facebook and Twitter icons
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter);


```
need more Icons:
```
// import your SVGs here from free solid (faHeart icons)
import { faHeart } from '@fortawesome/free-solid-svg-icons';

// import your SVGs here from free brands (Facebook and Twitter icons)
import { faFacebook, faTwitter, faGithub } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter, faGithub, faHeart);

```

In the appropriate template file

```html
<!-- Facebook icon -->
<i class="fab fa-facebook"></i>
<!-- Twitter icon -->
<i class="fas fa-twitter"></i>

<!-- Github icon -->
<i class="fab fa-github"></i>
<!-- Heart icon -->
<i class="fas fa-heart"></i>

```
###
Build
```js
npm run prod
```

### License & Credits
e_Web starter theme framework is open-source software licensed under the MIT license.
* Font Awesome: https://github.com/FortAwesome/Font-Awesome/blob/master/LICENSE.txt (Font: SIL OFL 1.1, CSS: MIT License)
* Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
* Laravel: https://github.com/laravel/framework/blob/5.8/LICENSE.md | (Code licensed under MIT)
* WP Bootstrap Navwalker: https://github.com/wp-bootstrap/wp-bootstrap-navwalker | GNU GPL
