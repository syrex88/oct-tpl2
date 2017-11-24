<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/themes/b-s/layouts/inner.htm */
class __TwigTemplate_bbb6591f31617bbbbd82d8961cafcddaa5c97b51bacf307b057cc88cc88e2bcd extends Twig_Template
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
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>


    <!-- Bootstrap -->
    <link href=\"";
        // line 13
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

    <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/inner-page.css");
        echo "\" rel=\"stylesheet\">

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
    <header class=\"page-header\">
        <div class=\"boxed-wrap border-radius-8\">
            <div class=\"shadow-big border-radius-8\">
                <!-- RD Navbar -->
                <div class=\"rd-navbar-wrap border-radius-8\">
                    <nav class=\"rd-navbar border-radius-8\">
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
                                        <span class=\"rd-navbar-brand-logo\"><img src=\"images/logo.png\" alt=\"\"></span>

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
        echo "                                <!-- END RD Navbar Nav -->
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- END RD Navbar -->
            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class=\"well-1\">
            <div class=\"container container-wide inner-page\">
                <h2>
                    ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "
                </h2>
                <div class=\"description row\">
                    <div class=\"col-xs-12 col-md-8\">
                        ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"content row\">
                    <div class=\"col-xs-12\">
                        ";
        // line 104
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 105
        echo "                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class=\"page-footer\">
        <!-- Have a Question? -->
        <section class=\"bg-default-dark bg-transparent skew skew-2\">
            <div class=\"skew-block bg-default-dark\">
            </div>

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
        // line 129
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callbackFooter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 130
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
        // line 141
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-9.png");
        echo "\" alt=\"\" width=\"130\"
                                                 height=\"164\">
                                        </div>
                                    </div>
                                    <div class=\"box__body\">
                                        ";
        // line 146
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "contact-card-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['tools'] = "link"        ;
        echo $this->env->getExtension('CMS')->componentFunction("editor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 148
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
        // line 164
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("editor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 165
        echo "                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-8\">
                                <div class=\"list-container\">
                                    ";
        // line 169
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menuFooter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 170
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>
</div>
<div id=\"form-callback-popup\" class=\"popup-dialog zoom-anim-dialog mfp-hide\">Введите свой номер телефона и мы перезвоним
    Вам в течении 15 мин";
        // line 181
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callbackPopup"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 182
        echo "</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 185
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 186
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vide.js");
        echo "\"></script>
<script src=\"";
        // line 187
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/tm-scripts.js");
        echo "\"></script>
<!-- </script> -->
";
        // line 189
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 190
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 191
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/inner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 191,  317 => 190,  310 => 189,  305 => 187,  301 => 186,  297 => 185,  292 => 182,  288 => 181,  275 => 170,  271 => 169,  265 => 165,  259 => 164,  241 => 148,  234 => 146,  226 => 141,  213 => 130,  209 => 129,  183 => 105,  181 => 104,  173 => 99,  166 => 95,  147 => 78,  143 => 77,  101 => 37,  98 => 36,  94 => 35,  89 => 33,  82 => 29,  73 => 23,  69 => 22,  63 => 19,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
    <meta name=\"description\" content=\"{{ this.page.description }}\">
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico' |theme }}\" type=\"image/x-icon\">
    <title>{{ this.page.title }}</title>


    <!-- Bootstrap -->
    <link href=\"{{ 'assets/css/bootstrap.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/icheck/flat/grey.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/jquery-ui-slider-pips.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/jquery-ui.css' |theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/magnific-popup.css' |theme }}\" rel=\"stylesheet\">

    <link href=\"{{ 'assets/css/inner-page.css' |theme }}\" rel=\"stylesheet\">

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
    <header class=\"page-header\">
        <div class=\"boxed-wrap border-radius-8\">
            <div class=\"shadow-big border-radius-8\">
                <!-- RD Navbar -->
                <div class=\"rd-navbar-wrap border-radius-8\">
                    <nav class=\"rd-navbar border-radius-8\">
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
                                        <span class=\"rd-navbar-brand-logo\"><img src=\"images/logo.png\" alt=\"\"></span>

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
            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class=\"well-1\">
            <div class=\"container container-wide inner-page\">
                <h2>
                    {{ this.page.title }}
                </h2>
                <div class=\"description row\">
                    <div class=\"col-xs-12 col-md-8\">
                        {{ this.page.description }}
                    </div>
                </div>
                <div class=\"content row\">
                    <div class=\"col-xs-12\">
                        {% page %}
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class=\"page-footer\">
        <!-- Have a Question? -->
        <section class=\"bg-default-dark bg-transparent skew skew-2\">
            <div class=\"skew-block bg-default-dark\">
            </div>

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
                                        {% component 'editor' file=\"contact-card-text.htm\" fixture=\"span\"
                                        tools=\"link\" %}
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
                                    {% component 'editor' file=\"footer-text.htm\" fixture=\"span\" %}
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
<div id=\"form-callback-popup\" class=\"popup-dialog zoom-anim-dialog mfp-hide\">Введите свой номер телефона и мы перезвоним
    Вам в течении 15 мин{% component \"callbackPopup\" %}
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ 'assets/js/bootstrap.min.js' |theme }}\"></script>
<script src=\"{{ 'assets/js/vide.js' |theme }}\"></script>
<script src=\"{{ 'assets/js/tm-scripts.js' |theme }}\"></script>
<!-- </script> -->
{% framework extras %}
{% scripts %}
</body>
</html>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/inner.htm", "");
    }
}
