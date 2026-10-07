# OT Timeline — Timeline Content Element for TYPO3

Adds a vertical timeline content element to TYPO3 14. Timeline items support a
title, rich text, and up to two images each.

[![TYPO3](https://img.shields.io/badge/TYPO3-14.3-orange.svg)](https://typo3.org/)
[![Packagist Version](https://img.shields.io/packagist/v/oliverthiele/ot-timeline.svg)](https://packagist.org/packages/oliverthiele/ot-timeline)
[![PHP](https://img.shields.io/packagist/dependency-v/oliverthiele/ot-timeline/php.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/oliverthiele/ot-timeline.svg)](LICENSE.txt)
[![Changelog](https://img.shields.io/badge/Changelog-CHANGELOG.md-blue.svg)](CHANGELOG.md)

---

## Features

- **Site Set** — TypoScript is provided as part of the TYPO3 Site Set; no
  manual TypoScript includes required
- **Inline items** — title, rich text and up to two images per item, managed
  as inline records; translatable and workspace aware
- **Heading hierarchy** — item titles sit one level below the header of the
  content element
- **Configurable layout** — vertical or horizontal timeline, set through
  `data-*` attributes in the template
- **Timeline JavaScript** from
  [squarechip/timeline](https://github.com/squarechip/timeline) (vendored, MIT)

---

## Requirements

| Requirement | Version |
|-------------|---------|
| TYPO3       | ^14.3   |
| PHP         | >=8.2   |

For TYPO3 13, use version 1.x.

---

## Installation

```bash
composer require oliverthiele/ot-timeline
```

Then run the TYPO3 setup:

```bash
vendor/bin/typo3 extension:setup -e ot_timeline
# or via DDEV:
ddev typo3 extension:setup -e ot_timeline
```

Add the Site Set **"Content Element: Timeline"** (`oliverthiele/ot-timeline`)
as a dependency of your site or sitepackage set.

---

## Configuration

### TypoScript

TypoScript is provided as part of the Site Set. For a manual integration
without the Site Set:

```typoscript
@import 'EXT:ot_timeline/Configuration/TypoScript/setup.typoscript'
```

### Heading levels

The item titles are rendered one level below the header of the content
element: below an `h2` they become `h3`. When the element has no visible
header, they use the default header level (`styles.content.defaultHeaderType`,
usually `h2`). Style them through the class `ot-timeline-title`, never through
the tag.

### Styles

The extension does not ship compiled CSS. Include the SCSS source from
`Resources/Private/Scss/Timeline.scss` in your frontend build, or use the
styles from the [squarechip/timeline repository](https://github.com/squarechip/timeline).

---

## Template Customization

Override the template in your sitepackage:

```typoscript
tt_content.ot_timeline.templateRootPaths.10 = EXT:my_sitepackage/Resources/Private/Templates/OtTimeline/
```

The timeline options are `data-*` attributes on the element with
`data-js="otTimeline"`; `TimelineInit.js` initialises every such element:

```html
<div class="timeline" data-js="otTimeline"
     data-mode="vertical"
     data-vertical-start-position="right"
     data-visible-items="2"
     data-vertical-trigger="150px">
```

| Attribute                      | Values                                       |
|--------------------------------|----------------------------------------------|
| `data-mode`                    | `vertical`, `horizontal`                     |
| `data-vertical-start-position` | `left`, `right`                              |
| `data-vertical-trigger`        | px or % from the bottom of the viewport      |
| `data-visible-items`           | number of items shown in horizontal mode     |

For the full list of options see the
[squarechip/timeline documentation](https://github.com/squarechip/timeline).

The class names `timeline`, `timeline__wrap`, `timeline__items`,
`timeline__item` and `timeline__content` belong to that library: its script
and styles depend on them, so keep them in an overridden template.

---

## License

GPL-2.0-or-later — see [LICENSE.txt](LICENSE.txt)

Third-party parts:

| Files | Source | License |
|---|---|---|
| `Resources/Public/Js/Timeline.js`, `Resources/Private/Scss/Timeline.scss`, `Resources/Public/Icons/arrow-*.svg` | [squarechip/timeline](https://github.com/squarechip/timeline), © 2018 Mike Collins | MIT — see [Timeline.LICENSE.txt](Resources/Public/Js/Timeline.LICENSE.txt) |
| `Resources/Public/Icons/FasTimeline.svg`, `Resources/Public/Icons/FasCalendarPlus.svg` | [Font Awesome Free](https://fontawesome.com) 6.7.1, © Fonticons, Inc. | [CC BY 4.0](https://fontawesome.com/license/free), notice in each file |

---

## Author

Oliver Thiele — [oliver-thiele.de](https://www.oliver-thiele.de)
