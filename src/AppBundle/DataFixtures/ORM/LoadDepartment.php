<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Department;

/**
 * Class LoadDepartment
 * Load data fixtures
 *
 * @package AppBundle\DataFixtures\ORM
 */
class LoadDepartment extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * @var array
     */
    private $departments = [
        [ 'name'    =>  'Ain'                       ,   'code'  =>  '01'    ],
        [ 'name'    =>  'Aisne'                     ,   'code'  =>  '02'    ],
        [ 'name'    =>  'Allier'                    ,   'code'  =>  '03'    ],
        [ 'name'    =>  'Alpes de Hautes-Provence'  ,   'code'  =>  '04'    ],
        [ 'name'    =>  'Hautes-Alpes'              ,   'code'  =>  '05'    ],
        [ 'name'    =>  'Alpes-Maritimes'           ,   'code'  =>  '06'    ,   'reference' =>  '06'    ],
        [ 'name'    =>  'Ardèche'                   ,   'code'  =>  '07'    ],
        [ 'name'    =>  'Ardennese'                 ,   'code'  =>  '08'    ],
        [ 'name'    =>  'Ariège'                    ,   'code'  =>  '09'    ],
        [ 'name'    =>  'Aube'                      ,   'code'  =>  '10'    ],
        [ 'name'    =>  'Aude'                      ,   'code'  =>  '11'    ],
        [ 'name'    =>  'Aveyron'                   ,   'code'  =>  '12'    ],
        [ 'name'    =>  'Bouches-du-Rhônes'         ,   'code'  =>  '13'    ],
        [ 'name'    =>  'Calvados'                  ,   'code'  =>  '14'    ],
        [ 'name'    =>  'Cantal'                    ,   'code'  =>  '15'    ],
        [ 'name'    =>  'Charente'                  ,   'code'  =>  '16'    ],
        [ 'name'    =>  'Charente-Maritime'         ,   'code'  =>  '17'    ],
        [ 'name'    =>  'Cher'                      ,   'code'  =>  '18'    ],
        [ 'name'    =>  'Corrèze'                   ,   'code'  =>  '19'    ],
        [ 'name'    =>  'Corse-du-Sud'              ,   'code'  =>  '2A'    ],
        [ 'name'    =>  'Corse-du-Nord'             ,   'code'  =>  '2B'    ],
        [ 'name'    =>  'Côte-d\'Or'                ,   'code'  =>  '21'    ],
        [ 'name'    =>  'Côtes d\'Armor'            ,   'code'  =>  '22'    ],
        [ 'name'    =>  'Creuse'                    ,   'code'  =>  '23'    ],
        [ 'name'    =>  'Dordogne'                  ,   'code'  =>  '24'    ],
        [ 'name'    =>  'Doubs'                     ,   'code'  =>  '25'    ],
        [ 'name'    =>  'Drôme'                     ,   'code'  =>  '26'    ],
        [ 'name'    =>  'Eure'                      ,   'code'  =>  '27'    ],
        [ 'name'    =>  'Eure-Et-Loire'             ,   'code'  =>  '28'    ],
        [ 'name'    =>  'Finistère'                 ,   'code'  =>  '29'    ],
        [ 'name'    =>  'Gard'                      ,   'code'  =>  '30'    ],
        [ 'name'    =>  'Haute-Garonne'             ,   'code'  =>  '31'    ,   'reference' =>  '31'    ],
        [ 'name'    =>  'Gers'                      ,   'code'  =>  '32'    ],
        [ 'name'    =>  'Gironde'                   ,   'code'  =>  '33'    ],
        [ 'name'    =>  'Hérault'                   ,   'code'  =>  '34'    ],
        [ 'name'    =>  'Ille-et-Vilaine'           ,   'code'  =>  '35'    ],
        [ 'name'    =>  'Indre'                     ,   'code'  =>  '36'    ],
        [ 'name'    =>  'Indre-et-Loire'            ,   'code'  =>  '37'    ],
        [ 'name'    =>  'Isère'                     ,   'code'  =>  '38'    ],
        [ 'name'    =>  'Jura'                      ,   'code'  =>  '39'    ],
        [ 'name'    =>  'Landes'                    ,   'code'  =>  '40'    ],
        [ 'name'    =>  'Loir-et-Cher'              ,   'code'  =>  '41'    ],
        [ 'name'    =>  'Loir'                      ,   'code'  =>  '42'    ],
        [ 'name'    =>  'Haute-Loire'               ,   'code'  =>  '43'    ],
        [ 'name'    =>  'Loire-Atlantique'          ,   'code'  =>  '44'    ],
        [ 'name'    =>  'Loiret'                    ,   'code'  =>  '45'    ],
        [ 'name'    =>  'Lot'                       ,   'code'  =>  '46'    ],
        [ 'name'    =>  'Lot-et-Garonne'            ,   'code'  =>  '47'    ],
        [ 'name'    =>  'Lozère'                    ,   'code'  =>  '48'    ],
        [ 'name'    =>  'Maine-et-Loire'            ,   'code'  =>  '49'    ],
        [ 'name'    =>  'Manche'                    ,   'code'  =>  '50'    ],
        [ 'name'    =>  'Marne'                     ,   'code'  =>  '51'    ],
        [ 'name'    =>  'Haute-Marne'               ,   'code'  =>  '52'    ],
        [ 'name'    =>  'Mayenne'                   ,   'code'  =>  '53'    ],
        [ 'name'    =>  'Meurthe-et-Moselle'        ,   'code'  =>  '54'    ],
        [ 'name'    =>  'Meuse'                     ,   'code'  =>  '55'    ],
        [ 'name'    =>  'Morbihan'                  ,   'code'  =>  '56'    ],
        [ 'name'    =>  'Moselle'                   ,   'code'  =>  '57'    ],
        [ 'name'    =>  'Nièvre'                    ,   'code'  =>  '58'    ],
        [ 'name'    =>  'Nord'                      ,   'code'  =>  '59'    ],
        [ 'name'    =>  'Oise'                      ,   'code'  =>  '60'    ],
        [ 'name'    =>  'Orne'                      ,   'code'  =>  '61'    ],
        [ 'name'    =>  'Pas-de-Calais'             ,   'code'  =>  '62'    ],
        [ 'name'    =>  'Puy-de-Dôme'               ,   'code'  =>  '63'    ],
        [ 'name'    =>  'Pyrénées-Atlantiques'      ,   'code'  =>  '64'    ],
        [ 'name'    =>  'Hautes-Pyrénées'           ,   'code'  =>  '65'    ],
        [ 'name'    =>  'Pyrénées-Orientales'       ,   'code'  =>  '66'    ],
        [ 'name'    =>  'Bas-Rhin'                  ,   'code'  =>  '67'    ],
        [ 'name'    =>  'Haut-Rhin'                 ,   'code'  =>  '68'    ],
        [ 'name'    =>  'Rhône'                     ,   'code'  =>  '69'    ],
        [ 'name'    =>  'Haute-Saône'               ,   'code'  =>  '70'    ],
        [ 'name'    =>  'Saône-et-Loire'            ,   'code'  =>  '71'    ],
        [ 'name'    =>  'Sarthe'                    ,   'code'  =>  '72'    ],
        [ 'name'    =>  'Savoie'                    ,   'code'  =>  '73'    ],
        [ 'name'    =>  'Haute-Savoie'              ,   'code'  =>  '74'    ],
        [ 'name'    =>  'Paris'                     ,   'code'  =>  '75'    ],
        [ 'name'    =>  'Seine-Maritime'            ,   'code'  =>  '76'    ],
        [ 'name'    =>  'Seine-et-Marne'            ,   'code'  =>  '77'    ],
        [ 'name'    =>  'Yvelines'                  ,   'code'  =>  '78'    ],
        [ 'name'    =>  'Deux-Sèvres'               ,   'code'  =>  '79'    ],
        [ 'name'    =>  'Somme'                     ,   'code'  =>  '80'    ],
        [ 'name'    =>  'Tarn'                      ,   'code'  =>  '81'    ],
        [ 'name'    =>  'Tarn-et-Garonne'           ,   'code'  =>  '82'    ],
        [ 'name'    =>  'Var'                       ,   'code'  =>  '83'    ],
        [ 'name'    =>  'Vaucluse'                  ,   'code'  =>  '84'    ],
        [ 'name'    =>  'Vendée'                    ,   'code'  =>  '85'    ],
        [ 'name'    =>  'Vienne'                    ,   'code'  =>  '86'    ],
        [ 'name'    =>  'Haute-Vienne'              ,   'code'  =>  '87'    ],
        [ 'name'    =>  'Vosges'                    ,   'code'  =>  '88'    ],
        [ 'name'    =>  'Yonne'                     ,   'code'  =>  '89'    ],
        [ 'name'    =>  'Territoire-de-Belfort'     ,   'code'  =>  '90'    ],
        [ 'name'    =>  'Essonne'                   ,   'code'  =>  '91'    ],
        [ 'name'    =>  'Hauts-de-Seine'            ,   'code'  =>  '92'    ],
        [ 'name'    =>  'Seine-Saint-Denis'         ,   'code'  =>  '93'    ],
        [ 'name'    =>  'Val-de-Marne'              ,   'code'  =>  '94'    ],
        [ 'name'    =>  'Val-d\'Oise'               ,   'code'  =>  '95'    ],
        [ 'name'    =>  'Guadeloupe'                ,   'code'  =>  '971'   ],
        [ 'name'    =>  'Martinique'                ,   'code'  =>  '972'   ],
        [ 'name'    =>  'Guyane'                    ,   'code'  =>  '973'   ],
        [ 'name'    =>  'La Réunion'                ,   'code'  =>  '974'   ],
        [ 'name'    =>  'Mayotte'                   ,   'code'  =>  '975'   ],
    ];


    /**
     * Set all french deparments
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->departments as $item) {
            $department = new Department();

            $department->setName($item['name']);
            $department->setCode($item['code']);

            if (isset($item['reference'])){
                $this->addReference($item['reference'], $department);
            }

            $manager->persist($department);
        }

        $manager->flush();
    }


    /**
     * Loading order for the data fixtures
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
