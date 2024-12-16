
# TYPO3 Extension EXT:ot_timeline

TYPO3 content element for displaying a timeline.

The extension use the timeline from the Github repository:
https://github.com/squarechip/timeline

Please use the documentation for the JavaScript configuration (e.g. for a horizontal timeline).

## Styles and JavaScript

I use this content element only on one page, so i include the JavaScript with the f:asset.script ViewHelper.
For the styles i use my frontend build with the SCSS file.

If you don't want  a vertical timeline, change the JS configuration or want another layout,
you can overwrite the Fluid template path with TypoScript for "Timeline.html" in your own sitepackage.
