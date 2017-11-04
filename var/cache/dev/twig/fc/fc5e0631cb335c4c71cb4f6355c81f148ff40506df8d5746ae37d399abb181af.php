<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
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
        $__internal_81999b73024e2e8cecb868e970ccc9c3411aa2b4d1cffcc19afc4d4e45f58a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81999b73024e2e8cecb868e970ccc9c3411aa2b4d1cffcc19afc4d4e45f58a71->enter($__internal_81999b73024e2e8cecb868e970ccc9c3411aa2b4d1cffcc19afc4d4e45f58a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e677afe4a918a2b7649c5af281e5ba8d52724717007402d48f6ead29713ac431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e677afe4a918a2b7649c5af281e5ba8d52724717007402d48f6ead29713ac431->enter($__internal_e677afe4a918a2b7649c5af281e5ba8d52724717007402d48f6ead29713ac431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_81999b73024e2e8cecb868e970ccc9c3411aa2b4d1cffcc19afc4d4e45f58a71->leave($__internal_81999b73024e2e8cecb868e970ccc9c3411aa2b4d1cffcc19afc4d4e45f58a71_prof);

        
        $__internal_e677afe4a918a2b7649c5af281e5ba8d52724717007402d48f6ead29713ac431->leave($__internal_e677afe4a918a2b7649c5af281e5ba8d52724717007402d48f6ead29713ac431_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4ac66f20e1740dd3940368805fbf8ced2b91aa57e1bfac550cb84cc915f1053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ac66f20e1740dd3940368805fbf8ced2b91aa57e1bfac550cb84cc915f1053->enter($__internal_c4ac66f20e1740dd3940368805fbf8ced2b91aa57e1bfac550cb84cc915f1053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87ee1f09fe16489c64381b2f86194f060ad553d2f3657107655ac6d86c4770d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ee1f09fe16489c64381b2f86194f060ad553d2f3657107655ac6d86c4770d1->enter($__internal_87ee1f09fe16489c64381b2f86194f060ad553d2f3657107655ac6d86c4770d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_87ee1f09fe16489c64381b2f86194f060ad553d2f3657107655ac6d86c4770d1->leave($__internal_87ee1f09fe16489c64381b2f86194f060ad553d2f3657107655ac6d86c4770d1_prof);

        
        $__internal_c4ac66f20e1740dd3940368805fbf8ced2b91aa57e1bfac550cb84cc915f1053->leave($__internal_c4ac66f20e1740dd3940368805fbf8ced2b91aa57e1bfac550cb84cc915f1053_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb91184e7e65d2d64c3ee3d63a1be12742fd89058c27d9e9b0af72fa5fff163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb91184e7e65d2d64c3ee3d63a1be12742fd89058c27d9e9b0af72fa5fff163->enter($__internal_1fb91184e7e65d2d64c3ee3d63a1be12742fd89058c27d9e9b0af72fa5fff163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9957697ed9a778f3c39c3f583973e8d52d97c5d9d5fce3e9ee5dd7120b09b273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9957697ed9a778f3c39c3f583973e8d52d97c5d9d5fce3e9ee5dd7120b09b273->enter($__internal_9957697ed9a778f3c39c3f583973e8d52d97c5d9d5fce3e9ee5dd7120b09b273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9957697ed9a778f3c39c3f583973e8d52d97c5d9d5fce3e9ee5dd7120b09b273->leave($__internal_9957697ed9a778f3c39c3f583973e8d52d97c5d9d5fce3e9ee5dd7120b09b273_prof);

        
        $__internal_1fb91184e7e65d2d64c3ee3d63a1be12742fd89058c27d9e9b0af72fa5fff163->leave($__internal_1fb91184e7e65d2d64c3ee3d63a1be12742fd89058c27d9e9b0af72fa5fff163_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e968c6bf145d3352212eeb700f907e13e7d08ca7ab5208e4fa246857ffebf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e968c6bf145d3352212eeb700f907e13e7d08ca7ab5208e4fa246857ffebf6->enter($__internal_41e968c6bf145d3352212eeb700f907e13e7d08ca7ab5208e4fa246857ffebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb043cdda9ede7753066f45c0b7a76e32b119e677335325bcc7a43f9910aac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb043cdda9ede7753066f45c0b7a76e32b119e677335325bcc7a43f9910aac3->enter($__internal_1bb043cdda9ede7753066f45c0b7a76e32b119e677335325bcc7a43f9910aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bb043cdda9ede7753066f45c0b7a76e32b119e677335325bcc7a43f9910aac3->leave($__internal_1bb043cdda9ede7753066f45c0b7a76e32b119e677335325bcc7a43f9910aac3_prof);

        
        $__internal_41e968c6bf145d3352212eeb700f907e13e7d08ca7ab5208e4fa246857ffebf6->leave($__internal_41e968c6bf145d3352212eeb700f907e13e7d08ca7ab5208e4fa246857ffebf6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
