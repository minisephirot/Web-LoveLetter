<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ce9bbc7f0cd691ce5a19c83061f8ddfb1fd57f2ea4ce95c21dc7dd944066a695 extends Twig_Template
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
        $__internal_166e9fa1286cb2a1c36fed2e6903c058170fe16f8aa21fba4c5ad4441d18abba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166e9fa1286cb2a1c36fed2e6903c058170fe16f8aa21fba4c5ad4441d18abba->enter($__internal_166e9fa1286cb2a1c36fed2e6903c058170fe16f8aa21fba4c5ad4441d18abba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_a2fba6342cd91b1c3936edc6e1a55b20fb890787de16f57c03073cb78ebb4f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fba6342cd91b1c3936edc6e1a55b20fb890787de16f57c03073cb78ebb4f60->enter($__internal_a2fba6342cd91b1c3936edc6e1a55b20fb890787de16f57c03073cb78ebb4f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_166e9fa1286cb2a1c36fed2e6903c058170fe16f8aa21fba4c5ad4441d18abba->leave($__internal_166e9fa1286cb2a1c36fed2e6903c058170fe16f8aa21fba4c5ad4441d18abba_prof);

        
        $__internal_a2fba6342cd91b1c3936edc6e1a55b20fb890787de16f57c03073cb78ebb4f60->leave($__internal_a2fba6342cd91b1c3936edc6e1a55b20fb890787de16f57c03073cb78ebb4f60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
