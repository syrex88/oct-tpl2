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
    <!-- Links -->


    <!--JS-->
    <script src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/..\">
            <img src=\"";
        // line 28
        echo "assets/images/ie8-panel/warning_bar_0000_us.jpg ";
        echo "\" border=\"0\" height=\"42\" width=\"820\"
                 alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
        </a>
    </div>
    <script src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/device.min.js");
        echo "\"></script>
    ";
        // line 35
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 36
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
        // line 62
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
        // line 76
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 77
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
        // line 87
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "front-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 88
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
        // line 106
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("callback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 107
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
                                        <label for=\"no-nds\"><input value=\"1000\" type=\"radio\" name=\"nds\" checked id=\"no-nds\"><span>Упрощённая система налогооблажения (Без НДС)</span></label>
                                        <label for=\"with-nds\"><input value=\"2000\" type=\"radio\" name=\"nds\" id=\"with-nds\"><span>Общая (с НДС)</span></label>
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерный объём первичных документов в месяц:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <div class=\"slider\"></div>
                                        <input style=\"color: black\" type=\"text\" value=\"100\" name=\"slider-value\"
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
                                        <button class=\"btn btn-primary\">Получить точную стоимость</button>
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
        // line 167
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 168
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
        // line 179
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
                                        <time datetime=\"2014-04-20\">April 20, 2014</time>
                                        <h4 class=\"post-heading\">More Than 100 <strong>Financial Planners</strong>,
                                            <em>One</em> Philosophy</h4>

                                        <div class=\"post-body\">
                                            <p>Every single one of our financial advisors receives rigorous training in
                                                Ric Edelman's philosophy, which is based on academic research (including
                                                that of a Nobel laureate in Economics) and Behavioral Finance. </p>

                                            <p>All of our planners believe that everyone, rich or not so rich, deserves
                                                great financial advice and planning services. No matter which advisor
                                                you work with, you can be confident that they'll put YOUR BEST INTERESTS
                                                FIRST and that you are getting the best experience we have to offer.</p>
                                            <a href=\"#\" class=\"btn btn-xs btn-default\">Read more</a>

                                            <div class=\"btn-wrap\">
                                                <a href=\"#\" class=\"btn btn-primary btn-mod-1\"><span
                                                        class=\"fw-n\">Get Your</span>
                                                    Free Financial
                                                    Analysis</a>
                                            </div>
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
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-4\">
                            <div class=\"block-adaptive\">
                                <h2>Sign Up</h2>

                                <p class=\"text-style-2\"><strong>Get subscriber only</strong> insights <span
                                        class=\"font-family-secondary-1 fw-b\"><em>&amp;</em></span> news delivered <span
                                        class=\"font-family-secondary-1 fw-b\"><em>by</em></span> <strong>John
                                    Doe</strong></p>

                                <form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" method=\"post\">
                                    <!-- RD Mailform Type -->
                                    <input type=\"hidden\" name=\"form-type\" value=\"subscribe\"/>
                                    <!-- END RD Mailform Type -->
                                    <div class=\"form-group\">
                                        <label class=\"form-label\" data-add-placeholder for=\"mailform-subscribe-email\">Enter
                                            your
                                            e-mail </label>
                                        <input id=\"mailform-subscribe-email\"
                                               type=\"text\"
                                               name=\"email\"
                                               data-constraints=\"@NotEmpty @Email\"/>

                                    </div>
                                    <div class=\"control-absolute\">
                                        <button class=\"btn btn-default-variant-1\" type=\"submit\">Submit</button>
                                        <div class=\"mfInfo\"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5 pull-md-right\">
                            <div class=\"block-adaptive\">
                                <h2>Contacts</h2>

                            </div>
                            <div class=\"card\">
                                <div class=\"box-xs\">
                                    <div class=\"box__left\">
                                        <div class=\"card-image\">
                                            <img src=\"";
        // line 267
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/home-9.png");
        echo "\" alt=\"\" width=\"130\"
                                                 height=\"164\">
                                        </div>
                                    </div>
                                    <div class=\"box__body\">
                                        <div class=\"card-header\">
                                            <p class=\"h4 font-family-sec-1 text-primary\">John Doe Jr.</p>

                                            <p class=\"card-header-caption\">Financial Advisor</p>
                                        </div>
                                        <div class=\"card-body\">
                                            <dl>
                                                <dt>Website</dt>
                                                <dd><a href=\"#\" class=\"text-primary\">johndoe.com</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Email</dt>
                                                <dd><a href=\"mailto:#\" class=\"text-primary\">johndoe@demolink.org</a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Phone</dt>
                                                <dd><a href=\"callto:#\">+1 959 603 6035</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Address</dt>
                                                <dd>
                                                    <address>222 Fashion Lane, Ste.<br>
                                                        207 Tustin, CA 92780
                                                    </address>
                                                </dd>
                                            </dl>
                                        </div>
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
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <p class=\"rights\">
                                    &copy; <span id=\"copyright-year\"></span> All rights reserved.
                                    <br class=\"hidden-sm hidden-md hidden-lg\">
                                    <a href=\"index-8.html\">Privacy Policy</a>
                                    More Financial Advisor Templates at <a rel=\"nofollow\"
                                                                           href=\"http://www.templatemonster.com/category.php?category=130&type=1\"
                                                                           target=\"_blank\">TemplateMonster.com</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"row offset-3 child-offset-1\">
                            <div class=\"col-xs-12 col-md-7\">
                                <div class=\"inset-2\">
                                    <p class=\"small\">
                                        Investments products and services available only to residents of : Arizona - AZ,
                                        California - CA,
                                        Hawaii
                                        - HI, Idaho - ID, New Jersey - NJ, New Mexico - NM, Oregon - OR, Washington - WA
                                        Securities and
                                        Investment Advice through John Doe & Company, A registered broker/dealer and
                                        Investment Advisor,
                                        Member
                                        FINRA and SIPC. 101 Serious Road, Fincity, FL 32707 Tel: <a href=\"callto:#\">(959)
                                        603- 6035</a>.|
                                        John
                                        Doe Financial Advisors
                                        is not an affiliate of Wall Street Company.
                                    </p>

                                    <p class=\"small\">
                                        All other trademarks and copyrights are the properties of their respective
                                        holders.This website
                                        provides
                                        information related to the subjects covered. Before making any financial or
                                        legal decisions, a
                                        professional should be consulted.
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-5\">
                                <div class=\"list-container\">
                                    <div class=\"list-wrap\">
                                        <h6>Investment Help</h6>
                                        <ul class=\"marked-list marked-list-xs marked-list-dash\">
                                            <li><a href=\"#\">Stocks, Bonds &amp; Mutual Funds</a></li>
                                            <li><a href=\"#\">Retirement &amp; College Savings</a></li>
                                            <li><a href=\"#\">Insurance &amp; Annuities</a></li>
                                            <li><a href=\"#\">Wealth Management</a></li>
                                            <li><a href=\"#\">Business Owners</a></li>
                                            <li><a href=\"#\">Cash &amp; Credit</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"list-wrap\">
                                        <h6>Financial Planning</h6>
                                        <ul class=\"marked-list marked-list-xs marked-list-dash\">
                                            <li><a href=\"#\">Investment Management</a></li>
                                            <li><a href=\"#\">Retirement Planning</a></li>
                                            <li><a href=\"#\">Long Term Care</a></li>
                                            <li><a href=\"#\">Estate Planning</a></li>
                                            <li><a href=\"#\">Social Security</a></li>
                                        </ul>
                                    </div>
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
<script src=\"";
        // line 389
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 390
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vide.js");
        echo "\"></script>
<script src=\"";
        // line 391
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/tm-scripts.js");
        echo "\"></script>
<!-- </script> -->
";
        // line 393
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 394
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 395
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
        return array (  502 => 395,  499 => 394,  492 => 393,  487 => 391,  483 => 390,  479 => 389,  354 => 267,  263 => 179,  250 => 168,  248 => 167,  198 => 119,  192 => 118,  179 => 107,  175 => 106,  155 => 88,  149 => 87,  137 => 77,  133 => 76,  116 => 62,  88 => 36,  85 => 35,  81 => 34,  76 => 32,  69 => 28,  60 => 22,  56 => 21,  48 => 16,  44 => 15,  40 => 14,  35 => 12,  29 => 9,  19 => 1,);
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
                                        <label for=\"no-nds\"><input value=\"1000\" type=\"radio\" name=\"nds\" checked id=\"no-nds\"><span>Упрощённая система налогооблажения (Без НДС)</span></label>
                                        <label for=\"with-nds\"><input value=\"2000\" type=\"radio\" name=\"nds\" id=\"with-nds\"><span>Общая (с НДС)</span></label>
                                    </div>
                                </div>
                                <div class=\"calculate-group row\">
                                    <div class=\"title col-xs-4\">Примерный объём первичных документов в месяц:</div>
                                    <div class=\"inputs col-xs-8\">
                                        <div class=\"slider\"></div>
                                        <input style=\"color: black\" type=\"text\" value=\"100\" name=\"slider-value\"
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
                                        <button class=\"btn btn-primary\">Получить точную стоимость</button>
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
                                        <time datetime=\"2014-04-20\">April 20, 2014</time>
                                        <h4 class=\"post-heading\">More Than 100 <strong>Financial Planners</strong>,
                                            <em>One</em> Philosophy</h4>

                                        <div class=\"post-body\">
                                            <p>Every single one of our financial advisors receives rigorous training in
                                                Ric Edelman's philosophy, which is based on academic research (including
                                                that of a Nobel laureate in Economics) and Behavioral Finance. </p>

                                            <p>All of our planners believe that everyone, rich or not so rich, deserves
                                                great financial advice and planning services. No matter which advisor
                                                you work with, you can be confident that they'll put YOUR BEST INTERESTS
                                                FIRST and that you are getting the best experience we have to offer.</p>
                                            <a href=\"#\" class=\"btn btn-xs btn-default\">Read more</a>

                                            <div class=\"btn-wrap\">
                                                <a href=\"#\" class=\"btn btn-primary btn-mod-1\"><span
                                                        class=\"fw-n\">Get Your</span>
                                                    Free Financial
                                                    Analysis</a>
                                            </div>
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
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-4\">
                            <div class=\"block-adaptive\">
                                <h2>Sign Up</h2>

                                <p class=\"text-style-2\"><strong>Get subscriber only</strong> insights <span
                                        class=\"font-family-secondary-1 fw-b\"><em>&amp;</em></span> news delivered <span
                                        class=\"font-family-secondary-1 fw-b\"><em>by</em></span> <strong>John
                                    Doe</strong></p>

                                <form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" method=\"post\">
                                    <!-- RD Mailform Type -->
                                    <input type=\"hidden\" name=\"form-type\" value=\"subscribe\"/>
                                    <!-- END RD Mailform Type -->
                                    <div class=\"form-group\">
                                        <label class=\"form-label\" data-add-placeholder for=\"mailform-subscribe-email\">Enter
                                            your
                                            e-mail </label>
                                        <input id=\"mailform-subscribe-email\"
                                               type=\"text\"
                                               name=\"email\"
                                               data-constraints=\"@NotEmpty @Email\"/>

                                    </div>
                                    <div class=\"control-absolute\">
                                        <button class=\"btn btn-default-variant-1\" type=\"submit\">Submit</button>
                                        <div class=\"mfInfo\"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-5 pull-md-right\">
                            <div class=\"block-adaptive\">
                                <h2>Contacts</h2>

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
                                        <div class=\"card-header\">
                                            <p class=\"h4 font-family-sec-1 text-primary\">John Doe Jr.</p>

                                            <p class=\"card-header-caption\">Financial Advisor</p>
                                        </div>
                                        <div class=\"card-body\">
                                            <dl>
                                                <dt>Website</dt>
                                                <dd><a href=\"#\" class=\"text-primary\">johndoe.com</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Email</dt>
                                                <dd><a href=\"mailto:#\" class=\"text-primary\">johndoe@demolink.org</a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Phone</dt>
                                                <dd><a href=\"callto:#\">+1 959 603 6035</a></dd>
                                            </dl>
                                            <dl>
                                                <dt>Address</dt>
                                                <dd>
                                                    <address>222 Fashion Lane, Ste.<br>
                                                        207 Tustin, CA 92780
                                                    </address>
                                                </dd>
                                            </dl>
                                        </div>
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
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <p class=\"rights\">
                                    &copy; <span id=\"copyright-year\"></span> All rights reserved.
                                    <br class=\"hidden-sm hidden-md hidden-lg\">
                                    <a href=\"index-8.html\">Privacy Policy</a>
                                    More Financial Advisor Templates at <a rel=\"nofollow\"
                                                                           href=\"http://www.templatemonster.com/category.php?category=130&type=1\"
                                                                           target=\"_blank\">TemplateMonster.com</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"row offset-3 child-offset-1\">
                            <div class=\"col-xs-12 col-md-7\">
                                <div class=\"inset-2\">
                                    <p class=\"small\">
                                        Investments products and services available only to residents of : Arizona - AZ,
                                        California - CA,
                                        Hawaii
                                        - HI, Idaho - ID, New Jersey - NJ, New Mexico - NM, Oregon - OR, Washington - WA
                                        Securities and
                                        Investment Advice through John Doe & Company, A registered broker/dealer and
                                        Investment Advisor,
                                        Member
                                        FINRA and SIPC. 101 Serious Road, Fincity, FL 32707 Tel: <a href=\"callto:#\">(959)
                                        603- 6035</a>.|
                                        John
                                        Doe Financial Advisors
                                        is not an affiliate of Wall Street Company.
                                    </p>

                                    <p class=\"small\">
                                        All other trademarks and copyrights are the properties of their respective
                                        holders.This website
                                        provides
                                        information related to the subjects covered. Before making any financial or
                                        legal decisions, a
                                        professional should be consulted.
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-5\">
                                <div class=\"list-container\">
                                    <div class=\"list-wrap\">
                                        <h6>Investment Help</h6>
                                        <ul class=\"marked-list marked-list-xs marked-list-dash\">
                                            <li><a href=\"#\">Stocks, Bonds &amp; Mutual Funds</a></li>
                                            <li><a href=\"#\">Retirement &amp; College Savings</a></li>
                                            <li><a href=\"#\">Insurance &amp; Annuities</a></li>
                                            <li><a href=\"#\">Wealth Management</a></li>
                                            <li><a href=\"#\">Business Owners</a></li>
                                            <li><a href=\"#\">Cash &amp; Credit</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"list-wrap\">
                                        <h6>Financial Planning</h6>
                                        <ul class=\"marked-list marked-list-xs marked-list-dash\">
                                            <li><a href=\"#\">Investment Management</a></li>
                                            <li><a href=\"#\">Retirement Planning</a></li>
                                            <li><a href=\"#\">Long Term Care</a></li>
                                            <li><a href=\"#\">Estate Planning</a></li>
                                            <li><a href=\"#\">Social Security</a></li>
                                        </ul>
                                    </div>
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
<!-- </script> -->
{% framework extras %}
{% scripts %}
</body>
</html>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/default.htm", "");
    }
}
