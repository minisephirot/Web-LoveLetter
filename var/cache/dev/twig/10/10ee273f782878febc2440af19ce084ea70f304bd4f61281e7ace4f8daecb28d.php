<?php

/* ProjetWebTestBundle:Advert:menu.html.twig */
class __TwigTemplate_310be88cce7c5515947428dcc10abcddef6847a162408c1785d31d7c9c2ace56 extends Twig_Template
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
        $__internal_b64dc0aafcfb21897d2027da828ddfdf90b0b1ea0f0a19725306cd3e18567854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64dc0aafcfb21897d2027da828ddfdf90b0b1ea0f0a19725306cd3e18567854->enter($__internal_b64dc0aafcfb21897d2027da828ddfdf90b0b1ea0f0a19725306cd3e18567854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:menu.html.twig"));

        $__internal_ca75127ff381f2b3293c6e25115dde15385bada4cba1588772d170a45cc50db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca75127ff381f2b3293c6e25115dde15385bada4cba1588772d170a45cc50db1->enter($__internal_ca75127ff381f2b3293c6e25115dde15385bada4cba1588772d170a45cc50db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_b64dc0aafcfb21897d2027da828ddfdf90b0b1ea0f0a19725306cd3e18567854->leave($__internal_b64dc0aafcfb21897d2027da828ddfdf90b0b1ea0f0a19725306cd3e18567854_prof);

        
        $__internal_ca75127ff381f2b3293c6e25115dde15385bada4cba1588772d170a45cc50db1->leave($__internal_ca75127ff381f2b3293c6e25115dde15385bada4cba1588772d170a45cc50db1_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  28 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/view/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <li>
            <a href=\"{{ path('TestBundle_view', {'id': advert.id}) }}\">
                {{ advert.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "ProjetWebTestBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Advert/menu.html.twig");
    }
}
