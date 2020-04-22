
<div class="container">
    <header>
        <nav id='cssmenu'>
            <div class="logo">5º Período/</div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>

                <li class='active'><a href='<?php echo URL_BASE . "Login/acessando" ?>'>HOME</a>
                    <ul>
                        <li><a href='#'> ACESSO USUÁRIO </a>
                            <ul>
                                <li><a href='<?php echo URL_BASE . "Login/cadastrar_matricula" ?>'> CADASTRAR </a></li>
                                <li><a href='<?php echo URL_BASE . "Login/pesquisar" ?>'> PESQUISAR </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="">PACIENTE</a>
                    <ul>
                        <li><a href='<?php echo URL_BASE . "Paciente/novo" ?>'>CADASTRAR</a></li>
                        <li><a href='<?php echo URL_BASE . "Paciente/listar" ?>'>PESQUISAR</a></li>
                    </ul>
                </li>

                <li><a href='<?php echo URL_BASE ?>'>SAIR</a></li>

            </ul>
        </nav>
    </header>

</div>

<script>

    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this), settings = $.extend({ format: "dropdown", sticky: false }, options);

            return this.each(function() {
                $(this).find(".button").on('click', function(){
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {  mainmenu.slideToggle().removeClass('open'); }
                    else { mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") { mainmenu.find('ul').show(); }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() { $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) { $(this).siblings('ul').removeClass('open').slideToggle(); }
                        else { $(this).siblings('ul').addClass('open').slideToggle(); }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 900;
                    if ($( window ).width() > mediasize) { cssmenu.find('ul').show(); }
                    if ($(window).width() <= mediasize) { cssmenu.find('ul').hide().removeClass('open'); }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($){ $(document).ready(function(){ $("#cssmenu").menumaker({ format: "multitoggle"});
    });
    })(jQuery);

</script>
