@extends('layouts.layout')
@section('title', 'AlexProf:Главная страница : Home')

@section('menuheader')

    <div class="menu" id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a class="text-lowercase" href="{{ route('home') }}" id="logo" title="AlexProfile">
                    AlexProfile
                </a>
                <div class="navigation-row">
                    {{--жду меню!!!!!!!!!!!!!!!!!!!!!!!--}}
                    <nav class="animenu" role="navigation" aria-label="Menu">
                        <ul class="animenu__nav">


                            {{--<li><a href="{{ route('main') }}">Home</a></li>--}}
                            <li>
                                <a href="{{ route('posts.all') }}" class="animenu__nav__hasDropdown" aria-haspopup="true">Архив</a>
                               {{-- <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">

                                    <li><a href="#" role="menuitem">Sub Item 1</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 2</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 3</a></li>
                                </ul>--}}
                            </li>
                            <li>
                                <a href=" {{ route('categories.all') }}" class="animenu__nav__hasDropdown"
                                   aria-haspopup="true">Категории</a>
                              {{--  <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
                                    @foreach($categories as $k => $v)
                                        <li>
                                            <a href="{{route('menu', ['slug'=>$k])}}" role="menuitem"> {{ $v }} </a>
                                        </li>
                                    @endforeach
                                </ul>--}}
                            </li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="fp-tableCell" style="height: 490px;">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="welcome-first animated fadeInUp" data-animate="fadeInUp">Hello, welcome to</span>
                <h1 class="welcome-title animated fadeInUp" data-animate="fadeInUp">AlexProf</h1>
                <p class="animated fadeInUp" data-animate="fadeInUp">
                <h3 class="descMe"> 1.Ф.И.О. работника: Сивков Александр Викторович.</h3>
                <h3 class="descMe">2.Дата рождения: 08.06.1985.</h3>
                <h3 class="descMe">3. Должность, занимаемая в настоящий момент: учитель английского языка в
                    муниципальном автономном образовательном учреждении «Средней общеобразовательной школе №4 с
                    углубленным изучением английского языка», г. Новый Уренгой.</h3>
                <h3 class="descMe">4. Сведения об образовании (профессия, ученая степень):
                    • в 2010 г. закончил Бирский филиал Башкирского Государственного Университета, присуждена
                    квалификация учитель английского языка по специальности «Иностранный язык»</h3>
                <h3 class="descMe">5. Сведения о повышении квалификации:
                    • В 2016г. прошел повышение квалификации в АУ «Институт развития образования Ивановской области» по
                    дополнительной профессиональной программе «Современные технологии обучения иностранных языкам на
                    разных ступенях школы в условиях реализации ФГОС» в объеме 108 часов.
                    • В 2017г. прошел повышение квалификации по теме «Современный урок иностранного языка. Повышение
                    коммуникативной компетенции учителей иностранного языка» в объеме 108 часов.
                    • В 2018г. прошел повышение квалификации по дополнительной профессиональной образовательной
                    программе: «Разработка интерактивного учебно-методического материала: инструкция для автора» в
                    объеме 36 часов.</h3>
                <h3 class="descMe">6. Сведения о работе:
                    • общий трудовой стаж – 8лет;
                    • стаж педагогической работы – 6лет;
                    • стаж педагогической работы в МАОУ «СОШ №4» - 2 года;</h3>
                <h3 class="descMe">7. Домашний адрес: Ямало-Ненецкий автономный округ, г. Новый Уренгой, ул. Новая 28,
                    ком.17.</h3>
                <h3 class="descMe">8. Профессиональные качества: Сивков Александр Викторович регулярно повышает свой
                    профессиональный уровень, посещает открытые уроки, делится своим опытом работы с другими педагогами.
                    В своей работе использует современные методики, соответствующие образовательной программе.</h3>
                <h3 class="descMe">9. Дополнительная информация:
                    • 26 мая 2008 г. – 10 октября 2008 г. – Поездка в США, г. Орландо, шт. Флорида с целью закрепления
                    навыков общения в процессе работы;
                    • Наряду с педагогическим опытом имеется опыт работы устным и письменным переводчиком в технической
                    сфере;</h3>

            </div>
        </div>
    </div>
@endsection






