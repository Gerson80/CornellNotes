<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subject;
use App\Models\Relation;

class RelationSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $subjects = Subject::all();

        foreach ($users as $user) {
            // Asignar una cantidad aleatoria de temas a cada usuario
            $user_subjects = $subjects->random(rand(5, 20));

            foreach ($user_subjects as $subject) {
                Relation::create([
                    'user_id' => $user->id,
                    'subject_id' => $subject->id,
                ]);
            }
        }
    }
}