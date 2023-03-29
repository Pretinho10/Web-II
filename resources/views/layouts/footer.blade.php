<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{-- Chama o css na pasta public --}}
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    </link>
</head>

<body>
    <footer class="main_footer container">

        <div class="content">
            <div class="colfooter">

                <h3 class="titleFooter"> Menu</h3>

                <ul>

                    <li><a href="#" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="#" title="Sobre a Empresa">Sobre a Empresa</a></li>
                    <li><a href="#" title="Galeria de Fotos">Galeria de Fotos</a></li>
                    <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>

                </ul>
            </div>
            {{-- Coluna Rodapé 1 --}}
            <div class="colfooter">

                <h3 class="titleFooter"> Contato</h3>
                <p><i class="icon icon-mail"></i> lrf1@aluno.ifnmg.edu.br</p>
                <p><i class="icon icon-phone"></i> 38 99844-6686</p>
                <p><i class="icon icon-whatsapp"></i> 38 99844-6686</p>
            </div>
            {{-- Coluna Rodapé 2 --}}
            <div class="colfooter">

                <h3 class="titleFooter"> Redes Sociais</h3>

                <a href="#" class="botao"><span> <i class="icon icon-facebook"></i> </span></a>
                <a href="#" class="botao"><span> <i class="icon icon-instagram"></i> </span></a>
                <a href="#" class="botao"><span> <i class="icon icon-twitter"></i> </span></a>
                <a href="#" class="botao"><span> <i class="icon icon-pinterest"></i> </span></a>
            </div>
            {{-- Coluna Rodapé 3 --}}
            <div class="clear"></div>

        </div>
        <!--Contant-->
        <div class="main_footer_copy">

            <p class="m-b-footer"> Meu site - todos os direitos reservados. &copy; </p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="#"
                    title="Seu nome">Lucas Rodrigues</a></p>

        </div>

        <div class="container">
            {{-- É o local onde eu quero inserir o conteudo de cada página --}}
            @yield('footer')
        </div>

    </footer>
</body>

</html>
