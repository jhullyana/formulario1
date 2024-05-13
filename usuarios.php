<?php 

$usuarios= [
    ["usu" => "jhu12", "nome" => "jhullyana", "senha" => "123"],
    ["usu" => "turek", "nome" => "christian", "senha" => "321"],
    ["usu" => "felipe48", "nome" => "felipe", "senha" => "A7d@"]
];

function verUsuarios($usr, $sen ){
    
    global $usuarios;
    // echo "$usr -- $sen <br>";
    // echo "testando usuario -- ";
    
    for ($i=0; $i < count($usuarios); $i++) { 
        // echo "<br>" . print_r($usuarios[$i]);
        if($usuarios[$i]["usu"] == $usr){
            // echo "usuario igual --";
            if($usuarios[$i]["senha"] == $sen){
                // echo "senha igual --";
                $nome = $usuarios[$i];
                return true;
            }else {
                // echo "senha não --";
            }
        }
        
    }
    
    return false;

}



?>