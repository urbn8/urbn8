<?php

/* /var/www/html/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm */
class __TwigTemplate_a5c187824bb48e1fbeee0b72837454127c8e0fd28f36b7ac05906ad7546f7d3a extends Twig_Template
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
    <h2 class=\"lt-title\">What We Do</h2>
    <p class=\"flow-text\">Octaskin provides general customer service via email and aims to respond to all queries within 24 hours.</p>
    <p>Below is a sample of contact form to demo Materialize CSS form elements.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<form class=\"col s12\">
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" class=\"validate\" id=\"first_name\">
      <label for=\"first_name\" class=\"active\">First Name</label>
    </div>
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" id=\"last_name\">
      <label for=\"last_name\">Last Name</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <input type=\"email\" class=\"validate\" id=\"email\">
      <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
      <label for=\"textarea1\">Description</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <select multiple>
        <option value=\"\" disabled selected>Choose your option</option>
        <option value=\"1\">Option 1</option>
        <option value=\"2\">Option 2</option>
        <option value=\"3\">Option 3</option>
      </select>
      <label>Choose Option</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\" multiple>
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <label for=\"datepicker\">Set the Date</label>
      <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
    </div>
  </div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
      <label for=\"filled-in-box\">Send copy to my email</label>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Submit <i class=\"material-icons right\">send</i></button>
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
    <h2 class=\"lt-title\">What We Do</h2>
    <p class=\"flow-text\">Octaskin provides general customer service via email and aims to respond to all queries within 24 hours.</p>
    <p>Below is a sample of contact form to demo Materialize CSS form elements.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<form class=\"col s12\">
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" class=\"validate\" id=\"first_name\">
      <label for=\"first_name\" class=\"active\">First Name</label>
    </div>
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" id=\"last_name\">
      <label for=\"last_name\">Last Name</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <input type=\"email\" class=\"validate\" id=\"email\">
      <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
      <label for=\"textarea1\">Description</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <select multiple>
        <option value=\"\" disabled selected>Choose your option</option>
        <option value=\"1\">Option 1</option>
        <option value=\"2\">Option 2</option>
        <option value=\"3\">Option 3</option>
      </select>
      <label>Choose Option</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\" multiple>
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <label for=\"datepicker\">Set the Date</label>
      <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
    </div>
  </div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
      <label for=\"filled-in-box\">Send copy to my email</label>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Submit <i class=\"material-icons right\">send</i></button>
    </div>
  </div>
</form>", "/var/www/html/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm", "");
    }
}
