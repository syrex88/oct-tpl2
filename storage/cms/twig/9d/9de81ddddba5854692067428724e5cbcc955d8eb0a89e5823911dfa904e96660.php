<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/themes/b-s/layouts/default.htm */
class __TwigTemplate_02e687f2ab3573fee32fcb6d015737db66b2fdbea3937d7a9a975f3896586d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"format-detection\" content=\"telephone=no\"/>
    <link rel=\"icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">

    <!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/icheck/flat/grey.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/jquery-ui-slider-pips.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/jquery-ui.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
    <!-- Links -->


    <!--JS-->
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/..\">
            <img src=\"";
        // line 29
        echo "assets/images/ie8-panel/warning_bar_0000_us.jpg ";
        echo "\" border=\"0\" height=\"42\" width=\"820\"
                 alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
        </a>
    </div>
    <script src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/device.min.js");
        echo "\"></script>
    ";
        // line 36
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 37
        echo "</head>
<body>
<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class=\"page-header page-header-variant-1\">
        <div class=\"boxed-wrap\">
            <div class=\"border-radius-8 shadow-big\">
                <div class=\"bg-image bg-image-1\">
                    <!-- RD Navbar -->
                    <div class=\"rd-navbar-wrap\">
                        <nav class=\"rd-navbar rd-navbar-variant-1\">
                            <div class=\"rd-navbar-inner container container-wide\">
                                <!-- RD Navbar Panel -->
                                <div class=\"rd-navbar-panel\">

                                    <!-- RD Navbar Toggle -->
                                    <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar\"><span></span>
                                    </button>
                                    <!-- END RD Navbar Toggle -->

                                    <!-- RD Navbar Brand -->
                                    <div class=\"rd-navbar-brand\">
                                        <a href=\"/\">
                                            <span class=\"rd-navbar-brand-logo\"><img
                                                    src=\"";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"></span>
                                            <div class=\"rd-navbar-brand-body\">
                                                <span class=\"brand-name\">FinAdvision, <span
                                                        class=\"text-light\">Inc</span></span>
                                                <span class=\"brand-slogan\">Your trusted financial advisor</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END RD Navbar Brand -->
                                </div>
                                <!-- END RD Navbar Panel -->

                                <div class=\"rd-navbar-nav-wrap\">
                                    <!-- RD Navbar Nav -->
                                    ";
        // line 77
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 78
        echo "                                    <!-- END RD Navbar Nav -->
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- END RD Navbar -->

                    <div class=\"header-body\">
                        <div class=\"container container-wide\">
                            <div class=\"row col-lg-8\">
                                ";
        // line 88
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "front-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 89
        echo "                                <div class=\"col-xs-12 col-offset-2\">
                                    <div class=\"block-adaptive\">
                                        <ul class=\"list-inline\">
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-google-plus\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-pinterest\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-linkedin\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row col-lg-4\">
                                <div>Нет времени смотреть сайт?</div>
                                <div>Давайте мы вам перезвоним и всё расскажем</div>
                                <div>Акция</div>
                                <div>Позвоните в течении часа и получите скидку 10%</div>
                                <div class=\"form-wrap offset-6\">
                                    ";
        // line 107
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 108
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"well-1 border-radius-bottom-8 bg-white\">
                    <div class=\"container container-wide\">
                        <div class=\"block-adaptive\">
                            <h2>Что мы делаем?</h2>
                        </div>
                        ";
        // line 118
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "what-we-doing.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 119
        echo "                    </div>
                </div>
            </div>
            <div class=\"well-1 border-radius-bottom-8\">
                <div class=\"container container-wide\">
                    <div class=\"block-adaptive\">
                        <h2 style=\"color: white\">Рассчитайте стоимость</h2>
                        <div class=\"row border-radius-8\" style=\"background: #2e3135; color: white\">
                            <div class=\"col-xs-12\">
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Ваша система налогооблажения:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <label for=\"no-nds\"><input value=\"УСН\" type=\"radio\" name=\"nds\" checked
                                                                   id=\"no-nds\"><span>Упрощённая система налогооблажения (Без НДС)</span></label>
                                        <label for=\"with-nds\"><input value=\"Общая\" type=\"radio\" name=\"nds\" id=\"with-nds\"><span>Общая (с НДС)</span></label>
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерный объём первичных документов в месяц:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <div class=\"slider\"></div>
                                        <input style=\"color: black\" type=\"text\" value=\"50\" name=\"slider-value\"
                                               id=\"slider-value\">
                                    </div>
                                </div>
                                <div class=\"line\" style=\"background: #272b2e; height: 1px; width: 100%\"></div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерная стоимость:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <span class=\"cost-value\">3950</span> ₽
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"col-xs-12\">
                                        <a class=\"popup-button btn btn-primary cost-button\" href=\"#form-callback-popup\">Получить
                                            точную стоимость</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        ";
        // line 169
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 170
        echo "    </main>

    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class=\"page-footer\">
        <!-- Video -->
        <section class=\"bg-default-dark bg-transparent image-wrap image-wrap-variant-2 skew skew-2\">
            <div class=\"skew-block-wrap\">
                <div class=\"skew-block bg-transparent\">
                    <div class=\"image-wrap-body\">
                        <img src=\"";
        // line 181
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-8.jpg");
        echo "\" alt=\"\"
                             class=\"hidden visible-sm-block visible-md-block visible-lg-block\">
                    </div>
                </div>
            </div>
            <section class=\"top-level\">
                <div class=\"container container-wide\">
                    <div class=\"border-radius-8 bg-default-dark medium-shadow shift-2 relative\">
                        <div class=\"vide-wrap\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6 col-lg-5 pull-sm-right\">
                                <div class=\"well-3\">
                                    <article class=\"post top-level\">
                                        ";
        // line 196
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "why-we.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 197
        echo "                                        <div class=\"btn-wrap\">
                                            <a class=\"popup-button btn btn-primary btn-mod-1\"
                                               href=\"#form-callback-popup\">
                                                Бесплатная консультация
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get in touch -->
            <section class=\"well-3 well-3-mod-1\">
                <div class=\"container container-wide\">
                    <div class=\"row child-offset-1\">
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5\">
                            <div class=\"block-adaptive\">
                                <h2>Перезвонить?</h2>

                                <p class=\"text-style-2\">Введите свой номер телефона и мы перезвоним Вам в течении 15
                                    мин</p>
                                ";
        // line 221
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callbackFooter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 222
        echo "                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5 pull-md-right\">
                            <div class=\"block-adaptive\">
                                <h2>Контакты</h2>

                            </div>
                            <div class=\"card\">
                                <div class=\"box-xs\">
                                    <div class=\"box__left\">
                                        <div class=\"card-image\">
                                            <img src=\"";
        // line 233
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-9.png");
        echo "\" alt=\"\" width=\"130\"
                                                 height=\"164\">
                                        </div>
                                    </div>
                                    <div class=\"box__body\">
                                        ";
        // line 238
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "contact-card-text.htm"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 239
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class=\"bg-black\">
            <div class=\"boxed-wrap boxed-wrap-variant-1 relative-shift-1\">
                <div class=\"well-4 bg-primary\">
                    <div class=\"container container-wide\">
                        <div class=\"row offset-3 child-offset-1\">
                            <div class=\"col-xs-12 col-md-4\">
                                <div class=\"inset-2\">
                                    ";
        // line 255
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 256
        echo "                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8\">
                                <div class=\"list-container\">
                                    ";
        // line 260
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menuFooter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 261
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 273
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 274
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vide.js");
        echo "\"></script>
<script src=\"";
        // line 275
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/tm-scripts.js");
        echo "\"></script>
<div id=\"form-callback-popup\" class=\"popup-dialog zoom-anim-dialog mfp-hide\">Введите свой номер телефона и мы перезвоним
    Вам в течении 15 мин";
        // line 277
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callbackPopup"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 278
        echo "</div>
<!-- </script> -->
";
        // line 280
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 281
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 282
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 282,  424 => 281,  417 => 280,  413 => 278,  409 => 277,  404 => 275,  400 => 274,  396 => 273,  382 => 261,  378 => 260,  372 => 256,  366 => 255,  348 => 239,  343 => 238,  335 => 233,  322 => 222,  318 => 221,  292 => 197,  286 => 196,  268 => 181,  255 => 170,  253 => 169,  201 => 119,  195 => 118,  183 => 108,  179 => 107,  159 => 89,  153 => 88,  141 => 78,  137 => 77,  120 => 63,  92 => 37,  89 => 36,  85 => 35,  80 => 33,  73 => 29,  64 => 23,  60 => 22,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  35 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"format-detection\" content=\"telephone=no\"/>
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico' |theme }}\" type=\"image/x-icon\">

    <!-- Bootstrap -->
    <link href=\"{{ 'assets/css/bootstrap.css' |theme }}\" rel=\"stylesheet\">

    <link href=\"{{ 'assets/css/icheck/flat/grey.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/jquery-ui-slider-pips.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/jquery-ui.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/magnific-popup.css' |theme }}\" rel=\"stylesheet\">
    <!-- Links -->


    <!--JS-->
    <script src=\"{{ 'assets/js/jquery.js' |theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery-migrate-1.2.1.min.js' |theme }}\"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/..\">
            <img src=\"{{ 'assets/images/ie8-panel/warning_bar_0000_us.jpg '}}\" border=\"0\" height=\"42\" width=\"820\"
                 alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
        </a>
    </div>
    <script src=\"{{ 'assets/js/html5shiv.js' |theme }}\"></script>
    <![endif]-->
    <script src=\"{{ 'assets/js/device.min.js' |theme}}\"></script>
    {% styles %}
</head>
<body>
<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class=\"page-header page-header-variant-1\">
        <div class=\"boxed-wrap\">
            <div class=\"border-radius-8 shadow-big\">
                <div class=\"bg-image bg-image-1\">
                    <!-- RD Navbar -->
                    <div class=\"rd-navbar-wrap\">
                        <nav class=\"rd-navbar rd-navbar-variant-1\">
                            <div class=\"rd-navbar-inner container container-wide\">
                                <!-- RD Navbar Panel -->
                                <div class=\"rd-navbar-panel\">

                                    <!-- RD Navbar Toggle -->
                                    <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar\"><span></span>
                                    </button>
                                    <!-- END RD Navbar Toggle -->

                                    <!-- RD Navbar Brand -->
                                    <div class=\"rd-navbar-brand\">
                                        <a href=\"/\">
                                            <span class=\"rd-navbar-brand-logo\"><img
                                                    src=\"{{ 'assets/images/logo.png' | theme }}\" alt=\"\"></span>
                                            <div class=\"rd-navbar-brand-body\">
                                                <span class=\"brand-name\">FinAdvision, <span
                                                        class=\"text-light\">Inc</span></span>
                                                <span class=\"brand-slogan\">Your trusted financial advisor</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END RD Navbar Brand -->
                                </div>
                                <!-- END RD Navbar Panel -->

                                <div class=\"rd-navbar-nav-wrap\">
                                    <!-- RD Navbar Nav -->
                                    {% component \"menu\" %}
                                    <!-- END RD Navbar Nav -->
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- END RD Navbar -->

                    <div class=\"header-body\">
                        <div class=\"container container-wide\">
                            <div class=\"row col-lg-8\">
                                {% component 'contenteditor' file=\"front-text.htm\" fixture=\"span\" %}
                                <div class=\"col-xs-12 col-offset-2\">
                                    <div class=\"block-adaptive\">
                                        <ul class=\"list-inline\">
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-google-plus\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-twitter\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-facebook\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-pinterest\"></a></li>
                                            <li><a href=\"#\" class=\"icon icon-xs icon-default fa-linkedin\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row col-lg-4\">
                                <div>Нет времени смотреть сайт?</div>
                                <div>Давайте мы вам перезвоним и всё расскажем</div>
                                <div>Акция</div>
                                <div>Позвоните в течении часа и получите скидку 10%</div>
                                <div class=\"form-wrap offset-6\">
                                    {% component \"callback\" %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"well-1 border-radius-bottom-8 bg-white\">
                    <div class=\"container container-wide\">
                        <div class=\"block-adaptive\">
                            <h2>Что мы делаем?</h2>
                        </div>
                        {% component 'contenteditor' file=\"what-we-doing.htm\" fixture=\"span\" %}
                    </div>
                </div>
            </div>
            <div class=\"well-1 border-radius-bottom-8\">
                <div class=\"container container-wide\">
                    <div class=\"block-adaptive\">
                        <h2 style=\"color: white\">Рассчитайте стоимость</h2>
                        <div class=\"row border-radius-8\" style=\"background: #2e3135; color: white\">
                            <div class=\"col-xs-12\">
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Ваша система налогооблажения:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <label for=\"no-nds\"><input value=\"УСН\" type=\"radio\" name=\"nds\" checked
                                                                   id=\"no-nds\"><span>Упрощённая система налогооблажения (Без НДС)</span></label>
                                        <label for=\"with-nds\"><input value=\"Общая\" type=\"radio\" name=\"nds\" id=\"with-nds\"><span>Общая (с НДС)</span></label>
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерный объём первичных документов в месяц:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <div class=\"slider\"></div>
                                        <input style=\"color: black\" type=\"text\" value=\"50\" name=\"slider-value\"
                                               id=\"slider-value\">
                                    </div>
                                </div>
                                <div class=\"line\" style=\"background: #272b2e; height: 1px; width: 100%\"></div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерная стоимость:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <span class=\"cost-value\">3950</span> ₽
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"col-xs-12\">
                                        <a class=\"popup-button btn btn-primary cost-button\" href=\"#form-callback-popup\">Получить
                                            точную стоимость</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        {% page %}
    </main>

    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class=\"page-footer\">
        <!-- Video -->
        <section class=\"bg-default-dark bg-transparent image-wrap image-wrap-variant-2 skew skew-2\">
            <div class=\"skew-block-wrap\">
                <div class=\"skew-block bg-transparent\">
                    <div class=\"image-wrap-body\">
                        <img src=\"{{ 'assets/images/home-8.jpg' | theme  }}\" alt=\"\"
                             class=\"hidden visible-sm-block visible-md-block visible-lg-block\">
                    </div>
                </div>
            </div>
            <section class=\"top-level\">
                <div class=\"container container-wide\">
                    <div class=\"border-radius-8 bg-default-dark medium-shadow shift-2 relative\">
                        <div class=\"vide-wrap\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6 col-lg-5 pull-sm-right\">
                                <div class=\"well-3\">
                                    <article class=\"post top-level\">
                                        {% component 'contenteditor' file=\"why-we.htm\" fixture=\"span\" %}
                                        <div class=\"btn-wrap\">
                                            <a class=\"popup-button btn btn-primary btn-mod-1\"
                                               href=\"#form-callback-popup\">
                                                Бесплатная консультация
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get in touch -->
            <section class=\"well-3 well-3-mod-1\">
                <div class=\"container container-wide\">
                    <div class=\"row child-offset-1\">
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5\">
                            <div class=\"block-adaptive\">
                                <h2>Перезвонить?</h2>

                                <p class=\"text-style-2\">Введите свой номер телефона и мы перезвоним Вам в течении 15
                                    мин</p>
                                {% component \"callbackFooter\" %}
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5 pull-md-right\">
                            <div class=\"block-adaptive\">
                                <h2>Контакты</h2>

                            </div>
                            <div class=\"card\">
                                <div class=\"box-xs\">
                                    <div class=\"box__left\">
                                        <div class=\"card-image\">
                                            <img src=\"{{ 'assets/images/home-9.png' | theme  }}\" alt=\"\" width=\"130\"
                                                 height=\"164\">
                                        </div>
                                    </div>
                                    <div class=\"box__body\">
                                        {% component 'contenteditor' file=\"contact-card-text.htm\"  %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class=\"bg-black\">
            <div class=\"boxed-wrap boxed-wrap-variant-1 relative-shift-1\">
                <div class=\"well-4 bg-primary\">
                    <div class=\"container container-wide\">
                        <div class=\"row offset-3 child-offset-1\">
                            <div class=\"col-xs-12 col-md-4\">
                                <div class=\"inset-2\">
                                    {% component 'contenteditor' file=\"footer-text.htm\" fixture=\"span\" %}
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8\">
                                <div class=\"list-container\">
                                    {% component \"menuFooter\" %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ 'assets/js/bootstrap.min.js' |theme }}\"></script>
<script src=\"{{ 'assets/js/vide.js' |theme }}\"></script>
<script src=\"{{ 'assets/js/tm-scripts.js' |theme }}\"></script>
<div id=\"form-callback-popup\" class=\"popup-dialog zoom-anim-dialog mfp-hide\">Введите свой номер телефона и мы перезвоним
    Вам в течении 15 мин{% component \"callbackPopup\" %}
</div>
<!-- </script> -->
{% framework extras %}
{% scripts %}
</body>
</html>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/default.htm", "");
    }
}
