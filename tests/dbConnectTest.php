<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use App\connectDb;

class dbConnectTest extends TestCase
{
    public function test_connect_to_db()
    {
        $conn = new connectDb; // Instanciamos un objecto de la clase connectDB
        /** Verificamos si lo que nos entrega la variable
         * 'conn' de la clase 'connectDb.php' (connectDB::conn) es un objecto
         *  si es asi el test nos dira si es correcto sino da correcto pruebe activando
         *  el servidor y mysql
         * */
        $this->assertIsObject($conn->connects());
    }
}