<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = "suggi";    
    $articles = [
        [
            'article' => 'pera', 
            'description' => "Il nostro succo di pera è creato utilizzando le migliori pere coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, fondata nel 1732, si impegna a garantire la massima qualità e il rispetto per l'ambiente in ogni fase del processo di produzione.", 
            'visible' => true
        ],
        [
            'article' => 'mela', 
            'description' => "Il nostro succo di mela viene prodotto con mele raccolte dalle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda si dedica alla produzione di succhi di frutta di alta qualità, mantenendo un forte impegno per l'agricoltura sostenibile.", 
            'visible' => true
        ],
        [
            'article' => 'fragola', 
            'description' => "Il nostro succo di fragola è realizzato con fragole fresche provenienti dalle nostre coltivazioni interamente organiche. Fondata nel 1732, la nostra azienda è sinonimo di qualità e tradizione nella produzione di succhi di frutta naturali.", 
            'visible' => true
        ],
        [
            'article' => 'banana', 
            'description' => "Il nostro succo di banana è ottenuto dalle migliori banane delle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda garantisce prodotti naturali e sani, rispettando l'ambiente e la tradizione.", 
            'visible' => true
        ],
        [
            'article' => 'ananas', 
            'description' => "Il nostro succo di ananas è creato con ananas raccolti a mano dalle nostre piantagioni interamente organiche. Fondata nel 1732, la nostra azienda è un simbolo di eccellenza e sostenibilità nella produzione di succhi di frutta.", 
            'visible' => true
        ],
        [
            'article' => 'mix di frutta', 
            'description' => "Il nostro succo di mix di frutta combina il meglio delle nostre coltivazioni organiche. Dal 1732, ci impegniamo a fornire prodotti naturali e di alta qualità, rispettando l'ambiente e le tradizioni familiari.", 
            'visible' => true
        ],
        [
            'article' => 'ciliegia', 
            'description' => "Il nostro succo di ciliegia è prodotto con ciliegie coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, attiva dal 1732, è sinonimo di qualità, tradizione e rispetto per l'ambiente.", 
            'visible' => true
        ],
        [
            'article' => 'uva', 
            'description' => "Il nostro succo di uva è fatto con uve selezionate dalle nostre coltivazioni completamente biologiche. Fondata nel 1732, la nostra azienda si dedica alla produzione di succhi naturali di alta qualità, preservando l'ambiente.", 
            'visible' => true
        ],
        [
            'article' => 'limone', 
            'description' => "Il nostro succo di limone viene creato utilizzando limoni provenienti dalle nostre piantagioni interamente organiche. Dal 1732, la nostra azienda produce succhi di frutta naturali e di alta qualità, con un impegno costante per la sostenibilità e la tradizione.", 
            'visible' => true
        ]
    
    ];

    return view('welcome');

})-> name("welcome") ;


Route::get('/articoli', function () {
  
function randomn() {
    return str_repeat('☆', rand(1, 5));
}

$articles = [
    [
        'article' => 'pera', 
        'description' => "Il nostro succo di pera è creato utilizzando le migliori pere coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, fondata nel 1732, si impegna a garantire la massima qualità e il rispetto per l'ambiente in ogni fase del processo di produzione.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'mela', 
        'description' => "Il nostro succo di mela viene prodotto con mele raccolte dalle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda si dedica alla produzione di succhi di frutta di alta qualità, mantenendo un forte impegno per l'agricoltura sostenibile.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'fragola', 
        'description' => "Il nostro succo di fragola è realizzato con fragole fresche provenienti dalle nostre coltivazioni interamente organiche. Fondata nel 1732, la nostra azienda è sinonimo di qualità e tradizione nella produzione di succhi di frutta naturali.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'banana', 
        'description' => "Il nostro succo di banana è ottenuto dalle migliori banane delle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda garantisce prodotti naturali e sani, rispettando l'ambiente e la tradizione.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'ananas', 
        'description' => "Il nostro succo di ananas è creato con ananas raccolti a mano dalle nostre piantagioni interamente organiche. Fondata nel 1732, la nostra azienda è un simbolo di eccellenza e sostenibilità nella produzione di succhi di frutta.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'mix di frutta', 
        'description' => "Il nostro succo di mix di frutta combina il meglio delle nostre coltivazioni organiche. Dal 1732, ci impegniamo a fornire prodotti naturali e di alta qualità, rispettando l'ambiente e le tradizioni familiari.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'ciliegia', 
        'description' => "Il nostro succo di ciliegia è prodotto con ciliegie coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, attiva dal 1732, è sinonimo di qualità, tradizione e rispetto per l'ambiente.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'uva', 
        'description' => "Il nostro succo di uva è fatto con uve selezionate dalle nostre coltivazioni completamente biologiche. Fondata nel 1732, la nostra azienda si dedica alla produzione di succhi naturali di alta qualità, preservando l'ambiente.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ],
    [
        'article' => 'limone', 
        'description' => "Il nostro succo di limone viene creato utilizzando limoni provenienti dalle nostre piantagioni interamente organiche. Dal 1732, la nostra azienda produce succhi di frutta naturali e di alta qualità, con un impegno costante per la sostenibilità e la tradizione.", 
        'valoracion' => randomn(),
        "imagen" => "img/download.jpg",
        'visible' => true
    ]
];

    return view('articoli', ['article' => $articles]);



})-> name("articoli") ;


Route::get('/contatti', function () {
    return view('contatti');
})-> name("contatti") ;


Route::get('/chi-sono', function () {
    return view('chi siamo');
})-> name("chi-sono") ;


Route::get('/articolo', function () {
    return view('articolo');
})-> name("articolo") ;



