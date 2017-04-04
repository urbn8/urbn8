<?php

/* /var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm */
class __TwigTemplate_320d7a2e612306e22b53274423aa01e4daea1c1ddf20f8fbd41d39f50d133631 extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/utility/img-01.png");
        echo "\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/utility/img-02.png");
        echo "\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/utility/img-03.png");
        echo "\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/utility/img-04.png");
        echo "\" alt=\"Github\"></a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-01.png'|theme }}\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-02.png'|theme }}\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-03.png'|theme }}\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-04.png'|theme }}\" alt=\"Github\"></a>
    </div>
  </div>
</div>", "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm", "");
    }
}
