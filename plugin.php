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
 * Add Blueprint block `InputEditorTrumbowyg`
 */
flextype('registry')->set('plugins.blueprints.settings.blocks',
                        array_merge(flextype('registry')->get('plugins.blueprints.settings.blocks') ?? [],
                        flextype('registry')->get('plugins.trumbowyg.settings.blocks')));