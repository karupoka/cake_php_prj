<?php



function returnJson($resultArray) {
    if (array_key_exists('callback', $_GET)) {
        $json = $_GET['callback'] . "(" . json_encode($resultArray) . ");";
    } else {
        $json = json_encode($resultArray);
    }

    header('Content-Type: text/html; charset=utf-8');
    echo  $json;
    exit(0);
}




$type = $_REQUEST['pokemon'];

// file_put_contents("./tmp/test.log","### START oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↓↓↓\n",FILE_APPEND);
// file_put_contents("./tmp/test.log", print_r($_REQUEST, true) ."\n",FILE_APPEND);
// file_put_contents("./tmp/test.log","### E N D oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↑↑↑\n",FILE_APPEND);

$pokemon_list = [];
$result = [];


try {
    if(empty($type)) {
        throw new RunTimeExeption('no Pokemon...');
    }
    
    switch($type) {
        case 'p':
        case 'pikachu':
            $pokemon_list = [
                ['name'=>'ピカチュウ','comment'=>'ピカチュウだどん']
            ];
            break;
        case 'h':
        case 'husigidane':
            $pokemon_list = [
                ['name' => 'フシギダネ', 'comment'=>'フシギダネだどん'],
                ['name' => 'メガフシギダネ', 'comment'=>'メガフシギダネだどん']
            ];
                break;
        case 't':
        case 'teppouo':
            $pokemon_list = [
                ['name' => 'テッポウオ１', 'comment'=>'テッポウオ１だどん'],
                ['name' => 'テッポウオ２', 'comment'=>'テッポウオ２だどん'],
                ['name' => 'テッポウオ３', 'comment'=>'テッポウオ３だどん'],
                ['name' => 'テッポウオ４', 'comment'=>'テッポウオ４だどん'],
                ['name' => 'テッポウオ５', 'comment'=>'テッポウオ５だどん'],
            ];
            break;
        default:
            throw new RunTimeExeption('Invald value ...');
            break;
        
    }
    
    if (empty($pokemon_list)) {
        header("HTTP/1.1 400 Bad Reques");
        exit(0);
    }
    
    $result = [
        'pokemons' => $pokemon_list
    ];
    
    returnJson($result);
} catch (RuntimeException $e) {
    header("HTTP/1.1 400 Bad Reques");
    exit(0);
} catch (Exception $e) {
    header("HTTP/1.1 500 Internal Server Error");
    exit(0);
}