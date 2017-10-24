<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Authentication\Identifier\Resolver;

interface ResolverInterface
{

    const TYPE_OR = 'OR';
    const TYPE_AND = 'AND';

    /**
     * Returns identity with given conditions.
     *
     * @param array $conditions Find conditions.
     * @param string $type Condition type. Can be `AND` or `OR`.
     * @return \ArrayAccess|array|null
     */
    public function find(array $conditions, $type = self::TYPE_AND);
}