<x-app-layout title="users">
    <x-slot name="heading"> {{$user->name}}
    </x-slot>
    <div> {{$user->email}} </div>
    <div>Registered at {{$user->created_at}} </div>
    </x-app-layout>