# ot_timeline — Timeline Content Element for TYPO3

Adds a vertical timeline content element to TYPO3. Timeline items support a title, rich text, and up to two images each.

[![TYPO3](https://img.shields.io/badge/TYPO3-13.4-orange.svg)](https://typo3.org/)
[![Packagist Version](https://img.shields.io/packagist/v/oliverthiele/ot-timeline.svg)](https://packagist.org/packages/oliverthiele/ot-timeline)
[![PHP](https://img.shields.io/packagist/dependency-v/oliverthiele/ot-timeline/php.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/oliverthiele/ot-timeline.svg)](LICENSE.txt)
[![Changelog](https://img.shields.io/badge/Changelog-CHANGELOG.md-blue.svg)](CHANGELOG.md)

## Features

- TYPO3 v13 and v14 compatible (Site Set ready)
- Vertical or horizontal timeline layout (configurable via JavaScript)
- Timeline items with title, rich text, and up to two images
- IRRE-based item management in the backend
- Timeline JavaScript from [squarechip/timeline](https://github.com/squarechip/timeline) (vendored)

## Requirements

| Requirement | Version        |
|-------------|----------------|
| TYPO3       | ^13.4 \| ^14.3 |
| PHP         | >=8.2          |

## Installation

```bash
composer require oliverthiele/ot-timeline
```

After installation, activate the **Site Set "OtTimeline"** for your site in the TYPO3 backend.

## Configuration

### TypoScript

TypoScript is auto-included via the Site Set. For manual integration without Site Set:

```typoscript
@import 'EXT:ot_timeline/Configuration/TypoScript/setup.typoscript'
```

### JavaScript Options

The timeline is initialised with a default vertical configuration. To customise the behaviour, override the template and adjust the `timeline()` call:

```javascript
timeline(document.querySelectorAll('.timeline'), {
    verticalStartPosition: 'right',  // 'left' | 'right'
    visibleItems: 2,
    verticalTrigger: '150px',        // px or % from bottom of viewport
    mode: 'vertical'                 // 'vertical' | 'horizontal'
});
```

For a full list of options see the [squarechip/timeline documentation](https://github.com/squarechip/timeline).

### Template Override

To customise the output, override the template in your sitepackage:

```typoscript
tt_content.ot_timeline.templateRootPaths.10 = EXT:your_sitepackage/Resources/Private/Templates/
```

### Styles

The extension does not ship compiled CSS. Include the SCSS source from `Resources/Private/Scss/Timeline.scss` in your frontend build, or use the styles from the [squarechip/timeline repository](https://github.com/squarechip/timeline).

## Usage

1. Create a new **Timeline** content element in the TYPO3 backend.
2. Add timeline items via the IRRE interface. Each item can have a title, rich text, and up to two images.

## License

GPL-2.0-or-later — © 2024 Oliver Thiele