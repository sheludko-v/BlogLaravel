@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{__('Регистрация')}}
            </x-card-title>

            <x-slot name="right">
                <a href="{{route('login')}}">
                    {{__('Вход')}}
                </a>
            </x-slot>

        </x-card-header>

        <x-card-body>

            <x-form action="{{route('register.store')}}" method="POST">

                <x-form-item>
                    <x-label required>
                        {{__('Имя')}}
                    </x-label>
                    <x-input name="first_name" />

                    <x-error name="first_name" />
                </x-form-item>

                <x-form-item>
                    <x-label required>
                        {{__('Фамилия')}}
                    </x-label>
                    <x-input name="last_name" />

                    <x-error name="last_name" />
                </x-form-item>

                <x-form-item>
                    <x-label required>
                        {{__('Email')}}
                    </x-label>
                    <x-input name="email" />

                    <x-error name="email" />
                </x-form-item>

                <x-form-item>
                    <x-label required>
                        {{__('Пароль')}}
                    </x-label>
                    <x-input type="password" name="password" />

                    <x-error name="password" />
                </x-form-item>

                <x-form-item>
                    <x-label required>
                        {{__('Пароль еще раз')}}
                    </x-label>
                    <x-input type="password" name="password_confirmation" />

                    <x-error name="password_confirmation" />
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="agreement" :checked="!! old('agreement')" >
                        {{__('Я согласен на обработку пользовательских данных')}}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{__('Регистрация')}}
                </x-button>
            </x-form>

        </x-card-body>
    </x-card>
@endsection
