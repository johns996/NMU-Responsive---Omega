Font Awesome Update Process
===========================

- Download the FA core files
- Place all of the SCSS files into the font-awesome directory
- Edit the font-awesome.scss file to add the .fontface {} selector around the `core`, `bootstrap`, `extra` and `icons` imports
- Rename the font-awesome.scss to _font-awesome.scss
- The IE file is not currently used so it can be deleted
- Copy the font files into the font directory
- Compile the new CSS
- Done
