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
        $__internal_5048184d944e77e78c2bd3da55465c30d396e9a15422a5da6605b487dbc17c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5048184d944e77e78c2bd3da55465c30d396e9a15422a5da6605b487dbc17c6b->enter($__internal_5048184d944e77e78c2bd3da55465c30d396e9a15422a5da6605b487dbc17c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_137ea705af96c0e1b65029a1082cb332bc49be5c26e85ac1bd869fc51c5c35d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137ea705af96c0e1b65029a1082cb332bc49be5c26e85ac1bd869fc51c5c35d8->enter($__internal_137ea705af96c0e1b65029a1082cb332bc49be5c26e85ac1bd869fc51c5c35d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_5048184d944e77e78c2bd3da55465c30d396e9a15422a5da6605b487dbc17c6b->leave($__internal_5048184d944e77e78c2bd3da55465c30d396e9a15422a5da6605b487dbc17c6b_prof);

        
        $__internal_137ea705af96c0e1b65029a1082cb332bc49be5c26e85ac1bd869fc51c5c35d8->leave($__internal_137ea705af96c0e1b65029a1082cb332bc49be5c26e85ac1bd869fc51c5c35d8_prof);

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
