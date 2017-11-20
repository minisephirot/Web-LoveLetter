<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5e40ba7bce8da452ccc5450423159c2c6483522102fb1ed28f35e3f6dd05ab98 extends Twig_Template
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
        $__internal_eec731fb92233ecbb83f9fd742960c9cd2553408aff3525cdfbe2fc29b50026d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec731fb92233ecbb83f9fd742960c9cd2553408aff3525cdfbe2fc29b50026d->enter($__internal_eec731fb92233ecbb83f9fd742960c9cd2553408aff3525cdfbe2fc29b50026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_f5af6d433602e4b1556bd88b869b1b35a5b575869b53268d8e3467866f5e74ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5af6d433602e4b1556bd88b869b1b35a5b575869b53268d8e3467866f5e74ac->enter($__internal_f5af6d433602e4b1556bd88b869b1b35a5b575869b53268d8e3467866f5e74ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_eec731fb92233ecbb83f9fd742960c9cd2553408aff3525cdfbe2fc29b50026d->leave($__internal_eec731fb92233ecbb83f9fd742960c9cd2553408aff3525cdfbe2fc29b50026d_prof);

        
        $__internal_f5af6d433602e4b1556bd88b869b1b35a5b575869b53268d8e3467866f5e74ac->leave($__internal_f5af6d433602e4b1556bd88b869b1b35a5b575869b53268d8e3467866f5e74ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
