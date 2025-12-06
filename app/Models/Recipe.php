<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Recipe extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia; // <--- Adiciona os métodos do Spatie (addMedia, getFirstMediaUrl, etc)

    // Campos que podem ser preenchidos em massa (segurança)
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'ingredients', // Sugestão: salvar como JSON no banco
        'instructions',
        'preparation_time', // Ex: Em minutos
        'servings',         // Ex: "4 pessoas"
    ];

    // Conversão automática de dados
    protected $casts = [
        'ingredients' => 'array', // Converte JSON do banco para Array no PHP automaticamente
        'preparation_time' => 'integer',
    ];

    /**
     * Configuração do Spatie Media Library
     * Aqui definimos, por exemplo, que ao enviar uma foto,
     * queremos criar automaticamente uma miniatura de 150x150.
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10);

        // Você pode adicionar outras conversões, ex: 'banner'
        $this->addMediaConversion('card')
            ->width(400)
            ->height(300);
    }

    /**
     * A receita pertence a um dono (User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
