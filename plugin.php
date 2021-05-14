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
flextype('registry')->set('plugins.blueprints.settings.blocks.Trumbowyg', 
                          flextype('registry')->get('plugins.trumbowyg.settings.blocks.Trumbowyg'));                

/**
 * Set Trumbowyg locale
 */                         
if (flextype('registry')->get('flextype.settings.locale') == 'en_US') {
    $locale = 'en';
    flextype('registry')->set('plugins.trumbowyg.settings.blocks.InputTrumbowyg.properties.options.lang', $locale);
} else {
    $locale = strings(flextype('registry')->get('flextype.settings.locale'))->lower()->substr(0, 2)->toString();
    flextype('registry')->set('plugins.trumbowyg.settings.blocks.InputTrumbowyg.properties.options.lang', $locale);
}

/**
 * Add Trumbowyg assets
 */ 
$trumbowygCSS[] = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/css/trumbowyg.min.css';
$trumbowygJS[]  = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/js/trumbowyg.min.js';

if ($locale !== 'en') {
    $trumbowygJS[] = 'project/plugins/trumbowyg/blocks/Trumbowyg/dist/lang/trumbowyg/langs/' . $locale . '.min.js';          
} 

if (flextype('registry')->get('plugins.trumbowyg.settings.assetsLoadOnAdmin')) {
    flextype('registry')->set('assets.admin.js.trumbowyg', $trumbowygJS);
    flextype('registry')->set('assets.admin.css.trumbowyg', $trumbowygCSS);
}

if (flextype('registry')->get('plugins.trumbowyg.settings.assetsLoadOnSite')) {
    flextype('registry')->set('assets.site.js.trumbowyg', $trumbowygJS);
    flextype('registry')->set('assets.site.css.trumbowyg', $trumbowygCSS);
}