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
        $__internal_d08e610da640be4d74574125bad2b4f7a6e1d647e9a3bb12352adc31c568762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08e610da640be4d74574125bad2b4f7a6e1d647e9a3bb12352adc31c568762e->enter($__internal_d08e610da640be4d74574125bad2b4f7a6e1d647e9a3bb12352adc31c568762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5be2ffb2111aca07108812f34aa3b765c4c9cae8e8dc3caf9f27e8699c1e5d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be2ffb2111aca07108812f34aa3b765c4c9cae8e8dc3caf9f27e8699c1e5d64->enter($__internal_5be2ffb2111aca07108812f34aa3b765c4c9cae8e8dc3caf9f27e8699c1e5d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_d08e610da640be4d74574125bad2b4f7a6e1d647e9a3bb12352adc31c568762e->leave($__internal_d08e610da640be4d74574125bad2b4f7a6e1d647e9a3bb12352adc31c568762e_prof);

        
        $__internal_5be2ffb2111aca07108812f34aa3b765c4c9cae8e8dc3caf9f27e8699c1e5d64->leave($__internal_5be2ffb2111aca07108812f34aa3b765c4c9cae8e8dc3caf9f27e8699c1e5d64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d61324e62391d3ed8403e503bc0e24572fad7497eff625a1f01416b9d98fe6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61324e62391d3ed8403e503bc0e24572fad7497eff625a1f01416b9d98fe6cc->enter($__internal_d61324e62391d3ed8403e503bc0e24572fad7497eff625a1f01416b9d98fe6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8ea57714530e4181561797965266e1596186d41f6f0888c4599dc1c399e8fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ea57714530e4181561797965266e1596186d41f6f0888c4599dc1c399e8fe2->enter($__internal_a8ea57714530e4181561797965266e1596186d41f6f0888c4599dc1c399e8fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a8ea57714530e4181561797965266e1596186d41f6f0888c4599dc1c399e8fe2->leave($__internal_a8ea57714530e4181561797965266e1596186d41f6f0888c4599dc1c399e8fe2_prof);

        
        $__internal_d61324e62391d3ed8403e503bc0e24572fad7497eff625a1f01416b9d98fe6cc->leave($__internal_d61324e62391d3ed8403e503bc0e24572fad7497eff625a1f01416b9d98fe6cc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_30f06d55fc715d39cdf321f74e13c5d7ec091bd24b974000b083999a6161f46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f06d55fc715d39cdf321f74e13c5d7ec091bd24b974000b083999a6161f46d->enter($__internal_30f06d55fc715d39cdf321f74e13c5d7ec091bd24b974000b083999a6161f46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a562e88ee71c356fddaba90fc1c253b399ac83762e86d7480b1846e768f7acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a562e88ee71c356fddaba90fc1c253b399ac83762e86d7480b1846e768f7acb->enter($__internal_6a562e88ee71c356fddaba90fc1c253b399ac83762e86d7480b1846e768f7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6a562e88ee71c356fddaba90fc1c253b399ac83762e86d7480b1846e768f7acb->leave($__internal_6a562e88ee71c356fddaba90fc1c253b399ac83762e86d7480b1846e768f7acb_prof);

        
        $__internal_30f06d55fc715d39cdf321f74e13c5d7ec091bd24b974000b083999a6161f46d->leave($__internal_30f06d55fc715d39cdf321f74e13c5d7ec091bd24b974000b083999a6161f46d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e6e5d65ae08e582d57b83cbd7a085e78a4e68471b234970066ec7f1d512b623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6e5d65ae08e582d57b83cbd7a085e78a4e68471b234970066ec7f1d512b623->enter($__internal_2e6e5d65ae08e582d57b83cbd7a085e78a4e68471b234970066ec7f1d512b623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f07b47d5e09d9f7bc2dda709b73c97d80e0cb486cbe262979589559ffcbfb197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07b47d5e09d9f7bc2dda709b73c97d80e0cb486cbe262979589559ffcbfb197->enter($__internal_f07b47d5e09d9f7bc2dda709b73c97d80e0cb486cbe262979589559ffcbfb197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f07b47d5e09d9f7bc2dda709b73c97d80e0cb486cbe262979589559ffcbfb197->leave($__internal_f07b47d5e09d9f7bc2dda709b73c97d80e0cb486cbe262979589559ffcbfb197_prof);

        
        $__internal_2e6e5d65ae08e582d57b83cbd7a085e78a4e68471b234970066ec7f1d512b623->leave($__internal_2e6e5d65ae08e582d57b83cbd7a085e78a4e68471b234970066ec7f1d512b623_prof);

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
