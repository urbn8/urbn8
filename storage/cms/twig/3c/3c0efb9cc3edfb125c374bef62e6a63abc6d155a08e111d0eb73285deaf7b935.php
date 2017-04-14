<?php

/* /var/www/html/themes/urbn8/pages/index2.htm */
class __TwigTemplate_a4fbb283f879620dc9bed34541617bc9cb928eb6cbf2295914b69e88b686b0f7 extends Twig_Template
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
        echo "<div id=\"home\" class=\"pages\">
    <div class=\"header-video\">
        <div class=\"color-bg\" data-color-bg=\"#fff\" data-opacity=\".9\" data-color-zindex=\"3\"></div>
        <img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/media/video-poster.jpg");
        echo "\" class=\"header-video__media\" data-video-URL=\"https://www.youtube.com/embed/i4czp_JxPzA\"
            data-teaser=\"media/draw\" data-video-width=\"560\" data-video-height=\"315\">
        <h1 class=\"header-video__title\">we are carna</h1>
        <p class=\"header-video__sub-title\">a digital agency and art lover</p>
        <a href=\"https://www.youtube.com/embed/Scxs7L0vhZ4\" class=\"header-video__play-trigger\" id=\"header-video__play-trigger\">
                Play reel <br>
                <i class=\"fa fa-play\"></i>
        </a>
        <button type=\"button\" class=\"header-video__close-trigger\" id=\"header-video__close-trigger\"><i class=\"fa fa-close\"></i></button>
    </div>
    <!-- / header video -->
</div>
<!-- end home -->
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("index"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/urbn8/pages/index2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"home\" class=\"pages\">
    <div class=\"header-video\">
        <div class=\"color-bg\" data-color-bg=\"#fff\" data-opacity=\".9\" data-color-zindex=\"3\"></div>
        <img src=\"{{ 'assets/media/video-poster.jpg' | theme }}\" class=\"header-video__media\" data-video-URL=\"https://www.youtube.com/embed/i4czp_JxPzA\"
            data-teaser=\"media/draw\" data-video-width=\"560\" data-video-height=\"315\">
        <h1 class=\"header-video__title\">we are carna</h1>
        <p class=\"header-video__sub-title\">a digital agency and art lover</p>
        <a href=\"https://www.youtube.com/embed/Scxs7L0vhZ4\" class=\"header-video__play-trigger\" id=\"header-video__play-trigger\">
                Play reel <br>
                <i class=\"fa fa-play\"></i>
        </a>
        <button type=\"button\" class=\"header-video__close-trigger\" id=\"header-video__close-trigger\"><i class=\"fa fa-close\"></i></button>
    </div>
    <!-- / header video -->
</div>
<!-- end home -->
{% partial 'index' %}", "/var/www/html/themes/urbn8/pages/index2.htm", "");
    }
}
