<?php 

class PersonException extends Exception{

    public function getMensaje() {
        return "no hay mensaje";
    }
    public function saludo(){
        return "hola";
    }
}

class Person2Exception extends Exception{
    public function saludo(){
        return "hola2";
    }
}


try{

    $exception = readline("excepcion a lanzar: ");

    if($exception == "persona1"){
        throw new PersonException("Persona incorrecta");
    }else{
        throw new Person2Exception("Persona2 incorrecta");
    }
}catch(PersonException $e){
    echo $e->getMessage()."\n"; 
    echo $e->saludo();
}catch(Person2Exception $e){
    echo $e->getMessage()."\n"; 
    echo $e->saludo();
} finally {
    echo "Final \n";
}
