<h1 align="center">Trumbowyg Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/trumbowyg/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/trumbowyg.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/trumbowyg"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/trumbowyg"><img src="https://img.shields.io/github/downloads/flextype-plugins/trumbowyg/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.16-green.svg?color=black" alt="Flextype"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Light, translatable and customisable WYSIWYG editor for Flextype.

## Dependencies

The following dependencies need to be downloaded and installed for Trumbowyg Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.16 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=2.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |
| [blueprints](https://github.com/flextype-plugins/blueprints) | >=1.0.0 | [download](https://github.com/flextype-plugins/blueprints/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `/project/plugins/trumbowyg`
3. Download Trumbowyg Plugin and unzip plugin content to the folder `/project/plugins/trumbowyg`

## Documentation

### Settings

| Key | Value | Description |
|---|---|---|
| enabled | true | true or false to disable the plugin |
| priority | 41 | Plugin priority |
| assetsLoadOnAdmin | true | Place to load |
| assetsLoadOnSite | false | Place to load |
| assetsLoadOnAdmin | true | Place to load |
| defaultOptions.lang | en | Localization <br><br> If the lang was not found, english values are used by default.|
| defaultOptions.svgPath | `../../project/plugins/trumbowyg/blocks/InputEditorTrumbowyg/dist/fonts/trumbowyg/icons.svg` | SVG icons <br><br> A pack of SVG icons is available and enabled by default. This file is loaded via XHR request in JavaScript so it is possible the path is not matching with your assets file paths. You can change the path of the SVG or disable this feature. <br><br> If you do not want SVG icons, you can set this option to `false`. <br><br> Then, you can add your custom icons by CSS or what you want. |

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/trumbowyg/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)
