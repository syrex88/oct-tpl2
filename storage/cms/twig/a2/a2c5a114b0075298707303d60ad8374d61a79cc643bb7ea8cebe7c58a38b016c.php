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
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name=\"format-detection\" content=\"telephone=no\"/>
  <link rel=\"icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
  <title>F/A</title>

  <!-- Bootstrap -->
  <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">

  <!-- Links -->


  <!--JS-->
  <script src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
  <script src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>


  <!--[if lt IE 9]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href=\"http://windows.microsoft.com/en-US/internet-explorer/..\">
      <img src=\"";
        // line 26
        echo "assets/images/ie8-panel/warning_bar_0000_us.jpg ";
        echo "\" border=\"0\" height=\"42\" width=\"820\"
           alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
    </a>
  </div>
  <script src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
  <![endif]-->
  <script src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/device.min.js");
        echo "\"></script>
  ";
        // line 33
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 34
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
                <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar\"><span></span></button>
                <!-- END RD Navbar Toggle -->

                <!-- RD Navbar Brand -->
                <div class=\"rd-navbar-brand\">
                  <a href=\"index.html\">
                    <span class=\"rd-navbar-brand-logo\"><img src=\"images/logo.png\" alt=\"\"></span>

                    <div class=\"rd-navbar-brand-body\">
                      <span class=\"brand-name\">FinAdvision, <span class=\"text-light\">Inc</span></span>
                      <span class=\"brand-slogan\">Your trusted financial advisor</span>
                    </div>
                  </a>
                </div>
                <!-- END RD Navbar Brand -->
              </div>
              <!-- END RD Navbar Panel -->

              <div class=\"rd-navbar-nav-wrap\">

                <!-- RD Navbar Nav -->
                <ul class=\"rd-navbar-nav\">
                  <li>
                    <a href=\"index-1.html\">About Me</a>
                  </li>
                  <li class=\"active\">
                    <a href=\"index-2.html\">Financial Planning</a>
                  </li>
                  <li>
                    <a href=\"index-3.html\">Investment Help</a>
                  </li>
                  <li>
                    <a href=\"index-4.html\">Advice</a>
                  </li>
                  <li>
                    <a href=\"index-6.html\">Contact</a>
                  </li>
                </ul>
                <!-- END RD Navbar Nav -->
              </div>
              <div class=\"rd-navbar-aside\">
                <button class=\"rd-navbar-aside-toggle\" data-rd-navbar-toggle=\".rd-navbar-aside\"><span></span></button>
                <div class=\"rd-navbar-aside-body\">
                  <a href=\"index-7.html\" class=\"btn btn-sm btn-primary\">Free Consultation</a>
                </div>
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
    ";
        // line 110
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 111
        echo "  </main>
  <!--========================================================
                          FOOTER
  =========================================================-->
  <footer class=\"page-footer\">
    <!-- Have a Question? -->
    <section class=\"bg-default-dark bg-transparent skew skew-2\">
      <div class=\"skew-block bg-default-dark\">
      </div>

      <!-- Get in touch -->
      <section class=\"well-3\">
        <div class=\"container container-wide\">
          <div class=\"row child-offset-1\">
            <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-4\">
              <div class=\"block-adaptive\">
                <h2>Sign Up</h2>

                <p class=\"text-style-2\"><strong>Get subscriber only</strong> insights <span
                        class=\"font-family-secondary-1 fw-b\"><em>&amp;</em></span> news delivered <span
                        class=\"font-family-secondary-1 fw-b\"><em>by</em></span> <strong>John Doe</strong></p>

                <form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" method=\"post\"
                      action=\"bat/rd-mailform.php\">
                  <!-- RD Mailform Type -->
                  <input type=\"hidden\" name=\"form-type\" value=\"subscribe\"/>
                  <!-- END RD Mailform Type -->
                  <div class=\"form-group\">
                    <label class=\"form-label\" data-add-placeholder for=\"mailform-subscribe-email\">Enter your
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
                      <img src=\"images/home-9.png\" alt=\"\" width=\"130\" height=\"164\">
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
                        <dd><a href=\"mailto:#\" class=\"text-primary\">johndoe@demolink.org</a></dd>
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
                </p>
              </div>
            </div>
            <div class=\"row offset-3 child-offset-1\">
              <div class=\"col-xs-12 col-md-7\">
                <div class=\"inset-2\">
                  <p class=\"small\">
                    Investments products and services available only to residents of : Arizona - AZ, California - CA,
                    Hawaii
                    - HI, Idaho - ID, New Jersey - NJ, New Mexico - NM, Oregon - OR, Washington - WA Securities and
                    Investment Advice through John Doe & Company, A registered broker/dealer and Investment Advisor,
                    Member
                    FINRA and SIPC. 101 Serious Road, Fincity, FL 32707 Tel: <a href=\"callto:#\">(959) 603- 6035</a>.|
                    John
                    Doe Financial Advisors
                    is not an affiliate of Wall Street Company.
                  </p>

                  <p class=\"small\">
                    All other trademarks and copyrights are the properties of their respective holders.This website
                    provides
                    information related to the subjects covered. Before making any financial or legal decisions, a
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
        // line 274
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 275
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vide.js");
        echo "\"></script>
<script src=\"";
        // line 276
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/tm-scripts.js");
        echo "\"></script>
<!-- </script> -->
";
        // line 278
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 279
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 280
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
        return array (  345 => 280,  342 => 279,  335 => 278,  330 => 276,  326 => 275,  322 => 274,  157 => 111,  155 => 110,  77 => 34,  74 => 33,  70 => 32,  65 => 30,  58 => 26,  49 => 20,  45 => 19,  36 => 13,  29 => 9,  19 => 1,);
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
  <title>F/A</title>

  <!-- Bootstrap -->
  <link href=\"{{ 'assets/css/bootstrap.css' |theme }}\" rel=\"stylesheet\">

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
                <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar\"><span></span></button>
                <!-- END RD Navbar Toggle -->

                <!-- RD Navbar Brand -->
                <div class=\"rd-navbar-brand\">
                  <a href=\"index.html\">
                    <span class=\"rd-navbar-brand-logo\"><img src=\"images/logo.png\" alt=\"\"></span>

                    <div class=\"rd-navbar-brand-body\">
                      <span class=\"brand-name\">FinAdvision, <span class=\"text-light\">Inc</span></span>
                      <span class=\"brand-slogan\">Your trusted financial advisor</span>
                    </div>
                  </a>
                </div>
                <!-- END RD Navbar Brand -->
              </div>
              <!-- END RD Navbar Panel -->

              <div class=\"rd-navbar-nav-wrap\">

                <!-- RD Navbar Nav -->
                <ul class=\"rd-navbar-nav\">
                  <li>
                    <a href=\"index-1.html\">About Me</a>
                  </li>
                  <li class=\"active\">
                    <a href=\"index-2.html\">Financial Planning</a>
                  </li>
                  <li>
                    <a href=\"index-3.html\">Investment Help</a>
                  </li>
                  <li>
                    <a href=\"index-4.html\">Advice</a>
                  </li>
                  <li>
                    <a href=\"index-6.html\">Contact</a>
                  </li>
                </ul>
                <!-- END RD Navbar Nav -->
              </div>
              <div class=\"rd-navbar-aside\">
                <button class=\"rd-navbar-aside-toggle\" data-rd-navbar-toggle=\".rd-navbar-aside\"><span></span></button>
                <div class=\"rd-navbar-aside-body\">
                  <a href=\"index-7.html\" class=\"btn btn-sm btn-primary\">Free Consultation</a>
                </div>
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
    {% page %}
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
      <section class=\"well-3\">
        <div class=\"container container-wide\">
          <div class=\"row child-offset-1\">
            <div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-4\">
              <div class=\"block-adaptive\">
                <h2>Sign Up</h2>

                <p class=\"text-style-2\"><strong>Get subscriber only</strong> insights <span
                        class=\"font-family-secondary-1 fw-b\"><em>&amp;</em></span> news delivered <span
                        class=\"font-family-secondary-1 fw-b\"><em>by</em></span> <strong>John Doe</strong></p>

                <form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" method=\"post\"
                      action=\"bat/rd-mailform.php\">
                  <!-- RD Mailform Type -->
                  <input type=\"hidden\" name=\"form-type\" value=\"subscribe\"/>
                  <!-- END RD Mailform Type -->
                  <div class=\"form-group\">
                    <label class=\"form-label\" data-add-placeholder for=\"mailform-subscribe-email\">Enter your
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
                      <img src=\"images/home-9.png\" alt=\"\" width=\"130\" height=\"164\">
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
                        <dd><a href=\"mailto:#\" class=\"text-primary\">johndoe@demolink.org</a></dd>
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
                </p>
              </div>
            </div>
            <div class=\"row offset-3 child-offset-1\">
              <div class=\"col-xs-12 col-md-7\">
                <div class=\"inset-2\">
                  <p class=\"small\">
                    Investments products and services available only to residents of : Arizona - AZ, California - CA,
                    Hawaii
                    - HI, Idaho - ID, New Jersey - NJ, New Mexico - NM, Oregon - OR, Washington - WA Securities and
                    Investment Advice through John Doe & Company, A registered broker/dealer and Investment Advisor,
                    Member
                    FINRA and SIPC. 101 Serious Road, Fincity, FL 32707 Tel: <a href=\"callto:#\">(959) 603- 6035</a>.|
                    John
                    Doe Financial Advisors
                    is not an affiliate of Wall Street Company.
                  </p>

                  <p class=\"small\">
                    All other trademarks and copyrights are the properties of their respective holders.This website
                    provides
                    information related to the subjects covered. Before making any financial or legal decisions, a
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
</html>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/layouts/inner.htm", "");
    }
}
