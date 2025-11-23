<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $quizzes = [

        // 1. MATEMATYKA
        1 => [
            'title' => 'Matematyka',
            'questions' => [
                ['question' => 'Ile to 12 × 8?', 'answers' => ['96', '84', '108'], 'correct' => 0],
                ['question' => 'Pierwiastek z 144 to:', 'answers' => ['10', '12', '14'], 'correct' => 1],
                ['question' => 'Ile to 15% z 200?', 'answers' => ['20', '30', '40'], 'correct' => 1],
                ['question' => 'Która liczba jest pierwsza?', 'answers' => ['21', '23', '25'], 'correct' => 1],
                ['question' => 'Ile to 3² + 4²?', 'answers' => ['25', '7', '13'], 'correct' => 0],
                ['question' => 'Ile to 100 / 4?', 'answers' => ['20', '25', '30'], 'correct' => 1],
                ['question' => 'Ile to 7×7?', 'answers' => ['42', '49', '56'], 'correct' => 1],
                ['question' => 'Liczba π to około:', 'answers' => ['2.14', '3.14', '4.14'], 'correct' => 1],
                ['question' => 'Najmniejsza liczba naturalna to:', 'answers' => ['0', '1', '-1'], 'correct' => 0],
                ['question' => 'Ile to 9⁰?', 'answers' => ['0', '1', '9'], 'correct' => 1],
            ]
        ],

        // 2. BIOLOGIA
        2 => [
            'title' => 'Biologia',
            'questions' => [
                ['question' => 'Podstawowa jednostka życia to:', 'answers' => ['Komórka', 'Atom', 'Białko'], 'correct' => 0],
                ['question' => 'Proces oddychania odbywa się w:', 'answers' => ['Mitochondriach', 'Jądrze', 'Chloroplaście'], 'correct' => 0],
                ['question' => 'DNA znajduje się w:', 'answers' => ['Mitochondriach', 'Jądrze komórkowym', 'Rybosomach'], 'correct' => 1],
                ['question' => 'Fotosynteza zachodzi w:', 'answers' => ['Liściach', 'Korzeniach', 'Łodygach'], 'correct' => 0],
                ['question' => 'Ludzkie serce ma komór:', 'answers' => ['2', '4', '6'], 'correct' => 1],
                ['question' => 'Krew transportuje:', 'answers' => ['Tlen', 'Cukier', 'Wszystkie odpowiedzi'], 'correct' => 2],
                ['question' => 'Rośliny to:', 'answers' => ['Heterotrofy', 'Autotrofy', 'Pasożyty'], 'correct' => 1],
                ['question' => 'Układ nerwowy składa się z mózgu i:', 'answers' => ['Serca', 'Rdzenia kręgowego', 'Żołądka'], 'correct' => 1],
                ['question' => 'Największy organ człowieka to:', 'answers' => ['Skóra', 'Wątroba', 'Płuca'], 'correct' => 0],
                ['question' => 'Krwinki czerwone nazywamy:', 'answers' => ['Erytrocyty', 'Leukocyty', 'Trombocyty'], 'correct' => 0],
            ]
        ],

        // 3. CHEMIA
        3 => [
            'title' => 'Chemia',
            'questions' => [
                ['question' => 'Wzór wody to:', 'answers' => ['CO₂', 'H₂O', 'O₂'], 'correct' => 1],
                ['question' => 'Atom składa się z:', 'answers' => ['Elektronów', 'Protonów', 'Elektronów, protonów i neutronów'], 'correct' => 2],
                ['question' => 'pH=7 oznacza roztwór:', 'answers' => ['Kwaśny', 'Obojętny', 'Zasadowy'], 'correct' => 1],
                ['question' => 'Sól kuchenna to:', 'answers' => ['NaCl', 'HCl', 'KCl'], 'correct' => 0],
                ['question' => 'Gaz szlachetny to:', 'answers' => ['Tlen', 'Hel', 'Wodór'], 'correct' => 1],
                ['question' => 'H₂SO₄ to:', 'answers' => ['Kwas solny', 'Kwas siarkowy', 'Kwas azotowy'], 'correct' => 1],
                ['question' => 'Cząsteczka CO₂ ma ile atomów?', 'answers' => ['2', '3', '4'], 'correct' => 1],
                ['question' => 'Stan skupienia lodu to:', 'answers' => ['Ciekły', 'Gazowy', 'Stały'], 'correct' => 2],
                ['question' => 'Substancje stałe mają:', 'answers' => ['Stały kształt', 'Dowolny kształt', 'Żaden'], 'correct' => 0],
                ['question' => 'Najlżejszy pierwiastek to:', 'answers' => ['Tlen', 'Hel', 'Wodór'], 'correct' => 2],
            ]
        ],

        // 4. GEOGRAFIA
        4 => [
            'title' => 'Geografia',
            'questions' => [
                ['question' => 'Największy ocean:', 'answers' => ['Spokojny', 'Atlantycki', 'Indyjski'], 'correct' => 0],
                ['question' => 'Najwyższa góra świata:', 'answers' => ['K2', 'Mount Everest', 'Mont Blanc'], 'correct' => 1],
                ['question' => 'Najdłuższa rzeka:', 'answers' => ['Nil', 'Amazonka', 'Jangcy'], 'correct' => 1],
                ['question' => 'Europa jest:', 'answers' => ['Kontynentem', 'Krajem', 'Miastem'], 'correct' => 0],
                ['question' => 'Największa pustynia:', 'answers' => ['Sahara', 'Gobi', 'Takla Makan'], 'correct' => 0],
                ['question' => 'W Polsce mamy klimat:', 'answers' => ['Równikowy', 'Umiarkowany', 'Polarny'], 'correct' => 1],
                ['question' => 'Największe jezioro:', 'answers' => ['Bajkał', 'Caspian', 'Ontario'], 'correct' => 1],
                ['question' => 'Najludniejszy kraj:', 'answers' => ['Indie', 'USA', 'Chiny'], 'correct' => 2],
                ['question' => 'Czarny Ląd to:', 'answers' => ['Ameryka', 'Afryka', 'Europa'], 'correct' => 1],
                ['question' => 'Stolica Japonii:', 'answers' => ['Osaka', 'Seul', 'Tokio'], 'correct' => 2],
            ]
        ],

        // 5. FIZYKA
        5 => [
            'title' => 'Fizyka',
            'questions' => [
                ['question' => 'Jednostka siły to:', 'answers' => ['J', 'N', 'W'], 'correct' => 1],
                ['question' => 'Światło to:', 'answers' => ['Fala', 'Cząstka', 'Obie odpowiedzi'], 'correct' => 2],
                ['question' => 'Prędkość światła to ok.:', 'answers' => ['300 km/s', '300 000 km/s', '3 000 km/s'], 'correct' => 1],
                ['question' => 'Grawitację opisał:', 'answers' => ['Einstein', 'Newton', 'Tesla'], 'correct' => 1],
                ['question' => 'Praca to:', 'answers' => ['F·s', 'U·I', 'F·d'], 'correct' => 2],
                ['question' => 'Czym mierzymy temperaturę?', 'answers' => ['Barometrem', 'Termometrem', 'Watomierzem'], 'correct' => 1],
                ['question' => '1 kWh to jednostka:', 'answers' => ['Energii', 'Siły', 'Ładunku'], 'correct' => 0],
                ['question' => 'Ładunek elektronu jest:', 'answers' => ['Dodatni', 'Ujemny', 'Żaden'], 'correct' => 1],
                ['question' => 'Zjawisko odbicia dotyczy:', 'answers' => ['Światła', 'Ciepła', 'Dźwięku'], 'correct' => 0],
                ['question' => 'Najniższa możliwa temperatura:', 'answers' => ['-273.15°C', '0°C', '-100°C'], 'correct' => 0],
            ]
        ],

            6 => [
        'title' => 'Historia',
        'questions' => [
            ['question' => 'W którym roku rozpoczęła się II wojna światowa?', 'answers' => ['1914', '1939', '1945'], 'correct' => 1],
            ['question' => 'W którym roku upadło Cesarstwo Zachodniorzymskie?', 'answers' => ['476', '966', '1410'], 'correct' => 0],
            ['question' => 'Chrzest Polski miał miejsce w roku:', 'answers' => ['966', '1025', '1410'], 'correct' => 0],
            ['question' => 'Bitwa pod Grunwaldem odbyła się w roku:', 'answers' => ['1410', '1492', '1683'], 'correct' => 0],
            ['question' => 'Powstanie listopadowe wybuchło w roku:', 'answers' => ['1794', '1830', '1863'], 'correct' => 1],
            ['question' => 'Pierwszym królem Polski był:', 'answers' => ['Mieszko I', 'Bolesław Chrobry', 'Kazimierz Wielki'], 'correct' => 1],
            ['question' => 'Które państwo rozbiorowe NIE brało udziału w I rozbiorze Polski?', 'answers' => ['Prusy', 'Rosja', 'Włochy'], 'correct' => 2],
            ['question' => 'Konstytucja 3 maja została uchwalona w roku:', 'answers' => ['1791', '1815', '1918'], 'correct' => 0],
            ['question' => 'Solidarność powstała w roku:', 'answers' => ['1968', '1980', '1989'], 'correct' => 1],
            ['question' => 'Które miasto było stolicą II Rzeczypospolitej?', 'answers' => ['Kraków', 'Warszawa', 'Gniezno'], 'correct' => 1],
        ],
    ],

    ];

    public function index() {
        return view('quizzes.index', ['quizzes' => $this->quizzes]);
    }

    public function show($id) {
        if (!isset($this->quizzes[$id])) {
            abort(404);
        }

        return view('quizzes.show', [
            'quiz' => $this->quizzes[$id],
            'id' => $id
        ]);
    }
}
