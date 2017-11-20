<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8a6319e12c809c494e11033738d1d87d7e2ba1fd77eddddb7e3625ef17ea62b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f77a1820dd48953ba8c5552d4b806c9919b5371152cc3a181e9dc44ff40715c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f77a1820dd48953ba8c5552d4b806c9919b5371152cc3a181e9dc44ff40715c->enter($__internal_9f77a1820dd48953ba8c5552d4b806c9919b5371152cc3a181e9dc44ff40715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e19b20fbe3b6b77bc09c4094b7a44e41acb7216f0b460285fccb7c2d4457e4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19b20fbe3b6b77bc09c4094b7a44e41acb7216f0b460285fccb7c2d4457e4e7->enter($__internal_e19b20fbe3b6b77bc09c4094b7a44e41acb7216f0b460285fccb7c2d4457e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f77a1820dd48953ba8c5552d4b806c9919b5371152cc3a181e9dc44ff40715c->leave($__internal_9f77a1820dd48953ba8c5552d4b806c9919b5371152cc3a181e9dc44ff40715c_prof);

        
        $__internal_e19b20fbe3b6b77bc09c4094b7a44e41acb7216f0b460285fccb7c2d4457e4e7->leave($__internal_e19b20fbe3b6b77bc09c4094b7a44e41acb7216f0b460285fccb7c2d4457e4e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7789721eea1abb2e9eb304a8955097f24c8b99c70401842dc4deaed37c4b2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7789721eea1abb2e9eb304a8955097f24c8b99c70401842dc4deaed37c4b2a5->enter($__internal_c7789721eea1abb2e9eb304a8955097f24c8b99c70401842dc4deaed37c4b2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d93e5b97a93be9710bc328bcd2a969edf61873237f1f8e9a1b20d3dc627c840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d93e5b97a93be9710bc328bcd2a969edf61873237f1f8e9a1b20d3dc627c840->enter($__internal_7d93e5b97a93be9710bc328bcd2a969edf61873237f1f8e9a1b20d3dc627c840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7d93e5b97a93be9710bc328bcd2a969edf61873237f1f8e9a1b20d3dc627c840->leave($__internal_7d93e5b97a93be9710bc328bcd2a969edf61873237f1f8e9a1b20d3dc627c840_prof);

        
        $__internal_c7789721eea1abb2e9eb304a8955097f24c8b99c70401842dc4deaed37c4b2a5->leave($__internal_c7789721eea1abb2e9eb304a8955097f24c8b99c70401842dc4deaed37c4b2a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
