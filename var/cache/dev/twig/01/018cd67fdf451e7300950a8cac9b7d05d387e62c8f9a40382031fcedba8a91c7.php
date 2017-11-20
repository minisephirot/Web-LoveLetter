<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bae3673d98d920e18e9cdffda828148275b66fac63fc5cd98c18d1f1441a5e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae3673d98d920e18e9cdffda828148275b66fac63fc5cd98c18d1f1441a5e99->enter($__internal_bae3673d98d920e18e9cdffda828148275b66fac63fc5cd98c18d1f1441a5e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_219bb1014e1e5477ca12ea78e61b6b9b8ad51af63bf624a4f5d2283dc347ef9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219bb1014e1e5477ca12ea78e61b6b9b8ad51af63bf624a4f5d2283dc347ef9c->enter($__internal_219bb1014e1e5477ca12ea78e61b6b9b8ad51af63bf624a4f5d2283dc347ef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bae3673d98d920e18e9cdffda828148275b66fac63fc5cd98c18d1f1441a5e99->leave($__internal_bae3673d98d920e18e9cdffda828148275b66fac63fc5cd98c18d1f1441a5e99_prof);

        
        $__internal_219bb1014e1e5477ca12ea78e61b6b9b8ad51af63bf624a4f5d2283dc347ef9c->leave($__internal_219bb1014e1e5477ca12ea78e61b6b9b8ad51af63bf624a4f5d2283dc347ef9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc9406f3c7ccfddfd56fb59cbe821b8f74af67927a46a501a5c65ead9eed98d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9406f3c7ccfddfd56fb59cbe821b8f74af67927a46a501a5c65ead9eed98d8->enter($__internal_cc9406f3c7ccfddfd56fb59cbe821b8f74af67927a46a501a5c65ead9eed98d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63eab449686724b912362b176467ce02d5229e3604f4abdbd123b47d525ec8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63eab449686724b912362b176467ce02d5229e3604f4abdbd123b47d525ec8d3->enter($__internal_63eab449686724b912362b176467ce02d5229e3604f4abdbd123b47d525ec8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63eab449686724b912362b176467ce02d5229e3604f4abdbd123b47d525ec8d3->leave($__internal_63eab449686724b912362b176467ce02d5229e3604f4abdbd123b47d525ec8d3_prof);

        
        $__internal_cc9406f3c7ccfddfd56fb59cbe821b8f74af67927a46a501a5c65ead9eed98d8->leave($__internal_cc9406f3c7ccfddfd56fb59cbe821b8f74af67927a46a501a5c65ead9eed98d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6af9ade7803fff1fd966cee3653281eff8bc37c41ffb1ec596b846d1599f91c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af9ade7803fff1fd966cee3653281eff8bc37c41ffb1ec596b846d1599f91c1->enter($__internal_6af9ade7803fff1fd966cee3653281eff8bc37c41ffb1ec596b846d1599f91c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_282e2a6e79b562f00cae084668e030e8a352dfdc30a0409f8556f83807279ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282e2a6e79b562f00cae084668e030e8a352dfdc30a0409f8556f83807279ef4->enter($__internal_282e2a6e79b562f00cae084668e030e8a352dfdc30a0409f8556f83807279ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_282e2a6e79b562f00cae084668e030e8a352dfdc30a0409f8556f83807279ef4->leave($__internal_282e2a6e79b562f00cae084668e030e8a352dfdc30a0409f8556f83807279ef4_prof);

        
        $__internal_6af9ade7803fff1fd966cee3653281eff8bc37c41ffb1ec596b846d1599f91c1->leave($__internal_6af9ade7803fff1fd966cee3653281eff8bc37c41ffb1ec596b846d1599f91c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c011d42143da95d11ac2437a87b5748abb18a1e8512ab9d8e84dd0fa12d62188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c011d42143da95d11ac2437a87b5748abb18a1e8512ab9d8e84dd0fa12d62188->enter($__internal_c011d42143da95d11ac2437a87b5748abb18a1e8512ab9d8e84dd0fa12d62188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75cccfc8b52cd26f84ac6b8a967183e367957832b699280602248a3fd1ae845b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cccfc8b52cd26f84ac6b8a967183e367957832b699280602248a3fd1ae845b->enter($__internal_75cccfc8b52cd26f84ac6b8a967183e367957832b699280602248a3fd1ae845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75cccfc8b52cd26f84ac6b8a967183e367957832b699280602248a3fd1ae845b->leave($__internal_75cccfc8b52cd26f84ac6b8a967183e367957832b699280602248a3fd1ae845b_prof);

        
        $__internal_c011d42143da95d11ac2437a87b5748abb18a1e8512ab9d8e84dd0fa12d62188->leave($__internal_c011d42143da95d11ac2437a87b5748abb18a1e8512ab9d8e84dd0fa12d62188_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d866c1c8cc2554c93ab3a5f6d1e8cc4fc345dff5fa0000b338e47638e3a816e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d866c1c8cc2554c93ab3a5f6d1e8cc4fc345dff5fa0000b338e47638e3a816e4->enter($__internal_d866c1c8cc2554c93ab3a5f6d1e8cc4fc345dff5fa0000b338e47638e3a816e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfcd5e8559e67c92b9b15aa3f1dac28a7fa1997c41bf4cc2d3a9d55f5031f2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcd5e8559e67c92b9b15aa3f1dac28a7fa1997c41bf4cc2d3a9d55f5031f2e6->enter($__internal_cfcd5e8559e67c92b9b15aa3f1dac28a7fa1997c41bf4cc2d3a9d55f5031f2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfcd5e8559e67c92b9b15aa3f1dac28a7fa1997c41bf4cc2d3a9d55f5031f2e6->leave($__internal_cfcd5e8559e67c92b9b15aa3f1dac28a7fa1997c41bf4cc2d3a9d55f5031f2e6_prof);

        
        $__internal_d866c1c8cc2554c93ab3a5f6d1e8cc4fc345dff5fa0000b338e47638e3a816e4->leave($__internal_d866c1c8cc2554c93ab3a5f6d1e8cc4fc345dff5fa0000b338e47638e3a816e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\base.html.twig");
    }
}
