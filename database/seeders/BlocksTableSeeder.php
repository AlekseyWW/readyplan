<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'first',
                'img' => NULL,
                'title' => 'Универсальное решение для проектных организаций ReadyPlan',
                'caption' => 'Все проекты компании как на&nbsp;ладони: управление портфелем проектов, мониторинг этапов работ, загруженности сотрудников, формирование отчетов по&nbsp;заданным параметрам&nbsp;&mdash; по&nbsp;отделам, видам работ, исполнителям и&nbsp;срокам.',
                'created_at' => '2020-10-31 13:53:00',
                'updated_at' => '2020-10-31 14:56:30',
                'parent_id' => NULL,
                'order' => 999,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => NULL,
                'img' => 'blocks/icon_1.png',
                'title' => 'Единое информационное пространство',
                'caption' => '<p>Гибкий и прозрачный подход к распределению прав и обязанностей.</p>',
                'created_at' => '2020-10-31 13:57:00',
                'updated_at' => '2020-11-01 12:43:35',
                'parent_id' => 1,
                'order' => 999,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => NULL,
                'img' => 'blocks/icon_2.png',
                'title' => 'Возможность удаленной работы',
                'caption' => 'Веб-платформа и&nbsp;клиент под мобильные устройства.',
                'created_at' => '2020-10-31 13:59:25',
                'updated_at' => '2020-10-31 13:59:25',
                'parent_id' => 1,
                'order' => 999,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => NULL,
                'img' => 'blocks/icon_3.png',
                'title' => 'Хранение большого объема данных',
                'caption' => 'Поддержка СУБД MySQL/PosgreSQL. Обменивайтесь файлами любого типа и&nbsp;любого размера.',
                'created_at' => '2020-10-31 14:00:00',
                'updated_at' => '2020-10-31 14:00:54',
                'parent_id' => 1,
                'order' => 999,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => NULL,
                'img' => 'blocks/icon_1.png',
                'title' => 'Тайм-менеджмент',
                'caption' => 'Отслеживайте и&nbsp;анализируйте время, затраченное сотрудниками на&nbsp;выполнение работ. Делайте предварительную оценку по&nbsp;трудозатратам для сравнения &laquo;плана&raquo; и&nbsp;&laquo;факта&raquo;.',
                'created_at' => '2020-10-31 14:02:42',
                'updated_at' => '2020-10-31 14:02:42',
                'parent_id' => 1,
                'order' => 999,
            ),
            5 => 
            array (
                'id' => 6,
                'type' => NULL,
                'img' => 'blocks/icon_2.png',
                'title' => 'Диаграмма Ганта',
                'caption' => 'Контроль за&nbsp;выполнением работ в&nbsp;разрезе одного, нескольких или всех проектов. Вы&nbsp;не&nbsp;пропустите важный дедлайн и&nbsp;сможете предупредить срыв сроков по&nbsp;каждому этапу работ.',
                'created_at' => '2020-10-31 14:03:30',
                'updated_at' => '2020-10-31 14:03:30',
                'parent_id' => 1,
                'order' => 999,
            ),
            6 => 
            array (
                'id' => 7,
                'type' => NULL,
                'img' => 'blocks/icon_3.png',
                'title' => 'Анализ статистики',
                'caption' => 'Детальное планирование работ как по&nbsp;текущим, так и&nbsp;перспективным проектам. Возможность анализа накопленной статистики с&nbsp;целью планирования финансовых и&nbsp;трудовых затрат по&nbsp;новым проектам.',
                'created_at' => '2020-10-31 14:04:13',
                'updated_at' => '2020-10-31 14:04:13',
                'parent_id' => 1,
                'order' => 999,
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'second',
                'img' => NULL,
                'title' => 'Преимущества',
                'caption' => NULL,
                'created_at' => '2020-10-31 14:47:00',
                'updated_at' => '2020-10-31 14:56:51',
                'parent_id' => NULL,
                'order' => 999,
            ),
            8 => 
            array (
                'id' => 9,
                'type' => NULL,
                'img' => 'blocks/block_1.png',
                'title' => 'Оптимальное соотношение цены и качества',
                'caption' => '<p>У&nbsp;Вас не&nbsp;будет затрат на&nbsp;покупку дорогостоящих программных продуктов, Вы&nbsp;вкладываете деньги только в&nbsp;адаптацию ReadyPlan и&nbsp;обучение сотрудников;</p>
<p>&mdash;&nbsp;экономичное решение, вы&nbsp;платите только за&nbsp;администрирование и&nbsp;сервер (нет трат на&nbsp;IT-инфраструктуру);</p>',
                'created_at' => '2020-10-31 14:49:12',
                'updated_at' => '2020-10-31 14:49:12',
                'parent_id' => 8,
                'order' => 999,
            ),
            9 => 
            array (
                'id' => 10,
                'type' => NULL,
                'img' => 'blocks/block_2.png',
                'title' => 'Опыт работы',
                'caption' => '<p>Более 10&nbsp;лет в&nbsp;сфере проектирования. Понимаем устройство основных бизнес-процессов. Опыт референтных внедрений.</p>',
                'created_at' => '2020-10-31 14:49:41',
                'updated_at' => '2020-10-31 14:49:41',
                'parent_id' => 8,
                'order' => 999,
            ),
            10 => 
            array (
                'id' => 11,
                'type' => NULL,
                'img' => 'blocks/block_3.png',
                'title' => 'Адаптация “под ключ”',
                'caption' => '<p>Открытая платформа и&nbsp;знание технологий позволяют нам настроить решение под любые требования.</p>',
                'created_at' => '2020-10-31 14:50:16',
                'updated_at' => '2020-10-31 14:50:16',
                'parent_id' => 8,
                'order' => 999,
            ),
            11 => 
            array (
                'id' => 12,
                'type' => NULL,
                'img' => 'blocks/block_4.png',
                'title' => 'Безопасность',
                'caption' => '<p>Все данные защищены от&nbsp;воздействия извне, а&nbsp;также могут частично или полностью скрываться от&nbsp;сотрудников компании в&nbsp;зависимости от&nbsp;прав доступа.</p>',
                'created_at' => '2020-10-31 14:50:52',
                'updated_at' => '2020-10-31 14:50:52',
                'parent_id' => 8,
                'order' => 999,
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'left',
                'img' => 'blocks/1.png',
                'title' => 'Управление портфелем и&nbsp;ресурсами проектов',
                'caption' => '<ul>
<li>&mdash;&nbsp;Создание и&nbsp;ведение проектов</li>
<li>&mdash;&nbsp;Создание типовых проектов</li>
<li>&mdash;&nbsp;Управление ролями в&nbsp;проекте</li>
</ul>',
                'created_at' => '2020-10-31 15:07:00',
                'updated_at' => '2020-10-31 15:17:27',
                'parent_id' => NULL,
                'order' => 999,
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 'right',
                'img' => 'blocks/1.png',
            'title' => 'Аналитика и&nbsp;управленческая отчетность (вкладка оперативный план + обзор)',
                'caption' => '<ul>
<li>&mdash;&nbsp;Диаграмма Ганта</li>
<li>&mdash;&nbsp;Мониторинг планируемого и&nbsp;затраченного времени</li>
<li>&mdash;&nbsp;Кастомная фильтрация для любого объема данных</li>
</ul>',
                'created_at' => '2020-10-31 15:17:00',
                'updated_at' => '2020-10-31 15:17:43',
                'parent_id' => NULL,
                'order' => 999,
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 'left',
                'img' => 'blocks/1.png',
                'title' => 'Хранение данных',
                'caption' => '<p>Обмен заданиями, проектной документацией между отделами.</p>
<p>&nbsp;</p>',
                'created_at' => '2020-10-31 15:21:00',
                'updated_at' => '2020-10-31 15:22:05',
                'parent_id' => NULL,
                'order' => 999,
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 'tech',
                'img' => 'blocks/how.png',
                'title' => 'Технические преимущества',
                'caption' => NULL,
                'created_at' => '2020-10-31 15:26:00',
                'updated_at' => '2020-10-31 15:29:44',
                'parent_id' => NULL,
                'order' => 999,
            ),
            16 => 
            array (
                'id' => 17,
                'type' => NULL,
                'img' => 'blocks/icon_8.png',
                'title' => 'Срок внедрения ReadyPlan',
                'caption' => '<p>Адаптация продукта под специфику Вашей организации занимает от&nbsp;1&nbsp;недели до&nbsp;нескольких месяцев в&nbsp;зависимости от&nbsp;организационной структуры и&nbsp;желаемого функционала.</p>',
                'created_at' => '2020-10-31 15:27:53',
                'updated_at' => '2020-10-31 15:27:53',
                'parent_id' => 16,
                'order' => 999,
            ),
            17 => 
            array (
                'id' => 18,
                'type' => NULL,
                'img' => 'blocks/icon_9.png',
                'title' => 'Функционал и&nbsp;настройки программы',
                'caption' => '<p>которые необходимых для ведения деятельности и&nbsp;эффективного использования&nbsp;ПО</p>',
                'created_at' => '2020-10-31 15:28:57',
                'updated_at' => '2020-10-31 15:28:57',
                'parent_id' => 16,
                'order' => 999,
            ),
            18 => 
            array (
                'id' => 19,
                'type' => NULL,
                'img' => 'blocks/icon_10.png',
                'title' => 'Оргструктура организации',
                'caption' => NULL,
                'created_at' => '2020-10-31 15:29:26',
                'updated_at' => '2020-10-31 15:29:26',
                'parent_id' => 16,
                'order' => 999,
            ),
            19 => 
            array (
                'id' => 20,
                'type' => 'subscribe',
                'img' => NULL,
                'title' => 'Далеко-далеко за словесными горами.',
                'caption' => '<p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные.</p>',
                'created_at' => '2020-10-31 15:35:24',
                'updated_at' => '2020-10-31 15:35:24',
                'parent_id' => NULL,
                'order' => 999,
            ),
            20 => 
            array (
                'id' => 21,
                'type' => 'integration',
                'img' => NULL,
                'title' => 'Возможности интеграции',
                'caption' => NULL,
                'created_at' => '2020-10-31 15:37:08',
                'updated_at' => '2020-10-31 15:37:08',
                'parent_id' => NULL,
                'order' => 999,
            ),
            21 => 
            array (
                'id' => 22,
                'type' => NULL,
                'img' => 'blocks/logo_1.png',
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2020-10-31 15:37:00',
                'updated_at' => '2020-10-31 15:38:06',
                'parent_id' => 21,
                'order' => 999,
            ),
            22 => 
            array (
                'id' => 23,
                'type' => NULL,
                'img' => 'blocks/logo_2.png',
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2020-10-31 15:38:00',
                'updated_at' => '2020-10-31 15:38:36',
                'parent_id' => 21,
                'order' => 999,
            ),
            23 => 
            array (
                'id' => 24,
                'type' => NULL,
                'img' => 'blocks/logo_3.png',
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2020-10-31 15:39:01',
                'updated_at' => '2020-10-31 15:39:01',
                'parent_id' => 21,
                'order' => 999,
            ),
            24 => 
            array (
                'id' => 25,
                'type' => NULL,
                'img' => 'blocks/logo_4.png',
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2020-10-31 15:39:26',
                'updated_at' => '2020-10-31 15:39:26',
                'parent_id' => 21,
                'order' => 999,
            ),
            25 => 
            array (
                'id' => 26,
                'type' => 'for',
                'img' => NULL,
                'title' => 'Для кого',
                'caption' => NULL,
                'created_at' => '2020-10-31 15:42:04',
                'updated_at' => '2020-10-31 15:42:04',
                'parent_id' => NULL,
                'order' => 999,
            ),
            26 => 
            array (
                'id' => 27,
                'type' => NULL,
                'img' => 'blocks/icon_1.png',
                'title' => 'Работайте в едином информационном пространстве',
                'caption' => '<p>ТОП-менеджеры компаний</p>',
                'created_at' => '2020-10-31 15:42:52',
                'updated_at' => '2020-10-31 15:42:52',
                'parent_id' => 26,
                'order' => 999,
            ),
            27 => 
            array (
                'id' => 28,
                'type' => NULL,
                'img' => 'blocks/icon_2.png',
                'title' => 'Финансовые потоки',
                'caption' => '<p>Главные инженеры проектов</p>',
                'created_at' => '2020-10-31 15:43:33',
                'updated_at' => '2020-10-31 15:43:33',
                'parent_id' => 26,
                'order' => 999,
            ),
            28 => 
            array (
                'id' => 29,
                'type' => NULL,
                'img' => 'blocks/icon_3.png',
                'title' => 'Мониторинг',
                'caption' => '<p>Проектные подразделения</p>',
                'created_at' => '2020-10-31 15:44:08',
                'updated_at' => '2020-10-31 15:44:08',
                'parent_id' => 26,
                'order' => 999,
            ),
            29 => 
            array (
                'id' => 30,
                'type' => 'faq',
                'img' => 'blocks/faq.png',
                'title' => 'FAQ',
                'caption' => NULL,
                'created_at' => '2020-10-31 15:47:00',
                'updated_at' => '2020-10-31 15:47:00',
                'parent_id' => NULL,
                'order' => 999,
            ),
            30 => 
            array (
                'id' => 31,
                'type' => NULL,
                'img' => NULL,
                'title' => 'Стоимость',
                'caption' => '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>',
                'created_at' => '2020-10-31 15:47:48',
                'updated_at' => '2020-10-31 15:47:48',
                'parent_id' => 30,
                'order' => 999,
            ),
            31 => 
            array (
                'id' => 32,
                'type' => NULL,
                'img' => NULL,
                'title' => 'Скорость внедрения',
                'caption' => '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>',
                'created_at' => '2020-10-31 15:48:22',
                'updated_at' => '2020-10-31 15:48:22',
                'parent_id' => 30,
                'order' => 999,
            ),
            32 => 
            array (
                'id' => 33,
                'type' => NULL,
                'img' => NULL,
                'title' => 'Как происходит поддержка продукта?',
                'caption' => '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>',
                'created_at' => '2020-10-31 15:49:04',
                'updated_at' => '2020-10-31 15:49:04',
                'parent_id' => 30,
                'order' => 999,
            ),
            33 => 
            array (
                'id' => 34,
                'type' => NULL,
                'img' => NULL,
                'title' => 'Что конкретно я получу?',
            'caption' => '<p>Что получает заказчик: выгоды<br />&mdash; Генеральный директор<br />Деньги<br />&mdash; Главный инженер (соблюдение сроков)<br />Возможность вовремя увидеть риск провала проекта<br />Выполненные проекты<br />Возможности интеграции (Navisworks &hellip;)</p>',
                'created_at' => '2020-10-31 15:49:37',
                'updated_at' => '2020-10-31 15:49:37',
                'parent_id' => 30,
                'order' => 999,
            ),
            34 => 
            array (
                'id' => 35,
                'type' => 'footer',
                'img' => NULL,
                'title' => 'Узнайте больше о возможностях ReadyPlan',
                'caption' => '<p>Оставьте свои контактные данные, наш менеджер свяжется с вами и вышлет подробную презентацию о программе</p>',
                'created_at' => '2020-10-31 15:58:00',
                'updated_at' => '2020-10-31 15:59:10',
                'parent_id' => NULL,
                'order' => 999,
            ),
            35 => 
            array (
                'id' => 36,
                'type' => 'slider',
                'img' => NULL,
                'title' => 'Слайдер',
                'caption' => NULL,
                'created_at' => '2020-10-31 16:07:00',
                'updated_at' => '2020-11-01 12:39:51',
                'parent_id' => NULL,
                'order' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'type' => NULL,
                'img' => 'blocks/slide_1.png',
                'title' => 'Управляйте проектами компании эффективно',
                'caption' => '<p>Детальное планирование всех работ, контроль за сроками выполнения, гибкое распределение обязанностей. Обмен данными в едином информационном пространстве. Адаптируем систему управления проектной организацией под под Ваши потребности в срок от 1 недели до 2-х месяцев.</p>',
                'created_at' => '2020-10-31 16:09:12',
                'updated_at' => '2020-10-31 16:09:12',
                'parent_id' => 36,
                'order' => 999,
            ),
            37 => 
            array (
                'id' => 38,
                'type' => NULL,
                'img' => 'blocks/slide_1.png',
                'title' => 'Доступ к&nbsp;актуальной информации в&nbsp;любое время',
                'caption' => '<p>Следите за&nbsp;выполнением работ из&nbsp;любой точки мира с&nbsp;ПК или мобильного устройства. Получайте уведомления о&nbsp;важных событиях по&nbsp;электронной почте.</p>',
                'created_at' => '2020-10-31 16:09:00',
                'updated_at' => '2020-11-01 09:33:34',
                'parent_id' => 36,
                'order' => 999,
            ),
            38 => 
            array (
                'id' => 42,
                'type' => NULL,
                'img' => NULL,
                'title' => 'ascascascascascascascac sacacacsascasc',
                'caption' => '<div class="col-lg-2 col-md-5 col-10">
<div class="mb-4">
<h4 class="text-purple">Features</h4>
</div>
<ul class="list-unstyled">
<li><a class="link-dark" href="#">Timeline Review</a></li>
<li><a class="link-dark" href="#">Custom fields</a></li>
<li><a class="link-dark" href="#">Custom Templates</a></li>
<li><a class="link-dark" href="#">Task dependencies</a></li>
</ul>
</div>
<div class="col-lg-2 col-md-5 col-10">
<div class="mb-4">
<h4 class="text-purple">Company</h4>
</div>
<ul class="list-unstyled">
<li><a class="link-dark" href="#">about us</a></li>
<li><a class="link-dark" href="#">pricing plan</a></li>
<li><a class="link-dark" href="#">Privacy &amp; Policy</a></li>
<li><a class="link-dark" href="#">latest news</a></li>
</ul>
</div>
<div class="col-lg-2 col-md-5 col-10">
<div class="mb-4">
<h4 class="text-purple">Customers</h4>
</div>
<ul class="list-unstyled">
<li><a class="link-dark" href="#">login</a></li>
<li><a class="link-dark" href="#">support</a></li>
<li><a class="link-dark" href="#">help center</a></li>
</ul>
</div>',
                'created_at' => '2020-11-02 14:09:00',
                'updated_at' => '2020-11-02 14:11:00',
                'parent_id' => 35,
                'order' => NULL,
            ),
        ));
        
        
    }
}