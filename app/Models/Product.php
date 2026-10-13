<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria',
        'imagen',
        'stock',
        'rating',
        'destacado',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'precio' => 'decimal:2',
            'stock' => 'integer',
            'rating' => 'float',
            'destacado' => 'boolean',
        ];
    }

    /**
     * English aliases for Spanish attributes for developer flexibility.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->nombre,
            set: fn (?string $value): array => ['nombre' => $value],
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->descripcion,
            set: fn (?string $value): array => ['descripcion' => $value],
        );
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->precio,
            set: fn ($value): array => ['precio' => $value],
        );
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->imagen,
            set: fn (?string $value): array => ['imagen' => $value],
        );
    }

    protected function category(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->categoria,
            set: fn (?string $value): array => ['categoria' => $value],
        );
    }
}
