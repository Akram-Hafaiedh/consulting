@extends('layouts.app')

@section('content')
    @php
        $teamMembers = [
            [
                'name' => 'Amine Fares',
                'field' => 'Education',
                'position' => 'Head of Educational Outreach',
                'image' => 't1.jpg',
            ],
            [
                'name' => 'Sara Ben Ammar',
                'field' => 'Relations',
                'position' => 'Client Relations Specialist',
                'image' => 't2.jpg',
            ],
            [
                'name' => 'Khaled Ayari',
                'field' => 'Santé',
                'position' => 'Health Services Manager',
                'image' => 't3.jpg',
            ],
            [
                'name' => 'Leila Gharbi',
                'field' => 'Education',
                'position' => 'Customer Service Director',
                'image' => 't4.jpg',
            ],
            [
                'name' => 'Mohamed Ali',
                'field' => 'Santé',
                'position' => 'Medical Advisor',
                'image' => 't5.jpg',
            ],
            [
                'name' => 'Yasmine Chouk',
                'field' => 'Education',
                'position' => 'Curriculum Specialist',
                'image' => 't6.jpg',
            ],
            [
                'name' => 'Karim Ennouri',
                'field' => 'Relations',
                'position' => 'Public Relations Officer',
                'image' => 't7.jpg',
            ],
            [
                'name' => 'Nadia Karray',
                'field' => 'Santé',
                'position' => 'Patient Coordinator',
                'image' => 't8.jpg',
            ],
            [
                'name' => 'Walid Mahfoudh',
                'field' => 'Education',
                'position' => 'Academic Counselor',
                'image' => 't9.jpg',
            ],
        ];

    @endphp


    <x-team :team-members="$teamMembers" />
@endsection
