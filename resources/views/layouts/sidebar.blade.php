<div class="headersidebar">
    <div class="logo">
        <img src="{{ asset('img/logoalep.png') }}" alt="Logo">
    </div>
    <div class="title">
        <h1>Portal de Leis</h1>
    </div>
</div>
<hr>
<div class="welcomeuser">
    <h2>Bem vindo,<br> {{ Auth::user()->name }}</h2>
</div>
<hr>

<div class="menu">
    <ul>
        <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-table-cells-large"></i> Dashboard</a></li>
        <!-- menu com dropdown em bootstrap-->
        <li class="dropdown" onclick="openclosemenu('projetoslei')">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                <i class="fa-solid fa-scale-balanced"></i> Projetos de lei
            </a>
            <ul class="submenu projetoslei" >
                <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-plus"></i> Cadastrar</a></li>
                <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-list-check"></i> Listar</a></li>
            </ul>
        </li>
        <!-- menu entidades como dropdown em bootstrap-->
        <li class="dropdown" onclick="openclosemenu('entidades')">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                <i class="fa-solid fa-house-flag"></i> Entidades
            </a>
            <ul class="submenu entidades" >
                <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-plus"></i> Cadastrar</a></li>
                <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-list-check"></i> Listar</a></li>
            </ul>
        </li>
    </ul>
</div>
<script defer>
    function openclosemenu(menuclass) {
        var menu = document.querySelector('ul.submenu.'+menuclass).style.maxHeight
        if (menu == '700px') {
            document.querySelector('ul.submenu.'+menuclass).style.maxHeight = "0px";
        } else {
            document.querySelector('ul.submenu.'+menuclass).style.maxHeight = "700px";
        }
    }
</script>
