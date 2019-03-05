
**# domxpath-parser-php**


    $news = array('href'=>"//div[contains(@class, 'news-list-item')]/div/div/div/a/@href");
	$data = getData('https://mstrok.ru/news',$news);
	print_r($data);

//Return data

    Array
    (
        [href] => Array
            (
                [0] => /news/deystvitelno-reshaet-abonent-nastraivayte-sami-minuty-i-gigabayty-na-tarife
                [1] => /news/vodokanal-nt-oproverg-sluhi-o-stroitelstve-novogo-shlamonakopitelya-v-chernoistochinske
                [2] => /news/minfin-podderzhal-iniciativu-vvesti-minimalnuyu-roznichnuyu-cenu-na-pivo
                [3] => /news/navalnyy-hochet-pomoch-rabochim-uralvagonzavoda-suditsya-iz-za-nizkih-zarplat-video
                [4] => /news/sudmedeksperty-ustanovili-tochnuyu-prichinu-smerti-11-letney-shkolnicy-iz-nizhnego-tagila
                [5] => /news/vokalist-prodigy-kit-flint-pokonchil-s-soboy
                [6] => /news/iz-za-slomannyh-vesov-musorovozy-tagilspectransa-ezdyat-na-poligon-rogozhino-bez-vzveshivaniya
                [7] => /news/putin-podpisal-ukaz-o-priostanovke-drsmd
                [8] => /news/glava-kurgana-sergey-rudenko-ushyol-v-otstavku
                [9] => /news/pyateryh-sotrudnikov-fbk-vyzvali-na-dopros-po-delu-byvshego-direktora-fonda-romana-rubanova
            )
    
    )
