@component('mail::message')
{{-- # é um h1.. dar uma olhada nos docs do Marldown --}}
# Cadastro

{{-- ** itálico --}}
Você se cadastrou com sucesso * {{$user->name}} *!

{{-- o markdown do laravel tem vários componentes.. ver nos docs do laravel --}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Obrigado,<br>
Fulano Ciclano
{{-- {{ config('app.name') }} --}}
@endcomponent
