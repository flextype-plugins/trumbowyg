<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Trumbowyg;

/**
 * Add Blueprint block `Trumbowyg`
 */
registry()->set('plugins.blueprints.settings.blocks.Trumbowyg', 
                          registry()->get('plugins.trumbowyg.settings.blocks.Trumbowyg'));                

/**
 * Set Trumbowyg locale
 */                         
if (registry()->get('flextype.settings.locale') == 'en_US') {
    $locale = 'en';
    registry()->set('plugins.trumbowyg.settings.blocks.InputTrumbowyg.properties.options.lang', $locale);
} else {
    $locale = strings(registry()->get('flextype.settings.locale'))->lower()->substr(0, 2)->toString();
    registry()->set('plugins.trumbowyg.settings.blocks.InputTrumbowyg.properties.options.lang', $locale);
}

/**
 * Add Trumbowyg assets
 */ 
$trumbowygCSS[] = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/css/trumbowyg.min.css';
$trumbowygJS[]  = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/js/trumbowyg.min.js';

if ($locale !== 'en') {
    $trumbowygJS[] = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/lang/trumbowyg/langs/' . $locale . '.min.js';          
} 

if (registry()->get('plugins.trumbowyg.settings.assetsLoadOnAdmin')) {
    registry()->set('assets.admin.js.trumbowyg', $trumbowygJS);
    registry()->set('assets.admin.css.trumbowyg', $trumbowygCSS);
}

if (registry()->get('plugins.trumbowyg.settings.assetsLoadOnSite')) {
    registry()->set('assets.site.js.trumbowyg', $trumbowygJS);
    registry()->set('assets.site.css.trumbowyg', $trumbowygCSS);
}