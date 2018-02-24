<?php
    $translator = [
        "man" => "мужчина",
        "woman" => "женщина",
        "green" => "зеленый",
        "car" => "машина",
        "telephone" => "телефон",
        "computer" => "компьютер",
        "child" => "ребенок",
        "Keyboard" => "клавиатура"
    ];
    if (array_key_exists("word", $_REQUEST))
    {
        $key = $_REQUEST["word"];
        if (array_key_exists($key, $translator))
        {
            echo $translator[$key];
        }
        else
        {
            $flipped = array_flip($translator);
            if (array_key_exists($key, $flipped))
            {
                echo $flipped[$key];
            }
            else
                return 404;
        }
    }
    else
        return 400;