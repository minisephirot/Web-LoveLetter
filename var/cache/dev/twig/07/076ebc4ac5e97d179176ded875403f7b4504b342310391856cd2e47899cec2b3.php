<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_bab19cc8dd0ce5c7a5753c484f2bf25f73e0408df3d5410757b47dc842bd6a5a extends Twig_Template
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
        $__internal_08de15c60fdea5be4f644e9f9379810389f468c547687b886ee4b19d5276dc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08de15c60fdea5be4f644e9f9379810389f468c547687b886ee4b19d5276dc77->enter($__internal_08de15c60fdea5be4f644e9f9379810389f468c547687b886ee4b19d5276dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_b5063a759cb7c4b3a8e8bff38f39196c1865139daf2385dbb0a747c15b7f70dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5063a759cb7c4b3a8e8bff38f39196c1865139daf2385dbb0a747c15b7f70dc->enter($__internal_b5063a759cb7c4b3a8e8bff38f39196c1865139daf2385dbb0a747c15b7f70dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_08de15c60fdea5be4f644e9f9379810389f468c547687b886ee4b19d5276dc77->leave($__internal_08de15c60fdea5be4f644e9f9379810389f468c547687b886ee4b19d5276dc77_prof);

        
        $__internal_b5063a759cb7c4b3a8e8bff38f39196c1865139daf2385dbb0a747c15b7f70dc->leave($__internal_b5063a759cb7c4b3a8e8bff38f39196c1865139daf2385dbb0a747c15b7f70dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
