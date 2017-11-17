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
        $__internal_4cc0d3a02fc09787d8dd51616dc910513f8b119829d2809de44864e5341db2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc0d3a02fc09787d8dd51616dc910513f8b119829d2809de44864e5341db2b3->enter($__internal_4cc0d3a02fc09787d8dd51616dc910513f8b119829d2809de44864e5341db2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_c5ca4925ca5e8c006ecc414d4c0fc19bccdbfe75f201af3e19e48fe8ef52dfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ca4925ca5e8c006ecc414d4c0fc19bccdbfe75f201af3e19e48fe8ef52dfaf->enter($__internal_c5ca4925ca5e8c006ecc414d4c0fc19bccdbfe75f201af3e19e48fe8ef52dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_4cc0d3a02fc09787d8dd51616dc910513f8b119829d2809de44864e5341db2b3->leave($__internal_4cc0d3a02fc09787d8dd51616dc910513f8b119829d2809de44864e5341db2b3_prof);

        
        $__internal_c5ca4925ca5e8c006ecc414d4c0fc19bccdbfe75f201af3e19e48fe8ef52dfaf->leave($__internal_c5ca4925ca5e8c006ecc414d4c0fc19bccdbfe75f201af3e19e48fe8ef52dfaf_prof);

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
