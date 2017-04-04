<?php

/* /var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm */
class __TwigTemplate_f4e7da9ba83a37c9d2407f7a8df32cb29123043e864eaa86f83a2564fccc76ee extends Twig_Template
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
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/mainpage/img-01.jpg");
        echo "\" alt=\"image\"></div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Materialize CSS</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-materializecss-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-materializecss-tab1\">Grid</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab2\">Typography</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab3\">Color</a></li>
        </ul>
      </div>
      <div id=\"lt-materializecss-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>Materialize CSS is using a standard 12 column fluid responsive grid system to help us layout the page in an easy fashion.</p>
      </div>
      <div id=\"lt-materializecss-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Materialize CSS provides some basic styling on header tags. In the example, you can see the the 6 header tags' different sizes.</p>
      </div>
      <div id=\"lt-materializecss-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>Each of Materialize CSS colors is defined with a base color class and an optional lighten or darken class.</p>
      </div>

      <a href=\"#lt-video-materializecss\" class=\"btn-floating btn-large z-depth-0 lt-modal-trigger modal-trigger\">
        <i class=\"large material-icons\">play_arrow</i>
      </a>
      <div id=\"lt-video-materializecss\" class=\"modal\">
        <div class=\"modal-content\">
          <div class=\"video-container\">
            <iframe src=\"https://www.youtube.com/embed/Q8TXgCzxEnw?rel=0\" frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">October CMS</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-octobercms-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-octobercms-tab1\">Modern</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-octobercms-tab2\">Universal</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-octobercms-tab3\">Reliable</a></li>
        </ul>
      </div>
      <div id=\"lt-octobercms-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>OctoberCMS uses all the newest technology and features of the PHP language, and is based on the best powerful Laravel framework.</p>
      </div>
      <div id=\"lt-octobercms-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>We can perform different tasks with OctoberCMS - from simple websites to complex web applications, for designers and developers.</p>
      </div>
      <div id=\"lt-octobercms-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>The OctoberCMS core is very solid and reliable. It will not break your application or website after a software update.</p>
      </div>

      <a href=\"#lt-video-octobercms\" class=\"btn-floating btn-large z-depth-0 lt-modal-trigger modal-trigger\">
        <i class=\"large material-icons\">play_arrow</i>
      </a>
      <div id=\"lt-video-octobercms\" class=\"modal\">
        <div class=\"modal-content\">
          <div class=\"video-container\">
            <iframe src=\"https://player.vimeo.com/video/79963873\" frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 80
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/mainpage/img-02.jpg");
        echo "\" alt=\"image\"></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 80,  24 => 4,  19 => 1,);
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
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/home/mainpage/img-01.jpg'|theme }}\" alt=\"image\"></div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Materialize CSS</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-materializecss-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-materializecss-tab1\">Grid</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab2\">Typography</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab3\">Color</a></li>
        </ul>
      </div>
      <div id=\"lt-materializecss-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>Materialize CSS is using a standard 12 column fluid responsive grid system to help us layout the page in an easy fashion.</p>
      </div>
      <div id=\"lt-materializecss-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Materialize CSS provides some basic styling on header tags. In the example, you can see the the 6 header tags' different sizes.</p>
      </div>
      <div id=\"lt-materializecss-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>Each of Materialize CSS colors is defined with a base color class and an optional lighten or darken class.</p>
      </div>

      <a href=\"#lt-video-materializecss\" class=\"btn-floating btn-large z-depth-0 lt-modal-trigger modal-trigger\">
        <i class=\"large material-icons\">play_arrow</i>
      </a>
      <div id=\"lt-video-materializecss\" class=\"modal\">
        <div class=\"modal-content\">
          <div class=\"video-container\">
            <iframe src=\"https://www.youtube.com/embed/Q8TXgCzxEnw?rel=0\" frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">October CMS</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-octobercms-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-octobercms-tab1\">Modern</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-octobercms-tab2\">Universal</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-octobercms-tab3\">Reliable</a></li>
        </ul>
      </div>
      <div id=\"lt-octobercms-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>OctoberCMS uses all the newest technology and features of the PHP language, and is based on the best powerful Laravel framework.</p>
      </div>
      <div id=\"lt-octobercms-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>We can perform different tasks with OctoberCMS - from simple websites to complex web applications, for designers and developers.</p>
      </div>
      <div id=\"lt-octobercms-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>The OctoberCMS core is very solid and reliable. It will not break your application or website after a software update.</p>
      </div>

      <a href=\"#lt-video-octobercms\" class=\"btn-floating btn-large z-depth-0 lt-modal-trigger modal-trigger\">
        <i class=\"large material-icons\">play_arrow</i>
      </a>
      <div id=\"lt-video-octobercms\" class=\"modal\">
        <div class=\"modal-content\">
          <div class=\"video-container\">
            <iframe src=\"https://player.vimeo.com/video/79963873\" frameborder=\"0\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/home/mainpage/img-02.jpg'|theme }}\" alt=\"image\"></div>
    </div>
  </div>
</div>", "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm", "");
    }
}
