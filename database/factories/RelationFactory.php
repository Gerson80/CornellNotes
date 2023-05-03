<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Subject;
use App\Models\Relation;

class RelationFactory extends Factory
{
    protected $model = Relation::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $subject = Subject::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'subject_id' => $subject->id,
        ];
    }
}