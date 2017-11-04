<?php

/* @ProjetWebTest/Advert/menu.html.twig */
class __TwigTemplate_20840df406eee82125df1da732580b7b8af1b5f1e650b5eff222ffa249eedec8 extends Twig_Template
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
        $__internal_06c799255c3eaf8780fefe03372feefb575d67af5208d1c64726205e246d6a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c799255c3eaf8780fefe03372feefb575d67af5208d1c64726205e246d6a9d->enter($__internal_06c799255c3eaf8780fefe03372feefb575d67af5208d1c64726205e246d6a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/menu.html.twig"));

        $__internal_eaeb15a70c7c028747b6b6d5f9caba72c77f8a31d79bbc4960f0fd4ba6f3d100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeb15a70c7c028747b6b6d5f9caba72c77f8a31d79bbc4960f0fd4ba6f3d100->enter($__internal_eaeb15a70c7c028747b6b6d5f9caba72c77f8a31d79bbc4960f0fd4ba6f3d100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/menu.html.twig"));

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
        
        $__internal_06c799255c3eaf8780fefe03372feefb575d67af5208d1c64726205e246d6a9d->leave($__internal_06c799255c3eaf8780fefe03372feefb575d67af5208d1c64726205e246d6a9d_prof);

        
        $__internal_eaeb15a70c7c028747b6b6d5f9caba72c77f8a31d79bbc4960f0fd4ba6f3d100->leave($__internal_eaeb15a70c7c028747b6b6d5f9caba72c77f8a31d79bbc4960f0fd4ba6f3d100_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/Advert/menu.html.twig";
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
</ul>", "@ProjetWebTest/Advert/menu.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
