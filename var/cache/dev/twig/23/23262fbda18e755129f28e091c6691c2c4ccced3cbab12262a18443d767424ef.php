<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d0dc759aea48760fb6b6be4311268470ad37aaa6786608f0051874069e236605 extends Twig_Template
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
        $__internal_a7fc408baef628f16c05e8d82caaf8a1f1d73c1e861fdabfb5a1f9b8575bdc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fc408baef628f16c05e8d82caaf8a1f1d73c1e861fdabfb5a1f9b8575bdc37->enter($__internal_a7fc408baef628f16c05e8d82caaf8a1f1d73c1e861fdabfb5a1f9b8575bdc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_87472f5714fea24cf2f19f9790117a7f0a8eadf8138b1415ce9410d6a3efd599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87472f5714fea24cf2f19f9790117a7f0a8eadf8138b1415ce9410d6a3efd599->enter($__internal_87472f5714fea24cf2f19f9790117a7f0a8eadf8138b1415ce9410d6a3efd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a7fc408baef628f16c05e8d82caaf8a1f1d73c1e861fdabfb5a1f9b8575bdc37->leave($__internal_a7fc408baef628f16c05e8d82caaf8a1f1d73c1e861fdabfb5a1f9b8575bdc37_prof);

        
        $__internal_87472f5714fea24cf2f19f9790117a7f0a8eadf8138b1415ce9410d6a3efd599->leave($__internal_87472f5714fea24cf2f19f9790117a7f0a8eadf8138b1415ce9410d6a3efd599_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
