<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.03.2019
 * Time: 9:18
 */


/*$news = array('href'=>"//div[contains(@class, 'news-list-item')]/div/div/div/a/@href");
$data = getData('https://mstrok.ru/news',$news);
print_r($data);*/

/*
 * url - сайт откуда берем контет
 * xpath_str  - пути до элемента который хотим извлеч масив ключ=>путь
 * $links = array('links'=>'/html/body/main/section[1]/div/a/@href');
 * type - textContent | nodeValue на ваш вкус
*/


function getData($url, $xpath_str, $type = 'textContent')
{


    $retUrndata = array();

    mb_internal_encoding("UTF-8");
    libxml_use_internal_errors(true);

    $urlData = file_get_contents($url);

    $doc = new DOMDocument();
    $doc->loadHTML(mb_convert_encoding($urlData, 'HTML-ENTITIES', 'UTF-8'));


    $xpath = new DOMXpath($doc);

    foreach ($xpath_str as $k => $xp) {
        $query = $xpath->query($xp);

        if ($query->length) {


            if ($query->length == 1) {
                //One child
                $retUrndata[$k] = trim($query->item(0)->$type);
            } else {
                //Array items
                foreach ($query as $item) {
                    //var_dump($item).exit;
                    $retUrndata[$k][] = trim($item->$type);
                    //prefix _html - full innerhtml
                    $retUrndata[$k.'_html'][] = trim($doc->saveHTML($item));
                }

            }


        } else {
            $retUrndata[$k][] =  "Не найдено сопоставление $xp";
        }
    }


    return $retUrndata;

}
