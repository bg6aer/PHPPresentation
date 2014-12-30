<?php
/**
 * This file is part of PHPPowerPoint - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPowerPoint is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPPowerPoint
 * @copyright   2009-2014 PHPPowerPoint contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpPowerpoint\Shape\Chart\Type;

use PhpOffice\PhpPowerpoint\ComparableInterface;

/**
 * self
 */
class Pie3D extends AbstractType implements ComparableInterface
{
    /**
     * Explosion of the Pie3D
     *
     * @var integer
     */
    protected $explosion = 0;

    /**
     * Create a new self instance
     */
    public function __construct()
    {
        $this->hasAxisX = false;
        $this->hasAxisY = false;
    }

    /**
     * Set explosion
     *
     * @param integer $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Type\Bar3D
     */
    public function setExplosion($value = 0)
    {
        $this->explosion = $value;
        return $this;
    }
    
    /**
     * Get orientation
     *
     * @return string
     */
    public function getExplosion()
    {
        return $this->explosion;
    }
    
    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        $hash = '';
        foreach ($this->getData() as $series) {
            $hash .= $series->getHashCode();
        }
        return md5($hash . __CLASS__);
    }
}
