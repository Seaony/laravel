<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return array
     */
    public function transform(Model $model)
    {
        return [
            'id'         => $model->id,
            'name'       => $model->name,
            'avatar'     => $model->avatar,
            'email'      => $model->email,
            'created_at' => (string) $model->created_at,
        ];
    }
}
