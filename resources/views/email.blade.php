Новый контакт: {{ $name }}

<h2>{{ $subject }}</h2>
@isset($name)
    <p> Имя: {{ $name }} </p>
@endisset
@isset($email)
    <p> Email: {{ $email }} </p>
@endisset
@isset($phone)
    <p> Телефон: {{ $phone }} </p>
@endisset
@isset($position)
    <p> Должность: {{ $position }} </p>
@endisset
@isset($company)
    <p> Компания: {{ $company }} </p>
@endisset
@isset($bodyMessage)
    <p> Message: {{ $bodyMessage }} </p>
@endisset