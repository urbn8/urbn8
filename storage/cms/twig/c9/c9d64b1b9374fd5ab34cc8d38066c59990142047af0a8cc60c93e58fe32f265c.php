<?php

/* /var/www/html/themes/laratify-octobercms-octaskin/layouts/octaskin.htm */
class __TwigTemplate_747546d772046b51adaa481f096ad2056ace850dd4330a8373907f416ef5955f extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icon.png");
        echo "\" />

    ";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_google_fonts", array())) {
            // line 15
            echo "      <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "google_font_family", array()), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 19
            echo "      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_material_icons", array())) {
            // line 23
            echo "      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_stroke7_icons", array())) {
            // line 27
            echo "      <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/stroke7/stroke7-icon-font.min.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 29
        echo "
    <link href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/style.scss"));
        echo "\" rel=\"stylesheet\">

    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/css"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 37
            echo "      <style>
      ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
      </style>
    ";
        }
        // line 41
        echo "  </head>
  <body class=\"lt-theme-";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "code", array()), "html", null, true);
        echo " lt-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " lt-page-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "          </div>
        </div>
      </section>

      ";
        // line 52
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 53
        echo "
      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/copyright"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "          </div>
        </div>
      </section>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "jQuery_version", array()), "html", null, true);
        echo "/jquery.min.js\"></script>
    <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/materialize.min.js", 1 => "assets/js/theme.js"));
        echo "\"></script>

    ";
        // line 74
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 75
            echo "      ";
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
            // line 76
            echo "    ";
        }
        // line 77
        echo "
    ";
        // line 78
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/js"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 79
        echo "
    ";
        // line 80
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 81
        echo "
    ";
        // line 82
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 83
            echo "      <script>
      ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "
      </script>
    ";
        }
        // line 87
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/laratify-octobercms-octaskin/layouts/octaskin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 87,  223 => 84,  220 => 83,  218 => 82,  215 => 81,  212 => 80,  209 => 79,  205 => 78,  202 => 77,  199 => 76,  191 => 75,  189 => 74,  184 => 72,  180 => 71,  173 => 66,  169 => 65,  160 => 58,  156 => 57,  150 => 53,  148 => 52,  142 => 48,  138 => 47,  126 => 42,  123 => 41,  117 => 38,  114 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  99 => 32,  94 => 30,  91 => 29,  85 => 27,  83 => 26,  80 => 25,  76 => 23,  74 => 22,  71 => 21,  67 => 19,  65 => 18,  62 => 17,  56 => 15,  54 => 14,  49 => 12,  45 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />

    {% if this.theme.load_google_fonts %}
      <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_fontawesome %}
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_material_icons %}
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_stroke7_icons %}
      <link href=\"{{ 'assets/css/stroke7/stroke7-icon-font.min.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\">

    {% partial \"_addons/css\" %}

    {% styles %}

    {% if this.theme.custom_css %}
      <style>
      {{ this.theme.custom_css }}
      </style>
    {% endif %}
  </head>
  <body class=\"lt-theme-{{ this.theme.config.code }} lt-layout-{{ this.layout.id }} lt-page-{{ this.page.id }}\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            {% partial \"pages-all/navigation\" %}
          </div>
        </div>
      </section>

      {% page %}

      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            {% partial \"pages-all/footer\" %}
          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            {% partial \"pages-all/copyright\" %}
          </div>
        </div>
      </section>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
    <script src=\"{{ ['assets/js/materialize.min.js','assets/js/theme.js']|theme }}\"></script>

    {% if this.theme.load_octobercms_framework %}
      {% framework extras %}
    {% endif %}

    {% partial \"_addons/js\" %}

    {% scripts %}

    {% if this.theme.custom_js %}
      <script>
      {{ this.theme.custom_js }}
      </script>
    {% endif %}
  </body>
</html>", "/var/www/html/themes/laratify-octobercms-octaskin/layouts/octaskin.htm", "");
    }
}
