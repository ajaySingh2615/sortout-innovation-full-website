<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation\Qualifier\Dimensions;

use Cloudinary\Transformation\AspectRatio;
use Cloudinary\Transformation\BaseAction;
use Cloudinary\Transformation\Expression\Expression;

/**
 * Class Dimensions
 */
class Dimensions extends BaseAction
{
    use DimensionsTrait;

    /**
     * Dimensions constructor.
     *
     * @param int|string|Expression|null $width
     * @param int|string|Expression|null $height
     * @param mixed|AspectRatio          ...$aspectRatio
     */
    public function __construct($width = null, Expression|int|string|null $height = null, ...$aspectRatio)
    {
        parent::__construct();

        $this->width($width);
        $this->height($height);
        $this->aspectRatio(...$aspectRatio);
    }

    /**
     * Internal setter for the dimensions.
     *
     * @param mixed|null $value The dimensions.
     *
     *
     * @internal
     */
    protected function setDimension(mixed $value = null): static
    {
        $this->addQualifier($value);

        return $this;
    }
}
