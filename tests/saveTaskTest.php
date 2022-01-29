<?php
declare(strict_types=1);
// Con esto solo permitimos que se le pasen params a las funciones del tipo que solo nosotros deseemos que se pasen
use PHPUnit\Framework\TestCase; // Invocamos la suite TestCase
use App\saveTask; // Invocamos su clase original desde src

class saveTaskTest extends TestCase
{
    public function test_save_task_to_database()
    {
        $save_task = new saveTask;
        $this->assertTrue($save_task->testSave('Aca un titulo para tu prueba','Una descripcion'));; // debes pasar dos valores en la function testSave(@PARAM1,@PARAM2)
        // testSave('titulo', 'descripcion de la pruba');
    }
}