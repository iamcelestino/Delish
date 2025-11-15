<?php 
declare(strict_types=1);

namespace App\Contracts;

interface BaseInterface
{
    public function where(string $column, string $value): array|object;
    public function first(string $column, string $value): array|object;
    public function all():array|object|bool;
    public function insert(array $data): bool;
    public function update(mixed $id, array $data);
    public function delete(int|string $id);
    public function lastInsertedId(): string|int;
    public function beginTransation(): void;
    public function commit(): void;
    public function rollBack(): void;
}
