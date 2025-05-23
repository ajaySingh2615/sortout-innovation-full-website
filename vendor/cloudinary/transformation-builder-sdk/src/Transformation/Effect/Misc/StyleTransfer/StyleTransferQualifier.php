<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation;

/**
 * Class StyleTransferQualifier
 */
class StyleTransferQualifier extends LimitedEffectQualifier
{
    /**
     * @var array $valueOrder The order of the values.
     */
    protected array $valueOrder = [0, 'preserve_color', 'style_strength'];

    /**
     * StyleTransfer constructor.
     *
     * @param ?int  $strength      Style Strength.
     * @param ?bool $preserveColor Whether to preserve color.
     * @param array $args          Additional args.
     */
    public function __construct(?int $strength = null, ?bool $preserveColor = null, ...$args)
    {
        parent::__construct(MiscEffect::STYLE_TRANSFER, EffectRange::PERCENT, ...$args);

        $this->strength($strength)->preserveColor($preserveColor);
    }

    /**
     * Determines whether the original colors of the target photo are kept.
     *
     * @param ?bool $preserveColor   When true, style elements of the source artwork, such as brush style and texture,
     *                              are transferred to the target photo, but the prominent colors from the source
     *                              artwork are not transferred, so the result retains the original colors of the
     *                              target photo.
     *
     */
    public function preserveColor(?bool $preserveColor): static
    {
        $this->value->setSimpleValue('preserve_color', $preserveColor ? 'preserve_color' : null);

        return $this;
    }

    /**
     * Sets the strength of the style transfer.
     *
     * @param ?int $strength         The strength of the style transfer. Higher numbers result in an output that is more
     *                              highly influenced by the source artwork style. (Range: 0 to 100, Server default:
     *                              100)
     *
     */
    public function strength(?int $strength): static
    {
        $this->value->setSimpleValue('style_strength', $strength);

        return $this;
    }
}
