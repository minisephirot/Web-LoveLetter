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
        $__internal_8acd2e35d4eebe94a64f810ef7e7f43c2c31d58b8c6778f0b8dcd1a3603e25f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8acd2e35d4eebe94a64f810ef7e7f43c2c31d58b8c6778f0b8dcd1a3603e25f7->enter($__internal_8acd2e35d4eebe94a64f810ef7e7f43c2c31d58b8c6778f0b8dcd1a3603e25f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e360c488404c5fd9944420a586b1590e2cac5c0f8415edc36c0371655b61c703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e360c488404c5fd9944420a586b1590e2cac5c0f8415edc36c0371655b61c703->enter($__internal_e360c488404c5fd9944420a586b1590e2cac5c0f8415edc36c0371655b61c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8acd2e35d4eebe94a64f810ef7e7f43c2c31d58b8c6778f0b8dcd1a3603e25f7->leave($__internal_8acd2e35d4eebe94a64f810ef7e7f43c2c31d58b8c6778f0b8dcd1a3603e25f7_prof);

        
        $__internal_e360c488404c5fd9944420a586b1590e2cac5c0f8415edc36c0371655b61c703->leave($__internal_e360c488404c5fd9944420a586b1590e2cac5c0f8415edc36c0371655b61c703_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89f248028da7d34cf9057f3d1f87b663c3ecacb5f41734a275e57e8336280be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f248028da7d34cf9057f3d1f87b663c3ecacb5f41734a275e57e8336280be0->enter($__internal_89f248028da7d34cf9057f3d1f87b663c3ecacb5f41734a275e57e8336280be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73234eaf37257d38ace7ae256e9c6d48314fb665cecb9e8171147146a4878f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73234eaf37257d38ace7ae256e9c6d48314fb665cecb9e8171147146a4878f00->enter($__internal_73234eaf37257d38ace7ae256e9c6d48314fb665cecb9e8171147146a4878f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_73234eaf37257d38ace7ae256e9c6d48314fb665cecb9e8171147146a4878f00->leave($__internal_73234eaf37257d38ace7ae256e9c6d48314fb665cecb9e8171147146a4878f00_prof);

        
        $__internal_89f248028da7d34cf9057f3d1f87b663c3ecacb5f41734a275e57e8336280be0->leave($__internal_89f248028da7d34cf9057f3d1f87b663c3ecacb5f41734a275e57e8336280be0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db93121538ac3e6a3aa0486c2612e355501264c09bab3ad75dd75fb16a1e0211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db93121538ac3e6a3aa0486c2612e355501264c09bab3ad75dd75fb16a1e0211->enter($__internal_db93121538ac3e6a3aa0486c2612e355501264c09bab3ad75dd75fb16a1e0211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37aeca1129b20023ce26d4626da59c6fc8ea11e74475ad8ff064bfb9fde524e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37aeca1129b20023ce26d4626da59c6fc8ea11e74475ad8ff064bfb9fde524e4->enter($__internal_37aeca1129b20023ce26d4626da59c6fc8ea11e74475ad8ff064bfb9fde524e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_37aeca1129b20023ce26d4626da59c6fc8ea11e74475ad8ff064bfb9fde524e4->leave($__internal_37aeca1129b20023ce26d4626da59c6fc8ea11e74475ad8ff064bfb9fde524e4_prof);

        
        $__internal_db93121538ac3e6a3aa0486c2612e355501264c09bab3ad75dd75fb16a1e0211->leave($__internal_db93121538ac3e6a3aa0486c2612e355501264c09bab3ad75dd75fb16a1e0211_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_86849e03db1dd66793b59cd66ba3a6a99ec08c793909421c5775d2663feb68ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86849e03db1dd66793b59cd66ba3a6a99ec08c793909421c5775d2663feb68ca->enter($__internal_86849e03db1dd66793b59cd66ba3a6a99ec08c793909421c5775d2663feb68ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a6e288b597f98c82d71eca12033f4ec9c0d96bd80e1e96833839cbe13a6e5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6e288b597f98c82d71eca12033f4ec9c0d96bd80e1e96833839cbe13a6e5d0->enter($__internal_3a6e288b597f98c82d71eca12033f4ec9c0d96bd80e1e96833839cbe13a6e5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a6e288b597f98c82d71eca12033f4ec9c0d96bd80e1e96833839cbe13a6e5d0->leave($__internal_3a6e288b597f98c82d71eca12033f4ec9c0d96bd80e1e96833839cbe13a6e5d0_prof);

        
        $__internal_86849e03db1dd66793b59cd66ba3a6a99ec08c793909421c5775d2663feb68ca->leave($__internal_86849e03db1dd66793b59cd66ba3a6a99ec08c793909421c5775d2663feb68ca_prof);

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
