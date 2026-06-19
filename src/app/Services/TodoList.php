<?php

namespace App\Services;

class TodoList
{
    private array $todos = [];

    /**
     * Todoを追加する
     */
    public function add(string $title): void
    {
        $this->todos[] = [
            'title' => $title,
            'completed' => false,
        ];
    }

    /**
     * 全てのTodoを取得する
     */
    public function getAll(): array
    {
        return $this->todos;
    }
    /**
    * Todoを完了にする
     */
    public function complete(int $index): void
    {
        if (isset($this->todos[$index])) {
            $this->todos[$index]['completed'] = true;
        }
    }
}