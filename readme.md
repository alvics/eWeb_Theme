## e_Web WordPress Starter Theme
##### Vanilla WordPress with bootstrap 4, Font Awesome 5, webpack and scss.
Blank starter theme with bootstrap 4, fontawesome 5 (SVGs) via the advanced JavaScript API to take advantage of tree shaking, webpack files from Laravel to minify, compile files and build ready for production.
### This theme is not complete


#### Theme Installation
STEP 1. Clone or download zip.

STEP 2. cd to theme folder 


STEP 3. Run
      ```
       npm install
      ```

NEXT: To compile your styles scss with webpack run

```
 npm run watch
```


This will compile and fully minify your project.

##### Some basics
Add your styles in src/app.scss


Add your custom JS in src/app.js


#### How to Use Font Awesome 5
Use Font Awesome 5 in the e_Web starter theme, loading SVGs via the advanced JavaScript API to take advantage of tree shaking.



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
####
Build
```js
npm run prod
```

