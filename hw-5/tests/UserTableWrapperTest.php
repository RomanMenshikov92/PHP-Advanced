<?php
declare(strict_types= 1);

namespace tests;

use src\classes\UserTableWrapper;
use PHPUnit\Framework\TestCase;

class UserTableWrapperTest extends TestCase {
    // test insert
    /**
     * @param $values
     * @dataProvider providerInsert
    */
    public function testInsert($values)
    {
        $wrapper = new UserTableWrapper();
        $wrapper->insert($values);
        $this->assertCount(1, $wrapper->get());
    }
    public static function providerInsert(): array
    {
        return [
           'test1' => [['id' => 1, 'name' => 'Роман']],
           'test2' => [['id' => 2, 'name' => 'Раиса']]
        ];
    }

    // test update
    /**
     * @param int $id
     * @param array $values
     * @dataProvider providerUpdate
     */
    public function testUpdate(int $id, array $values)
    {
        $wrapper = new UserTableWrapper();
        $wrapper->insert(['id' => 1, 'name' => 'Роман']);
        $updatedRow = $wrapper->update($id, $values);
        $this->assertEquals($values, $updatedRow);
    }
    public static function providerUpdate(): array
    {
        return [
            'test1' => [1, ['id' => 1, 'name' => 'Римма']],
            'test2' => [1, ['id' => 1, 'name' => 'Римма', 'age' => 25]]
        ];
    }

    // test delete
    /**
     * @param int $id
     * @dataProvider providerDelete
     */
    public function testDelete(int $id)
    {
        $wrapper = new UserTableWrapper();
        $wrapper->insert(['id' => 1, 'name' => 'Роман']);
        $wrapper->insert(['id' => 2, 'name' => 'Раиса']);
        $wrapper->delete($id);
        $this->assertCount(1, $wrapper->get());
    }
    
    public static function providerDelete(): array
    {
        return [
            'test1' => [1],
            'test2' => [2]
        ];
    }

    // test get
    public function testGet()
    {
        $wrapper = new UserTableWrapper();
        $wrapper->insert(['id' => 1, 'name' => 'Роман']);
        $wrapper->insert(['id' => 2, 'name' => 'Раиса']);
        $rows = $wrapper->get();
        $this->assertCount(2, $rows);
        $this->assertEquals(['id' => 1, 'name' => 'Роман'], $rows[0]);
        $this->assertEquals(['id' => 2, 'name' => 'Раиса'], $rows[1]);
    }

}

?>