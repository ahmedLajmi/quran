<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\Soura;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use League\Csv\Exception;
use League\Csv\Reader;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AppFixtures extends Fixture
{

    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params=$params;
    }

    public function load(ObjectManager $manager)
    {
        // file format (order,name,place,number,orderDown,pages)
        $baseUrl = "http://tajweed-qr.com/voice/Qal/Andari/";
        $webPath = $this->params->get('kernel.project_dir');
        $reader = Reader::createFromPath($webPath.'/public/initialisation/data.csv');
        try {
            $reader->setDelimiter(',');
            $records = $reader->getRecords(["order","name","place","number","orderDown","pages"]);
            foreach ($records as $record){
                $soura = new Soura();
                $soura->setName($record["name"]);
                $soura->setNumber(intval($record["number"]));
                $soura->setPlace($record["place"]);
                $soura->setOrderDown(intval($record["orderDown"]));
                $soura->setOrderBook(intval($record["order"]));
                $pages = explode('!', $record["pages"]);
                for($i=intval($pages[0]);$i<=intval($pages[1]);$i++){
                    $pageEntity = new Page();
                    $pageEntity->setNumber($i);
                    if($i<10){
                        $url=$baseUrl."00".$i.".mp3";
                    }
                    elseif ($i<100){
                        $url=$baseUrl."0".$i.".mp3";
                    }
                    else{
                        $url=$baseUrl.$i.".mp3";
                    }
                    $pageEntity->setUrl($url);
                    $soura->addPage($pageEntity);
                }
                $manager->persist($soura);
            }
        } catch (Exception $e) {
        }

        $manager->flush();
    }
}
