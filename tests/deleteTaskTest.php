<?php
declare(strict_types=1); 
// Con esto solo permitimos que se le pasen params a las funciones del tipo que solo nosotros deseemos que se pasen
use PHPUnit\Framework\TestCase; // Instanciamos Suite TestCase
use App\deleteTask; // Invocamos su clase original deleteTask

class deleteTaskTest extends TestCase
{
    public function test_delete_task_to_database()
    {
        $delete_task = new deleteTask;
        $this->assertTrue($delete_task->testDelete(2,9));
    }
}