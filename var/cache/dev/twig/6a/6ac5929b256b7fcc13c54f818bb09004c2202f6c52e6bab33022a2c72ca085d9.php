<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d94cb8da3938c44812d8903b000b64dbc205d60d797061dcb92d2e768b5b08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d94cb8da3938c44812d8903b000b64dbc205d60d797061dcb92d2e768b5b08d->enter($__internal_4d94cb8da3938c44812d8903b000b64dbc205d60d797061dcb92d2e768b5b08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_2738db7857ccd66270017e37399108d03f9150c057646f2905939d0e3250e213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2738db7857ccd66270017e37399108d03f9150c057646f2905939d0e3250e213->enter($__internal_2738db7857ccd66270017e37399108d03f9150c057646f2905939d0e3250e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4d94cb8da3938c44812d8903b000b64dbc205d60d797061dcb92d2e768b5b08d->leave($__internal_4d94cb8da3938c44812d8903b000b64dbc205d60d797061dcb92d2e768b5b08d_prof);

        
        $__internal_2738db7857ccd66270017e37399108d03f9150c057646f2905939d0e3250e213->leave($__internal_2738db7857ccd66270017e37399108d03f9150c057646f2905939d0e3250e213_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe5cc8b408331f272def9073bb1cc1c19ba366c14fc9594f96698187dd8e74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe5cc8b408331f272def9073bb1cc1c19ba366c14fc9594f96698187dd8e74c->enter($__internal_dfe5cc8b408331f272def9073bb1cc1c19ba366c14fc9594f96698187dd8e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb7ab415056e671725fb6a9802af97c2b0a44b8490648da9acad2ac73e1eba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7ab415056e671725fb6a9802af97c2b0a44b8490648da9acad2ac73e1eba61->enter($__internal_cb7ab415056e671725fb6a9802af97c2b0a44b8490648da9acad2ac73e1eba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb7ab415056e671725fb6a9802af97c2b0a44b8490648da9acad2ac73e1eba61->leave($__internal_cb7ab415056e671725fb6a9802af97c2b0a44b8490648da9acad2ac73e1eba61_prof);

        
        $__internal_dfe5cc8b408331f272def9073bb1cc1c19ba366c14fc9594f96698187dd8e74c->leave($__internal_dfe5cc8b408331f272def9073bb1cc1c19ba366c14fc9594f96698187dd8e74c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1c90d6868ca08bbef4a1b7f19d7161729bac82e19726638f056686446276243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c90d6868ca08bbef4a1b7f19d7161729bac82e19726638f056686446276243->enter($__internal_d1c90d6868ca08bbef4a1b7f19d7161729bac82e19726638f056686446276243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6755da51b0ede9587c9e4897c0df142b2b4a05465f35795700ad432ce59f09ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6755da51b0ede9587c9e4897c0df142b2b4a05465f35795700ad432ce59f09ba->enter($__internal_6755da51b0ede9587c9e4897c0df142b2b4a05465f35795700ad432ce59f09ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6755da51b0ede9587c9e4897c0df142b2b4a05465f35795700ad432ce59f09ba->leave($__internal_6755da51b0ede9587c9e4897c0df142b2b4a05465f35795700ad432ce59f09ba_prof);

        
        $__internal_d1c90d6868ca08bbef4a1b7f19d7161729bac82e19726638f056686446276243->leave($__internal_d1c90d6868ca08bbef4a1b7f19d7161729bac82e19726638f056686446276243_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4378df55a96a425995a231a590c8572a8beca94f5b979b8720d5bfb5f7e65567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4378df55a96a425995a231a590c8572a8beca94f5b979b8720d5bfb5f7e65567->enter($__internal_4378df55a96a425995a231a590c8572a8beca94f5b979b8720d5bfb5f7e65567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f338e976eddeffe7093c17e95a3d6c5bfaeaf825e953c083c426bfd16462964e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f338e976eddeffe7093c17e95a3d6c5bfaeaf825e953c083c426bfd16462964e->enter($__internal_f338e976eddeffe7093c17e95a3d6c5bfaeaf825e953c083c426bfd16462964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f338e976eddeffe7093c17e95a3d6c5bfaeaf825e953c083c426bfd16462964e->leave($__internal_f338e976eddeffe7093c17e95a3d6c5bfaeaf825e953c083c426bfd16462964e_prof);

        
        $__internal_4378df55a96a425995a231a590c8572a8beca94f5b979b8720d5bfb5f7e65567->leave($__internal_4378df55a96a425995a231a590c8572a8beca94f5b979b8720d5bfb5f7e65567_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
