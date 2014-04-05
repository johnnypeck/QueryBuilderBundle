<?php
/**
 * File containing the LocationPriority SortClause API test.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace EzSystems\QueryBuilderBundle\eZ\Publish\API\QueryBuilder\Tests\SortClause;

class MapLocationDistanceTest extends SortClauseTest
{
    public function setUp()
    {
        self::markTestSkipped( "@todo Fix MapLocationDistanceTest" );
    }

    protected function getMethod()
    {
        return 'mapLocationDistance';
    }
}
