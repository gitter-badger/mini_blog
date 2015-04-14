# mini_blog CMS

mini_blog это простая легкая бложная CMS написанная на процедурном PHP5 с использованием процедурного фреймворка [mini_framework](https://github.com/Volter9/mini_framework).

## Особенности

Так как CMS еще в альфе стадии, особенностей пока что немного:

* Админка
    * Добавление, редактирование, удаление
        * Записей
        * Категорий
        * Пользователей
* Главная страница с последними записями
* Вывод записей по категориям
* Вывод одной записи
* Модули
* Инсталятор

## Как установить

Вы можете установить mini_blog через инсталятор. Все что нужно сделать это:

1. Скачать архив с иснталятором ([тут](https://github.com/Volter9/mini_blog/releases)).
2. Распаковать архив на вебсервере
3. Дать права на запись (0777) файлу `app/config.php` и папке `install/`
4. Открыть страницу в браузере где вы распаковали/разместили архив
5. Выбрать язык и следовать инструкциям установки