<?php

/* /var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm */
class __TwigTemplate_c470f4a314a35db1e87d2e0206fd871973360b560a7e8009942ceebe7aa27a30 extends Twig_Template
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
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/img-01.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Build a Professional Website</h2>
            <h5 class=\"lt-slider-subtitle\">with OctoberCMS &amp; Materialize</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/img-02.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Modern Responsive Design</h2>
            <h5 class=\"lt-slider-subtitle\">Mobile Friendly Out of the Box</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/img-03.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Free &amp; Open Source</h2>
            <h5 class=\"lt-slider-subtitle\">Sky is the Limit</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 32,  42 => 19,  26 => 6,  19 => 1,);
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
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-01.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Build a Professional Website</h2>
            <h5 class=\"lt-slider-subtitle\">with OctoberCMS &amp; Materialize</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-02.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Modern Responsive Design</h2>
            <h5 class=\"lt-slider-subtitle\">Mobile Friendly Out of the Box</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-03.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Free &amp; Open Source</h2>
            <h5 class=\"lt-slider-subtitle\">Sky is the Limit</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>", "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm", "");
    }
}
