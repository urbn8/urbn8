<?php

/* /var/www/html/themes/urbn8/partials/header/index.htm */
class __TwigTemplate_6a694909eb9c71c9cbcfc1aaa38655cbf4b5648887b6e7814f049dad8dea307a extends Twig_Template
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
        echo "<header>
    <div class=\"nav-wrap is-fixed is-shrink off-canvas\" data-is-fill=\"true\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12 carna-menu-wrap\">
                    <ul class=\"carna-menu menu-highlight menu-smooth\">
                        <li><a href=\"#home\" data-scroll class=\"scrollTo active\">Home</a>
                        </li>
                        <li><a href=\"#about\" data-scroll class=\"scrollTo\">about</a>
                        </li>
                        <li><a href=\"#work\" data-scroll class=\"scrollTo\">work</a>
                        </li>
                        <li><a href=\"#services\" data-scroll class=\"scrollTo\">services</a>
                        </li>
                        <li><a href=\"#team\" data-scroll class=\"scrollTo\">team</a>
                        </li>
                        <li><a href=\"#news\" data-scroll class=\"scrollTo\">news</a>
                        </li>
                        <li><a class=\"page-outer\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">blog</a>
                        </li>
                        <li><a href=\"#contact\" data-scroll class=\"scrollTo\">contact</a>
                        </li>
                    </ul>
                    <!-- end of menu -->
                </div>
                <!-- / col-md-9 -->
                <div class=\"col-xs-3 text-right button-wrap\">
                    <button class=\"button-trigger\"><span></span>
                    </button>
                </div>
                <!-- / col-xs-6 -->
                <div class=\"col-xs-6 col-sm-6 col-md-3 brand-band\">
                    <div class=\"brand-wrap clearfix\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("index");
        echo "\" class=\"brand\">
                            <img src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo/logo-white.png");
        echo "\" class=\"logo-white retina-img\" alt=\"\">
                            <img src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo/logo.png");
        echo "\" class=\"logo-dark retina-img\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- / col-xs-6 -->
                <div class=\"col-xs-3 mm-button-band \">
                    <button id=\"mm-menu-toggle\" class=\"mm-menu-toggle\">Toggle Menu<span></span>
                    </button>
                </div>
                <div class=\"col-md-12 mobile-wrap\" data-one-page=\"true\" data-has-button=\"true\">
                    <ul class=\"carna-menu-mobile mobile-smooth\" data-scroll-header>
                        <li>
                            <a href=\"#home\" class=\"scrollToMini ";
        // line 48
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "index")) {
            echo "active";
        }
        echo "\" data-scroll>Home</a>
                        </li>
                        <li><a href=\"#about\" data-scroll class=\"scrollToMini\">about</a>
                        </li>
                        <li><a href=\"#work\" data-scroll class=\"scrollToMini\">work</a>
                        </li>
                        <li><a href=\"#services\" data-scroll class=\"scrollToMini\">services</a>
                        </li>
                        <li><a href=\"#team\" data-scroll class=\"scrollToMini\">team</a>
                        </li>
                        <li><a href=\"#news\" data-scroll class=\"scrollToMini\">news</a>
                        </li>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">blog</a>
                        </li>
                        <li><a href=\"#contact\" data-scroll class=\"scrollToMini\">contact</a>
                        </li>
                    </ul>
                </div>
                <!-- / col-md-12 -->
                <div class=\"clearfix\"></div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end nav-wrap -->
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/urbn8/partials/header/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 60,  80 => 48,  65 => 36,  61 => 35,  57 => 34,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"nav-wrap is-fixed is-shrink off-canvas\" data-is-fill=\"true\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12 carna-menu-wrap\">
                    <ul class=\"carna-menu menu-highlight menu-smooth\">
                        <li><a href=\"#home\" data-scroll class=\"scrollTo active\">Home</a>
                        </li>
                        <li><a href=\"#about\" data-scroll class=\"scrollTo\">about</a>
                        </li>
                        <li><a href=\"#work\" data-scroll class=\"scrollTo\">work</a>
                        </li>
                        <li><a href=\"#services\" data-scroll class=\"scrollTo\">services</a>
                        </li>
                        <li><a href=\"#team\" data-scroll class=\"scrollTo\">team</a>
                        </li>
                        <li><a href=\"#news\" data-scroll class=\"scrollTo\">news</a>
                        </li>
                        <li><a class=\"page-outer\" href=\"{{ 'blog' | page }}\">blog</a>
                        </li>
                        <li><a href=\"#contact\" data-scroll class=\"scrollTo\">contact</a>
                        </li>
                    </ul>
                    <!-- end of menu -->
                </div>
                <!-- / col-md-9 -->
                <div class=\"col-xs-3 text-right button-wrap\">
                    <button class=\"button-trigger\"><span></span>
                    </button>
                </div>
                <!-- / col-xs-6 -->
                <div class=\"col-xs-6 col-sm-6 col-md-3 brand-band\">
                    <div class=\"brand-wrap clearfix\">
                        <a href=\"{{ 'index' | page }}\" class=\"brand\">
                            <img src=\"{{ 'assets/images/logo/logo-white.png' | theme }}\" class=\"logo-white retina-img\" alt=\"\">
                            <img src=\"{{ 'assets/images/logo/logo.png' | theme }}\" class=\"logo-dark retina-img\" alt=\"\">
                        </a>
                    </div>
                </div>
                <!-- / col-xs-6 -->
                <div class=\"col-xs-3 mm-button-band \">
                    <button id=\"mm-menu-toggle\" class=\"mm-menu-toggle\">Toggle Menu<span></span>
                    </button>
                </div>
                <div class=\"col-md-12 mobile-wrap\" data-one-page=\"true\" data-has-button=\"true\">
                    <ul class=\"carna-menu-mobile mobile-smooth\" data-scroll-header>
                        <li>
                            <a href=\"#home\" class=\"scrollToMini {% if this.page.id == 'index' %}active{% endif %}\" data-scroll>Home</a>
                        </li>
                        <li><a href=\"#about\" data-scroll class=\"scrollToMini\">about</a>
                        </li>
                        <li><a href=\"#work\" data-scroll class=\"scrollToMini\">work</a>
                        </li>
                        <li><a href=\"#services\" data-scroll class=\"scrollToMini\">services</a>
                        </li>
                        <li><a href=\"#team\" data-scroll class=\"scrollToMini\">team</a>
                        </li>
                        <li><a href=\"#news\" data-scroll class=\"scrollToMini\">news</a>
                        </li>
                        <li><a href=\"{{ 'blog' | page }}\" class=\"{% if this.page.id == 'blog' %}active{% endif %}\">blog</a>
                        </li>
                        <li><a href=\"#contact\" data-scroll class=\"scrollToMini\">contact</a>
                        </li>
                    </ul>
                </div>
                <!-- / col-md-12 -->
                <div class=\"clearfix\"></div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end nav-wrap -->
</header>", "/var/www/html/themes/urbn8/partials/header/index.htm", "");
    }
}
