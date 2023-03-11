<form action="/editor" method="post">
    @csrf
    @method('POST')
    <div>
        <textarea name=""
                  id=""
        ></textarea>
        <p>
            <input type="radio"
                   id="header"
                   name="name"
                   value="header">
            <label for="name">Заголовок</label>
            <select name=""
                    id="">
                <option value="h1">H1</option>
                <option value="h2">H2</option>
                <option value="h3">H3</option>
                <option value="h4">H4</option>
                <option value="h5">H5</option>
                <option value="h6">H6</option>
            </select>
        </p>
        <p>
            <input type="radio"
                   id="text"
                   name="name"
                   value="text"
                   checked>
            <label for="name">Текст</label>
        </p>
        <p>
            <input type="radio"
                   id="image"
                   name="name"
                   value="image">
            <label for="name">Картинка</label>
        </p>
        <p>
            <input type="radio"
                   id="hr"
                   name="name"
                   value="hr">
            <label for="name">Разрыв строки</label>
        </p>

        <div>
            <p>
                <input type="text" name="color" id="color">
                <label for="color">Цвет текста</label>
            </p>
            <p>
                <input type="text" name="backgroundcolor" id="backgroundcolor">
                <label for="backgroundcolor">Цвет фона</label>
            </p>
            <p>
                <select name="style"
                        id="style">
                    <option value="bold">Жирный</option>
                    <option value="italic">Курсив</option>
                </select>
                <label for="style">Стиль</label>
            </p>

            <p>
                <select name="style"
                        id="style">
                    <option value="left">Слева</option>
                    <option value="center">По центру</option>
                    <option value="right">Слева</option>
                    <option value="justify">По ширине</option>
                </select>
                <label for="style">Расположение</label>
            </p>

        </div>
{{--        @if ($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                {{$error}}--}}
{{--            @endforeach--}}
{{--        @endif--}}

        {{--        <x-editor::select/>--}}
        <button type="submit">Вставить</button>
    </div>
</form>


    <hr>

    <{{$headers[0]->tags}} style
    = "
    color:{{$headers[0]->color}};
    font-weight:{{$headers[0]->style}};
    text-align:{{$headers[0]->position}};
    ">
    {{$headers[0]->text}}

    </{{$headers[0]->tags}}>

