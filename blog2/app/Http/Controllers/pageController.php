<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller{

    private $articles;

    
    public function __construct()
    {
        $this->articles = [
            [
                'title' => 'pera', 
                'description' => "Il nostro succo di pera è creato utilizzando le migliori pere coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, fondata nel 1732, si impegna a garantire la massima qualità e il rispetto per l'ambiente in ogni fase del processo di produzione.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas comunes'
            ],
            [
                'title' => 'mela', 
                'description' => "Il nostro succo di mela viene prodotto con mele raccolte dalle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda si dedica alla produzione di succhi di frutta di alta qualità, mantenendo un forte impegno per l'agricoltura sostenibile.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas comunes'
            ],
            [
                'title' => 'fragola', 
                'description' => "Il nostro succo di fragola è realizzato con fragole fresche provenienti dalle nostre coltivazioni interamente organiche. Fondata nel 1732, la nostra azienda è sinonimo di qualità e tradizione nella produzione di succhi di frutta naturali.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas comunes'
            ],
            [
                'title' => 'banana', 
                'description' => "Il nostro succo di banana è ottenuto dalle migliori banane delle nostre piantagioni completamente biologiche. Dal 1732, la nostra azienda garantisce prodotti naturali e sani, rispettando l'ambiente e la tradizione.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas comunes'
            ],
            [
                'title' => 'ananas', 
                'description' => "Il nostro succo di ananas è creato con ananas raccolti a mano dalle nostre piantagioni interamente organiche. Fondata nel 1732, la nostra azienda è un simbolo di eccellenza e sostenibilità nella produzione di succhi di frutta.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas tropicales'
            ],
            [
                'title' => 'mix di frutta', 
                'description' => "Il nostro succo di mix di frutta combina il meglio delle nostre coltivazioni organiche. Dal 1732, ci impegniamo a fornire prodotti naturali e di alta qualità, rispettando l'ambiente e le tradizioni familiari.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas tropicales'
            ],
            [
                'title' => 'ciliegia', 
                'description' => "Il nostro succo di ciliegia è prodotto con ciliegie coltivate nelle nostre piantagioni totalmente organiche. La nostra azienda, attiva dal 1732, è sinonimo di qualità, tradizione e rispetto per l'ambiente.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas especiales'
            ],
            [
                'title' => 'uva', 
                'description' => "Il nostro succo di uva è fatto con uve selezionate dalle nostre coltivazioni completamente biologiche. Fondata nel 1732, la nostra azienda si dedica alla produzione di succhi naturali di alta qualità, preservando l'ambiente.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas especiales'
            ],
            [
                'title' => 'limone', 
                'description' => "Il nostro succo di limone viene creato utilizzando limoni provenienti dalle nostre piantagioni interamente organiche. Dal 1732, la nostra azienda produce succhi di frutta naturali e di alta qualità, con un impegno costante per la sostenibilità e la tradizione.", 
                'valoracion' => str_repeat('☆', rand(1, 5)),
                "imagen" => "img/download.jpg",
                'visible' => true,
                'category' => 'frutas especiales'
            ]
        ];
        
        
    }

    public function welcome(){
        return view("welcome");
    }

    public function articoli(){

        return view('articoli', ['article' => $this -> articles]);

    }

    public function articolo($id)
    {    
        if(! array_key_exists($id, $this->articles)) {
            abort(404); // questa funzione restituisce una pagina di errore 404
        }
    
        $article = $this->articles[$id];
    
        return view('articolo', ['article' => $article  ]);

    }

    public function chiSiamo()
    {
        return view('chi-siamo');   
    }
};
