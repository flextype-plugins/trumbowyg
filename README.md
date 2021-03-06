<h1 align="center">Trumbowyg Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/trumbowyg/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/trumbowyg.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/trumbowyg"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/trumbowyg"><img src="https://img.shields.io/github/downloads/flextype-plugins/trumbowyg/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.16-green.svg?color=black" alt="Flextype"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Light, translatable and customisable [Trumbowyg](https://github.com/Alex-D/Trumbowyg) WYSIWYG editor for Flextype.

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

```yaml
# enabled: true or false to disable the plugin
enabled: true

# Plugin priority
priority: 41

# Place to load
assetsLoadOnAdmin: true
assetsLoadOnSite: false

# Blocks
blocks:
  Trumbowyg:
    type: Trumbowyg
    properties:
      name: trumbowyg
      
      # Trumbowyg options
      options:

        # Localization
        #
        # If the lang was not found, english values are used by default.
        lang: en

        # SVG icons
        #
        # A pack of SVG icons is available and enabled by default. 
        # This file is loaded via XHR request in JavaScript so it is possible the path is not matching with your assets file paths. 
        # You can change the path of the SVG or disable this feature.
        #
        # If you do not want SVG icons, you can set this option to `false`. 
        # Then, you can add your custom icons by CSS or what you want.
        svgPath: ../../project/plugins/trumbowyg/blocks/Trumbowyg/dist/fonts/trumbowyg/icons.svg

        # Semantic
        #
        # Generates a better, more semantic oriented HTML 
        # (i.e. <em> instead of <i>, <strong> instead of <b>, etc.).
        semantic:
          'b': 'strong'
          'i': 'em'
          's': 'del'
          'strike': 'del'
          'p': 'p'

        # Reset CSS
        # 
        # If you don't want the page style to impact on the look of the text in the editor, 
        # you will need to apply a reset-css on the editor. 
        # To activate this feature set `true`
        resetCss: false

        # Auto grow
        #
        # The text editing zone can extend itself when writing a long text. 
        # To activate this feature set `true`
        autogrow: false

        # Auto grow on enter
        #
        # The text editing zone can extend itself when editor get focus and reduce on blur. 
        # To activate this feature set `true`
        autogrowOnEnter: false

        # URL protocol
        # 
        # An option to auto-prefix URLs with a protocol.
        # When this option is set to true, URLs missing a protocol will be prefixed
        # with https://. Alternatively, a string can be provided for a custom prefix.
        # For example, a value of true would convert example.com to https://example.com, 
        # while a value of ftp converts to ftp://example.com.
        #
        # Anchors, email addresses and relative links are left unchanged.
        urlProtocol: false

        # Image width modal edit 
        #
        # Add a field in image insert/edit modal which allow users to set the image width.
        # To activate this feature set `true`
        imageWidthModalEdit: false

        # Remove format pasted
        #
        # If you don't want styles pasted from clipboard (from Word or other webpage for example),
        # set the removeformatPasted option to `true`
        removeformatPasted: true

        # Hide button texts 
        #
        # You can hide button texts showed when you put `svgPath` to `false`.
        # If you disable SVG icons and button texts, you should design them by yourself.
        hideButtonTexts: false

        # Tags to remove
        #
        # Allow to sanitize the code by removing all tags you want. 
        # The `tagsToRemove` option is an array.
        tagsToRemove: []

        # Tags to keep 
        #
        # Sometimes you want to keep some empty `i` tags for Font Awesome or anything else. 
        # You can define this list via the `tagsToKeep` option.
        tagsToKeep: ['hr', 'img', 'embed', 'iframe', 'input']

        # Minimal links
        # 
        # Reduce the link overlay to use only `url` and `text` fields, omitting `title` and `target`.
        minimalLinks: false

        # Default link target
        #
        # Allow to set link target attribute value to what you want, even if the `minimalLinks` option is set to `true`.
        defaultLinkTarget: _blank

        # Tag classes
        #
        # Add classes to any tag.
        # for e.g:
        #   h1: 'h1', // Bootstrap example
        #   blockquote: 'bg-grey-100 rounded-xl', // Tailwind CSS example
        tagClasses: []
        
        # Active dropdown icon
        #
        # Dropdown icon can change to the active sub-button icon with this option enabled.
        # To activate this feature set `true`
        changeActiveDropdownIcon: false

        # Prefix
        #
        # Prefix of all class added on elements of Trumbowyg
        prefix: 'trumbowyg-'
        
        # Disabled
        disabled: false

        # Button pane
        #
        # Available buttons: viewHTML, undo, redo, strong, em, del, superscript, subscript, link
        # insertImage, justifyLeft, justifyCenter, justifyRight, justifyFull, unorderedList, orderedList,
        # horizontalRule, removeformat, fullscreen
        btns: []

        # Plugins
        #
        # Available plugins https://alex-d.github.io/Trumbowyg/documentation/plugins/
        plugins: []

    template: plugins/trumbowyg/blocks/Trumbowyg/block.html
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/trumbowyg/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)
