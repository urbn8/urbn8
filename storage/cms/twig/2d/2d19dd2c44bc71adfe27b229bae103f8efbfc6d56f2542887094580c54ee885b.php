<?php

/* /var/www/html/themes/urbn8/layouts/default.htm */
class __TwigTemplate_fd448ea78346307a17ddff24f0b53eef3d44a908ceba03062fb4e09af62ac2eb extends Twig_Template
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
    <meta charset=\"UTF-8\">
    <title>URBN8 Tech Conslutancy</title>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/icon-font/font-awesome.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/icon-font/pe-icon-7.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animsition.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/masterslider/masterslider.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/revolution/css/settings.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/revolution/css/layers.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/revolution/css/navigation.css");
        echo "\" rel=\"stylesheet\">
    <!-- rev slider -->
    <link href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/modernizr.js");
        echo "\"></script>
    <script>
        window.rootAssetsURL = \"/urbn8/themes/urbn8/assets/\"
    </script>
</head>

<body data-smooth-scroll=\"true\">
    <div class=\"animsition-overlay\" data-animsition-overlay=\"true\">
        ";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "index")) {
            // line 31
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("header/index"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 32
            echo "        ";
        } else {
            // line 33
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("header/sub"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "        ";
        }
        // line 35
        echo "
        <!-- end header -->
        <div id=\"wrapper\" class=\"content-wrapper pages wrapper\">
            ";
        // line 38
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 39
        echo "
            <footer class=\"main-footer space-y text-center\">
                <h4 class=\"text-uppercase title-footer\">&copy; carna theme</h4>
            </footer>
        </div>

        <!-- / content-wrapper-->
        <nav id=\"mm-menu\" class=\"mm-menu\">
            <h1 class=\"mm-menu__title text-uppercase\">info</h1>
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">about carna</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi tenetur qui blanditiis incidunt delectus
                    repellendus temporibus quisquam, alias provident.</p>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">contact info</h6>
                <ul class=\"mm-menu__list\">
                    <li>+123 456 789</li>
                    <li>info@carna.com</li>
                </ul>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">carna address</h6>
                <ul class=\"mm-menu__list\">
                    <li>121 King Street, Melbourne</li>
                    <li>Victoria 3000 Australia</li>
                </ul>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">carna social</h6>
                <ul class=\"mm-menu__social\">
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                    </li>
                </ul>
                <!-- / mm-menu__social -->
            </div>
        </nav>
        <!-- /nav -->
        <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-long-arrow-up\"></i></a>
    </div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/urbn8/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  109 => 38,  104 => 35,  101 => 34,  96 => 33,  93 => 32,  88 => 31,  86 => 30,  75 => 22,  71 => 21,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
    <meta charset=\"UTF-8\">
    <title>URBN8 Tech Conslutancy</title>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.ico' | theme }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico' | theme }}\" type=\"image/x-icon\">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
    <link href=\"{{ 'assets/css/icon-font/font-awesome.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/icon-font/pe-icon-7.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/bootstrap.min.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/animsition.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/masterslider/masterslider.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/revolution/css/settings.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/revolution/css/layers.css' | theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/revolution/css/navigation.css' | theme }}\" rel=\"stylesheet\">
    <!-- rev slider -->
    <link href=\"{{ 'assets/css/style.css' | theme }}\" rel=\"stylesheet\">
    <script src=\"{{ 'assets/js/modernizr.js' | theme }}\"></script>
    <script>
        window.rootAssetsURL = \"/urbn8/themes/urbn8/assets/\"
    </script>
</head>

<body data-smooth-scroll=\"true\">
    <div class=\"animsition-overlay\" data-animsition-overlay=\"true\">
        {% if this.page.id == \"index\" %}
            {% partial 'header/index' %}
        {% else %}
            {% partial 'header/sub' %}
        {% endif %}

        <!-- end header -->
        <div id=\"wrapper\" class=\"content-wrapper pages wrapper\">
            {% page %}

            <footer class=\"main-footer space-y text-center\">
                <h4 class=\"text-uppercase title-footer\">&copy; carna theme</h4>
            </footer>
        </div>

        <!-- / content-wrapper-->
        <nav id=\"mm-menu\" class=\"mm-menu\">
            <h1 class=\"mm-menu__title text-uppercase\">info</h1>
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">about carna</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi tenetur qui blanditiis incidunt delectus
                    repellendus temporibus quisquam, alias provident.</p>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">contact info</h6>
                <ul class=\"mm-menu__list\">
                    <li>+123 456 789</li>
                    <li>info@carna.com</li>
                </ul>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">carna address</h6>
                <ul class=\"mm-menu__list\">
                    <li>121 King Street, Melbourne</li>
                    <li>Victoria 3000 Australia</li>
                </ul>
            </div>
            <!-- / mm-menu__address-->
            <div class=\"mm-menu__address\">
                <h6 class=\"text-uppercase\">carna social</h6>
                <ul class=\"mm-menu__social\">
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                    </li>
                </ul>
                <!-- / mm-menu__social -->
            </div>
        </nav>
        <!-- /nav -->
        <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-long-arrow-up\"></i></a>
    </div>
</body>

</html>", "/var/www/html/themes/urbn8/layouts/default.htm", "");
    }
}
